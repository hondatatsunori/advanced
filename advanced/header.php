<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクール">
  <link rel="stylesheet" href="https://unpkg.com/scroll-hint@1.1.10/css/scroll-hint.css">
  <script src="https://unpkg.com/scroll-hint@1.1.10/js/scroll-hint.js"></script>
  <title>Engress</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header p-header">
    <div class="p-header__inner">
      <div class="p-header__content">
        <div class="p-header__pc-left">
          <h1 class="p-header__logo c-logo">
            <a href="<?php echo home_url(); ?>" class="c-logo__link">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.svg" alt="タイトルロゴ">
            </a>
          </h1>
          <div class="p-header__pc-nav p-pc-nav">
            <ul class="p-pc-nav__items">
              <li class="p-pc-nav__item"><a href="<?php echo home_url(); ?>">ホーム</a></li>
              <li class="p-pc-nav__item"><a href="<?php echo home_url(); ?>/news">お知らせ</a></li>
              <li class="p-pc-nav__item"><a href="<?php echo home_url(); ?>/blog">ブログ</a></li>
              <li class="p-pc-nav__item"><a href="<?php echo home_url(); ?>/plan">コース・料金</a></li>
            </ul>
          </div>
        </div>
        <div class="p-header__pc-right">
          <div class="p-header__info c-info u-is-pc">
            <p class="p-header__time c-info__time">平日08:00〜20:00</p>
            <a href="tel:0123-456-7890" class="p-header__tel c-info__tel" style="cursor: default;">0123-456-7890</a>
          </div>
          <div class="p-header__cta-btn u-is-pc">
            <a href="#" class="c-btn">資料請求</a>
          </div>
          <div class="p-header__contact-btn u-is-pc">
            <a href="#" class="c-btn">お問い合わせ</a>
          </div>
        </div>

        <div class="p-header__drawer c-hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <div class="p-header__menu js-drawer-menu">
        <div class="p-header__top">
          <div class="c-logo">
            <a href="<?php echo home_url(); ?>" class="c-logo__link">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.svg" alt="タイトルロゴ">
            </a>
          </div>
        </div>
        <div class="p-header__sp-nav p-sp-nav">
          <ul class="p-sp-nav__items">
            <li class="p-sp-nav__item"><a href="<?php echo home_url(); ?>">ホーム</a></li>
            <li class="p-sp-nav__item"><a href="<?php echo home_url(); ?>/news">お知らせ</a></li>
            <li class="p-sp-nav__item"><a href="<?php echo home_url(); ?>/blog">ブログ</a></li>
            <li class="p-sp-nav__item"><a href="<?php echo home_url(); ?>/plan">コース・料金</a></li>
          </ul>
        </div>
        <div class="p-header__bottom">
          <div class="p-header__cta-btn p-header__cta-btn--drawer">
            <a href="#" class="c-btn c-btn--drawer">資料請求</a>
          </div>
          <div class="p-header__contact-btn p-header__contact-btn--drawer">
            <a href="#" class="c-btn c-btn--drawer">お問い合わせ</a>
          </div>
        </div>
      </div>
    </div>
    <div class="p-header__background js-drawer-menu"></div>
  </header>