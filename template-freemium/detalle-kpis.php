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
        <a class="pdf_button mr-5"><i class="icon-download_xls"></i></a>
        <a class="upload_report_btn pdf_button"><i class="icon-agegarnuevo"></i></a>
    </div>
    <br>

    <?php include_once('table-kpis.php') ?>
</div>

<div class="view_upload_report_form" style="display: none;">
    <a class="cancel_upload_report">< Regresar a la lista</a>
    <h3 class="c-header font-weight-bold text-center">Importa tus datos con UBBITT</h3>
    <div class="col-md-6 mx-auto text-center div-white pt-15 pb-15 rounded mt-30">
        <img src="./assets/images/syn/file.png" alt="file">
        <div class="mt-4">
            <p class="c-header h3 font-weight-bold d-block">Importar</p>
            <p class="c-header">Importa información de contactos, negocios, tickets y productos a Ubbitt.</p>
            <form>
                <div class="custom-file col-10">
                    <label class="custom-file-label" id="nameFile1" for="f02">Seleccione su archivo</label>
                    <!-- <input id="f02" type="file"
                        accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                        class="custom-file-input" name="file"> -->
                        <input class="custom-file-input" name="file">
                    <i style="display: none;" id="msjFile1">Formato válido para los archivos: xslx, xsl.</i>
                    <i style="display: none;" id="msjFilePeso1">El peso máximo para el archivo es de: 2M</i>
                </div>
                <button class="btn btn-first c-white col-md-6 mt-15 mb-5 upload_file_report">Subir</button>
            </form>
        </div>
    </div>

</div>