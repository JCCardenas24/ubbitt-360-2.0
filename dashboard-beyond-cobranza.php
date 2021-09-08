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
            <div class="container container-beyond" id="dynamic-tabs">
                <ul class="nav nav-pills level_one level-one-beyond" id="main_tabs_panels" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="beyond_option-tab" data-toggle="pill" href="#beyond_option"
                            role="tab" aria-controls="beyond_option" aria-selected="false">Ubbitt Beyond</a>
                    </li>
                    
                    <li class="nav-item" role="presentation">
                        <!-- <a class="nav-link" id="premium-tab" data-toggle="pill" href="#premium" role="tab"
                            aria-controls="premium" aria-selected="false">Ubbitt Premium</a> -->
                        <a class="nav-link" id="premium-tab" href="dashboard-premium-campaign-1.php">Ubbitt Premium</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " id="freemium_option-tab" href="dashboard-freemium.php">Ubbitt Freemium</a>
                    </li>

                </ul>
                <div class="tab-content" id="main_tabs_panelsContent">
                    <div class="tab-pane fade show active" id="beyond_option" role="tabpanel"
                        aria-labelledby="beyond_option-tab">
                        <?php include_once('./template-beyond/home-beyond-cobranza.php') ?>
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
    <!-- scripts to load dashboard charts -->
    <script src="./assets/js/beyond-cobranza-charts.js"></script>
</body>

</html>