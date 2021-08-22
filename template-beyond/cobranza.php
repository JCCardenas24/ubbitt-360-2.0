<ul class="nav nav-pills level-three" id="cobranza-options" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="resumen-cobranza-tab" data-toggle="pill" href="#resumen-cobranza" role="tab"
            aria-controls="resumen-cobranza" aria-selected="true">Resumen</a>
    </li>
    <li class="nav-item table_kpis" role="presentation">
        <a class="nav-link " id="beyond-cobranza-callcenter-tab" data-toggle="pill" href="#beyond-cobranza-callcenter"
            role="tab" aria-controls="beyond-cobranza-callcenter" aria-selected="false">Call Center</a>
    </li>
    <li class="nav-item table_kpis" role="presentation">
        <a class="nav-link" id="beyond-cobranza-reportes-tab" data-toggle="pill" href="#beyond-cobranza-reportes"
            role="tab" aria-controls="beyond-cobranza-reportes" aria-selected="false">Reportes</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="beyond-cobranza-carga-base-datos-tab" data-toggle="pill"
            href="#beyond-cobranza-carga-base-datos" role="tab" aria-controls="beyond-cobranza-carga-base-datos"
            aria-selected="false">Carga de base de datos</a>
    </li>
</ul>
<div class="tab-content" id="cobranza-optionsContent">
    <div class="tab-pane fade show active" id="resumen-cobranza" role="tabpanel" aria-labelledby="resumen-cobranza-tab">
        <?php include_once('./template-beyond/resumen.php') ?>
    </div>
    <div class="tab-pane fade" id="beyond-cobranza-callcenter" role="tabpanel"
        aria-labelledby="beyond-cobranza-callcenter-tab">
        <?php include_once('./template-beyond/call-center.php') ?>
    </div>
    <div class="tab-pane fade" id="beyond-cobranza-reportes" role="tabpanel"
        aria-labelledby="beyond-cobranza-reportes-tab">
        <?php include_once('./template-beyond/reportes.php') ?>
    </div>
    <div class="tab-pane fade" id="beyond-cobranza-carga-base-datos" role="tabpanel"
        aria-labelledby="beyond-cobranza-carga-base-datos-tab">
        <?php include_once('./template-beyond/carga-de-base-datos.php') ?>
    </div>
</div>