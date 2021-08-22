<ul class="nav nav-pills level-four" id="beyond-cobranza-reportes-options" role="tablist">
    <li class="nav-item table_kpis" role="presentation">
        <a class="nav-link active" id="beyond-cobranza-reportes-detalle-kpis-tab" data-toggle="pill"
            href="#beyond-cobranza-reportes-detalle-kpis" role="tab"
            aria-controls="beyond-cobranza-reportes-detalle-kpis" aria-selected="true">Detalle de KPI's</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="beyond-cobranza-reportes-detalle-tipificaciones-tab" data-toggle="pill"
            href="#beyond-cobranza-reportes-detalle-tipificaciones" role="tab"
            aria-controls="beyond-cobranza-reportes-detalle-tipificaciones" aria-selected="false">Detalle de
            tipificaciones</a>
    </li>
</ul>
<div class="tab-content" id="beyond-cobranza-reportes-optionsContent">
    <div class="tab-pane fade show active" id="beyond-cobranza-reportes-detalle-kpis" role="tabpanel"
        aria-labelledby="beyond-cobranza-reportes-detalle-kpis-tab">
        <?php include_once('./template-beyond/detalle-kpis.php') ?>
    </div>
    <div class="tab-pane fade" id="beyond-cobranza-reportes-detalle-tipificaciones" role="tabpanel"
        aria-labelledby="beyond-cobranza-reportes-detalle-tipificaciones-tab">
        <?php include_once('./template-beyond/detalle-de-tipificaciones.php') ?>
    </div>
</div>