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
            <div class="col-md-6">
                <picture class="profile-home__img">
                    <img src="https://placeimg.com/800/800" alt="Foto de perfil">
                </picture>

                <h1 class="profile-home__title">Nombre Usuario</h1>
                <h2 class="profile-home__work">Cargo</h2>
                <h3 class="profile-home__country">País</h3>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a class="btn btn--blue" href="#">Agregar a mis contactos</a>
                <a class="btn btn--border-blue ml-3" href="#">Enviar Mensaje</a>
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
    </section>

    <?php include('components/banner.php'); ?>
</article>