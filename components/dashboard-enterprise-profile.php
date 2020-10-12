<article>
    <?php include('components/breadcrumb.php'); ?>

    <section class="profile-home position-relative">
        <div class="row">
            <div class="col-md-12">
                <picture class="profile-home__bg">
                    <img src="https://placeimg.com/1040/630" alt="Foto de fondo Perfil">
                    <a class="btn btn--skinny btn--green" href="dash-enterprise-profileedit.php">Editar</a>
                </picture>
            </div>
        </div>

        <div class="row mt-2 align-items-center profile-home__information">
            <div class="col-md-6">
                <picture class="profile-home__img">
                    <img src="https://placeimg.com/800/800" alt="Logo">
                </picture>

                <h1 class="profile-home__title">Nombre Empresa</h1>
                <h2 class="profile-home__work"><a href="www.google.cl">Sitio Web</a></h2>
                <h3 class="profile-home__country">País</h3>
                <h3 class="profile-home__country">Ciudad</h3>
                <h3 class="profile-home__country">Rubro</h3>
            </div>
        </div>
        <div class="row align-items-center profile-home__information">
            <div class="col-md-12">
                <h2 class="profile-home__work">Información</h2>
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat autem quod dolorem tenetur adipisci corporis natus sit aspernatur! Veniam culpa consequatur, minus similique corrupti molestiae sunt magni laborum labore aliquam.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3 class="profile-home__work">Ofertas abiertas</h3>
            </div>
        </div>

        <div class="row">
            <?php for ($i = 1; $i <= 2; $i++) : ?>
                <div class="col-md-6">
                    <?php include('components/application-cards-dashboard-fyu.php') ?>
                </div>
            <?php endfor ?>
        </div>
    </section>

    <?php include('components/banner.php'); ?>
</article>