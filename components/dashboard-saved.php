<article>
    <?php include('components/breadcrumb.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <h1 class="black dashboard__profile__title">Avisos Guardados</h1>
        </div>
    </div>


    <div class="row">
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <div class="col-md-6">
                <?php include('components/application-cards-dashboard-saved.php') ?>
            </div>
        <?php endfor ?>
    </div>
    <?php include('components/banner.php'); ?>
</article>