<!DOCTYPE html>
<html lang="es">

<head>
    <?php include_once('./template/head.php') ?>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <title>Ubbitt 360</title>
</head>

<body class=" light-skin sidebar-mini theme-primary">
    <div class="wrapper">
        <?php include_once('./template/header.php') ?>
        <?php include_once('./template/side-menu.php') ?>
        <div class="content-wrapper">
            <div class="container container-premium" id="dynamic-tabs">
                <ul class="nav nav-pills level_one level-one-premium" id="main_tabs_panels" role="tablist">
                    <div class="d-flex flex-row-reverse">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="premium-tab" data-toggle="pill" href="#premium" role="tab"
                                aria-controls="premium" aria-selected="true">Ubbitt Premium</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link " id="freemium_option-tab" href="dashboard-freemium.php">Ubbitt
                                Freemium</a>
                        </li>
                    </div>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " id="beyond_option-tab" href="dashboard-beyond-cobranza.php">Ubbitt
                            Beyond</a>
                    </li>
                </ul>
                <div class="tab-content" id="main_tabs_panelsContent">
                    <div class="tab-pane fade show active" id="premium" role="tabpanel" aria-labelledby="premium-tab">
                        <?php include_once('./template-premium/dashboard-premium-campaigns-options.php') ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('./template/footer.php') ?>
    </div>
    <?php include_once('./template/scripts.php') ?>
    <script src="./assets/vendor_components/moment/locale/es.js"></script>
    <script src="./assets/js/clientes.js"></script>
    <script src="./assets/vendor_components/echarts/dist/echarts-en.min.js"></script>
    <!-- scripts to load resumen charts -->
    <script src="./assets/js/premium-charts-resumen-campaign.js"></script>
    <script src="./assets/js/micro-interactions.js"></script>
    <script src="./assets/js/preloader.js"></script>

</body>

</html>