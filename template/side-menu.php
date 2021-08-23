<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-profile px-20 py-15">
            <div class="d-flex align-items-center">
                <div class="image d-flex justify-content-center align-items-center">
                    <span id="letterSpace" class="font-size-30 font-weight-700 c-sky"></span>
                </div>
                <div class="info">
                    <span class="px-20 font-size-14 font-weight-900 c-white">Ubbitt - Admin</span><br>
                    <span class="px-20 font-size-12 c-white">Administrador</span>
                </div>
            </div>
        </div>
        <!-- <ul class="sidebar-menu" data-widget="">
            <li>
                <a href="clientes.php">
                    <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                    <span>Histórico de llamadas</span>
                </a>
            </li>
            <li>
                <a href="reporte-calidad.php">
                    <i span class="icon-Clipboard-list"><span class="path1"></span><span class="path2"></span></i>
                    <span>Reporte de calidad</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon-Clipboard-list"><span class="path1"></span><span class="path2"></span></i>
                    <span>Informes</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu col-md-6 mx-auto">
                    <a href="informes.php" class="ref-menu">
                        <li>Panel producción cobranza</li>
                    </a>
                    <a href="panel-in.php" class="ref-menu">
                        <li>Panel producción IN</li>
                    </a>
                    <a href="kpis-telefonia.php" class="ref-menu">
                        <li>KPI's Telefonía</li>
                    </a>
                </ul>
            </li>
            <li>
                <a href="carga-base.php">
                    <i class="fa fa-upload" aria-hidden="true"></i>
                    <span>Carga de base de datos</span>
                </a>
            </li>
            <li>
                <a href="carga-reporte.php">
                    <i class="fa fa-upload" aria-hidden="true"></i>
                    <span>Carga de reporte</span>
                </a>
            </li>
        </ul> -->
        <div class="menu-sidebar">
            <div id="accordion">
                <div class="views_menu_option">
                    <div class="" id="headingOne">
                        <h5 class="mb-0">
                            <a class="header_ttl" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                <span>
                                    <i class="ri-pie-chart-fill"></i>
                                    Ubbitt Freemium
                                </span>
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <li class="sub_ttl"><a href="dashboard-freemium.php">Inbound</a></li>
                        <ul>
                            <li><span>Resumen</span></li>
                            <li><span>Call Center</span></li>
                            <li><span>Reportes</span></li>
                        </ul>
                    </div>
                </div>
                <div class="views_menu_option">
                    <div class="" id="headingOne">
                        <h5 class="mb-0">
                            <a class="header_ttl collapsed" data-toggle="collapse" data-target="#collapse_premium"
                                aria-expanded="false" aria-controls="collapse_premium">
                                <span><i class="ri-pie-chart-fill"></i>
                                    Ubbitt Premium</span>
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                        </h5>
                    </div>

                    <div id="collapse_premium" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <!-- <li class="sub_ttl">Inbound</li>
                        <ul>
                            <li><span>Resumen</span></li>
                            <li><span>Call Center</span></li>
                            <li><span>Reportes</span></li>
                        </ul> -->
                    </div>
                </div>
                <div class="views_menu_option">
                    <div class="" id="headingTwo">
                        <h5 class="mb-0">
                            <a class="header_ttl collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                <span>
                                    <i class="ri-pie-chart-fill"></i>
                                    Ubbitt Beyond
                                </span>
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <li class="sub_ttl"><a href="dashboard-beyond-cobranza.php">Cobranza</a></li>
                        <ul>
                            <li><span>Resumen</span></li>
                            <li><span>Call Center</span></li>
                            <li><span>Reportes</span></li>
                            <li><span>Carga de base de datos</span></li>
                        </ul>
                        <li class="sub_ttl"><a href="dashboard-beyond-renovacion.php">Renovación</a></li>
                        <ul>
                            <li><span>Resumen</span></li>
                            <li><span>Call Center</span></li>
                            <li><span>Reportes</span></li>
                            <li><span>Carga de base de datos</span></li>
                        </ul>
                    </div>
                </div>
                <div class="views_menu_option">
                    <div class="" id="headingThree">
                        <h5 class="mb-0">
                            <a class="header_ttl collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                <span>
                                    <i class="ri-user-3-fill"></i>
                                    Cuenta
                                </span>
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <ul class="mt-3">
                            <li class="cuenta"><span><a href="perfil.php">Mis datos</a></span></li>
                            <li class="cuenta"><span><a href="index.php?close_session">Cerrar sesión</a></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="icons_collapsed">
            <i class="ri-pie-chart-fill"></i>
            <i class="ri-pie-chart-fill"></i>
            <i class="ri-pie-chart-fill"></i>
            <i class="ri-user-3-fill"></i>
        </div>

    </section>
</aside>