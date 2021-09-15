$('#premium-call-center-bd-llamadas-campaign-1-content-tab').on('shown.bs.tab', function(event) {
    event.target // newly activated tab
    event.relatedTarget // previous active tab
    $('#loading_content').modal('show')
        // setTimeout(function() {
        //     $("#loading_content").modal("hide");
        // }, 5000);
})