<ul class="nav nav-pills level_two" id="beyond-home" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="cobranza-home-tab" data-toggle="pill" href="#cobranza-home" role="tab"
            aria-controls="cobranza-home" aria-selected="true">Cobranza</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="renovacion-home-tab"  href="dashboard-beyond-renovacion.php">Renovación</a>
    </li>

</ul>
<div class="tab-content" id="beyond-homeContent">
    <div class="tab-pane fade show active" id="cobranza-home" role="tabpanel" aria-labelledby="cobranza-home-tab">
        <?php include_once('./template-beyond/cobranza.php') ?>
    </div>
    <div class="tab-pane fade" id="renovacion-home" role="tabpanel" aria-labelledby="renovacion-home-tab">
        <?php include_once('./template-beyond/renovacion.php') ?>
    </div>
</div>