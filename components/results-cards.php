<section class="results-cards">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <?php include('application-cards.php') ?>
                <?php endfor ?>
            </div>
            <div class="col-md-5">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <?php include('application-cards.php') ?>
                <?php endfor ?>
            </div>
            <div class="col-md-2 mt-4">
                <a class="banner__vert" href="#">
                    <img src="http://placeimg.com/120/800" alt="banner">
                </a>
            </div>
        </div>

        <div class="d-block d-md-none">
            <?php include('components/banner.php'); ?>
        </div>

    </div>
</section>