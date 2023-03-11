<?php $__env->startSection('search_content'); ?>
    <!-- BEGIN LOGIN FORM -->
    <div class="container">

        <div class="portlet light bordered margin-top-20">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-search"></i><?php echo app('translator')->get('label.USER_SEARCH_HISTORY'); ?>
                </div>
                <div class="actions">
                </div>
            </div>
            <div class="portlet-body">
                <?php echo Form::open(['group' => 'form', 'url' => '', 'class' => 'form-horizontal', 'id' => 'searchFilterForm']); ?>

                <?php echo e(csrf_field()); ?>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-12" for="keyword"><?php echo app('translator')->get('label.KEYWORD'); ?></label>
                            <div class="col-md-12">
                                <?php echo Form::select(
                                    'keyword[]',
                                    $keywordList,
                                    [],
                                    [
                                        'class' => 'form-control mt-multiselect btn btn-default',
                                        'id' => 'keyword',
                                        'multiple' => 'multiple',
                                        'data-width' => '100%',
                                    ],
                                ); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-12" for="user"><?php echo app('translator')->get('label.USER'); ?></label>
                            <div class="col-md-12">
                                <?php echo Form::select(
                                    'user[]',
                                    $userList,
                                    [],
                                    [
                                        'class' => 'form-control mt-multiselect btn btn-default',
                                        'id' => 'user',
                                        'multiple' => 'multiple',
                                        'data-width' => '100%',
                                    ],
                                ); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-12" for="timeRange"><?php echo app('translator')->get('label.TIME_RANGE'); ?></label>
                            <div class="col-md-12">
                                <?php echo Form::select(
                                    'time_range[]',
                                    $timeRangeList,
                                    [],
                                    [
                                        'class' => 'form-control mt-multiselect',
                                        'id' => 'timeRange',
                                        'multiple' => 'multiple',
                                        'data-width' => '100%',
                                    ],
                                ); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-12" for="startDate"><?php echo app('translator')->get('label.START_DATE'); ?></label>
                            <div class="col-md-12">
                                <div class="input-group date datepicker2">
                                    <?php echo Form::text('start_date', null, [
                                        'id' => 'startDate',
                                        'class' => 'form-control',
                                        'placeholder' => 'DD MM YYYY',
                                        'readonly' => '',
                                        'autocomplete' => 'off',
                                    ]); ?>

                                    <span class="input-group-btn">
                                        <button class="btn default reset-date" type="button" remove="startDate">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-12" for="endDate"><?php echo app('translator')->get('label.END_DATE'); ?></label>
                            <div class="col-md-12">
                                <div class="input-group date datepicker2">
                                    <?php echo Form::text('end_date', null, [
                                        'id' => 'endDate',
                                        'class' => 'form-control',
                                        'placeholder' => 'DD MM YYYY',
                                        'readonly' => '',
                                        'autocomplete' => 'off',
                                    ]); ?>

                                    <span class="input-group-btn">
                                        <button class="btn default reset-date" type="button" remove="endDate">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo Form::close(); ?>


                <div class="row margin-top-20">
                    <div class="col-md-12 show-search-list">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {

            var options = {
                closeButton: true,
                debug: false,
                positionClass: "toast-bottom-right",
                onclick: null,
            };
            //user multi-select
            var userAllSelected = false;
            $('#user').multiselect({
                numberDisplayed: 0,
                includeSelectAllOption: true,
                buttonWidth: '100%',
                maxHeight: 250,
                nonSelectedText: "<?php echo app('translator')->get('label.SELECT_USER'); ?>",
                enableFiltering: true,
                enableCaseInsensitiveFiltering: true,
                onSelectAll: function() {
                    userAllSelected = true;
                },
                onChange: function() {
                    userAllSelected = false;
                }
            });
            //timeRange multi-select
            var timeRangeAllSelected = false;
            $('#timeRange').multiselect({
                numberDisplayed: 0,
                includeSelectAllOption: true,
                buttonWidth: '100%',
                maxHeight: 250,
                nonSelectedText: "<?php echo app('translator')->get('label.SELECT_TIME_RANGE'); ?>",
                enableFiltering: true,
                enableCaseInsensitiveFiltering: true,
                onSelectAll: function() {
                    timeRangeAllSelected = true;
                },
                onChange: function() {
                    timeRangeAllSelected = false;
                }
            });
            //keyword multi-select
            var keywordAllSelected = false;
            $('#keyword').multiselect({
                numberDisplayed: 0,
                includeSelectAllOption: true,
                buttonWidth: '100%',
                maxHeight: 250,
                nonSelectedText: "<?php echo app('translator')->get('label.SELECT_KEYWORD'); ?>",
                enableFiltering: true,
                enableCaseInsensitiveFiltering: true,
                onSelectAll: function() {
                    keywordAllSelected = true;
                },
                onChange: function() {
                    keywordAllSelected = false;
                }
            });

            $(document).on('change', '#keyword, #user, #timeRange, #startDate, #endDate', function() {
                getSearchList();
            });
            getSearchList();

            function getSearchList() {
                // Serialize the form data
                var formData = new FormData($('#searchFilterForm')[0]);
                $.ajax({
                    url: "<?php echo e(URL::to('filter')); ?>",
                    type: "POST",
                    dataType: 'json', // what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        $('.show-search-list').html('');
                    },
                    success: function(res) {
                        $('.show-search-list').html(res.html);
                    },
                    error: function(jqXhr, ajaxOptions, thrownError) {
                        if (jqXhr.status == 400) {
                            var errorsHtml = '';
                            var errors = jqXhr.responseJSON.message;
                            $.each(errors, function(key, value) {
                                errorsHtml += '<li>' + value[0] + '</li>';
                            });
                            toastr.error(errorsHtml, jqXhr.responseJSON.heading, options);
                        } else if (jqXhr.status == 401) {
                            toastr.error(jqXhr.responseJSON.message, '', options);
                        } else {
                            toastr.error('Error', 'Something went wrong', options);
                        }
                    }
                });
            }

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp_7_4_15\htdocs\qtec-1\resources\views/userSearchHistory/index.blade.php ENDPATH**/ ?>