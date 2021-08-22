<ul class="nav nav-pills level-three" id="renovacion-options" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="beyond-renovacion-resumen-tab" data-toggle="pill"
            href="#beyond-renovacion-resumen" role="tab" aria-controls="beyond-renovacion-resumen"
            aria-selected="true">Resumen</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="beyond-renovacion-callcenter-tab" data-toggle="pill"
            href="#beyond-renovacion-callcenter" role="tab" aria-controls="beyond-renovacion-callcenter"
            aria-selected="false">Call Center</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="beyond-renovacion-reportes-tab" data-toggle="pill" href="#beyond-renovacion-reportes"
            role="tab" aria-controls="beyond-renovacion-reportes" aria-selected="false">Reportes</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="beyond-renovacion-carga-base-datos-tab" data-toggle="pill"
            href="#beyond-renovacion-carga-base-datos" role="tab" aria-controls="beyond-renovacion-carga-base-datos"
            aria-selected="true">Carga de base de datos</a>
    </li>
</ul>
<div class="tab-content" id="renovacion-optionsContent">
    <div class="tab-pane fade show active" id="beyond-renovacion-resumen" role="tabpanel"
        aria-labelledby="beyond-renovacion-resumen-tab">
        <?php include_once('./template-beyond/resumen-renovacion.php') ?>
    </div>
    <div class="tab-pane fade" id="beyond-renovacion-callcenter" role="tabpanel"
        aria-labelledby="beyond-renovacion-callcenter-tab">
        <?php include_once('./template-beyond/call-center-renovacion.php') ?>
    </div>
    <div class="tab-pane fade" id="beyond-renovacion-reportes" role="tabpanel"
        aria-labelledby="beyond-renovacion-reportes-tab">
        <?php include_once('./template-beyond/reportes-renovacion.php') ?>
    </div>
    <div class="tab-pane fade" id="beyond-renovacion-carga-base-datos" role="tabpanel"
        aria-labelledby="beyond-renovacion-carga-base-datos-tab">
        <?php include_once('./template-beyond/carga-de-base-datos-renovacion.php') ?>
    </div>
</div>