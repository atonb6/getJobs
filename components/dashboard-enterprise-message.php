<article>
    <?php include('components/search.php'); ?>
    <div class="row">

        <div class="col-md-10">
            <?php for ($i = 1; $i <= 4; $i++) : ?>
                <?php include('components/people-enterprise-inbox.php') ?>
            <?php endfor ?>
            <a href="dash-enterprise-inbox-message.php" class="mt-4 mb-4 people-cards people-cards--inbox d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img class="people-cards__img" src="http://placeimg.com/80/80" alt="persona">
                    <div class="ml-3">
                        <h4><strong>Empresa en la que trabaja</strong></h4>
                        <h3 class="mt-2 mb-2"><strong>Título de cargo</strong></h3>
                        <h4>Ciudad - Modalidad</h4>
                    </div>
                </div>

                <span class="material-icons">
                    message
                </span>
            </a>
        </div>

        <div class="col-md-2">
            <?php include('components/banner-vert.php') ?>
        </div>
    </div>
    <?php include('components/banner.php'); ?>
</article>