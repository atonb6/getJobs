<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="GetJobs">
  <meta name="author" content="Consciencia Digital">

  <link rel="apple-touch-icon" sizes="57x57" href="dist/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="dist/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="dist/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="dist/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="dist/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="dist/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="dist/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="dist/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="dist/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="dist/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="dist/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="dist/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="dist/img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="dist/img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">


  <title>GetJobs</title>

  <!-- Extra - Font Awesome -->
  <script src="https://kit.fontawesome.com/3b83993061.js" crossorigin="anonymous"></script>
  <!-- Extra - Data Tables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css">
  <!--script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script> -->
  <!-- Theme CSS - Incluye todo -->
  <link href="dist/css/style.min.css" rel="stylesheet">

</head>

<body>

<?php //$basenameString = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']); 
//$basenameString = preg_replace('/\s+/', '', $basenameString);
//echo $basenameString;
?>

<?php $basenameNormal = basename($_SERVER['SCRIPT_NAME']); 
//$basenameNormal = preg_replace('/\s+/', '', $basenameNormal);
//echo $basenameNormal
?>


<div class="loader">
<img src="./dist/img/logo-blue.svg"/>
<div class="loader__fill"></div>
</div>
  <?php if ($basenameNormal == 'index.php') : ?>

    <header class="header absolute">
      <nav id="details-nav" class="navbar navbar-expand-lg navbar-light">

      <?php else : ?>
        <header class="header ">
          <nav id="details-nav" class="navbar navbar-expand-lg navbar-light navbar-blue">

          <?php endif ?>