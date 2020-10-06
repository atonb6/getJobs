<?php include('layout/head.php'); ?>
<?php $login = "user";
include('layout/header.php'); 
?>
<article class="d-sm-block d-md-none">
    <div class="menu-arrow position-fixed">
        <span class="material-icons">
            play_circle_filled
        </span>
    </div>
</article>
<section class="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-3 dashboard__menu dashboard__menu move">
            <?php include('components/dashboard-menu.php'); ?>
            </div>
            <div class="col-lg-10 col-md-9">
            <?php include('components/dashboard-applications.php'); ?>
            </div>
        </div>
    </div>
</section>


<?php include('layout/footer.php'); ?>