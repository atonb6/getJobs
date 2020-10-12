<?php include('layout/head.php'); ?>
<?php $login = "user";
include('layout/header.php'); 
?>

<?php 

$title = "Título de Búsqueda";
$subtitle = "Resultados de búsqueda";

include('components/results-title.php'); 
?>

<?php include('components/select.php'); ?>
<?php include('components/results-tags.php'); ?>

<?php include('components/breadcrumb-filter.php'); ?>
<?php include('components/results-cards.php'); ?>

<?php include('layout/footer.php'); ?>