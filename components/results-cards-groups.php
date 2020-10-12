<section class="results-cards">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <?php for ($i = 1; $i <= 16; $i++) : ?>
                        <div class="col-lg-6 col-xl-4">

                            <?php include('application-cards-groups.php') ?>

                        </div>
                    <?php endfor ?>
                </div>
            </div>

            <div class="col-md-2 mt-4">
                <a class="banner__vert" href="#">
                    <img src="https://placeimg.com/120/800" alt="banner">
                </a>
            </div>
        </div>


        <div class="d-block d-md-none">
            <?php include('components/banner.php'); ?>
        </div>
    </div>
</section>