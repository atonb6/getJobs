<?php include('layout/head.php'); ?>
<?php include('layout/header.php'); ?>


<section class="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-md-2 dashboard__menu">
            <?php include('components/dashboard-menu-enterprise.php'); ?>
            </div>
            <div class="col-md-10">
            <?php include('components/dashboard-enterprise-published.php'); ?>
            </div>
        </div>
    </div>
</section>


<?php include('layout/footer.php'); ?>