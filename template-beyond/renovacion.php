<ul class="nav nav-pills level-three" id="renovacion-options" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="renovacion-resumen-tab" data-toggle="pill"
            href="#renovacion-resumen" role="tab" aria-controls="renovacion-resumen"
            aria-selected="true">Resumen</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="renovacion-callcenter-tab" data-toggle="pill"
            href="#renovacion-callcenter" role="tab" aria-controls="renovacion-callcenter"
            aria-selected="false">Call Center</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="renovacion-calidad-tab" data-toggle="pill"
            href="#renovacion-calidad" role="tab" aria-controls="renovacion-calidad"
            aria-selected="false">Calidad</a>
    </li>
    
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="renovacion-carga-base-datos-tab" data-toggle="pill"
            href="#renovacion-carga-base-datos" role="tab" aria-controls="renovacion-carga-base-datos"
            aria-selected="false">Carga de base de datos</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="renovacion-reporte-operativo-tab" data-toggle="pill" href="#renovacion-reporte-operativo"
            role="tab" aria-controls="renovacion-reporte-operativo" aria-selected="false">Reporte operativo</a>
    </li>
    
</ul>
<div class="tab-content" id="renovacion-optionsContent">
    <div class="tab-pane fade show active" id="renovacion-resumen" role="tabpanel"
        aria-labelledby="renovacion-resumen-tab">
        <?php include_once('./template-beyond/resumen-renovacion.php') ?>
    </div>
    <div class="tab-pane fade" id="renovacion-callcenter" role="tabpanel"
        aria-labelledby="renovacion-callcenter-tab">
        <?php include_once('./template-beyond/call-center-renovacion.php') ?>
    </div>
    <div class="tab-pane fade" id="renovacion-calidad" role="tabpanel"
        aria-labelledby="renovacion-calidad-tab">
        <?php include_once('./template-beyond/renovacion-calidad.php') ?>
    </div>
    <div class="tab-pane fade" id="renovacion-reporte-operativo" role="tabpanel"
        aria-labelledby="renovacion-reporte-operativo-tab">
        <?php include_once('./template-beyond/reporte-operativo.php') ?>
    </div>
    <div class="tab-pane fade" id="renovacion-carga-base-datos" role="tabpanel"
        aria-labelledby="renovacion-carga-base-datos-tab">
        <?php include_once('./template-beyond/carga-de-base-datos-renovacion.php') ?>
    </div>
</div>