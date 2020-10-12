<article>
    <?php include('components/breadcrumb.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <h1 class="black dashboard__profile__title">Postulaciones</h1>
        </div>
    </div>


    <div class="row">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <div class="col-md-6">
                <?php include('components/application-cards-dashboard.php') ?>
            </div>
        <?php endfor ?>





        <!--ejemplo otros tipos -->

        <?php for ($i = 1; $i <= 2; $i++) : ?>
            <div class="col-md-6">
                <a href="#" class="mt-4 mb-4 search-cards">

                    <div class="d-lg-flex justify-content-between align-items-center">
                        <div class="col-lg-6 col-12 px-lg-0 d-flex align-items-center">
                            <img class="search-cards__img" src="https://placeimg.com/80/80" alt="logo trabajo">
                            <div class="ml-3">
                                <h4><strong>Nombre empresa</strong></h4>
                                <h3 class="mt-2 mb-2"><strong>Título de cargo</strong></h3>
                                <h4>Ciudad - Modalidad</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 px-lg-0">
                            <div class="search-cards__date text-lg-right">
                                <span class="transit">Menos de un mes
                                </span>
                                <span>-
                                </span>
                                <span>10/07/2020
                                </span>
                            </div>
                            <div class="search-cards__icons mt-2 mb-2 text-lg-right">
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="La empresa entrega equipo de trabajo">
                                    computer
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Se puede ir con mascotas">
                                    pets
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Estacionamiento de bicicletas">
                                    directions_bike
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Wifi de alta velocidad y libre">
                                    wifi
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Snacks y café grátis">
                                    fastfood
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Trabajo remoto opcional">
                                    work_outline
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Trabajo 100% remoto">
                                    public
                                </span>
                                <span class="material-icons icon-Uniforme font-20" data-toggle="tooltip" data-placement="top" title="Se exige uniforme"></span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Casino">
                                    local_dining
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Mutual de Seguridad">
                                    local_hospital
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Seguro de Salud">
                                    healing
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Bus de acercamiento">
                                    directions_bus
                                </span>
                                <span class="material-icons icon-SeguroVida font-20" data-toggle="tooltip" data-placement="top" title="Seguro de vida"></span>
                                <span class="material-icons icon-Vestimenta font-20" data-toggle="tooltip" data-placement="top" title="Vestimenta informal"></span>
                                <span class="material-icons icon-CajaCompensacion font-20" data-toggle="tooltip" data-placement="top" title="Caja de Compensación"></span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Vacaciones extra">
                                    beach_access
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Horario Flexible">
                                    watch
                                </span>
                                <span class="material-icons icon-Dentista font-20" data-toggle="tooltip" data-placement="top" title="Seguro dental"></span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Día libre por tu cumpleaños">
                                    cake
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Días administrativos">
                                    event
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Capacitaciones">
                                    school
                                </span>
                            </div>

                            <div class="search-cards__money text-lg-right">
                                <span>$1.000.000
                                </span>
                                <span>-
                                </span>
                                <span>$1.200.000
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex justify-content-end mt-2">
                        <div class="search-cards__date text-right">
                            <span class="transit">Reclutando
                            </span>
                        </div>
                    </div>

                </a>
            </div>

            <div class="col-md-6">
                <a href="#" class="mt-4 mb-4 search-cards">

                    <div class="d-lg-flex justify-content-between align-items-center">
                        <div class="col-lg-6 col-12 px-lg-0 d-flex align-items-center">
                            <img class="search-cards__img" src="https://placeimg.com/80/80" alt="logo trabajo">
                            <div class="ml-3">
                                <h4><strong>Nombre empresa</strong></h4>
                                <h3 class="mt-2 mb-2"><strong>Título de cargo</strong></h3>
                                <h4>Ciudad - Modalidad</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 px-lg-0">
                            <div class="search-cards__date text-lg-right">
                                <span class="end">Mas de un mes
                                </span>
                                <span>-
                                </span>
                                <span>10/07/2020
                                </span>
                            </div>
                            <div class="search-cards__icons mt-2 mb-2 text-lg-right">
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="La empresa entrega equipo de trabajo">
                                    computer
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Se puede ir con mascotas">
                                    pets
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Estacionamiento de bicicletas">
                                    directions_bike
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Wifi de alta velocidad y libre">
                                    wifi
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Snacks y café grátis">
                                    fastfood
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Trabajo remoto opcional">
                                    work_outline
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Trabajo 100% remoto">
                                    public
                                </span>
                                <span class="material-icons icon-Uniforme font-20" data-toggle="tooltip" data-placement="top" title="Se exige uniforme"></span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Casino">
                                    local_dining
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Mutual de Seguridad">
                                    local_hospital
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Seguro de Salud">
                                    healing
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Bus de acercamiento">
                                    directions_bus
                                </span>
                                <span class="material-icons icon-SeguroVida font-20" data-toggle="tooltip" data-placement="top" title="Seguro de vida"></span>
                                <span class="material-icons icon-Vestimenta font-20" data-toggle="tooltip" data-placement="top" title="Vestimenta informal"></span>
                                <span class="material-icons icon-CajaCompensacion font-20" data-toggle="tooltip" data-placement="top" title="Caja de Compensación"></span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Vacaciones extra">
                                    beach_access
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Horario Flexible">
                                    watch
                                </span>
                                <span class="material-icons icon-Dentista font-20" data-toggle="tooltip" data-placement="top" title="Seguro dental"></span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Día libre por tu cumpleaños">
                                    cake
                                </span>
                                <span class="material-icons font-20" data-toggle="tooltip" data-placement="top" title="Estacionamiento">
                    directions_car
                </span>
                            </div>
                            <div class="search-cards__money text-lg-right">
                                <span>$1.000.000
                                </span>
                                <span>-
                                </span>
                                <span>$1.200.000
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex justify-content-end mt-2">
                        <div class="search-cards__date text-right">
                            <span class="end">Proceso Finalizado
                            </span>
                        </div>
                    </div>

                </a>
            </div>
        <?php endfor ?>
        <!--ejemplo otros tipos -->

    </div>
    <?php include('components/banner.php'); ?>
</article>