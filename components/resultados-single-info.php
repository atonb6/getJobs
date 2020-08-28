<section class="resultados__info">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <hr>
                <?php for ($i = 1; $i <= 3; $i++) : ?>
                    <div class="resultados__info__block">
                        <h2 class="mt-4">Título bloque <?php echo $i ?></h2>
                        <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.

                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                    </div>
                <?php endfor ?>

                <div class="resultados__info__block">
                    <h2 class="mt-4">Título bloque <?php echo $i ?></h2>
                    <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.

                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>

                    <ul>
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <li class="ml-3">Nemo enim ipsam voluptatem Quia voluptas sit aspernatur aut odit aut fugit.</li>
                        <?php endfor ?>
                    </ul>
                </div>

                <div class="text-center mt-5">
                                    <a href="#" class="btn btn--blue">
                    Postular a este empleo
                </a>
                </div>


            </div>
            <div class="col-md-4">
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <div class="mt-4 mb-4 personas-cards d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <img class="personas-cards__img" src="http://placeimg.com/80/80" alt="persona">
                            <div class="ml-3">
                                <h4><strong>Empresa en la que trabaja</strong></h4>
                                <h3 class="mt-2 mb-2"><strong>Título de cargo</strong></h3>
                                <h4>Ciudad - Modalidad</h4>
                            </div>
                        </div>
                        <div>
                            <img class="ml-4 personas-cards__up" src="http://placeimg.com/50/50" alt="up">
                        </div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </div>
</section>