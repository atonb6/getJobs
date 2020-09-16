<?php include('layout/head.php'); ?>
<?php $login = "user";
include('layout/header.php'); 
?>
<section class="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-md-2 dashboard__menu">
            <?php include('components/dashboard-menu.php'); ?>
            </div>
            <div class="col-md-10">
            <?php include('components/dashboard-profile.php'); ?>
            </div>
        </div>
    </div>
</section>


<?php include('layout/footer.php'); ?>