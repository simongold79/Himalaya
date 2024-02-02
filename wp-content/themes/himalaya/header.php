<!doctype html>
<html <?php language_attributes(); ?> class="wow-animation">
<head>
  <!-- Site Title -->
  <title>

    <?php wp_title(); ?>
  </title>
  <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
  <style type="text/css">
    @font-face {
      font-family: "opensans";
      src: url(<?php echo get_template_directory_uri()."/fonts/OpenSansHebrewCondensed-Regular.ttf"?>);
    }
  </style>


</head>

<body <?php body_class('mybodyclass'); ?>>


<div class="container-fluid">
  <div class="row">
      <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-3 col-lg-offset-2 col-lg-6">

      <img src="<?= get_template_directory_uri().'/images/logo.png'?>" alt="himalaya logo" class=" ">
      </div>
    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <?php
        wp_nav_menu([
        'menu'=>'primary',
        'container' =>'nav',
        'menu_class'=>'overlay-content',
        ]);
      ?>
    </div>
  </div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
