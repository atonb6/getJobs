<article>
    <?php include('components/breadcrumb.php'); ?>
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

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <img class="search-cards__img" src="http://placeimg.com/80/80" alt="logo trabajo">
                            <div class="ml-3">
                                <h4><strong>Nombre empresa</strong></h4>
                                <h3 class="mt-2 mb-2"><strong>Título de cargo</strong></h3>
                                <h4>Ciudad - Modalidad</h4>
                            </div>
                        </div>
                        <div>
                            <div class="search-cards__date text-right">
                            <span class="transit">Menos de un mes
                                </span>
                                <span>-
                                </span>
                                <span>10/07/2020
                                </span>
                            </div>
                            <div class="search-cards__icons mt-2 mb-2 text-right">
                                <span class="material-icons icons-work">
                                    computer
                                </span>
                                <span class="material-icons icons-work">
                                    pets
                                </span>
                                <span class="material-icons icons-work">
                                    directions_bike
                                </span>
                                <span class="material-icons icons-work">
                                    wifi
                                </span>
                                <span class="material-icons icons-work">
                                    fastfood
                                </span>
                                <span class="material-icons icons-work">
                                    work_outline
                                </span>
                            </div>
                            <div class="search-cards__money text-right">
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

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <img class="search-cards__img" src="http://placeimg.com/80/80" alt="logo trabajo">
                            <div class="ml-3">
                                <h4><strong>Nombre empresa</strong></h4>
                                <h3 class="mt-2 mb-2"><strong>Título de cargo</strong></h3>
                                <h4>Ciudad - Modalidad</h4>
                            </div>
                        </div>
                        <div>
                            <div class="search-cards__date text-right">
                                <span class="end">Mas de un mes
                                </span>
                                <span>-
                                </span>
                                <span>10/07/2020
                                </span>
                            </div>
                            <div class="search-cards__icons mt-2 mb-2 text-right">
                                <span class="material-icons icons-work">
                                    computer
                                </span>
                                <span class="material-icons icons-work">
                                    pets
                                </span>
                                <span class="material-icons icons-work">
                                    directions_bike
                                </span>
                                <span class="material-icons icons-work">
                                    wifi
                                </span>
                                <span class="material-icons icons-work">
                                    fastfood
                                </span>
                                <span class="material-icons icons-work">
                                    work_outline
                                </span>
                            </div>
                            <div class="search-cards__money text-right">
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