<?php include('layout/head.php'); ?>
<?php include('layout/header.php'); ?>

<section class="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-md-2 dashboard__menu">
                <div class="offset-down">
                    <ul class="dashboard__menu__list">
                        <li class="dashboard__menu__list__item py-3"><a href=#>Trabajos para ti</a></li>
                        <li class="dashboard__menu__list__item py-3 current"><a href=#>Postulaciones (4)</a></li>
                        <li class="dashboard__menu__list__item py-3"><a href=#>Perfil profesional</a></li>
                        <li class="dashboard__menu__list__item py-3"><a href=#>GJ Express</a></li>
                        <li class="dashboard__menu__list__item py-3"><a href=#>Inbox</a></li>
                        <li class="dashboard__menu__list__item py-3"><a href=#>Contactos</a></li>
                        <li class="dashboard__menu__list__item py-3"><a href=#>Cerrar sesión</a></li>
                </div>
            </div>
            <div class="col-md-10">
                <?php include('components/breadcrumb-filter.php'); ?>
                <div class="row">
                    <?php for ($i = 1; $i <= 10; $i++) : ?>
                        <div class="col-md-6">
                            <?php include('components/postular-cards-dashboard.php') ?>
                        </div>
                    <?php endfor ?>
                </div>


            </div>
        </div>
    </div>
</section>


<?php include('layout/footer.php'); ?>