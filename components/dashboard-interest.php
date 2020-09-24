<article>
<?php include('components/breadcrumb.php'); ?>
<?php 
$title = "Grupos de interés";
$placeholder = "Buscar Grupos...";
include('components/search-contacts.php'); ?>

<div class="row">
    <?php for ($i = 1; $i <= 10; $i++) : ?>
        <div class="col-md-6">
        <?php include('application-cards-groups-premium.php') ?>
        </div>
    <?php endfor ?>
</div>
<?php include('components/banner.php'); ?>
</article>
