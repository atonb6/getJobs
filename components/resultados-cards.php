<section class="resultados-cards">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <?php include('postular-cards.php') ?>
                <?php endfor ?>
            </div>
            <div class="col-md-5">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <?php include('postular-cards.php') ?>
                <?php endfor ?>
            </div>
            <div class="col-md-2">
                <a href="#">
                    <img src="http://placeimg.com/120/800" alt="banner">
                </a>
            </div>
        </div>
    </div>
</section>