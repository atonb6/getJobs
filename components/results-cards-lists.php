<section class="results-cards">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <?php for ($i = 1; $i <= 16; $i++) : ?>
                        <div class="col-md-6">

                            <?php include('application-cards-lists.php') ?>

                        </div>
                    <?php endfor ?>
                </div>
            </div>

            <div class="col-md-2">
                <a href="#">
                    <img src="http://placeimg.com/120/800" alt="banner">
                </a>
            </div>
        </div>
    </div>
</section>