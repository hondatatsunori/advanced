<footer class="p-footer l-footer">
  <div class="p-footer__inner l-inner">
    <div class="p-footer__nav p-footer-nav">
      <ul class="p-footer-nav__items">
        <li class="p-footer-nav__item"><a href="<?php echo home_url(); ?>">ホーム</a></li>
        <li class="p-footer-nav__item"><a href="<?php echo home_url(); ?>/news">お知らせ</a></li>
        <li class="p-footer-nav__item"><a href="<?php echo home_url(); ?>/blog">ブログ</a></li>
        <li class="p-footer-nav__item"><a href="<?php echo home_url(); ?>/plan">コース・料金</a></li>
      </ul>
    </div>
    <div class="footer__box">
      <h1 class="p-footer__logo c-footer-logo">
        <a href="<?php echo home_url(); ?>" class="c-footer-logo__link">
          <img src="http://advanced.local/wp-content/themes/advanced/assets/img/common/logo.svg" alt="タイトルロゴ">
        </a>
      </h1>
      <div class="p-footer__info c-info">
        <a href="tel:0123-456-7890" class="p-footer__tel c-info__tel" style="cursor: default;">0123-456-7890</a>
        <p class="p-footer__time c-info__time">平日08:00〜20:00</p>
      </div>
    </div>
  </div>
  <div class="p-footer__copy">
    <div class="l-inner">
      <p class="c-copy">©2020 Engress.</p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>