<article>
    <?php include('components/search.php'); ?>
    <div class="row">

            <div class="col-md-10">
            <?php for ($i = 1; $i <= 4; $i++) : ?>
                <?php include('components/people-inbox.php') ?>
                <?php endfor ?>
            </div>
        
        <div class="col-md-2">
            <?php include('components/banner-vert.php') ?>
        </div>
    </div>
    <?php include('components/banner.php'); ?>
</article>