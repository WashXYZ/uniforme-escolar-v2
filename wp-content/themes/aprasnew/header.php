<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->

<meta charset="<?php bloginfo( 'charset' ); ?>">
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:400,500,500i,600,600i,700,700i,800,800i|Source+Sans+Pro:400,400i,600,600i,700,700i&display=swap" /> -->

<title>  <?= bloginfo( 'name' ); ?> </title>

</head>

<body>

<style>
<?php include "header-inCSS.php" ?> 
</style>
<?php include "fontsCSS.php" ?> 

<header id="top-background">

<nav id="mainNav" class="navbar navbar-expand-lg navbar-light justify-content-between container">

   <a class="navbar-brand"  href="<?= home_url(); ?>"><img alt="Logo Principal Apras Uniformes" width="140" height="auto" src="<?= wp_get_attachment_url(get_theme_mod('custom_logo')); ?>" class="img-logo"/> </a>
   
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

<div class="collapse navbar-collapse" id="navbar" >
<?php wp_nav_menu( array(

'menu' => 'primary',
'theme_location' => 'primary', 
'menu_class' => 'navbar-nav mr-auto',
'container_class' => ''
) ); ?>

</div>

</nav>

</header>

<div id="wrapper">