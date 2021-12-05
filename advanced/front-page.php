<?php get_header(); ?>

<section class="l-top-fv p-fv">
  <div class="p-fv__inner">
    <h2 class="p-fv__title">TOEFL対策はEngress</h2>
    <p class="p-fv__text">日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクール
    </p>
    <div class="p-fv__cta-btn">
      <a href="#" class="c-btn">資料請求</a>
    </div>
    <div class="p-fv__contact">
      <a href="#" class="c-link">お問い合わせ</a>
    </div>
  </div>
</section>

<section class="l-top-catch-copy p-catch-copy">
  <div class="p-catch-copy__inner l-inner">
    <h2 class="p-catch-copy__question c-section-title">TOEFL学習でこんな悩みありませんか？</h2>
    <div class="p-catch-copy__wrap">
      <p class="p-catch-copy__answer">勉強の習慣が<br class="u-is-tab">身についていない</p>
      <p class="p-catch-copy__answer">勉強しているはず<br class="u-is-tab">なのに点数が伸びない</p>
      <p class="p-catch-copy__answer">正しい勉強方法が<br class="u-is-tab">わからない</p>
    </div>
    <div class="p-catch-copy__content">
      <div class="p-catch-copy__box c-copy-box">
        <h3 class="c-copy-box__title c-section-title">Engressは<br><span>TOEFLに特化したスクール</span>です</h3>
        <p class="c-copy-box__text">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br class="u-is-tab">TOEFLの苦手分野を克服します。</p>
      </div>
    </div>
  </div>
</section>

<section class="l-top-feature p-feature">
  <div class="p-feature__inner l-inner">
    <h2 class="p-feature__title c-section-title">TOEFL対策に特化したEngress3つの強み</h2>
    <div class="p-feature__items">
      <div class="p-feature__item p-box1">
        <div class="p-box1__body">
          <div class="p-box1__category"><a href="">特長 １</a></div>
          <h3 class="p-box1__title">TOEFLに最適化された<br>無駄のないカリキュラム</h3>
          <p class="p-box1__text">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
        </div>
        <div class="p-box1__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/feature01.jpg" alt="強みの写真">
        </div>
      </div>
      <div class="p-feature__item p-box1">
        <div class="p-box1__body">
          <div class="p-box1__category"><a href="">特長 ２</a></div>
          <h3 class="p-box1__title">日本人指導歴10年以上の<br>経験豊富な講師陣</h3>
          <p class="p-box1__text">Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
        </div>
        <div class="p-box1__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/feature02.jpg" alt="強みの写真">
        </div>
      </div>
      <div class="p-feature__item p-box1">
        <div class="p-box1__body">
          <div class="p-box1__category"><a href="">特長 ３</a></div>
          <h3 class="p-box1__title">平均3ヶ月でTOEFL iBT20点アップ</h3>
          <p class="p-box1__text">Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
        </div>
        <div class="p-box1__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/feature03.png" alt="強みの写真">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="l-top-price p-price">
  <div class="p-price__inner l-inner">
    <h2 class="p-price__title">Engressの料金プランはこちら</h2>
    <div class="p-price__btn">
      <a href="" class="c-btn">料金を見てみる</a>
    </div>
  </div>
</section>

<section class="l-top-sample p-sample">
  <div class="p-sample__inner l-inner">
    <h2 class="p-sample__title c-section-title">TOEFL成功事例</h2>
    <div class="p-sample__items p-card-list">
      <a class="p-card-list__item p-card">
        <h3 class="p-card__title"><?php the_field('title1'); ?></h3>
        <div class="p-card__content">
          <div class="p-card__white">
            <div class="p-card__img">
              <img src="<?php the_field('picture1'); ?>"　alt="人のイメージ画像">
            </div>
          </div>
          <div class="p-card__wrap">
            <p class="p-card__profession"><?php the_field('profession1'); ?></p>
            <p class="p-card__name"><?php the_field('name1'); ?></p>
          </div>
          <p class="p-card__result"><?php the_field('result1'); ?></p>
        </div>
      </a>
      <a class="p-card-list__item p-card">
        <h3 class="p-card__title"><?php the_field('title2'); ?></h3>
        <div class="p-card__content">
          <div class="p-card__white">
            <div class="p-card__img">
              <img src="<?php the_field('picture2'); ?>" alt="人のイメージ画像">
            </div>
          </div>
          <div class="p-card__wrap">
            <p class="p-card__profession"><?php the_field('profession2'); ?></p>
            <p class="p-card__name"><?php the_field('name2'); ?></p>
          </div>
          <p class="p-card__result"><?php the_field('result2'); ?></p>
        </div>
      </a>
      <a class="p-card-list__item p-card">
        <h3 class="p-card__title"><?php the_field('title3'); ?></h3>
        <div class="p-card__content">
          <div class="p-card__white">
            <div class="p-card__img">
              <img src="<?php the_field('picture3'); ?>" alt="人のイメージ画像">
            </div>
          </div>
          <div class="p-card__wrap">
            <p class="p-card__profession"><?php the_field('profession3'); ?></p>
            <p class="p-card__name"><?php the_field('name3'); ?></p>
          </div>
          <p class="p-card__result"><?php the_field('result3'); ?></p>
        </div>
      </a>
    </div>
  </div>
