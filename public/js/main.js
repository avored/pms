jQuery(document).ready(function () {
    jQuery('.datetimepicker-date').datetimepicker({
        format: 'DD-MM-YYYY'
    });

    jQuery('.nav-tabs a').click(function (e) {
        e.preventDefault()
        jQuery(this).tab('show')
    });

    jQuery('.select2').select2();
});