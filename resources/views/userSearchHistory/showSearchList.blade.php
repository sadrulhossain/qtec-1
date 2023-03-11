<table id="searchList" class="table table-bordered table-hover">
    <thead>
        <tr class="active">
            <th class="text-center" width="50px">@lang('label.SL')</th>
            <th class="" width="100px">@lang('label.KEYWORD')</th>
            <th class="" width="100px">@lang('label.USER')</th>
            <th class="" width="300px">@lang('label.SEARCH_RESULT')</th>
            <th class="text-center" width="100px">@lang('label.SEARCHING_TIME')</th>
        </tr>
    </thead>
    <tbody>
        @if(!$searchInfo->isEmpty())
        @php
            $sl = 0;
        @endphp
        @foreach($searchInfo as $sh)
            <tr>
                <td class="text-center">{!! ++$sl !!}</td>
                <td class="">{!! $sh->keyword ?? '' !!}</td>
                <td class="">{!! $sh->user ?? '' !!}</td>
                <td class="">{!! $sh->result ?? '' !!}</td>
                <td class="text-center">
                    {!! !empty($sh->created_at) ? Helper::formatDateTime($sh->created_at) : '' !!}
                </td>
            </tr>
        @endforeach
        @else
            <tr>
                <td colspan="5">@lang('label.NO_SEARCH_RESULT_FOUND')</td>
            </tr>
        @endif
    </tbody>
</table>
<script>
    $(function() {
        $('#searchList').dataTable({
            // "language": {
            //     "search": "Search Keywords : ",
            // },
            "paging": true,
            "searching": false,
            "info": true,
            "order": false
        });
    });
</script>
