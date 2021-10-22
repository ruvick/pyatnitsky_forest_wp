<!DOCTYPE html>
<html lang="ru">
<head>

  <title><?php wp_title(); ?></title>

  <meta charset="UTF-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="Новый сайт">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon256.png" sizes="256x256">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon128.png" sizes="128x128">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon64.png" sizes="64x64">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/fav.svg" sizes="any">

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  <?php wp_head();?>   
  <script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8"></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-59T55FL');</script>
<!-- End Google Tag Manager -->

</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-59T55FL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <div class="wrapper">  
    <!-- Подключение  модальных окон-->
    <? include "modal-win.php";?>