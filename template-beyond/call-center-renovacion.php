<ul class="nav nav-pills level-four" id="beyond-renovacion-callcenter" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link  active" id="kpis-info-beyond-renovacion-tab" data-toggle="pill"
            href="#kpis-info-beyond-renovacion" role="tab" aria-controls="kpis-info-beyond-renovacion"
            aria-selected="true">KPI's de telefonía</a>
    </li>

    <li class="nav-item" role="presentation">
        <a class="nav-link" id="call-base-de-datos-info-renovacion-tab" data-toggle="pill"
            href="#call-base-de-datos-info-renovacion" role="tab" aria-controls="call-base-de-datos-info-renovacion"
            aria-selected="false">Socios activos</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="call-base-de-datos-ventas-renovacion-tab" data-toggle="pill"
            href="#call-base-de-datos-ventas-renovacion" role="tab" aria-controls="call-base-de-datos-ventas-renovacion"
            aria-selected="false">Base de datos (Ventas)</a>
    </li>
</ul>
<div class="tab-content" id="beyond-renovacion-callcenterContent">
    <div class="tab-pane fade show active" id="kpis-info-beyond-renovacion" role="tabpanel"
        aria-labelledby="kpis-info-beyond-renovacion-tab">
        <?php include_once('./template-beyond/kpis-info-renovacion.php') ?>
    </div>
    <div class="tab-pane fade" id="call-base-de-datos-info-renovacion" role="tabpanel"
        aria-labelledby="call-base-de-datos-info-renovacion-tab">
        <?php include_once('./template-beyond/call-base-de-datos-renovacion.php') ?>
    </div>
    <div class="tab-pane fade" id="call-base-de-datos-ventas-renovacion" role="tabpanel"
        aria-labelledby="call-base-de-datos-ventas-renovacion-tab">
        <?php include_once('./template-beyond/call-base-de-datos-ventas-renovacion.php') ?>
    </div>
</div>