</section>

<section class="l-top-flow p-flow">
  <div class="p-flow__inner l-inner">
    <h2 class="p-flow__title c-section-title">ご利用の流れ</h2>
    <div class="p-flow__items p-box2-list">
      <div class="p-box2-list__item p-box2">
        <div class="p-box2__number">01</div>
        <div class="p-box2__content">
          <h3 class="p-box2__title">お問い合わせ</h3>
          <p class="p-box2__text">まずはフォームまたはお電話からお申し込みください。</p>
        </div>
      </div>
      <div class="p-box2-list__item p-box2">
        <div class="p-box2__number">02</div>
        <div class="p-box2__content">
          <h3 class="p-box2__title">ヒアリング</h3>
          <p class="p-box2__text">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
        </div>
      </div>
      <div class="p-box2-list__item p-box2">
        <div class="p-box2__number">03</div>
        <div class="p-box2__content">
          <h3 class="p-box2__title">学習プランのご提供</h3>
          <p class="p-box2__text">目標達成のために最適な学習プランをご提案致します。</p>
        </div>
      </div>
      <div class="p-box2-list__item p-box2">
        <div class="p-box2__number">04</div>
        <div class="p-box2__content">
          <h3 class="p-box2__title">ご入会</h3>
          <p class="p-box2__text">お申込み完了後、レッスンがスタートします。</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="l-top-question p-question">
  <div class="p-question__inner l-inner">
    <h2 class="p-question__title c-section-title">よくある質問</h2>
    <div class="p-question__items p-accordion-list">
      <div class="p-accordion-list__item p-accordion js-accordion">
        <h3 class="p-accordion__title">Engressはサラリーマンでも学習を続けられるでしょうか？</h3>
        <p class="p-accordion__text">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
      </div>
      <div class="p-accordion-list__item p-accordion js-accordion">
        <h3 class="p-accordion__title">教材はオリジナルのものを使用しているのでしょうか？</h3>
        <p class="p-accordion__text">教材はEngressオリジナルのものを使用しています。</p>
      </div>
      <div class="p-accordion-list__item p-accordion js-accordion">
        <h3 class="p-accordion__title">講師に日本人はいますか？</h3>
        <p class="p-accordion__text">日本人講師も在籍しています。</p>
      </div>
      <div class="p-accordion-list__item p-accordion js-accordion">
        <h3 class="p-accordion__title">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</h3>
        <p class="p-accordion__text">TOEFL対策専門のため、それ以外のサポートは行っておりません。</p>
      </div>
    </div>
  </div>
</section>

<div class="l-info p-info">
  <div class="p-info__inner l-inner">
    <section class="p-info__content p-box3">
      <h2 class="p-box3__title  c-section-title--small">ブログ</h2>
      <div class="p-box3__content">
        <div class="p-box3__img">
          <p class="p-box3__category">カテゴリー</p>
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/sample01.jpg" alt="ブログ写真１">
        </div>
        <div class="p-box3__wrap">
          <p class="p-box3__sub-title">Engress説明会in大阪の模様をお伝えします</p>
          <time datetime="2020-12-27" class="p-box3__time">2020-12-27</time>
        </div>
      </div>
      <div class="p-box3__content">
        <div class="p-box3__img">
          <p class="p-box3__category">カテゴリー</p>
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/sample02.jpg" alt="ブログ写真２">
        </div>
        <div class="p-box3__wrap">
          <p class="p-box3__sub-title">Engressもくもく会でみんなでTOEFL学習をしませんか？</p>
          <time datetime="2020-12-01" class="p-box3__time">2020-12-01</time>
        </div>
      </div>
      <div class="p-box3__content">
        <div class="p-box3__img">
          <p class="p-box3__category">カテゴリー</p>
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/sample03.jpg" alt="ブログ写真３">
        </div>
        <div class="p-box3__wrap">
          <p class="p-box3__sub-title">TOEFL学習にはコーチング学習が最強である話</p>
          <time datetime="2020-11–20" class="p-box3__time">2020-11–20</time>
        </div>
      </div>
    </section>
    <section class="p-info__content p-box4">
      <h2 class="p-box4__title c-section-title--small">お知らせ</h2>
      <div class="p-box4__content">
        <time datetime="2020-12-01" class="p-box4__time">2020-12-01</time>
        <p class="p-box4__sub-title">2021年のスケジュールについて</p>
      </div>
      <div class="p-box4__content">
        <time datetime="2019-11-02" class="p-box4__time">2019-11-02</time>
        <p class="p-box4__sub-title">11月休校日のお知らせ</p>
      </div>
      <div class="p-box4__content">
        <time datetime="2020-10-01" class="p-box4__time">2020-10-01</time>
        <p class="p-box4__sub-title">10月休校日のお知らせ</p>
      </div>
    </section>
  </div>
</div>

<section class="l-top-cta p-cta">
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