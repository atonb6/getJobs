<article>
    <?php include('components/breadcrumb.php'); ?>

    <section class="profile-home position-relative">
        <div class="row">
            <div class="col-md-12">
                <picture class="profile-home__bg">
                    <img src="https://placeimg.com/1040/630" alt="Foto de fondo Perfil">
                    <a class="btn btn--skinny btn--green" href="dash-user-profile.php">Editar</a>
                </picture>
            </div>
        </div>

        <div class="row mt-5 align-items-center profile-home__information">
            <div class="col-lg-4 col-sm-12">
                <picture class="profile-home__img">
                    <img src="https://placeimg.com/800/800" alt="Foto de perfil">
                </picture>

                <h1 class="profile-home__title">Nombre Usuario</h1>
                <h2 class="profile-home__work">Cargo</h2>
                <h3 class="profile-home__country">País</h3>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-4">
                        <a class="btn btn--blue w-100 sameheight" href="#" data-toggle="modal" data-target="#modaladd">Agregar a mis contactos</a>
                    </div>
                    <div class="col-12 col-lg-4">
                        <a class="btn btn--border-blue w-100 sameheight" href="#" data-toggle="modal" data-target="#modal">Ver Contactos</a>
                    </div>
                    <div class="col-12 col-lg-4">
                        <a class="btn btn--border-blue w-100 sameheight" href="dash-user-inbox-message.php">Enviar Mensaje</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center profile-home__information">
            <div class="col-md-12">

                <h2 class="profile-home__work">Sobre mí</h2>
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat autem quod dolorem tenetur adipisci corporis natus sit aspernatur! Veniam culpa consequatur, minus similique corrupti molestiae sunt magni laborum labore aliquam.
                </p>

                <h2 class="profile-home__work">Educación</h2>
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat autem quod dolorem tenetur adipisci corporis natus sit aspernatur! Veniam culpa consequatur, minus similique corrupti molestiae sunt magni laborum labore aliquam.
                </p>

                <h2 class="profile-home__work">Experiencia</h2>
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat autem quod dolorem tenetur adipisci corporis natus sit aspernatur! Veniam culpa consequatur, minus similique corrupti molestiae sunt magni laborum labore aliquam.
                </p>
            </div>


            <div class="gj-modal modal fade text-center" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="mt-2">
                            <h5 class="white">Ver Contactos</h5>
                        </div>

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="contactos-tab" data-toggle="tab" href="#contactos" role="tab" aria-controls="contactos" aria-selected="true">Contactos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="comun-tab" data-toggle="tab" href="#comun" role="tab" aria-controls="comun" aria-selected="false">En común</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="contactos" role="tabpanel" aria-labelledby="contactos-tab">
                                <input class="search__input mt-3 mr-3 w-100" type="text" placeholder="Buscar contactos...">

                                <div class="modal-body">
                                    <div class="row">
                                        <?php for ($i = 0; $i <= 10; $i++) : ?>
                                            <div class="col-md-6">
                                                <a href="#"><?php include('components/people-cards-simple.php') ?></a>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="comun" role="tabpanel" aria-labelledby="comun-tab">
                                <input class="search__input mt-3 mr-3 w-100" type="text" placeholder="Buscar contactos...">

                                <div class="modal-body">
                                    <div class="row">
                                        <?php for ($i = 0; $i <= 5; $i++) : ?>
                                            <div class="col-md-6">
                                                <a href="#"><?php include('components/people-cards-simple.php') ?></a>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="gj-modal modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="modaladdLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">¿Deseas agrear a tus contactos?</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn--blue" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn--blue">Sí</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <?php include('components/banner.php'); ?>
</article>