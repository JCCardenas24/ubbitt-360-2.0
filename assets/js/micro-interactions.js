// Toast update password account
$(".btn_continuar").click(function() {
    $('#sucess').toast('show')
});

// Toast delete report
$(".btn_continue_delete_report").click(function() {
    $('#toast_report_deleted').toast('show')
});

// Show upload report form
$(".upload_report_btn").click(function() {
    $(".reports_info_contents").toggle();
    $(".view_upload_report_form").toggle();
});

// Cancel upload report form
$(".cancel_upload_report").click(function() {
    $(".view_upload_report_form").toggle();
    $(".reports_info_contents").toggle();
});

// Upload file report
$(".upload_file_report").click(function() {
    $(".view_upload_report_form").toggle();
    $(".reports_info_contents").toggle();
    $("#toast_report_deleted").toast('show')
});


// Activate bold class <li> side-menu
$('#freemium-inbound-resumen-tab').on('shown.bs.tab', function(event) {
    event.target // newly activated tab
    event.relatedTarget // previous active tab
    $(".options_inbound_freemium").removeClass("font-weight-bold");
    $("#li_resumen_inbound_freemium").addClass("font-weight-bold");
})
$('#freemium-inbound-call-center-tab').on('shown.bs.tab', function(event) {
    event.target // newly activated tab
    event.relatedTarget // previous active tab
    $(".options_inbound_freemium").removeClass("font-weight-bold");
    $("#li_call_center_inbound_freemium").addClass("font-weight-bold");
})
$('#freemium-inbound-reportes-tab').on('shown.bs.tab', function(event) {
    event.target // newly activated tab
    event.relatedTarget // previous active tab
    $(".options_inbound_freemium").removeClass("font-weight-bold");
    $("#li_reportes_inbound_freemium").addClass("font-weight-bold");
})