<ul class="nav nav-pills level-three campaigns-1-options-tab" id="campaigns-1-options-tab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="brief-campaign-1-tab" data-toggle="pill" href="#brief-campaign-1"
            role="tab" aria-controls="brief-campaign-1" aria-selected="true">Brief</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="resumen-campaign-1-tab" data-toggle="pill" href="#resumen-campaign-1"
            role="tab" aria-controls="resumen-campaign-1" aria-selected="false">Resumen</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="marketing-campaign-1-tab" data-toggle="pill"
            href="#marketing-campaign-1" role="tab" aria-controls="marketing-campaign-1"
            aria-selected="false">Marketing</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="call-center-campaign-1-tab" data-toggle="pill"
            href="#call-center-campaign-1" role="tab" aria-controls="call-center-campaign-1"
            aria-selected="false">Call Center</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="calidad-campaign-1-tab" data-toggle="pill"
            href="#calidad-campaign-1" role="tab" aria-controls="calidad-campaign-1"
            aria-selected="false">Calidad</a>
    </li>
    <li class="nav-item">
        <div class="d-flex balance_campaign_data">
            <div class="d-flex">
                <p>Inversión</p>
                <span> | </span>
                <small>$200,000.00</small>
            </div>
            <div class="d-flex">
                <p>Gasto</p>
                <span> | </span>
                <small>$40,000.00</small>
            </div>
            <div class="d-flex">
                <p>Ventas</p>
                <span> | </span>
                <small>$40,000.00</small>
            </div>
        </div>
    </li>
</ul>
<div class="tab-content" id="campaigns-1-options-tabContent">
    <div class="tab-pane fade show active " id="brief-campaign-1" role="tabpanel"
        aria-labelledby="brief-campaign-1-tab">
        <?php include_once('./template-premium/premium-campaign-1-brief-content.php') ?>
    </div>
    <div class="tab-pane fade mt-60" id="resumen-campaign-1" role="tabpanel"
        aria-labelledby="resumen-campaign-1-tab">
        <?php include_once('./template-premium/premium-campaign-1-resumen-content.php') ?>
    </div>
    <div class="tab-pane fade" id="marketing-campaign-1" role="tabpanel"
        aria-labelledby="marketing-campaign-1-tab">
        <?php include_once('./template-premium/premium-campaign-1-marketing-options.php') ?>
    </div>
    <div class="tab-pane fade" id="call-center-campaign-1" role="tabpanel"
        aria-labelledby="call-center-campaign-1-tab">
        <?php include_once('./template-premium/premium-campaign-1-call-center-options.php') ?>
    </div>
    <div class="tab-pane fade" id="calidad-campaign-1" role="tabpanel"
        aria-labelledby="calidad-campaign-1-tab">
        <?php include_once('./template-premium/calidad-diario.php') ?>
    </div>
</div>