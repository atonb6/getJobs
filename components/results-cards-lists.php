<section class="results-cards">
<?php include('components/breadcrumb-filter.php') ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <?php for ($i = 1; $i <= 16; $i++) : ?>
                        <div class="col-md-4">
                            <?php include('application-cards-lists.php') ?>   
                        </div>
                    <?php endfor ?>
                </div>
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