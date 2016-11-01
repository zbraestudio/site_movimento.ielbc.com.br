<?
global $isHome;
?><!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
  <title><?= get_config('site_title'); ?></title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--[if lte IE 8]><script src="<?= get_config('site_url'); ?>js/ie/html5shiv.js"></script><![endif]-->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= get_config('site_url'); ?>bower_components/font-awesome/css/font-awesome.min.css" />

  <link rel="stylesheet" href="<?= get_config('site_url'); ?>css/less.css" />
  <!--[if lte IE 8]><link rel="stylesheet" href="<?= get_config('site_url'); ?>css/template/ie8.css" /><![endif]-->
</head>
<body <?= ($isHome)?'class="landing"':null; ?>>
<div id="page-wrapper">

  <!-- Header -->
  <header id="header" <?= ($isHome)?'class="alt"':null; ?>>
    <a href="index.php">
      <?/* file_get_contents(get_config('site_path') . 'images/logos/livres.svg');*/ ?>
      <img src="<?= get_config('site_url') . 'images/logos/livres.svg';  ?>" class="svg" id="logo">
      <div class="clearboth"></div>
    </a>
    <nav id="nav">
      <ul>
        <li><a href="<?= get_config('site_url')?>home">Home</a></li>
        <li><a class="button" href="<?= get_config('site_url')?>participe">Quero participar!</a></li>
        <li><a href="<?= get_config('site_url')?>contato">Contato</a></li>
        <!--<li>
          <a href="#" class="icon fa-angle-down">Layouts</a>
          <ul>
            <li><a href="generic.html">Generic</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="elements.html">Elements</a></li>
            <li>
              <a href="#">Submenu</a>
              <ul>
                <li><a href="#">Option One</a></li>
                <li><a href="#">Option Two</a></li>
                <li><a href="#">Option Three</a></li>
                <li><a href="#">Option Four</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#" class="button">Sign Up</a></li>-->
      </ul>
    </nav>
  </header>

  <?
  if($isHome){
  ?>
  <!-- Banner -->
  <section id="banner">
    <!--<h2>Alpha</h2>-->
    <p>Uma Igreja pra quem não gosta de igreja e para pessoas de quem a igreja não gosta.</p>
    <ul class="actions">
      <li><a href="#" class="button">Participe!</a></li>
      <li><a href="#" class="button special">Saiba mais</a></li>
    </ul>
  </section>
  <?
  }
  ?>