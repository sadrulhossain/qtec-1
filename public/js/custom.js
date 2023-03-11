
$(document).ready(function () {

    //Show password Eye button Start

    
    $(".js-source-states").select2();


    $(".interger-decimal-only").each(function () {
        $(this).keypress(function (e) {
            var code = e.charCode;

            if (((code >= 48) && (code <= 57)) || code == 0 || code == 46) {
                return true;
            } else {
                return false;
            }
        });
    });

    //newly added
    $(".integer-decimal-only").each(function () {
        $(this).keypress(function (e) {
            var code = e.charCode;

            if (((code >= 48) && (code <= 57)) || code == 0 || code == 46) {
                return true;
            } else {
                return false;
            }
        });
    });

    $(".integer-only").each(function () {
        $(this).keypress(function (e) {
            var code = e.charCode;

            if (((code >= 48) && (code <= 57)) || code == 0) {
                return true;
            } else {
                return false;
            }
        });
    });

    $('button.reset-date').click(function () {
        var remove = $(this).attr('remove');
        $('#' + remove).val('');
    });


    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });


    $('.month-date-picker').datepicker({
        format: "yyyy-mm",
        viewMode: "months",
        minViewMode: "months",
    });


    $('.current-date-picker').datepicker({
        format: 'yyyy-mm-dd',
        minDate: '0',
    });


    $('.datepicker2').datepicker({
        format: 'dd MM yyyy',
        autoclose: true,
        todayHighlight: true,
    });


});
