<ul class="nav nav-pills level-three" id="cobranza-options" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="cobranza-resumen-tab" data-toggle="pill" href="#cobranza-resumen" role="tab"
            aria-controls="cobranza-resumen" aria-selected="true">Resumen</a>
    </li>
    <li class="nav-item table_kpis" role="presentation">
        <a class="nav-link " id="cobranza-callcenter-tab" data-toggle="pill" href="#cobranza-callcenter"
            role="tab" aria-controls="cobranza-callcenter" aria-selected="false">Call Center</a>
    </li>
    <li class="nav-item table_kpis" role="presentation">
        <a class="nav-link" id="cobranza-reportes-tab" data-toggle="pill" href="#cobranza-reportes"
            role="tab" aria-controls="cobranza-reportes" aria-selected="false">Calidad</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="cobranza-carga-base-datos-tab" data-toggle="pill"
            href="#cobranza-carga-base-datos" role="tab" aria-controls="cobranza-carga-base-datos"
            aria-selected="false">Carga de base de datos</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="cobranza-reporte-operativo-tab" data-toggle="pill"
            href="#cobranza-reporte-operativo" role="tab" aria-controls="cobranza-reporte-operativo"
            aria-selected="false">Reporte operativo</a>
    </li>
</ul>
<div class="tab-content" id="cobranza-optionsContent">
    <div class="tab-pane fade show active" id="cobranza-resumen" role="tabpanel" aria-labelledby="cobranza-resumen-tab">
        <?php include_once('./template-beyond/resumen.php') ?>
    </div>
    <div class="tab-pane fade" id="cobranza-callcenter" role="tabpanel"
        aria-labelledby="cobranza-callcenter-tab">
        <?php include_once('./template-beyond/call-center.php') ?>
    </div>
    <div class="tab-pane fade" id="cobranza-reportes" role="tabpanel"
        aria-labelledby="cobranza-reportes-tab">
        
        <?php include_once('./template-beyond/reportes.php') ?>
    </div>
    <div class="tab-pane fade" id="cobranza-carga-base-datos" role="tabpanel"
        aria-labelledby="cobranza-carga-base-datos-tab">
        <?php include_once('./template-beyond/carga-de-base-datos.php') ?>
    </div>
    <div class="tab-pane fade" id="cobranza-reporte-operativo" role="tabpanel"
        aria-labelledby="cobranza-reporte-operativo-tab">
        <?php include_once('./template-beyond/reporte-operativo.php') ?>
    </div>
</div>