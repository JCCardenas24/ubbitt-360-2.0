
<div class="d-flex justify-content-end mb-20">
  <div class="input-group input_group_search mr-5">
    <input type="text" class="form-control" placeholder="Buscar">
    <div class="input-group-append">
      <button class="btn btn-secondary" type="button">
        <i class="fa fa-search"></i>
      </button>
    </div>
  </div>
  <div id="reportrange_clientes" class="range-pick range_dates_width mr-5">
    <i class="fa fa-calendar"></i>
    <span>octubre 2, 2021 - octubre 6, 2021</span>
    <i class="fa fa-caret-down"></i>
  </div>
  <a href="./assets/reportes/dummy_file.pdf" class="pdf_button mr-5" download><i class="icon-download_pdf c-gray"
            aria-hidden="true"></i></a>
  <a href="./assets/reportes/prueba.xlsx" class="pdf_button" download><i class="icon-download_xls c-gray"
      aria-hidden="true"></i></a>

</div>
<br>

<div class="row ml-0 mr-0">
  <divl class="col-4">
    <div class="card socios_data_card orange_bg">
      <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
        title="Número de socios activos">
        <i class="ri-information-fill"></i>
      </a>
      <div class="col-6">
        <p>Socios activos</p>
      </div>
      <div class="col-6">
        <h1>50</h1>
      </div>
    </div>
  </divl>
  <divl class="col-4">
    <div class="card socios_data_card dark_yellowbg">
      <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
        title="Monto del ticket promedio">
        <i class="ri-information-fill"></i>
      </a>
      <div class="col-6">
        <p>Monto de cobro promedio</p>
      </div>
      <div class="col-6">
        <h1>$800</h1>
      </div>
    </div>
  </divl>
  <divl class="col-4">
    <div class="card socios_data_card sky_blue_bg">
      <a type="button" class="tooltip_btn" data-toggle="tooltip" data-placement="left" data-html="true"
        title="<b>Promedio %</b> <br> Número de cobros totales / <br> Número de registros entregados">
        <i class="ri-information-fill"></i>
      </a>
      <div class="col-6">
        <p>Conversión promedio</p>
      </div>
      <div class="col-6">
        <h1>27%</h1>
      </div>
    </div>
  </divl>
</div>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Speaking time</th>
      <th scope="col">Tiempo promedio llamada</th>
      <th scope="col">Turno/Horario</th>
      <th scope="col">Permisos</th>
      <th scope="col">Teamleader</th>
      <th scope="col">Calificación Ubbitt</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Juan Pérez</th>
      <td>08:00:00 min</td>
      <td>00:25:00 min</td>
      <td>Matutino/8:15 hrs</td>
      <td>Asesor</td>
      <td>Nombre teamleader</td>
      <td>8.5</td>
    </tr>
    <tr>
      <th scope="row">Juan Pérez</th>
      <td>08:00:00 min</td>
      <td>00:25:00 min</td>
      <td>Matutino/8:15 hrs</td>
      <td>Asesor</td>
      <td>Nombre teamleader</td>
      <td>8.5</td>
    </tr>
    <tr>
      <th scope="row">Juan Pérez</th>
      <td>08:00:00 min</td>
      <td>00:25:00 min</td>
      <td>Matutino/8:15 hrs</td>
      <td>Asesor</td>
      <td>Nombre teamleader</td>
      <td>8.5</td>
    </tr>
  </tbody>
</table>

<div class="d-flex footer_table">
  <small>Mostrando 1 al 10 de 12 registros</small>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
      </li>
      <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li> -->
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item active" aria-current="page">
        <span class="page-link">2</span>
      </li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
      <li class="page-item disabled">
        <a class="page-link " href="#">Siguiente</a>
      </li>
    </ul>
  </nav>
</div>

<div class="card chart_productividad" id="chart_productividad" style="height: 415px;"></div>

<div class="card chart_productividad_llamadas" id="chart_productividad_llamadas" style="height: 415px;"></div>
  <!--modal preloader -->
  <?php include_once('./modal-preload.php') ?>
