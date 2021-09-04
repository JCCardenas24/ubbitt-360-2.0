$('#premium-call-center-bd-llamadas-campaign-1-content-tab').on('shown.bs.tab', function(event) {
    event.target // newly activated tab
    event.relatedTarget // previous active tab

    $('.preloader-capa').delay(5000).fadeOut('slow');
})