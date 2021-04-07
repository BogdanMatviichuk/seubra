<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- ****** favicons ****** -->


  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri();?>/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/favico0n/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">


  <title>EGHAM COWORK</title>

  <link rel="preload" href="<?php echo get_template_directory_uri();?>/fonts/HelveticaNeueCyr-Medium.woff" as="font" type="font/woff" crossorigin="anonymous">
  <link rel="preload" href="<?php echo get_template_directory_uri();?>/fonts/HelveticaNeueCyr-Roman.woff" as="font" type="font/woff" crossorigin="anonymous">
  <link rel="preload" href="<?php echo get_template_directory_uri();?>/fonts/HelveticaNeueCyr-Bold.woff" as="font" type="font/woff" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/header.css">
    <?php wp_head();?>
</head>
<body>




<div class="wrapper">
  <main class="main">

    <header class="header">
      <div class="cn df df-row df-justify df-alignCenter">

        <div class="header-brand">
          <a href="/" class="logo">
              <?php $image = get_field( 'logo', 'option' ); ?>
              <picture>
                  <source data-srcset="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>" media="(min-width: 600px)">
                  <img class="lazy" data-src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>" alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
              </picture>
          </a>
        </div>
          <?php wp_nav_menu( [
             'theme_location'  => 'top',
             'container'       => 'nav',
             'container_class' => 'header-nav',
             'menu_class'      => 'main-mnu',

          ] ); ?>

        <a href="#" class="mobile-toggle">
          <span class="toggle-mnu"><span></span></span>
        </a>

      </div>
    </header>
