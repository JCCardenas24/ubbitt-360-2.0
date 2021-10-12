<div class="reports_info_contents">
    <div class="d-flex wid-100 justify-content-end">
        <div class="col-4 d-flex justify-content-between">
            <div class="form-group wid-100 d-flex m-0">
                <div id="reportrange_clientes" class="range-pick">
                    <i class="fa fa-calendar"></i>&nbsp;
                    <span>agosto 19, 2021 - agosto 23, 2021</span>&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                </div>
            </div>
        </div>
        <a href="./assets/reportes/prueba.xlsx" class="pdf_button mr-5" download><i class="icon-download_xls"></i></a>
        <a href="./assets/reportes/info.zip" class="pdf_button  mr-5" download><i class="fa fa-download" aria-hidden="true"></i></a>
        <a class="upload_report_btn pdf_button"><i class="icon-agegarnuevo"></i></a>
    </div>
    <br>

    <?php include_once('table-kpis.php') ?>
</div>

<div class="view_upload_report_form" style="display: none;">
    <a class="cancel_upload_report">
        < Regresar a la lista</a> <div class="col-md-6 mx-auto text-center div-white pt-15 pb-15 rounded mt-30">
            <img src="./assets/images/importar_reporte.png" alt="file">
            <div class="mt-4">
                <p class="c-header h3 font-weight-bold d-block">Importar nuevo reporte</p>
                <form class="form_upload_file" action=""  method="post">
                    <div class="main-wrapper">
                        <div class="upload-main-wrapper">
                            <div class="upload-wrapper">
                                <input type="file" id="upload-file">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.001" height="18.006"
                                    viewBox="0 0 18.001 18.006">
                                    <g id="upload-sign-svgrepo-com" transform="translate(-0.058 0)">
                                        <path id="Trazado_9592" data-name="Trazado 9592"
                                            d="M16.615,207.506a1.444,1.444,0,0,0-1.444,1.444v3.687H2.946V208.95a1.444,1.444,0,0,0-2.888,0v5.131A1.444,1.444,0,0,0,1.5,215.525H16.615a1.444,1.444,0,0,0,1.444-1.444V208.95A1.444,1.444,0,0,0,16.615,207.506Z"
                                            transform="translate(0 -197.519)" fill="#fff" />
                                        <path id="Trazado_9593" data-name="Trazado 9593"
                                            d="M74.822,6.542,76.434,4.93v5.38a1.444,1.444,0,1,0,2.888,0V4.93l1.612,1.612A1.444,1.444,0,0,0,82.975,4.5L78.9.423a1.444,1.444,0,0,0-2.042,0L72.78,4.5a1.444,1.444,0,0,0,2.042,2.042Z"
                                            transform="translate(-68.819 0)" fill="#fff" />
                                    </g>
                                </svg>
                                <span class="file-upload-text">Buscar archivo</span>
                                <div class="file-success-text">
                                    <svg version="1.1" id="check" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100"
                                        xml:space="preserve">
                                        <circle
                                            style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-miterlimit:10;"
                                            cx="49.799" cy="49.746" r="44.757" />
                                        <polyline
                                            style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                            points="27.114,51 41.402,65.288 72.485,34.205 " />
                                    </svg>
                                    <span>Archivo cargado</span>
                                </div>
                            </div>
                            <p class="name_file_uploaded" id="file-upload-name"></p>
                            <a href="#" class="btn btn_send_file  disabled" role="button" aria-disabled="true">Enviar</a>
                        </div>
                    </div>
                </form>
            </div>
</div>

<!-- Modal éxito -->
<div class="modal fade carga_exito_modal" id="carga_exito_msg" tabindex="-1" role="dialog"
    aria-labelledby="carga_exito_msgTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="./assets/images/exito-icon.svg" alt="">
                <p>La información se ha enviado correctamente.</p>
                <button class="btn btn_close_file_uploaded" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal error -->
<div class="modal fade carga_error_modal" id="carga_error_msg" tabindex="-1" role="dialog"
    aria-labelledby="carga_error_msgTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="./assets/images/error-icon.svg" alt="">
                <p><b>Error al cargar el archivo.</b> <br>
                    Por favor, vuelve a intentarlo.</p>
                <button class="btn" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>