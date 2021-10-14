<div class="wid-100 freemium-inbound-resumen mt-40">
    <div class="d-flex justify-content-between">
        <h1>Dashboard de producción</h1>
        <div class="">
            <div class="d-flex mb-20">
                <div class="d-flex wid-100 justify-content-end">
                    <div class=" d-flex justify-content-between mr-5">
                        <div class="form-group wid-100 d-flex m-0">
                            <div id="reportrange_clientes" class="range-pick">
                                <i class="fa fa-calendar"></i>&nbsp;
                                <span></span>&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                            </div>
                        </div>
                    </div>
                    <a href="./assets/reportes/dummy_file.pdf" class="pdf_button mr-5" download><i
                            class="icon-download_pdf c-gray" aria-hidden="true"></i></a>
                    <a href="./assets/reportes/prueba.xlsx" class="pdf_button" download><i
                            class="icon-download_xls c-gray" aria-hidden="true"></i></a>
                    <!-- icon-download_xls -->
                </div>
            </div>
        </div>
    </div>
    <div class="container_chart-1">
        <h1>Transacciones</h1>
        <div class=" col-12">
            <div id="stacked-line" style="height:400px;"></div>
        </div>
    </div>
    <div class="container_cards_resumen_info">
        <div class="row ml-0 mr-0">
            <div class="col-4">
                <div class="card">
                    <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                        title="<b>Número de llamadas ofrecidas/Number of calls offered.</b> <br> Es el número de llamadas entrantes al DID asignado para campaña ">
                        <i class="ri-information-fill"></i>
                    </a>
                    <div class="d-flex he-100 justify-content-center align-items-center">

                        <div class="col-6 p-0 text-center">
                            <p class="m-0">NCO</p> <br>
                            <h5>Total de llamadas</h5>
                        </div>
                        <div class="col-6 p-0 text-center">
                            <small class="m-0">1000</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card bg-c-orange">
                    <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                        title="Número de llamadas contestadas con motivo de compra.">
                        <i class="ri-information-fill"></i>
                    </a>
                    <div class="d-flex he-100 justify-content-center align-items-center">
                        <div class="col-6 p-0 text-center">
                            <!-- <p class="m-0"></p> <br> -->
                            <h5>Total Venta</h5>
                        </div>
                        <div class="col-6 p-0 text-center">
                            <small class="m-0">500</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                        title="Número de llamadas contestadas con motivo de atención a clientes">
                        <i class="ri-information-fill"></i>
                    </a>
                    <div class="d-flex he-100 justify-content-center align-items-center">
                        <div class="col-6 p-0 text-center">

                            <h5>Llamadas atención <br> a cliente</h5>
                        </div>
                        <div class="col-6 p-0 text-center">
                            <small class="m-0">500</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container_cards_ventas_info four_cards_ventas_info">
        <div class="row ml-0 mr-0">
            <div class="col-3">
                <div class="card">
                    <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                        title="Número de pólizas emitidas totales.">
                        <i class="ri-information-fill"></i>
                    </a>
                    <p class="m-0">Total
                        de ventas</p>
                    <small>708</small>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                        title="Monto total de la prima neta emitida">
                        <i class="ri-information-fill"></i>
                    </a>
                    <p class="m-0">Monto total
                        vendido</p>
                    <small>$300,000</small>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                        title="% Conversión = (Total de ventas / total de llamadas).">
                        <i class="ri-information-fill"></i>
                    </a>
                    <p class="m-0">% conversión <br> (Llamadas de ventas) </p>
                    <small>10%</small>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                        title="Monto total de la prima total emitida.">
                        <i class="ri-information-fill"></i>
                    </a>
                    <p class="m-0">Monto del valor <br> prima total </p>
                    <small>$1,200,00</small>
                </div>
            </div>

        </div>
    </div>
    <div class="select_wrapper">
        <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Canal de procedencia</option>

            </select>
        </div>
    </div>
    <div class="container_chart-2">
        <ct-visualization id="tree-container"></ct-visualization>
    </div>

    <div class="container_cards_ventas_info">
        <div class="row ml-0 mr-0">
            <div class="col">
                <div class="card">
                    <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                        title="Número de pólizas emitidas en el período seleccionado.">
                        <i class="ri-information-fill"></i>
                    </a>
                    <p class="m-0">Total de emisiones</p>
                    <small>54</small>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                        title="Monto total emitido en prima neta.">
                        <i class="ri-information-fill"></i>
                    </a>
                    <p class="m-0">Monto total
                        vendido</p>
                    <small>$200,000</small>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                        title="Número de pólizas cobradas en el período seleccionado.">
                        <i class="ri-information-fill"></i>
                    </a>
                    <p class="m-0">Total de cobros</p>
                    <small>54</small>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                        title="Conversión de cobro: Total de pólizas cobradas / total de pólizas emitidas.">
                        <i class="ri-information-fill"></i>
                    </a>
                    <p class="m-0">% de cobranza</p>
                    <small>20.09</small>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                        title="Monto total de prima neta cobrado en el período seleccionado.">
                        <i class="ri-information-fill"></i>
                    </a>
                    <p class="m-0">Monto total cobrado</p>
                    <small>$50,000</small>
                </div>
            </div>
        </div>
    </div>
    <div class="container_cards_resumen_info">
        <div class="row ml-0 mr-0">
            <div class="col-6">
                <div class="card bg-c-yellow">
                    <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                        title="Es el monto promedio del primer cobro.">
                        <i class="ri-information-fill"></i>
                    </a>
                    <div class="d-flex he-100 justify-content-center align-items-center">
                        <div class="col-6 p-0 text-center">
                            <p class="m-0">Ticket cobranza <br> promedio </p> <br>
                            <!-- <h5>Total de llamadas</h5> -->
                        </div>
                        <div class="col-6 p-0 text-center">
                            <small class="m-0">$2,300</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card bg-c-skyblue">
                    <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                        title="Monto pagado a Übbitt esperado de acuerdo a la comisión pactada.">
                        <i class="ri-information-fill"></i>
                    </a>
                    <div class="d-flex he-100 justify-content-center align-items-center">
                        <div class="col-6 p-0 text-center">
                            <p class="m-0">Comisión pagada <br> Übbitt 360</p> <br>
                            <!-- <h5>Total de llamadas</h5> -->
                        </div>
                        <div class="col-6 p-0 text-center">
                            <small class="m-0">$100,000</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container_concentrado_polizas">
        <div class="row m-0">
            <div class="col-6 wid-100 pl-0">
                <div class="card fst_card">
                    <div class="col-12 p-0">

                        <div id="basic-doughnut" style="height:350px;"></div>


                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card wid-100 pr-0">
                    <small>Venta emitida total</small>
                    <p>$3,821,133.25</p>
                </div>
                <div class="card wid-100">
                    <small>Venta pagada total</small>
                    <p>$3,821,133.25</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container_clasifiacion_llamadas">
        <div class="row m-0">
            <div class="col-6 pl-0">
                <div class="card fst_card mb-0">
                    <div class="col-12 p-0">
                        <div id="basic-doughnut2" style="height:350px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-6 pr-0">
                <div class="card scd_card mb-0">
                    <div class="wid-100">
                        <div class="big_ttl_">
                            <h1>Motivo de venta</h1>
                            <h1>24 / <span>18%</span></h1>
                        </div>
                        <p class="">Agenda llamada</p>
                        <div class="d-flex href_detalle">
                            <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span
                                class="ttl_number">10</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar magenta" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Acepta venta</p>
                        <div class="d-flex href_detalle">
                            <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span
                                class="ttl_number">10</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar magenta" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Agenda promesa de pago</p>
                        <div class="d-flex href_detalle">
                            <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span
                                class="ttl_number">10</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar magenta" role="progressbar" style="width: 50%" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Agenda llamada</p>
                        <div class="d-flex href_detalle">
                            <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span
                                class="ttl_number">10</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar magenta" role="progressbar" style="width: 75%" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Envía ficha de pago</p>
                        <div class="d-flex href_detalle">
                            <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span
                                class="ttl_number">10</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar magenta" role="progressbar" style="width: 100%" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <button id="btn_prueba" class="d-none">test</button> -->
    <div class="container_graficas_llamadas">
        <h1 class="ttl_llamadas">Llamadas ATC</h1>
        <div class="row m-0">

            <div class="col-3 pl-0">
                <div class="card atc_cards">
                    <h1>Asistencia Ubbitt</h1>
                    <p>22 / <span>25%</span></p>
                    <h4>Dudas de producto</h4>
                    <div class="d-flex">
                        <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span class="ttl_number">10</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar aqua" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4>Asesorías de producto</h4>
                    <div class="d-flex">
                        <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span class="ttl_number">10</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar aqua" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4>Enlace de producto</h4>
                    <div class="d-flex">
                        <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span class="ttl_number">10</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar aqua" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4>Enlace de coberturas</h4>
                    <div class="d-flex">
                        <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span class="ttl_number">10</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar aqua" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card atc_cards">
                    <h1>Otros productos</h1>
                    <p>12 / <span>10%</span></p>
                    <h4>Gastos médicos</h4>
                    <div class="d-flex">
                        <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span class="ttl_number">10</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar navy" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4>Vida</h4>
                    <div class="d-flex">
                        <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span class="ttl_number">10</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar navy" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4>Legalizados</h4>
                    <div class="d-flex">
                        <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span class="ttl_number">10</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar navy" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4>Plataformas</h4>
                    <div class="d-flex">
                        <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span class="ttl_number">10</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar navy" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4>Residénciales</h4>
                    <div class="d-flex">
                        <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span class="ttl_number">10</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar navy" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card atc_cards">
                    <h1>Atención clientes</h1>
                    <p>16 / <span>12%</span></p>
                    <h4>Reportar atención de asesor</h4>
                    <div class="d-flex">
                        <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span class="ttl_number">10</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar orange" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4>Revisión renovación póliza</h4>
                    <div class="d-flex">
                        <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span class="ttl_number">10</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar orange" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4>Cancelación de producto</h4>
                    <div class="d-flex">
                        <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span class="ttl_number">10</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar orange" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4>Checar fechas de vigencia</h4>
                    <div class="d-flex">
                        <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span class="ttl_number">10</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar orange" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-3 pr-0">
                <div class="card atc_cards">
                    <h1>Dudas de cobranza</h1>
                    <p>22 / <span>25%</span></p>
                    <h4>Seguimiento pago</h4>
                    <div class="d-flex">
                        <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span class="ttl_number">10</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar yellow" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4>Reembolsos</h4>
                    <div class="d-flex">
                        <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span class="ttl_number">10</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar yellow" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4>Aclaración pagos</h4>
                    <div class="d-flex">
                        <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span class="ttl_number">10</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar yellow" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4>Realizar pago</h4>
                    <div class="d-flex">
                        <span class="ttl_detalle href_bd_freemium">Ver detalle</span><span class="ttl_number">10</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar yellow" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>