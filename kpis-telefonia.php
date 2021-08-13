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
                        <h5 class="c-header font-weight-800 m-0 d-flex align-items-center">Panel de Informes de KPIs
                        </h5>
                        <div class="row col-md-10 d-flex align-items-center justify-content-end">
                            <div class="form-group col-md-5 d-flex m-0">
                                <div id="reportrange_kpis_telefonia" class="range-pick">
                                    <i class="fa fa-calendar"></i>&nbsp;
                                    <span></span>&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                                </div>
                            </div>
                            <div class="form-group col-md-3 m-0 ml-10" hidden>
                                <select class="form-control style-filter" id="exampleFormControlSelect1">
                                    <option value="">Tipo de base</option>
                                    <option>Total</option>
                                    <option>Primera</option>
                                    <option>Segunda</option>
                                    <option>Tercera</option>
                                    <option>Cuarta</option>
                                    <option>Quinta</option>
                                </select>
                            </div>
                            <div class="col-md-1" hidden>
                                <button class="btn btn-download d-flex justify-content-center align-items-center"><i
                                        class="fa fa-file-pdf-o c-gray" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-30">
                        <div class="col-12 mx-auto row">
                            <div class="col-md-12 row mx-auto">
                                <div class="col-md-4 h100">
                                    <div class="div-white rounded10 shadow-div h100">
                                        <h5 class="c-header mb-0 font-weight-bold p-10">NCO</h5>
                                        <div class="">
                                            <canvas id="nco" width="150"></canvas>
                                        </div>
                                        <span
                                            class="c-orange font-weight-800 font-size-20 pos-number-nco"><?= $llamadas_total ?></span>
                                        <p class="c-header text-center font-size-12 pb-5">Número de Llamadas Ofrecidas
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 h100">
                                    <div class="div-white rounded10 shadow-div h100">
                                        <h5 class="c-header mb-0 font-weight-bold p-10">NCH</h5>
                                        <div class="">
                                            <canvas id="nch" width="200"></canvas>
                                        </div>
                                        <span
                                            class="c-green-gray font-weight-800 font-size-20 pos-number-nco"><?= $llamadas_contestadas ?></span>
                                        <p class="c-header text-center font-size-12 pb-5">Número de Llamadas Contestadas
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 h100">
                                    <div class="div-white rounded10 shadow-div h100">
                                        <h5 class="c-header mb-0 font-weight-bold p-10">OBC</h5>
                                        <div class="">
                                            <canvas id="obc" width="150"></canvas>
                                        </div>
                                        <span
                                            class="c-blue font-weight-800 font-size-20 pos-number-nco"><?= $llamadas_salientes ?></span>
                                        <p class="c-header text-center font-size-12 pb-5">Número de Llamadas Salientes
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-30 row mx-auto">
                                <div class="col-md-4">
                                    <div class="div-green rounded10 shadow-div">
                                        <div class="col-md-10 mx-auto row pt-25 pb-25 pl-0">
                                            <div class="col-3 text-left">
                                                <p class="c-white mb-15 font-weight-800 font-size-20 pl-0">
                                                    <?= $llamadas_atendidas_25secs ?></p>
                                            </div>
                                            <div class="col-7">
                                                <p class="c-white m-0 font-weight-800 font-size-20">NSL</p>
                                                <p class="c-white m-0 font-size-10">Atendidos antes de 25 sec</p>
                                            </div>
                                            <div class="col-2">
                                                <div
                                                    class="circle-white d-flex justify-content-center align-items-center mr-30">
                                                    <i class="fa fa-phone font-size-30 c-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="div-purple rounded10 shadow-div">
                                        <div class="col-md-10 mx-auto row pt-25 pb-25 pl-0">
                                            <div class="col-3 text-left">
                                                <p class="c-white mb-15 font-weight-800 font-size-30 pl-0">
                                                    <?= $llamadas_abandonadas_5secs ?></p>
                                            </div>
                                            <div class="col-7">
                                                <p class="c-white m-0 font-weight-800 font-size-20">ABA</p>
                                                <p class="c-white m-0 font-size-10">Abandonados antes de 5 sec</p>
                                            </div>
                                            <div class="col-2">
                                                <div
                                                    class="circle-white d-flex justify-content-center align-items-center mr-30">
                                                    <i class="fa fa-phone font-size-30 c-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="div-fiush-dark rounded10 shadow-div">
                                        <div class="col-md-10 mx-auto row pt-25 pb-25 pl-0">
                                            <div class="col-3 text-left d-flex align-items-center">
                                                <p class="c-white mb-15 font-weight-800 font-size-20 pl-0">
                                                    <?= $llamadas_atendidas_porcentaje ?>%</p>
                                            </div>
                                            <div class="col-7 ml-auto mr-auto">
                                                <p class="c-white m-0 font-weight-800 font-size-20 ml-15">NSL</p>
                                                <p class="c-white m-0 font-size-10 ml-15">(NSL/NCO)</p>
                                                <p class="c-white m-0 font-size-10 ml-15">Atendidos antes de 30 sec</p>
                                            </div>
                                            <div class="col-2">
                                                <div
                                                    class="circle-white d-flex justify-content-center align-items-center mr-30">
                                                    <i class="fa fa-percent font-size-30 c-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-20">
                                    <div class="div-orange rounded10 shadow-div">
                                        <div class="col-md-10 mx-auto row pt-25 pb-25 pl-0">
                                            <div class="col-3 text-left d-flex align-items-center">
                                                <p class="c-white mb-15 font-weight-800 font-size-20 pl-0">
                                                    <?= $llamadas_abandonadas_porcentaje ?>%</p>
                                            </div>
                                            <div class="col-7 ml-auto mr-auto">
                                                <p class="c-white m-0 font-weight-800 font-size-20 ml-15">ABA</p>
                                                <p class="c-white m-0 font-size-10 ml-15">(ABA/NCO)</p>
                                                <p class="c-white m-0 font-size-10 ml-15">Abandonados antes de 5 sec</p>
                                            </div>
                                            <div class="col-2">
                                                <div
                                                    class="circle-white d-flex justify-content-center align-items-center mr-30">
                                                    <i class="fa fa-percent font-size-30 c-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-20">
                                    <div class="div-navy-green rounded10 shadow-div">
                                        <div class="col-md-10 mx-auto row pt-25 pb-25 pl-0">
                                            <div class="col-4 text-left">
                                                <p class="c-white mb-15 font-weight-800 font-size-26 pl-0">
                                                    <?= $tiempo_promedio_llamadas_IN ?>m</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="c-white m-0 font-weight-800 font-size-20">ATH IN</p>
                                                <p class="c-white m-0 font-size-10">Tiempo promedio IN</p>
                                            </div>
                                            <div class="col-2">
                                                <div
                                                    class="circle-white d-flex justify-content-center align-items-center mr-30">
                                                    <i class="fa fa-clock-o font-size-30 c-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-20">
                                    <div class="div-brown rounded10 shadow-div">
                                        <div class="col-md-10 mx-auto row pt-25 pb-25 pl-0">
                                            <div class="col-4 text-left">
                                                <p class="c-white mb-15 font-weight-800 font-size-26 pl-0">
                                                    <?= $tiempo_promedio_llamadas_OUT ?>m</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="c-white m-0 font-weight-800 font-size-20">ATH OUT</p>
                                                <p class="c-white m-0 font-size-10">Tiempo promedio OUT</p>
                                            </div>
                                            <div class="col-2">
                                                <div
                                                    class="circle-white d-flex justify-content-center align-items-center mr-30">
                                                    <i class="fa fa-clock-o font-size-30 c-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-30">
                                <div class="div-white rounded10 shadow-div">
                                    <h5 class="c-header mb-0 font-weight-bold p-10">Avance de gestión</h5>
                                    <div class="pd-20">
                                        <canvas id="avance-gestion" width="150" height="30"></canvas>
                                    </div>
                                    <div class="col-md-5 mx-auto d-flex justify-content-around pb-5">
                                        <div class="col-md-3 pb-5">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div style="width:8px; height:8px; background-color:#5375D9"></div>
                                                <span class="ml-2 font-size-14">Tocados</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 pb-5">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div style="width:8px; height:8px; background-color:#62B472"></div>
                                                <span class="ml-2 font-size-14">Pendientes</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 pb-5">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div style="width:8px; height:8px; background-color:#613FB0"></div>
                                                <span class="ml-2 font-size-14">Segumiento</span>
                                            </div>
                                        </div>
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
    <script src="./assets/js/pages/widget-charts2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
    <script src="./assets/js/kpis-telefonia.js"></script>
    <script>
    let ncoCanva = document.getElementById("nco");
    let nchCanva = document.getElementById("nch");
    let obcCanva = document.getElementById("obc");
    let avanceCanva = document.getElementById('avance-gestion');
    let converCanva = document.getElementById('conversion-venta');

    let ncoData = {
        labels: [
            "número de llamadas ofrecidas",
        ],
        datasets: [{
            data: [100, 0],
            backgroundColor: [
                "#EEAA3B",
            ]
        }]
    };
    let ncoChart = new Chart(ncoCanva, {
        type: 'doughnut',
        data: ncoData,
        options: {
            legend: {
                display: false,
            },
            plugins: {
                datalabels: {
                    formatter: function(value) {
                        return null;
                    },
                }
            },
        }
    });

    let nchData = {
        labels: [
            "número de llamadas ofrecidas",
        ],
        datasets: [{
            data: [<?= $llamadas_contestadas_porcentaje ?>, <?= 100 - $llamadas_contestadas_porcentaje ?>],
            backgroundColor: [
                "#53B0A3",
            ]
        }]
    };
    let nchChart = new Chart(nchCanva, {
        type: 'doughnut',
        data: nchData,
        options: {
            legend: {
                display: false,
            },
            plugins: {
                datalabels: {
                    formatter: function(value) {
                        return null;
                    },
                }
            },
        }
    });

    let obcData = {
        labels: [
            "número de llamadas ofrecidas",
        ],
        datasets: [{
            data: [23, 77],
            backgroundColor: [
                "#538EEF",
            ]
        }]
    };
    let obcChart = new Chart(obcCanva, {
        type: 'doughnut',
        data: obcData,
        options: {
            legend: {
                display: false,
            },
            plugins: {
                datalabels: {
                    formatter: function(value) {
                        return null;
                    },
                }
            },
        }
    });

    let avanceData = {
        labels: [
            "Tocados",
            "Pendientes",
            "Segumiento"
        ],
        datasets: [{
            data: [<?= $tocados ?>, <?= $pendientes ?>, <?= $seguimiento ?>],
            backgroundColor: [
                "#5375D9",
                "#62B472",
                "#613FB0"
            ]
        }]
    };
    let avanceChart = new Chart(avanceCanva, {
        type: 'doughnut',
        data: avanceData,
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
                        size: 13,
                    }
                }
            },
        }
    });

    let converData = {
        labels: [
            "Conversión",
            "CCC",
        ],
        datasets: [{
            data: [119, 90],
            backgroundColor: [
                "#56B1D9",
                "#5ABF58",
            ]
        }]
    };
    let converChart = new Chart(converCanva, {
        type: 'doughnut',
        data: converData,
        options: {
            legend: {
                display: false,
            },
            rotation: 1 * Math.PI,
            /** This is where you need to work out where 89% is */
            circumference: 1 * Math.PI,
            /** put in a much smaller amount  so it does not take up an entire semi circle */
            series: {
                showLabel: true,
                showLegend: true
            },
            plugins: {
                datalabels: {
                    formatter: function(value) {
                        return value;
                    },
                    color: '#fff',
                    font: {
                        weight: 'bold',
                        size: 13,
                    },
                }
            },
        }
    });
    </script>
</body>

</html>