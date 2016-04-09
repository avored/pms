jQuery(document).ready(function () {
    jQuery('.datetimepicker-date').datetimepicker({
        format: 'DD-MM-YYYY'
    });

    jQuery('.nav-tabs a').click(function (e) {
        e.preventDefault()
        jQuery(this).tab('show')
    });

    jQuery('.select2').select2();

    jQuery(document).on('click', '.addStageLink', function (e) {
        jQuery('#addStageModal').modal();
        jQuery('#addStageModal').find('.addStageParentId').val(jQuery(e.target).attr('data-id'));
    });
    jQuery('#addStageModal').on('hidden.bs.modal', function (e) {
        jQuery('#addStageModal').find('.addStageParentId').val('');
    });

    jQuery(document).on('click', '.editStageLink', function (e) {
        jQuery('#editStageModal').modal();
        jQuery('#editStageModal').find('.addStageId').val(jQuery(e.target).attr('data-id'));
        jQuery('#editStageModal').find('.addStageTitle').val(jQuery(e.target).attr('data-title'));
    });
    jQuery('#editStageModal').on('hidden.bs.modal', function (e) {
        jQuery('#editStageModal').find('.addStageId').val('');
        jQuery('#editStageModal').find('.addStageTitle').val('');
    });


    jQuery(document).on('click', '.addPeopleModalLink', function (e) {
        jQuery('#addPeopleModal').modal();
        
    });
    jQuery('#addPeopleModal').on('hidden.bs.modal', function (e) {
        console.log('todo People Modal close event');
    });

});