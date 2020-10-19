<?php include('components/breadcrumb.php'); ?>

<section class="groups">
    <div class="row">
        <div class="col-md-12">
            <h1 class="black dashboard__profile__title">Grupo Título</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7">
            <div class="mt-4 mb-4 card groups__card">

                <div class="d-flex align-items-center groups__card__header">
                    <img class="people-cards__img" src="https://placeimg.com/80/80" alt="persona">
                    <div class="ml-3">
                        <h4><strong>Empresa en la que trabaja</strong></h4>
                        <h3 class="mt-2 mb-2"><strong>Nombre</strong></h3>
                        <h4>1 semana</h4>
                    </div>

                </div>
                <div class="mt-3 groups__card__body">
                    <div>
                        <h3 class="text-center">Empresa productiva en etapa de expansión</h2>
                            <h2 class="text-center blue">Jefe de planta</h1>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h3><strong>Detalles</strong></h3>
                            <ul>
                                <li>Uno</li>
                                <li>Dos</li>
                                <li>Tres</li>
                            </ul>
                        </div>
                        <img class="w-50" src="https://placeimg.com/1200/1200" alt="logo trabajo">
                    </div>
                    <p class="text-center mt-3">Interesados enviar cv con espectativas de renta a test@usuarios.cl</p>
                </div>
                <div class="groups__card__footer">
                    <div>
                        <a href="dash-user-interest-single.php" class="btn btn--skinny btn--border-blue groups__card__footer__btn mr-3"><span class="material-icons icon">
                                thumb_up
                                <a href="dash-user-interest-single.php" class="btn btn--skinny btn--border-blue groups__card__footer__btn"><span class="material-icons icon">
                                        comment
                                    </span></a>
                    </div>
                    <div class="d-flex align-items-center groups__card__footer__btns">
                        <a href="#" data-toggle="modal" data-target="#modal-recomend" class="btn btn--skinny btn--green mr-lg-2">Recomendar</a>
                        <a href="#" data-toggle="modal" data-target="#modal-share" class="btn btn--skinny btn--green mr-lg-2">Compartir a:</a>
                        <a href="postulate.php" class="btn btn--skinny btn--green">Postular</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <?php include('components/people-cards.php') ?>
            <?php endfor ?>
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-lg-7">
            <div class="mt-4 mb-4 card groups__card groups__card--simple">

                <div class="d-flex align-items-center groups__card__header">
                    <img class="people-cards__img" src="https://placeimg.com/80/80" alt="persona">
                    <div class="ml-3">
                        <h4><strong>Empresa en la que trabaja</strong></h4>
                        <h3 class="mt-2 mb-2"><strong>Nombre</strong></h3>
                        <h4>1 semana</h4>
                    </div>

                </div>
                <div class="mt-3 groups__card__body">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto, numquam excepturi. Cum maiores ratione quod, unde illo culpa pariatur adipisci veniam iusto recusandae sint, blanditiis, quibusdam eligendi perspiciatis! Nulla, tempore.  Interesados enviar cv con espectativas de renta a test@usuarios.cl</p>
                </div>
                <div class="groups__card__footer">
                    <div>
                        <a href="dash-user-interest-single.php" class="btn btn--skinny btn--border-blue groups__card__footer__btn mr-3"><span class="material-icons icon">
                                thumb_up
                                <a href="dash-user-interest-single.php" class="btn btn--skinny btn--border-blue groups__card__footer__btn"><span class="material-icons icon">
                                        comment
                                    </span></a>
                    </div>
                    <div class="d-flex align-items-center groups__card__footer__btns">
                    <a href="#" data-toggle="modal" data-target="#modal-recomend" class="btn btn--skinny btn--green mr-lg-2">Recomendar</a>
                        <a href="#" data-toggle="modal" data-target="#modal-share" class="btn btn--skinny btn--green mr-lg-2">Compartir a:</a>
                        <a href="postulate.php" class="btn btn--skinny btn--green">Postular</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <?php include('components/people-cards.php') ?>
            <?php endfor ?>
        </div>

        <div class="gj-modal modal fade text-center" id="modal-recomend" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="mt-2">
                    <h2 class="white">Recomendar a </h2><br />
                    <input class="search__input mr-3 w-100" type="text" placeholder="Buscar contactos...">
                </div>
                <div class="modal-body">
                    <?php for ($i = 0; $i <= 10; $i++) : ?>
                        <a href="#"><?php include('components/people-cards-simple.php') ?></a>
                    <?php endfor; ?>
                </div>
                <div class="modal-footer mx-auto">
                    <button type="button" class="btn--skinny btn--green border-white" data-dismiss="modal">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="gj-modal modal fade text-center" id="modal-share" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="mt-2">
                    <h2 class="white">Compartir a </h2><br />
                    <input class="search__input mr-3 w-100" type="text" placeholder="Buscar contactos...">
                </div>
                <div class="modal-body">
                    <?php for ($i = 0; $i <= 10; $i++) : ?>
                        <a href="#"><?php include('components/people-cards-simple.php') ?></a>
                    <?php endfor; ?>
                </div>
                <div class="modal-footer mx-auto">
                    <button type="button" class="btn--skinny btn--green border-white" data-dismiss="modal">Enviar</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>