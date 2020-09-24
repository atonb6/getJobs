<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="results__card card">
                    <div class="d-flex">
                        <figure>
                            <img class="results__card__img" src="https://via.placeholder.com/80/80" alt="logo-empresa">
                        </figure>

                        <div class="ml-4">
                            <h3>Nombre empresa</h3>
                            <h1 class="results__card__title">Gerente de operaciones</h1>
                            <a href="#" class="results__card__save d-flex align-items-center"><span class="material-icons mr-2">
                                    star
                                </span>Guardar</a>
                            <p>Publicado: 13 de julio de 2020</p>

                            <h2 class="results__card__city">Ciudad - Modalidad</h2>
                            <p>Sueldo ofrecido: $1.000.000 - $1.200.000</p>

                            <div class="d-flex justify-content-end mt-2">
                                <div class="search-cards__date text-right">
                                    <a href="postulate.php" class="btn btn--skinny btn--blue mr-2">Postular</a>
                                    <a href="#" data-toggle="modal" data-target="#modal" class="btn btn--skinny btn--green"><img class="gjexpress__icon mr-2" src="./dist/img/gjexpress.svg" alt="Get Jobs Express">GF Express</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="text-right small">Denunciar oferta de empleo</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-column">
                    <a href="#" data-toggle="modal" data-target="#modal-recomend" class="btn btn--green mt-4 w-50 d-flex align-items-center"><span class="material-icons mr-2">
                            send
                        </span>Recomendar</a>
                    <a href="#" class="btn btn--green mt-2 w-50 d-flex align-items-center"><span class="material-icons mr-2">
                            reply
                        </span>Compartir a</a>
                    <div>

                        <div class="branch no-animation">
                            <div class="node" id="facebook">
                                <div class="fa fa-facebook share-alt-icon"></div>
                            </div>
                            <div class="stem"></div>
                        </div>
                        <div class="branch no-animation">
                            <div class="node" id="linkedin">
                                <div class="fa fa-linkedin share-alt-icon"></div>
                            </div>
                            <div class="stem"></div>
                        </div>
                        <!--                <div class="branch no-animation">
                            <div class="node" id="google-plus">
                                <div class="fa fa-google-plus share-alt-icon"></div>
                            </div>
                            <div class="stem"></div>
                        </div> -->
                        <div class="branch no-animation">
                            <div class="node" id="whatsapp">
                                <div class="fa fa-whatsapp share-alt-icon"></div>
                            </div>
                            <div class="stem"></div>
                        </div>
                        <div class="branch no-animation">
                            <div class="node" id="twitter">
                                <div class="fa fa-twitter share-alt-icon"></div>
                            </div>
                            <div class="stem"></div>
                        </div>

                        <div class="btn btn--green mt-2 w-50 d-flex align-items-center share-alt">
                            <span class="material-icons mr-2">
                                share
                            </span>Compartir en</div>

                    </div>

                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gj-modal modal fade text-center" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header mx-auto">
                    <img class="modal-header__icon" src="./dist/img/gjexpress.svg" alt="Get Jobs Express">
                </div>
                <div class="modal-body">
                    <p>
                        Has postulado con éxito a este empleo. Los datos de tu perfil han sido enviados a la empresa.
                    </p>
                </div>
                <div class="modal-footer mx-auto">
                    <button type="button" class="btn--skinny btn--green border-white" data-dismiss="modal">Entendido</button>
                </div>
            </div>
        </div>
    </div>

    <div class="gj-modal modal fade text-center" id="modal-recomend" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="mt-2">
                   <h2 class="white">Recomendar a </h2><br/>
                   <input class="search__input mr-3 w-100" type="text" placeholder="Buscar contactos...">
                </div>
                <div class="modal-body">
                    <?php for($i=0;$i<=10;$i++): ?>
                    <a href="#"><?php include('components/people-cards.php') ?></a>
                    <?php endfor; ?>
                </div>
                <div class="modal-footer mx-auto">
                    <button type="button" class="btn--skinny btn--green border-white" data-dismiss="modal">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</section>