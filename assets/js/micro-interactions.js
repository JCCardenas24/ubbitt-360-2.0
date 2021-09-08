// Toast update password account
$(".btn_continuar").click(function() {
    $('#new_password_saved').toast('show')
});

// Toast delete report
$(".btn_continue_delete_report").click(function() {
    $('#toast_report_deleted').toast('show')
});

// Upload file report
$(".upload_file_report").click(function() {
    $(".view_upload_report_form").toggle();
    $(".reports_info_contents").toggle();
    $("#toast_report_uploaded_successfully").toast('show')
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


// Check radio button to display selected chart
$("input[name='selected_chart']").on("click", function() {
    $(".chart_actual").toggle(this.value === "false" && this.checked);
    $(".chart_forecast").toggle(this.value === "true" && this.checked);
    stackedChartForecast.resize();
    console.log("cambios");
});

// from tab menu to side menu
$('.level-three .nav-link').on('shown.bs.tab', function(event) {
    let current_href = ($(this).attr('href'));
    let create_id = current_href.substring(1) + "_side_menu";
    console.log("ID: " + create_id);
    $(".side-menu-link-redirect").removeClass("font-weight-bold");
    $("#" + create_id).addClass("font-weight-bold");

})

//href nav tabs
// Javascript to enable link to tab

let hash = location.hash.replace(/^#/, ''); // ^ means starting, meaning only match the first hash

if (hash) {
    console.log(hash);
    $('a[href="#' + hash + '"]').tab('show');
}



$(".side-menu-link-redirect").click(function() {
    let current_href = ($(this).attr('href'));
    // console.log(current_href);
    $('a[href="' + current_href + '"]').tab('show');

});