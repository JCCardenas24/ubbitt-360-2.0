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
                <a class="nav-link  active" id="inbound-resumen-tab" data-toggle="pill"
                    href="#inbound-resumen" role="tab" aria-controls="inbound-resumen"
                    aria-selected="true">Resumen</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link " id="inbound-call-center-tab" data-toggle="pill"
                    href="#inbound-call-center" role="tab" aria-controls="inbound-call-center"
                    aria-selected="false">Call Center</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link " id="inbound-reportes-tab" data-toggle="pill"
                    href="#inbound-reportes" role="tab" aria-controls="inbound-reportes"
                    aria-selected="false">Reportes</a>
            </li>
        </ul>
        <div class="tab-content" id="freemium-inbound-optionsContent">
            <div class="tab-pane fade show active" id="inbound-resumen" role="tabpanel"
                aria-labelledby="inbound-resumen-tab">
                <?php include_once('resumen.php')?>
            </div>
            <div class="tab-pane fade" id="inbound-call-center" role="tabpanel"
                aria-labelledby="inbound-call-center-tab">
                <?php include_once('call-center.php')?>
            </div>
            <div class="tab-pane fade" id="inbound-reportes" role="tabpanel"
                aria-labelledby="inbound-reportes-tab">
                <?php include_once('reportes.php')?>
            </div>
        </div>
    </div>
</div>