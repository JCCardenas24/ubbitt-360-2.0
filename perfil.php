<!DOCTYPE html>
<html lang="es">

<head>
    <?php include_once('./template/head.php') ?>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <title>Ubbitt 360</title>
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary">
    <div class="wrapper">
        <?php include_once('./template/header.php') ?>
        <?php include_once('./template/side-menu.php') ?>
        <div class="content-wrapper">
            <div class="container perfil_cards">
                <h1>Mis datos</h1>
                <hr>
                <div class="row m-0 perfil_container">
                    <div class="col-5">
                        <div class="card info ">
                            <h5>Datos personales</h5>
                            <div class="d-flex avatar_container">
                                <img src="./assets/images/avatar_ubbitt.png" alt="">
                                <h4>Oscar Fady</h4>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="email@mail.com" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Contraseña</label>
                                <input type="password" class="form-control" id="exampleFormControlInput1"
                                    placeholder="*******" readonly>
                            </div>
                            <small>Cambiar contraseña</small>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Teléfono contacto</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="5566778899" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="card datos">
                            <h5>Datos de la compañía</h5>
                            <div class="row m-0">
                                <div class="col-4">
                                    <h4>Nombre</h4>
                                    <p>Nombre empresa</p>
                                </div>
                                <div class="col-4">
                                    <h4>Razón social</h4>
                                    <p>Razón social</p>
                                </div>
                                <div class="col-4"></div>
                            </div>
                            <div class="row m-0">
                                <div class="col-4">
                                    <h4>Dirección</h4>
                                    <p>Calle y número</p>
                                </div>
                                <div class="col-4">
                                    <h4>Ciudad</h4>
                                    <p>Ciudad de México</p>
                                </div>
                                <div class="col-4">
                                    <h4>Municipio</h4>
                                    <p>Municipio</p>
                                </div>
                            </div>
                            <div class="row m-0">
                                <div class="col-4">
                                    <h4>Código postal</h4>
                                    <p>12345</p>
                                </div>
                                <div class="col-4">
                                    <h4>Email</h4>
                                    <p>Ciudad de México</p>
                                </div>
                                <div class="col-4">
                                    <h4>Teléfono</h4>
                                    <p>Municipio</p>
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
    <script src="./assets/js/header.js"></script>
    <script src="./assets/js/clientes.js"></script>


</body>

</html>