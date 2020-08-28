<article>
<?php include('components/breadcrumb-filter.php'); ?>
<div class="row">
    <?php for ($i = 1; $i <= 10; $i++) : ?>
        <div class="col-md-6">
            <?php include('components/postular-cards-dashboard.php') ?>
        </div>
    <?php endfor ?>
</div>
<?php include('components/banner.php'); ?>
</article>
