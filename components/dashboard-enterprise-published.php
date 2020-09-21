
<article class="dashboard__enterprise__published mt-4">
<?php include('components/breadcrumb.php') ?>
    <h1 class="dashboard__profile__title black">Ofertas publicadas</h1>
    
    <div class="dashboard__enterprise__published__table">
        <div class="row">
            <div class="col-md-12">
                <!--Tabla con Datatable por si hay que cambiarla-->
                <!--  <table id="dashboard__enterprise__published__table">
                <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Row 1 Data 1</td>
                        <td>Row 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>Row 2 Data 1</td>
                        <td>Row 2 Data 2</td>
                    </tr>
                </tbody>
            </table> -->
                <div class="dashboard__enterprise__published__table__head bg-darkgray px-4 mt-3 mb-3 justify-content-between">
                    <h5>Ofertas Encontradas : 30</h5>
                    <a href="#" class="d-flex align-items-center ml-2"><span class="material-icons mr-2">
                            history
                        </span> Expirar</a>
                    <a href="#" class="d-flex align-items-center ml-2"><span class="material-icons mr-2">
                            done
                        </span> Activar</a>
                    <a href="#" class="d-flex align-items-center ml-2"><span class="material-icons mr-2">
                            delete
                        </span> Borrar</a>
                    <ul class="ml-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mostrar</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item d-flex align-items-center" href="#">Ofertas Activas <span class="material-icons ml-2 green">
                                        fiber_manual_record
                                    </span></a>
                                <a class="dropdown-item d-flex align-items-center" href="#">Ofertas Expiradas <span class="material-icons ml-2 red">
                                        fiber_manual_record
                                    </span></a>
                                <a class="dropdown-item d-flex align-items-center" href="#">Todas <span class="material-icons ml-2">
                                        fiber_manual_record
                                    </span></a>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard__enterprise__published__table__body">
                    <table id="dashboard__enterprise__published__table__tbl">
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="select_all" id="select_all" /><label for="select_all"></label></th>
                                <th>Estado</th>
                                <th>Título</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i=1; $i<=4; $i++): ?>
                            <tr>
                                <td><input type="checkbox" id="select<?php echo $i ?>" name="select" value="select"><label for="select<?php echo $i ?>"></label></td>
                                <td id="expired">Expirada</td>
                                <td>
                                    <h2>Título de Cargo</h2>
                                    <h4 class="d-flex align-items-center">2019-04-14 19:53:03 / Santiago | <span class="material-icons ml-1">
                                            date_range
                                        </span></h4>
                                    <h3 class="d-flex align-items-center"><strong>Vistas: </strong>1433 <span class="material-icons ml-1">
                                            visibility
                                        </span></h3>
                                    <h3 class="d-flex align-items-center"><strong>Postulantes: </strong>112<span class="material-icons ml-1">
                                            account_circle
                                        </span></h3>
                                </td>
                                <td>
                                    <a href="dash-enterprise-applicants.php" class="btn btn--blue">Ver Postulantes</a>
                                    <a href="dash-enterprise-detail-offer.php" class="btn btn--green">Ver Detalle</a>
                                    <a href="#" class="btn btn--yellow">Destacar Oferta</a>

                                </td>
                            </tr>
                            <?php endfor ?>

                            <?php for($i=5; $i<=10; $i++): ?>
                            <tr>
                                <td><input type="checkbox" id="select<?php echo $i ?>" name="select" value="select"><label for="select<?php echo $i ?>"></label></td>
                                <td id="actives">Activas</td>
                                <td>
                                    <h2>Título de Cargo</h2>
                                    <h4 class="d-flex align-items-center">2019-04-14 19:53:03 / Santiago | <span class="material-icons ml-1">
                                            date_range
                                        </span></h4>
                                    <h3 class="d-flex align-items-center"><strong>Vistas: </strong>1433 <span class="material-icons ml-1">
                                            visibility
                                        </span></h3>
                                    <h3 class="d-flex align-items-center"><strong>Postulantes: </strong>112<span class="material-icons ml-1">
                                            account_circle
                                        </span></h3>
                                </td>
                                <td>
                                    <a href="dash-enterprise-applicants.php" class="btn btn--blue">Ver Postulantes</a>
                                    <a href="dash-enterprise-detail-offer.php" class="btn btn--green">Ver Detalle</a>
                                    <a id="featureoffer" href="#" class="btn btn--yellow">Destacar Oferta</a>

                                </td>
                            </tr>
                            <?php endfor ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include('components/banner.php'); ?>
</article>