<article>
    <?php include('components/search.php'); ?>


    <div class="row">

        <div class="col-md-10">

            <hr class="hr__space">

            <?php for ($i = 0; $i <= 2; $i++) : ?>
                <?php include('components/people-message.php') ?>
            <?php endfor ?>
                <?php include('components/people-message-writting.php') ?>
            
            <?php include('components/input-message.php') ?>
        </div>

        <div class="col-md-2">
            <?php include('components/banner-vert.php') ?>
        </div>
    </div>
    <?php include('components/banner.php'); ?>
</article>