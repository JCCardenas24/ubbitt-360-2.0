<ul class="nav nav-pills level-four" id="freemium-call-center-options" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="freemium-call-center-kpis-tab" data-toggle="pill"
            href="#freemium-call-center-kpis" role="tab" aria-controls="freemium-call-center-kpis"
            aria-selected="true">KPI's de telefonía</a>
    </li>
    <li class="nav-item table_llamadas" role="presentation">
        <a class="nav-link" id="freemium-call-center-bd-tab" data-toggle="pill" href="#freemium-call-center-bd"
            role="tab" aria-controls="freemium-call-center-bd" aria-selected="false">Base de datos (Llamadas)</a>
    </li>
    <li class="nav-item table_llamadas" role="presentation">
        <a class="nav-link" id="freemium-call-center-ventas-tab" data-toggle="pill" href="#freemium-call-center-ventas"
            role="tab" aria-controls="freemium-call-center-ventas" aria-selected="false">Base de datos (Ventas)</a>
    </li>
</ul>
<div class="tab-content" id="freemium-call-center-optionsContent">
    <div class="tab-pane fade show active" id="freemium-call-center-kpis" role="tabpanel"
        aria-labelledby="freemium-call-center-kpis-tab">
        <?php include_once('kpis.php')?>
    </div>
    <div class="tab-pane fade" id="freemium-call-center-bd" role="tabpanel"
        aria-labelledby="freemium-call-center-bd-tab">
        <?php include_once('call-base-de-datos.php')?>
    </div>
    <div class="tab-pane fade" id="freemium-call-center-ventas" role="tabpanel"
        aria-labelledby="freemium-call-center-ventas-tab">
        <?php include_once('call-base-de-datos-ventas.php')?>
    </div>
</div>