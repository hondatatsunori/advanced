<?php get_header(); ?>

<section class="l-sub-fv p-sub-fv">
  <h2 class="p-sub-fv__title">コース・料金</h2>
</section>

<div class="breadcrumbs p-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
  <div class="p-breadcrumbs__inner">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
  </div>
</div>

<section class="l-charge-system p-charge-system">
  <div class="p-charge-system__inner l-inner">
    <h2 class="p-charge-system__title c-section-title--small">料金体系</h2>
    <div class="p-charge-system__content">
      <P class="p-charge-system__cost">入会金 39,800円</P>
      <div class="p-charge-system__plus"></div>
      <P class="p-charge-system__cost">月額費用</P>
    </div>
    <p class="p-charge-system__text">Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
  </div>
</section>

<section class="l-charge-table p-charge-table">
  <div class="p-charge-table__inner l-inner">
    <h2 class="p-charge-table__title c-section-title--small">料金表</h2>
    <div class="p-charge-table__list p-card2-list js-scroll-able">
      <div class="p-card2-list__item p-card2">
        <h3 class="p-card2__title">基礎プラン</h3>
        <div class="p-card2__wrap">
          <p class="p-card2__charge"><?php the_field('charge1'); ?></p>
          <p class="p-card2__tax">*月額（税抜価格）</p>
          <p class="p-card2__content">カリキュラム作成</p>
          <p class="p-card2__content">TOEFL学習サポート</p>
          <p class="p-card2__content">週一回のビデオMTG</p>
        </div>
      </div>
      <div class="p-card2-list__item p-card2">
        <h3 class="p-card2__title">演習プラン</h3>
        <div class="p-card2__wrap">
          <p class="p-card2__charge"><?php the_field('charge2'); ?></p>
          <p class="p-card2__tax">*月額（税抜価格）</p>
          <p class="p-card2__content">カリキュラム作成</p>
          <p class="p-card2__content">TOEFL学習サポート</p>
          <p class="p-card2__content">週一回のビデオMTG</p>
          <p class="p-card2__content">月二回の模試（解説付き）</p>
        </div>
      </div>
      <div class="p-card2-list__item p-card2">
        <h3 class="p-card2__title p-card2__title--orange"><span>おすすめ</span>志望校対策プラン</h3>
        <div class="p-card2__wrap">
          <p class="p-card2__charge p-card2__charge--orange"><?php the_field('charge3'); ?></p>
          <p class="p-card2__tax">*月額（税抜価格）</p>
          <p class="p-card2__content">カリキュラム作成</p>
          <p class="p-card2__content">TOEFL学習サポート</p>
          <p class="p-card2__content">週一回のビデオMTG</p>
          <p class="p-card2__content">月二回の模試（解説付き）</p>
          <p class="p-card2__content">週一の英語面接対策</p>
        </div>
      </div>
      <div class="p-card2-list__item p-card2">
        <h3 class="p-card2__title">フレックスプラン</h3>
        <div class="p-card2__wrap">
          <p class="p-card2__charge"><?php the_field('charge4'); ?></p>
          <p class="p-card2__tax">*月額（税抜価格）</p>
          <p class="p-card2__message">＊別途ご相談ください</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="l-plan-cta p-cta">
  <div class="p-cta__inner">
    <h2 class="p-cta__title c-section-title--small">まずは無料で資料請求から</h2>
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