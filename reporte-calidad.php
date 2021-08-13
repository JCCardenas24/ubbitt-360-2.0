<!DOCTYPE html>
<html lang="es">

<head>
    <?php include_once('./template/head.php') ?>
    <title>Reporte de calidad</title>
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary">
    <div class="wrapper">
        <?php include_once('./template/header.php') ?>
        <?php include_once('./template/side-menu.php') ?>
        <div class="content-wrapper">
            <div class="container h-100">
                <div class="col-md-12 pr-0 pl-0">
                    <div class="mt-30">
                        <div class="d-flex justify-content-between">
                            <h5 class="c-gray font-weight-800 m-0 d-flex align-items-center">Listado de reportes de
                                calidad</h5>
                            <div class="row col-md-9 d-flex align-items-center justify-content-end">
                                <div class="form-group col-md-4 d-flex m-0 pr-0">
                                    <div id="reportrange-quality-report" class="range-pick">
                                        <i class="fa fa-calendar"></i>&nbsp;
                                        <span></span>&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                                    </div>
                                </div>
                                <!--<div class="form-group col-md-2 m-0">
                                    <input type="text" class="form-control" placeholder="Buscar">
                                </div>-->
                                <div class="col-md-1 pr-0">
                                    <a href="carga-reporte-calidad.php"
                                        class="btn btn-download d-flex justify-content-center align-items-center"><i
                                            class="fa fa-plus c-gray" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <table id="tableClients" class="table table-sm" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="th-sm">ID</th>
                                    <th class="th-sm">Nombre del archivo</th>
                                    <th class="th-sm">Fecha</th>
                                    <th class="th-sm">Hora</th>
                                    <th class="th-sm">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="row col-6 mx-auto">
                                            <div class="col">
                                                <a href="./upload/" download><i
                                                        class="fa fa-download" aria-hidden="true"
                                                        title="Descargar archivo"></i></a>
                                            </div>
                                            <div class="col">
                                                <a href="#" data-toggle="modal"
                                                    data-target="#eliminarReporte"><i class="fa fa-trash"
                                                        aria-hidden="true" title="Eliminar archivo"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="eliminarReporte" tabindex="-1" role="dialog" aria-labelledby="eliminarReporte"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img class="pt-50 pb-30" src="./assets/images/syn/warining.svg" alt="warning">
                        <h5 class="c-header font-weight-800 text-center text-uppercase pt-20">¿Desea eliminar este
                            reporte de calidad?</h5>
                    </div>
                    <div class="col-12 text-center pt-10 pb-30">
                        <button type="button"
                            class="btn btn-second c-white col-3 font-weight-800 text-center text-uppercase"
                            data-dismiss="modal">Cancelar</button>
                        <button type="button"
                            class="btn btn-first c-white col-3 font-weight-800 text-center text-uppercase"
                            data-dismiss="modal" data-toggle="modal" data-target="#reporteEliminado">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="reporteEliminado" tabindex="-1" role="dialog" aria-labelledby="reporteEliminado"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img class="pt-50 pb-30" src="./assets/images/syn/tick.svg" alt="tick">
                        <h5 class="c-header font-weight-800 text-center text-uppercase pt-20">Reporte eliminado con
                            éxito</h5>
                    </div>
                    <div class="col-12 text-center pt-10 pb-30">
                        <button type="button"
                            class="btn btn-first c-white col-3 font-weight-800 text-center text-uppercase"
                            data-dismiss="modal">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('./template/footer.php') ?>
    </div>
    <?php include_once('./template/scripts.php') ?>
    <script src="./assets/vendor_components/moment/locale/es.js"></script>
    <script>
    var reporte;
    $(function() {
        const urlParams = new URLSearchParams(window.location.search);
        const initialDate = urlParams.get('initial_date');
        const finalDate = urlParams.get('final_date');

        var start =
            initialDate == null ?
            moment().subtract(7, 'days') :
            moment(initialDate);
        var end = finalDate == null ? moment() : moment(finalDate);

        function selectDatesHandler(start, end, refresh = true) {
            $('#reportrange-quality-report span').html(
                start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY')
            );
            if (refresh) {
                location.replace(
                    location.protocol +
                    '//' +
                    location.host +
                    location.pathname +
                    '?initial_date=' +
                    start.format('YYYY-MM-DD') +
                    '&final_date=' +
                    end.format('YYYY-MM-DD')
                );
            }
        }

        $('#reportrange-quality-report').daterangepicker({
            showDropdowns: true,
            minYear: 1901,
            maxYear: parseInt(moment().format('YYYY'), 10),
            startDate: start,
            endDate: end,
        }, selectDatesHandler);

        selectDatesHandler(start, end, false);

        $('#eliminarReporte').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var _id = button.data('id');
            var modal = $(this);
            reporte = button.closest('tr');
            modal.find('.btn-first').data('id', _id);
        })

        $('#eliminarReporte').on('click', '.btn-first', function(event) {
            var button = $(this);
            var _id = button.data('id');
            _url = "functions.php";

            $.post(_url, {
                params: {
                    id: _id
                },
                module: 'reporte_calidad',
                action: 'delete'
            }, function(data) {
                if (data.success != 0) {
                    reporte.remove();
                }
            });
        })
    });
    </script>
</body>

</html>