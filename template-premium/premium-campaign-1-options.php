<ul class="nav nav-pills level-three campaigns-1-options-tab" id="campaigns-1-options-tab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="premium-brief-campaign-1-tab" data-toggle="pill" href="#premium-brief-campaign-1"
            role="tab" aria-controls="premium-brief-campaign-1" aria-selected="true">Brief</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="premium-resumen-campaign-1-tab" data-toggle="pill" href="#premium-resumen-campaign-1"
            role="tab" aria-controls="premium-resumen-campaign-1" aria-selected="false">Resumen</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="premium-marketing-campaign-1-tab" data-toggle="pill"
            href="#premium-marketing-campaign-1" role="tab" aria-controls="premium-marketing-campaign-1"
            aria-selected="false">Marketing</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="premium-call-center-campaign-1-tab" data-toggle="pill"
            href="#premium-call-center-campaign-1" role="tab" aria-controls="premium-call-center-campaign-1"
            aria-selected="false">Call Center</a>
    </li>

    <li class="nav-item">
        <div class="d-flex balance_campaign_data">
        </div>
    </li>
</ul>
<div class="tab-content" id="campaigns-1-options-tabContent">
    <div class="tab-pane fade show active mt-60" id="premium-brief-campaign-1" role="tabpanel"
        aria-labelledby="premium-brief-campaign-1-tab">
        <?php include_once('./template-premium/premium-campaign-1-brief-content.php') ?>
    </div>
    <div class="tab-pane fade mt-60" id="premium-resumen-campaign-1" role="tabpanel"
        aria-labelledby="premium-resumen-campaign-1-tab">
        <?php include_once('./template-premium/premium-campaign-1-resumen-content.php') ?>
    </div>
    <div class="tab-pane fade" id="premium-marketing-campaign-1" role="tabpanel"
        aria-labelledby="premium-marketing-campaign-1-tab">
        <?php include_once('./template-premium/premium-campaign-1-marketing-options.php') ?>
    </div>
    <div class="tab-pane fade" id="premium-call-center-campaign-1" role="tabpanel"
        aria-labelledby="premium-call-center-campaign-1-tab">
        <?php include_once('./template-premium/premium-campaign-1-call-center-options.php') ?>
    </div>
</div>