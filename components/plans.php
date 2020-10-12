<section class="plans">
    <div class="container">
        <div class="row">
            <?php for ($i = 1; $i <= 3; $i++) : ?>
                <div class="col-lg-4 mt-5 mb-5 ">
                    <div class="card plans__card">
                        <div class="plans__card__header text-center">
                            <div class="plans__card__header__circle mx-auto position-relative">
                                <h4 class="position-absolute">$50.000</h4>
                            </div>
                            <h3 class="plans__card__header__pay">Pago mensual</h3>
                        </div>
                        <div class="plans__card__body">
                            <h2 class="text-center">Plan <?php echo $i ?></h2>
                            <hr>
                            <ul>
                                <li>Nemo enim ipsam voluptatem.</li>
                                <li>Quia voluptas sit aspernatur aut odit aut fugit.</li>
                                <li>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</li>
                                <li>Neque porro quisquam est.</li>
                            </ul>
                        </div>
                        <div class="plans__card__footer">
                            <a href="#" class="btn btn--green btn--skinny w-100">Contratar Plan</a>
                        </div>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </div>
</section>