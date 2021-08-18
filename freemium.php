<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once('./template/head.php') ?>
    <title>Clientes</title>
</head>
<body class="hold-transition light-skin sidebar-mini theme-primary">
    <div class="wrapper">
        <?php include_once('./template/header.php') ?>
        <?php include_once('./template/side-menu.php') ?>
        <div class="content-wrapper" style="overflow: auto;">
            <div class="container h-100">
                <div class="col-md-12 pr-0 pl-0">
                    <div class="mt-30">
                        <div class="d-flex justify-content-between">
                            <h5 class="c-gray font-weight-800 m-0 d-flex align-items-center">Listado de clientes</h5>
                            <div class="row col-md-9 d-flex align-items-center justify-content-end">
                                <div class="form-group col-md-6 d-flex m-0">
                                    <div id="reportrange_clientes" class="range-pick">
                                        <i class="fa fa-calendar"></i>&nbsp;
                                        <span></span>&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table id="tableClients" class="table table-sm" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="th-sm">ID</th>
                                    <th class="th-sm">Asignación</th>
                                    <th class="th-sm">Teléfono</th>
                                    <th class="th-sm">Cuenta asignada</th>
                                    <th class="th-sm">Fecha</th>
                                    <th class="th-sm">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('./template/footer.php') ?>
    </div>
    <?php include_once('./template/scripts.php') ?>
    <script src="./assets/vendor_components/moment/locale/es.js"></script>
    <script src="./assets/js/header.js"></script>
    <script src="./assets/js/clientes.js"></script>
</body>
</html>