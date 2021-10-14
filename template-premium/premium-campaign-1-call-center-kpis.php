<div class="d-flex wid-100 justify-content-end">
    <div class="col-4 d-flex justify-content-between">
        <div class="form-group wid-100 d-flex m-0">
            <div id="reportrange_clientes" class="range-pick">
                <i class="fa fa-calendar"></i>&nbsp;
                <span>agosto 30, 2021 - septiembre 3, 2021</span>&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
            </div>
        </div>
    </div>
    <a href="./assets/reportes/dummy_file.pdf" class="pdf_button mr-5" download><i class="icon-download_pdf c-gray"
            aria-hidden="true"></i></a>
    <a href="./assets/reportes/prueba.xlsx" class="pdf_button" download><i class="icon-download_xls c-gray"
            aria-hidden="true"></i></a>

</div>
<br>
<div class="container_kpis_cards">
    <div class="fst_row row m-0">
        <div class="col-3">
            <div class="card">
                <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                    title="Número de llamadas ofrecidas/Number of calls offered. Es el número de llamadas entrantes al DID asignado para campaña ">
                    <i class="ri-information-fill"></i>
                </a>
                <div class="row m-0 he-100 info_t1">
                    <div class="col-6 p-0">
                        <div class="text-left he-100 wid-100">
                            <p class="m-0">Número de
                                llamadas
                                entrantes</p>
                        </div>
                    </div>
                    <div class="col-6 p-0 number_calls">
                        <p class="m-0">5280</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card green">
                <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                    title="Número de llamadas manejadas/Number of calls handled. Es el número de llamadas entrantes al DID asignado contestadas ">
                    <i class="ri-information-fill"></i>
                </a>
                <div class="row m-0 he-100 info_t1">
                    <div class="col-6 p-0">
                        <div class="text-left he-100 wid-100">
                            <p class="m-0">Número de
                                llamadas
                                contestadas</p>
                        </div>
                    </div>
                    <div class="col-6 p-0 number_calls">
                        <p class="m-0">2646</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card gray">
                <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                    title="Es el número de llamadas salientes del DID asignado ">
                    <i class="ri-information-fill"></i>
                </a>
                <div class="row m-0 he-100 info_t1">
                    <div class="col-6 p-0">
                        <div class="text-left he-100 wid-100">
                            <p class="m-0">Número de
                                llamadas
                                salientes</p>
                        </div>
                    </div>
                    <div class="col-6 p-0 number_calls">
                        <p class="m-0">2500</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card dark-orange">
                <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                    title="Es el número de llamadas entrantes al DID asignado que no fueron contestadas ">
                    <i class="ri-information-fill"></i>
                </a>
                <div class="row m-0 he-100 info_t1">
                    <div class="col-6 p-0">
                        <div class="text-left he-100 wid-100">
                            <p class="m-0">Número de
                                llamadas
                                perdidas</p>
                        </div>
                    </div>
                    <div class="col-6 p-0 number_calls">
                        <p class="m-0">78</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scd_row row m-0">
        <div class="col ">
            <div class="card info_t2">
                <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                    title="Nivel de servicio: Es el número de llamadas contestadas antes de 25 segundos. ">
                    <i class="ri-information-fill"></i>
                </a>
                <p class="m-0 big_ttl">NSL</p>
                <p class="m-0 sub_ttl">Atendidos antes de 25 <br> segundos</p>
                <span>208</span>
            </div>
        </div>
        <div class="col">
            <div class="card info_t2">
                <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                    title="Porcentaje de Nivel de servicio: Es el número de llamadas contestadas antes de 25 segundos / el número de llamadas entrantes ">
                    <i class="ri-information-fill"></i>
                </a>
                <p class="m-0 big_ttl">NSL</p>
                <p class="m-0 sub_ttl">(NSL/NCO)</p>
                <span>89%</span>
            </div>
        </div>
        <div class="col">
            <div class="card info_t2">
                <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                    title="Abandono, total de llamadas que no se contestaron">
                    <i class="ri-information-fill"></i>
                </a>
                <p class="m-0 big_ttl">ABA</p>
                <p class="m-0 sub_ttl">Abandonados antes de 5 segundos</p>
                <span>208</span>
            </div>
        </div>
        <div class="col">
            <div class="card info_t2">
                <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                    title="Abandono, total de llamadas que no se contestaron / el número de llamadas entrantes">
                    <i class="ri-information-fill"></i>
                </a>
                <p class="m-0 big_ttl">% abandono</p>
                <p class="m-0 sub_ttl">(Colgado)</p>
                <span>15%</span>
            </div>
        </div>
        <div class="col">
            <div class="card info_t2">
                <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                    title="Average handle time (AHT) Tiempo promedio en llamada ">
                    <i class="ri-information-fill"></i>
                </a>
                <p class="m-0 big_ttl">ATH</p>
                <p class="m-0 sub_ttl">Tiempo promedio en llamada</p>
                <span>5.3 min</span>
            </div>
        </div>
    </div>
    <div class="thrt_row row m-0">
        <div class="d-flex wid-100">
            <div class="col-4 mb-0">
                <div class="card">
                    <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                        title="Average Speed of Answer o tiempo promedio de espera">
                        <i class="ri-information-fill"></i>
                    </a>
                    <p>Tiempo promedio
                        en contestar la
                        llamada</p>
                    <h5>12.32 seg</h5>
                </div>
            </div>
            <div class="col-4 mb-0">
                <div class="card">
                    <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
                        title="Tiempo promedio productivo">
                        <i class="ri-information-fill"></i>
                    </a>
                    <p>Speaking time</p>
                    <h5>11.42 hr</h5>
                </div>
            </div>
            <div class="col-4 mb-0">
                <div class="card">
                    <p>Calificación de calidad Ubbitt</p>
                    <h5>81.50 %</h5>
                </div>
            </div>
        </div>
    </div>
</div>