<!DOCTYPE html>
<html lang="es">

<head>
    <?php include_once('./template/head.php') ?>
    <title>Informes</title>
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary">
    <div class="wrapper">
        <?php include_once('./template/header.php') ?>
        <?php include_once('./template/side-menu.php') ?>
        <div class="content-wrapper">
            <div class="container pb-15">
                <div class="col-md-12 pr-0 pl-0">
                    <div class="d-flex justify-content-between">
                        <h5 class="c-header font-weight-800 m-0 d-flex align-items-center">Panel Producción IN</h5>
                        <div class="row col-md-9 d-flex align-items-center justify-content-end">
                            <div class="form-group col-md-5 d-flex m-0">
                                <div id="reportrange_panel_in" class="range-pick">
                                    <i class="fa fa-calendar"></i>&nbsp;
                                    <span></span>&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-30">
                        <div class="col-12 mx-auto row">
                            <div class="col-md-6">
                                <div class="div-purple rounded10 shadow-div h-150">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="pd-20">
                                            <p class="m-0 c-white text-uppercase">Base total</p>
                                            <p class="font-size-30 font-weight-bold c-white"><?= $base_total ?></p>
                                        </div>
                                        <div
                                            class="circle-white d-flex justify-content-center align-items-center mr-30">
                                            <i class="fa fa-arrow-up font-size-30 c-white"></i>
                                        </div>
                                    </div>
                                    <div class="bar-kpi">
                                        <div class="bar-progress-kpi" style="width: <?= $kpis_base_total ?>%;"></div>
                                        <div class="d-flex justify-content-between mb-5">
                                            <span class="c-white">KPIs</span>
                                            <span class="c-white"><?= $kpis_base_total ?>%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="div-navy-green rounded10 shadow-div h-150">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="pd-20">
                                            <p class="m-0 c-white text-uppercase">Consumo de base</p>
                                            <p class="font-size-30 font-weight-bold c-white"><?= $consumo_base ?></p>
                                        </div>
                                        <div
                                            class="circle-white d-flex justify-content-center align-items-center mr-30">
                                            <i class="fa fa-arrow-up font-size-30 c-white"></i>
                                        </div>
                                    </div>
                                    <div class="bar-kpi">
                                        <div class="bar-progress-kpi" style="width: <?= $kpis_consumo_base ?>%;"></div>
                                        <div class="d-flex justify-content-between mb-5">
                                            <span class="c-white">KPIs</span>
                                            <span class="c-white"><?= $kpis_consumo_base ?>%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-30">
                                <div class="div-white rounded10 shadow-div">
                                    <h5 class="c-header mb-0 font-weight-bold p-10">Registros efectivos</h5>
                                    <div class="pd-20">
                                        <canvas id="barEfectivos" width="100" height="30"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-30">
                                <div class="div-white rounded10 shadow-div">
                                    <h5 class="c-header mb-0 font-weight-bold p-10">Registros fuera de gestión</h5>
                                    <div class="pd-20">
                                        <canvas id="barGestion" width="100" height="30"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-30">
                                <div class="div-white rounded10 shadow-div">
                                    <h5 class="c-header mb-0 font-weight-bold p-10">Registros de seguimiento</h5>
                                    <div class="pd-20">
                                        <canvas id="barSeguimiento" width="100" height="30"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-30">
                                <div class="div-white rounded10 shadow-div">
                                    <h5 class="c-header mb-0 font-weight-bold p-10">Pólizas Vendidas</h5>
                                    <div class="pd-20">
                                        <canvas id="genero" width="150" height="30"></canvas>
                                    </div>
                                    <div class="col-6 mx-auto d-flex justify-content-around pb-5">
                                        <div class="col-md-6 pb-5">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div style="width:8px; height:8px; background-color:#d5da1c"></div>
                                                <span class="ml-2 font-size-10">Cobradas</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pb-5">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div style="width:8px; height:8px; background-color:#da211c"></div>
                                                <span class="ml-2 font-size-10">Emitidas</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-30">
                                <div class="div-bluev rounded10 shadow-div h-150">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="pd-20">
                                            <p class="m-0 c-white text-uppercase">% de contactación</p>
                                            <p class="font-size-30 font-weight-bold c-white">
                                                <?= number_format($porcentaje_contactacion, 2) ?>%</p>
                                        </div>
                                        <div
                                            class="circle-white d-flex justify-content-center align-items-center mr-30">
                                            <i class="fa fa-arrow-up font-size-30 c-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-30">
                                <div class="div-green rounded10 shadow-div h-150">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="pd-20">
                                            <p class="m-0 c-white text-uppercase">% de conversión</p>
                                            <p class="font-size-30 font-weight-bold c-white">
                                                <?= number_format($porcentaje_conversion, 2) ?>%</p>
                                        </div>
                                        <div
                                            class="circle-white d-flex justify-content-center align-items-center mr-30">
                                            <i class="fa fa-arrow-up font-size-30 c-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-30">
                                <div class="div-brown rounded10 shadow-div h-150">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="pd-20">
                                            <p class="m-0 c-white text-uppercase">Leads de seguimiento</p>
                                            <p class="font-size-30 font-weight-bold c-white">
                                                <?= $registros_seguimiento ?></p>
                                        </div>
                                        <div
                                            class="circle-white d-flex justify-content-center align-items-center mr-30">
                                            <i class="fa fa-arrow-up font-size-30 c-white"></i>
                                        </div>
                                    </div>
                                    <div class="bar-kpi">
                                        <div class="bar-progress-kpi" style="width: <?= $kpis_leads_seguimiento ?>%;">
                                        </div>
                                        <div class="d-flex justify-content-between mb-5">
                                            <span class="c-white">KPIs</span>
                                            <span class="c-white"><?= $kpis_leads_seguimiento ?>%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-30">
                                <div class="div-white rounded10 shadow-div">
                                    <h5 class="c-header mb-0 font-weight-bold p-10">Prima Pendiente</h5>
                                    <div class="pt-10 pb-10 text-center">
                                        <h3 class="c-header font-weight-800">$<?= number_format($prima_pendiente, 2) ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-30">
                                <div class="div-white rounded10 shadow-div">
                                    <h5 class="c-header mb-0 font-weight-bold p-10">Prima Pagada</h5>
                                    <div class="pt-10 pb-10 text-center">
                                        <h3 class="c-header font-weight-800">
                                            $<?= number_format($prima_cobrada_valor, 2) ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('./template/footer.php') ?>
    </div>
    <?php include_once('./template/scripts.php') ?>
    <script src="./assets/vendor_components/moment/locale/es.js"></script>
    <script src="./assets/js/header.js"></script>
    <script src="./assets/js/pages/widget-charts2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
    <script src="./assets/js/panel-in.js"></script>
    <script>
    var ctx = document.getElementById("barEfectivos").getContext('2d');
    var barChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Gestión 1", "Gestión 2", "Gestión 3", "Gestión 4", "Gestión 5"],
            datasets: [{
                label: '',
                data: [<?= $registros_efectivos_1 ?>, <?= $registros_efectivos_2 ?>,
                    <?= $registros_efectivos_3 ?>, <?= $registros_efectivos_4 ?>,
                    <?= $registros_efectivos_5 ?>
                ],
                backgroundColor: "#801cda"
            }]
        },
        options: {
            legend: {
                display: false,
            },
            plugins: {
                datalabels: {
                    formatter: function(value) {
                        return value;
                    },
                    color: '#000',
                    font: {
                        weight: 'bold',
                        size: 13,
                    },
                    anchor: 'end',
                    align: 'top',
                }
            },
        }
    });

    var ctx = document.getElementById("barGestion").getContext('2d');
    var barChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Gestión 1", "Gestión 2", "Gestión 3", "Gestión 4", "Gestión 5"],
            datasets: [{
                label: '',
                data: [<?= $registros_fuera_de_gestion_1 ?>, <?= $registros_fuera_de_gestion_2 ?>,
                    <?= $registros_fuera_de_gestion_3 ?>, <?= $registros_fuera_de_gestion_4 ?>,
                    <?= $registros_fuera_de_gestion_5 ?>
                ],
                backgroundColor: "#d5da1c"
            }]
        },
        options: {
            legend: {
                display: false,
            },
            plugins: {
                datalabels: {
                    formatter: function(value) {
                        return value;
                    },
                    color: '#000',
                    font: {
                        weight: 'bold',
                        size: 13,
                    },
                    anchor: 'end',
                    align: 'top',
                }
            },
        }
    });

    var ctx = document.getElementById("barSeguimiento").getContext('2d');
    var barChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Gestión 1", "Gestión 2", "Gestión 3", "Gestión 4", "Gestión 5"],
            datasets: [{
                label: '',
                data: [<?= $registros_seguimiento_1 ?>, <?= $registros_seguimiento_2 ?>,
                    <?= $registros_seguimiento_3 ?>, <?= $registros_seguimiento_4 ?>,
                    <?= $registros_seguimiento_5 ?>
                ],
                backgroundColor: "#76da1c"
            }]
        },
        options: {
            legend: {
                display: false,
            },
            plugins: {
                datalabels: {
                    formatter: function(value) {
                        return value;
                    },
                    color: '#000',
                    font: {
                        weight: 'bold',
                        size: 13,
                    },
                    anchor: 'end',
                    align: 'top',
                }
            },
        }
    });

    let generoCanva = document.getElementById("genero");
    let generoData = {
        labels: [
            "Cobradas",
            "Pendientes",
        ],
        datasets: [{
            data: [<?= $prima_cobrada ?>, <?= $prima_emitida ?>],
            backgroundColor: [
                "#d5da1c",
                "#da211c",
            ]
        }]
    };

    let generoChart = new Chart(generoCanva, {
        plugins: [ChartDataLabels],
        type: 'doughnut',
        data: generoData,
        options: {
            legend: {
                display: false,
            },
            plugins: {
                datalabels: {
                    formatter: function(value) {
                        return value;
                    },
                    color: '#fff',
                    font: {
                        weight: 'bold',
                        size: 20,
                    }
                }
            },
        }
    });
    </script>
</body>

</html>