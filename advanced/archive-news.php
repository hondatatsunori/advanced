<?php get_header(); ?>

<section class="l-sub-fv p-sub-fv p-news">
  <h2 class="p-sub-fv__title">お知らせ</h2>
</section>

<div class="breadcrumbs p-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
  <div class="p-breadcrumbs__inner">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
  </div>
</div>

<section class="l-list-cta p-cta">
  <div class="p-cta__inner">
    <h2 class="p-cta__title  c-section-title--small">まずは無料で資料請求から</h2>
    <div class="p-cta__btn">
      <a href="#" class="c-btn">資料請求</a>
    </div>
    <div class="p-cta__contact">
      <a href="#" class="c-link">お問い合わせ</a>
    </div>
  </div>
  <div class="p-cta__info">
    <div class="p-cta__content">
      <p class="p-cta__text">お電話でのお問い合わせはこちら</p>
      <a href="tel:0123-456-7890" class="p-cta__tel">0123-456-7890</a>
      <p class="p-cta__time">平日08:00〜20:00</p>
    </div>
  </div>
</section>

<?php get_footer(); ?>