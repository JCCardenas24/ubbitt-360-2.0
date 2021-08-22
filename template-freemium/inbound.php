<ul class="nav nav-pills level_two" id="freemium-inbound" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="freemium-inbound-tab" data-toggle="pill" href="#freemium-inbound" role="tab"
            aria-controls="freemium-inbound" aria-selected="true">Inbound</a>
    </li>
</ul>
<div class="tab-content" id="freemium-inboundContent">
    <div class="tab-pane fade show active" id="freemium-inbound" role="tabpanel" aria-labelledby="freemium-inbound-tab">
        <ul class="nav nav-pills level-three" id="freemium-inbound-options" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="freemium-inbound-resumen-tab" data-toggle="pill"
                    href="#freemium-inbound-resumen" role="tab" aria-controls="freemium-inbound-resumen"
                    aria-selected="true">Resumen</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="freemium-inbound-call-center-tab" data-toggle="pill"
                    href="#freemium-inbound-call-center" role="tab" aria-controls="freemium-inbound-call-center"
                    aria-selected="false">Call Center</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="freemium-inbound-reportes-tab" data-toggle="pill"
                    href="#freemium-inbound-reportes" role="tab" aria-controls="freemium-inbound-reportes"
                    aria-selected="false">Reportes</a>
            </li>
        </ul>
        <div class="tab-content" id="freemium-inbound-optionsContent">
            <div class="tab-pane fade show active" id="freemium-inbound-resumen" role="tabpanel"
                aria-labelledby="freemium-inbound-resumen-tab">
                <?php include_once('resumen.php')?>
            </div>
            <div class="tab-pane fade" id="freemium-inbound-call-center" role="tabpanel"
                aria-labelledby="freemium-inbound-call-center-tab">
                <?php include_once('call-center.php')?>
            </div>
            <div class="tab-pane fade" id="freemium-inbound-reportes" role="tabpanel"
                aria-labelledby="freemium-inbound-reportes-tab">
                <?php include_once('reportes.php')?>
            </div>
        </div>
    </div>
</div>