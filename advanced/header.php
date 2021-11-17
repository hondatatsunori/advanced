<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header p-header">
    <div class="p-header__inner">
      <div class="p-header__pc-left">
        <h1 class="p-header__logo c-logo">
          <a href="#" class="c-logo__link">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.svg" alt="タイトルロゴ">
          </a>
        </h1>
        <div class="p-header__pc-nav p-pc-nav">
          <ul class="p-pc-nav__items">
            <li class="p-pc-nav__item"><a href="#">ホーム</a></li>
            <li class="p-pc-nav__item"><a href="#">お知らせ</a></li>
            <li class="p-pc-nav__item"><a href="#">ブログ</a></li>
            <li class="p-pc-nav__item"><a href="#">コース・料金</a></li>
          </ul>
        </div>
      </div>
      <div class="p-header__pc-right">
        <div class="p-header__info c-info">
          <p class="c-info__time"></p>
          <a href="tel:0123-456-7890">0123-456-7890</a>
        </div>
      </div>

      <div class="p-header__drawer c-hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </header>