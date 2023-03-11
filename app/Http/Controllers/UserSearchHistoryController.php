<?php

namespace App\Http\Controllers;

use App\userSearchHistory;
use Redirect;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class UserSearchHistoryController extends Controller
{


    public function index(Request $request)
    {
        $timeRangeDataList = $this->getTimeRangeList();
        $timeRangeList = [];
        if(!empty($timeRangeDataList)){
            foreach($timeRangeDataList as $timeKey => $time){
                $timeRangeList[$timeKey] = $time['label'];
            }
        }

        $keywordList = UserSearchHistory::select(DB::raw("CONCAT(keyword,' (', COUNT(id),' times found)') AS keywords"), 'keyword')
            ->groupBy('keyword')->pluck('keywords', 'keyword')->toArray();
        $userList = UserSearchHistory::orderBy('user')->pluck('user', 'user')->toArray();
        return view('userSearchHistory.index')->with(compact('request',
            'timeRangeList', 'keywordList', 'userList'));
    }

    public function filter(Request $request)
    {
        $searchInfo = UserSearchHistory::select('keyword', 'user', 'result', 'created_at');

        //filter with keyword
        if(!empty($request->keyword)){
            $searchInfo = $searchInfo->whereIn('keyword', $request->keyword);
        }

        //filter with user
        if(!empty($request->user)){
            $searchInfo = $searchInfo->whereIn('user', $request->user);
        }

        //filter with start date and end date
        $startDate = !empty($request->start_date) ? date('Y-m-d', strtotime($request->start_date)) . ' 00:00:00' : '';
        $endDate = !empty($request->end_date) ? date('Y-m-d', strtotime($request->end_date)) . ' 23:59:59' : '';
        if(!empty($startDate) && !empty($endDate)){
            $searchInfo = $searchInfo->whereBetween('created_at', [$startDate, $endDate]);
        } else {
            $today = date("Y-m-d");
            if(!empty($startDate)){
                $searchInfo = $searchInfo->whereBetween('created_at', [$startDate, $today]);
            } elseif (!empty($endDate)) {
                $searchInfo = $searchInfo->whereBetween('created_at', [$today, $endDate]);
            }
        }

        if(!empty($request->time_range)){
            $timeList = $this->getTimeRangeFilter($request->time_range);
            $searchInfo = $searchInfo->whereBetween('created_at', [$timeList['start'], $timeList['end']]);
        }

        $searchInfo = $searchInfo->orderBy('created_at', 'desc')
            ->orderBy('keyword', 'asc')
            ->orderBy('user', 'asc')
            ->get();

        $html = view('userSearchHistory.showSearchList', compact('request', 'searchInfo'))->render();
        return response()->json(['html' => $html]);
    }

    public function getTimeRangeList($timeKey=null)
    {
        $dayStart = ' 00:00:00';
        $dayEnd = ' 23:59:59';
        $timeRangeList = [
            '1' => [
                'label' => __('label.SEE_DATA_FROM_YESTERDAY'),
                'start' => date('Y-m-d', strtotime('-1 days')) . $dayStart,
                'end' => date('Y-m-d', strtotime('-1 days')) . $dayEnd,
            ],
            '2' => [
                'label' => __('label.SEE_DATA_FROM_LAST_WEEK'),
                'start' => date('Y-m-d', strtotime('last week monday')) . $dayStart,
                'end' => date('Y-m-d', strtotime('last week sunday')) . $dayEnd,
            ],
            '3' => [
                'label' => __('label.SEE_DATA_FROM_LAST_MONTH'),
                'start' => date('Y-m-01', strtotime('last month')) . $dayStart,
                'end' => date('Y-m-t', strtotime('last month')) . $dayEnd,
            ],
        ];
        return !empty($timeKey) ? $timeRangeList[$timeKey] : $timeRangeList;
    }

    public function getTimeRangeFilter($timeRangeArr)
    {
        asort($timeRangeArr);
        $start = $this->getTimeRangeList(end($timeRangeArr));
        $end = $this->getTimeRangeList(reset($timeRangeArr));

        return [
            'start' => $start['start'],
            'end' => $end['end'],
        ];
    }


}
