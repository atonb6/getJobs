<article class="dashboard__enterprise__home mt-4">
    <?php include('components/breadcrumb.php') ?>
    <h1 class="dashboard__profile__title black">Título</h1>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-6">
            <div class="mt-4 mb-4 card dashboard__enterprise__home__card bg-green sameheight dashboard__enterprise__home__card--ofer">
                <div class="d-flex align-items-center dashboard__enterprise__home__card__body">
                    <div>
                        <h2 class="white">Ofertas publicadas</h2>
                        <h3 class="white">0</h3>
                    </div>
                </div>
                <div class="card dashboard__enterprise__home__card__footer">
                    <a class="d-flex align-items-center justify-content-center" href="dash-enterprise-published.php">Ver detalles<span class="ml-3 material-icons">
                            forward
                        </span></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6">
            <div class="mt-4 mb-4 card dashboard__enterprise__home__card bg-blue sameheight dashboard__enterprise__home__card--post">
                <div class="d-flex align-items-center dashboard__enterprise__home__card__body">
                    <div>
                        <h2 class="white">Postulaciones</h2>
                        <h3 class="white">0</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6">
            <div class="mt-4 mb-4 card dashboard__enterprise__home__card bg-darkgray sameheight dashboard__enterprise__home__card--vis">
                <div class="d-flex align-items-center dashboard__enterprise__home__card__body">
                    <div>
                        <h2 class="white">Visitas</h2>
                        <h3 class="white">0</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6">
            <div class="mt-4 mb-4 card dashboard__enterprise__home__card bg-red sameheight dashboard__enterprise__home__card--conex">
                <div class="d-flex align-items-center dashboard__enterprise__home__card__body">
                    <div>
                        <h2 class="white">Última conexión</h2>
                        <h3 class="white">0</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <a href="http://localhost/getJobs/dash-enterprise-publish-offer.php" class="btn btn--blue w-100">Publicar Oferta</a>
            <!--             <div class="dashboard__profile">
                <input type="url" class="w-100">
            </div> -->

        </div>
    </div>

    <form action="#">
        <div class="row mt-4">
            <div class="col-md-12">
                <h3>Modificar o agregar cuentas de Reclutadores</h3>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6 dashboard__enterprise__publish__offer">
                <label class="mt-2">uno@empresa.cl</label>
                <input class="w-100" type="email" id="email" name="email" placeholder="uno@empresa.cl">
                <label class="mt-2">dos@empresa.cl</label>
                <input class="w-100" type="email" id="email2" name="email" placeholder="dos@empresa.cl">
            </div>
            <div class="col-md-6 dashboard__enterprise__publish__offer">
                <label class="mt-2">tres@empresa.cl</label>
                <input class="w-100" type="email" id="email3" name="email" placeholder="tres@empresa.cl">
                <label class="mt-2">cuatro@empresa.cl</label>
                <input class="w-100" type="email" id="email4" name="email" placeholder="cuatro@empresa.cl">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-12 text-right">
                <button type="submit" class="btn btn--blue mt-3">Actualizar</button>
            </div>
        </div>
    </form>
    <?php include('components/banner.php'); ?>
</article>