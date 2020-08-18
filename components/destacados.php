<section class="destacados">
    <div class="container">
        <div class="row mt-5 mb-4">
            <div class="col-md-12">
                <h2>Empleos destacados</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <?php include('busquedas-cards.php') ?>
                <?php endfor ?>
            </div>
            <div class="col-md-6">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <?php include('busquedas-cards.php') ?>
                <?php endfor ?>
            </div>
        </div>
    </div>
</section>