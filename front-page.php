<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('./includes/header'); ?>
  <main>
    <section class="l-fv">
      <h2 class="l-fv__main-copy">TOEFL対策はEngress</h2>
      <p class="l-fv__sub-copy">日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</p>
      <a href="<?php echo esc_url(home_url('/home/contact')); ?>" type="button" class="c-btn__doc-request c-btn__doc-request--fv">資料請求</a>
      <a href="<?php echo esc_url(home_url('/home/contact')); ?>" class="l-fv__contact">お問い合わせ</a>
    </section><!-- /.l-fv -->
    <section class="l-fv-content">
      <div class="l-fv-content__inner">
        <h3 class="l-fv-content__ttl">TOEFL学習で<br>こんな悩みありませんか？</h3>
        <div class="l-fv-content__txt">
          <p>勉強の習慣が<br>身についていない</p>
          <p>勉強しているはず<br>なのに点数が伸びない</p>
          <p>正しい勉強方法が<br>わからない</p>
        </div>
        <article class="l-fv-content__box">
          <div class="l-fv-content__box__border">
            <h3 class="l-fv-content__box__ttl">Engressは<br><span class="u-underLine">TOEFLに特化したスクール</span>です</h3>
            <p class="l-fv-content__box__txt">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。</p>
          </div>
        </article>
      </div><!-- /.l-fv__inner -->
    </section><!-- /.fv-content -->
    <section class="l-features">
      <h2 class="l-features__ttl">TOEFL対策に特化した<br>Engress3つの強み</h2>
      <div class="l-features__inner">
        <article class="l-features__media u--reverse">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/feature01.png" class="l-features__media__thumb" alt="">
          <div class="l-features__media__body">
            <p class="l-features__media__label">特長 １</p>
            <h3 class="l-features__media__ttl">TOEFLに最適化された<br>無駄のないカリキュラム</h3>
            <p class="l-features__media__txt">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
          </div>
        </article>
        <article class="l-features__media">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/feature02.png" class="l-features__media__thumb" alt="">
          <div class="l-features__media__body u--mg-right">
            <p class="l-features__media__label">特長 ２</p>
            <h3 class="l-features__media__ttl">日本人指導歴10年以上の<br>経験豊富な講師陣</h3>
            <p class="l-features__media__txt">Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
          </div>
        </article>
        <article class="l-features__media u--reverse">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/feature03.png" class="l-features__media__thumb" alt="">
          <div class="l-features__media__body">
            <p class="l-features__media__label">特長 ３</p>
            <h3 class="l-features__media__ttl u-dis--none-min-ms">平均3ヶ月でTOEFL <br>iBT20点アップ</h3>
            <p class="l-features__media__txt">Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
          </div>
        </article>
        <div class="l-features__to-price">
          <h4 class="l-features__to-price__copy">Engressの料金プランはこちら</h4>
          <a href="<?php echo esc_url(home_url('/home/price/')); ?>" class="c-btn__to-price">料金を見てみる</a>
        </div>
        <!-- /.l-featers__to-plan -->
      </div><!-- /.l-features__inner -->
    </section><!-- /.l-features -->
    <section class="l-success-case">
      <h2 class="l-success-case__ttl">TOEFL成功事例</h2>
      <div class="l-success-case__inner">
        <div class="l-success-case__wrapper">
          <?php
          $args = array(
            'post_type' => 'case',
            'post_per_page' => 9
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) :
              $the_query->the_post();
          ?>
              <div class="l-success-case__card">
                <h4 class="l-success-case__card__ttl"><?php the_field('comment'); ?></h4>
                <figure class="l-success-case__card__img">
                  <div class="l-success-case__card__model"><?php the_post_thumbnail(); ?></div>
                </figure>
                <div class="l-success-case__card__body">
                  <p class="l-success-case__card__status"><?php the_field('status'); ?></p>
                  <p class="l-success-case__card__name"><?php the_field('name'); ?></p>
                </div>
                <p class="l-success-case__card__txt"><?php the_field('summary'); ?></p>
              </div>
          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>

        </div><!-- /.l-success-case__wrapper -->
      </div><!-- /.l-success-case__inner -->
    </section><!-- /.l-success-case -->
    <section class="l-flow">
      <h2 class="l-flow__ttl">ご利用の流れ</h2>
      <div class="l-flow__inner">
        <dl class="l-flow__box">
          <p class="l-flow__box__number">01</p>
          <div class="l-flow__box__boader"></div>
          <dt class="l-flow__box__ttl">お問い合わせ</dt>
          <dd class="l-flow__box__txt">まずはフォームまたはお電話から<br>お申し込みください。</dd>
        </dl>
        <dl class="l-flow__box">
          <p class="l-flow__box__number">02</p>
          <div class="l-flow__box__boader"></div>
          <dt class="l-flow__box__ttl">ヒアリング</dt>
          <dd class="l-flow__box__txt">現在の学習状況やTOEFLスコア、<br>目標のスコアをお聞きします。</dd>
        </dl>
        <dl class="l-flow__box">
          <p class="l-flow__box__number">03</p>
          <div class="l-flow__box__boader"></div>
          <dt class="l-flow__box__ttl">学習プランのご提供</dt>
          <dd class="l-flow__box__txt">目標達成のために最適な学習プランを<br>ご提案致します。</dd>
        </dl>
        <dl class="l-flow__box">
          <p class="l-flow__box__number">04</p>
          <div class="l-flow__box__boader"></div>
          <dt class="l-flow__box__ttl">ご入会</dt>
          <dd class="l-flow__box__txt">お申込み完了後、レッスンがスタートします。</dd>
        </dl>
      </div><!-- /.l-flow__box -->
    </section><!-- /.l-flow -->
    <section class="l-faq">
      <h2 class="l-faq__ttl">よくある質問</h2>
      <div class="l-faq__inner">
        <dl class="l-faq__content">
          <dt class="l-faq__content__ttl"><button class="l-faq__content__btn">Engressはサラリーマンでも学習を続けられるでしょうか？<span class="c-close c-open"></span></button></dt>
          <dd class="l-faq__content__body --open">
            <p class="l-faq__content__txt">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
          </dd>
        </dl>
        <dl class="l-faq__content">
          <dt class="l-faq__content__ttl"><button class="l-faq__content__btn">教材はオリジナルのものを使用しているのでしょうか？<span class="c-close"></span></button></dt>
          <dd class="l-faq__content__body">
            <p class="l-faq__content__txt">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
          </dd>
        </dl>
        <dl class="l-faq__content">
          <dt class="l-faq__content__ttl"><button class="l-faq__content__btn">講師に日本人はいますか？<span class="c-close"></span></button></dt>
          <dd class="l-faq__content__body">
            <p p class="l-faq__content__txt">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
          </dd>
        </dl>
        <dl class="l-faq__content">
          <dt class="l-faq__content__ttl"><button class="l-faq__content__btn">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？<span class="c-close"></span></button></dt>
          <dd class="l-faq__content__body">
            <p class="l-faq__content__txt">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
          </dd>
        </dl>
      </div><!-- /.l-question__inner -->
    </section><!-- /.question -->
    <section class="l-blog-info">
      <div class="l-blog-info__inner">
        <div class="l-blog-info__blog">
          <h2 class="l-blog-info__blog__ttl">ブログ</h2>
          <?php
          query_posts('posts_per_page=3');
          if (have_posts()) : while (have_posts()) : the_post(); ?>

              <article class="l-blog-info__blog__media">
                <figure class="l-blog-info__blog__media-thumb">
                  <p class="c-media__badge"><span class="c-media__badge-txt"><?php echo get_category_name();  ?></span></p>
                  <div class="l-blog-info__blog__media__img"><?php if(has_post_thumbnail()): the_post_thumbnail('front'); else: ?><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/dummy-front.png"><?php endif; ?></div>
                </figure>
                <figcaption class="l-blog-info__blog__media-body">
                  <a href="<?php the_permalink(); ?>" class="l-blog-info__blog__media-txt"><?php echo get_flexible_title(40); ?></a>
                  <time datetime="2020-12-27"><?php the_time('Y-m-d'); ?></time>
                </figcaption>
              </article><!-- /.l-blog-info__blog__media -->
          <?php endwhile;
          endif;
          ?>

        </div><!-- /.l-blog-info__blog -->
        <div class="l-blog-info__info">
          <h2 class="l-blog-info__info__ttl">お知らせ</h2>
          <?php
          $args = array(
            'post_type' => 'notice',
            'posts_per_page' => 3,
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) :
              $the_query->the_post();
          ?>
              <article class="l-blog-info__info__media">
                <time datetime="2020-12-01"><?php the_time('Y-m-d'); ?></time>
                <a href="<?php the_permalink(); ?>" class="l-blog-info__info__media-txt"><?php echo get_flexible_title(50); ?></a>
              </article>
          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div><!-- /.l-blog-info__info -->
      </div><!-- /.l-blog-info__inner -->
    </section><!-- /.blog-info -->
    <?php get_template_part('./includes/cta'); ?>
  </main>
  <?php get_template_part('./includes/footer'); ?>

  <?php get_footer(); ?>
</body>

</html>
