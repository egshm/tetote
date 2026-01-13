<?php get_header(); ?>

<!-- .p-page-top -->
<main class="p-page-top">
  <!-- .p-fv -->
  <div class="p-fv p-page-top__fv" id="js-fv">
    <ul class="p-fv__img-list" aria-hidden="true" id="js-fvSlider">
      <li class="p-fv__img-item">
        <img class="p-fv__img" src="<?php echo esc_url(get_theme_file_uri("images/fv.jpg")); ?>" alt="スーツ姿の若者が緑豊かな並木道を歩く様子。就職活動や新社会人を連想させる爽やかなシーン" width="375" height="667">
      </li>
      <li class="p-fv__img-item">
        <img class="p-fv__img" src="<?php echo esc_url(get_theme_file_uri("images/fv-02.jpg")); ?>" alt="窓際の明るいオフィスで、女性社員2名と男性社員1名がミーティングをする様子" width="375" height="667">
      </li>
    </ul>
    <div class="p-fv__inner p-page-top__fv-inner">
      <div class="p-fv__content js-inview u-fade-in-up">
        <h1 class="p-fv__title">
          Become a<br>challenger.
        </h1>
        <img class="p-fv__title-sub" alt="君の挑戦が、意思が、未来を変える" src="<?php echo esc_url(get_theme_file_uri("images/fv-text.svg")); ?>" width="228" height="30">
        <?php // 採用ブログの最新記事を取得
        $latest_post = get_posts([
          'post_type' => 'post',
          'posts_per_page' => 1,
        ]);
        if (!empty($latest_post)) {
          $latest_title = get_the_title($latest_post[0]->ID);
          $latest_url = get_permalink($latest_post[0]->ID);
        } else {
          $latest_title = "記事が投稿されていません。";
          $latest_url = "#!";
        }
        ?>
        <!-- .c-news-bar -->
        <a href="<?php echo esc_url($latest_url); ?>" class="c-news-bar p-fv__news-bar">
          <span class="c-news-bar__label">News</span>
          <div class="c-news-bar__body">
            <p class="c-news-bar__title"><?php echo esc_html($latest_title); ?></p>
            <div class="c-news-bar__text-wrap">
              <p class="c-news-bar__text">View more</p>
              <svg class="c-news-bar__icon" width="10" height="10" viewBox="0 0 10 10" fill="none">
                <path d="M3.20149 0L1.79852 1.40277L5.39567 4.99992L1.79852 8.59723L3.20149 10L8.20149 4.99992L3.20149 0Z" fill="currentColor"/>
              </svg>
            </div>
          </div>
        </a>
        <!-- .c-news-bar -->
      </div>
    </div>
  </div>
  <!-- /.p-fv -->

  <!-- .p-sect-mission -->
  <section class="p-sect-mission p-page-top__mission">
    <!-- .l-inner-top -->
    <div class="p-sect-mission__inner l-inner-top js-inview u-fade-in-up">
      <h2 class="p-sect-mission__title">
        <span class="p-sect-mission__title-line">後悔しないキャリアを作る、</span>
        <span class="p-sect-mission__title-line">それこそが、我々の使命だ</span>
      </h2>
      <div class="p-sect-mission__text-wrap">
        <p class="p-sect-mission__text">
          「人手不足」<br>今の日本が抱えるこの社会課題に挑み、<br>企業と個人の可能性を最大限に引き出す。<br>それが私達の役目。
        </p>
        <p class="p-sect-mission__text">
          単につなぐだけじゃない。<br>「手と手」を取り合っていけるような、<br>持続可能な社会を、一緒に作りませんか？
        </p>
      </div>
      <!-- .c-btn-rect -->
      <a href="<?php echo esc_url(home_url("/about-us")) ?>" class="c-btn-rect p-sect-mission__btn">
        <span class="c-btn-rect__text">View more</span>
        <svg class="c-btn-rect__icon" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" fill="none">
          <path d="M6.40298 0L3.59705 2.80555L10.7913 9.99984L3.59705 17.1945L6.40298 20L16.403 9.99984L6.40298 0Z" fill="currentColor"/>
        </svg>
      </a>
      <!-- /.c-btn-rect -->
    </div>
    <div class="p-sect-mission__slider" aria-hidden="true">
      <ul class="p-sect-mission__slider-list">
        <li class="p-sect-mission__slider-item">
          <img class="p-sect-mission__slider-img" src="<?php echo esc_url(get_theme_file_uri("images/slide.jpg")); ?>" alt="電話対応しながらパソコンを操作するスーツ姿の男性" width="271" height="210">
        </li>
        <li class="p-sect-mission__slider-item">
          <img class="p-sect-mission__slider-img" src="<?php echo esc_url(get_theme_file_uri("images/slide-02.jpg")); ?>" alt="カフェでノートパソコンを操作するビジネスウェアの女性" width="271" height="210">
        </li>
        <li class="p-sect-mission__slider-item">
          <img class="p-sect-mission__slider-img" src="<?php echo esc_url(get_theme_file_uri("images/slide-03.jpg")); ?>" alt="イスに座って面談をするスーツ姿の女性二人。" width="271" height="210">
        </li>
        <li class="p-sect-mission__slider-item">
          <img class="p-sect-mission__slider-img" src="<?php echo esc_url(get_theme_file_uri("images/slide.jpg")); ?>" alt="電話対応しながらパソコンを操作するスーツ姿の男性" width="271" height="210">
        </li>
        <li class="p-sect-mission__slider-item">
          <img class="p-sect-mission__slider-img" src="<?php echo esc_url(get_theme_file_uri("images/slide-02.jpg")); ?>" alt="カフェでノートパソコンを操作するビジネスウェアの女性" width="271" height="210">
        </li>
        <li class="p-sect-mission__slider-item">
          <img class="p-sect-mission__slider-img" src="<?php echo esc_url(get_theme_file_uri("images/slide-03.jpg")); ?>" alt="イスに座って面談をするスーツ姿の女性二人。" width="271" height="210">
        </li>
      </ul>
      <!-- 無限ループ用にスライダーを複製 -->
      <ul class="p-sect-mission__slider-list">
        <li class="p-sect-mission__slider-item">
          <img class="p-sect-mission__slider-img" src="<?php echo esc_url(get_theme_file_uri("images/slide.jpg")); ?>" alt="電話対応しながらパソコンを操作するスーツ姿の男性" width="271" height="210">
        </li>
        <li class="p-sect-mission__slider-item">
          <img class="p-sect-mission__slider-img" src="<?php echo esc_url(get_theme_file_uri("images/slide-02.jpg")); ?>" alt="カフェでノートパソコンを操作するビジネスウェアの女性" width="271" height="210">
        </li>
        <li class="p-sect-mission__slider-item">
          <img class="p-sect-mission__slider-img" src="<?php echo esc_url(get_theme_file_uri("images/slide-03.jpg")); ?>" alt="イスに座って面談をするスーツ姿の女性二人。" width="271" height="210">
        </li>
        <li class="p-sect-mission__slider-item">
          <img class="p-sect-mission__slider-img" src="<?php echo esc_url(get_theme_file_uri("images/slide.jpg")); ?>" alt="電話対応しながらパソコンを操作するスーツ姿の男性" width="271" height="210">
        </li>
        <li class="p-sect-mission__slider-item">
          <img class="p-sect-mission__slider-img" src="<?php echo esc_url(get_theme_file_uri("images/slide-02.jpg")); ?>" alt="カフェでノートパソコンを操作するビジネスウェアの女性" width="271" height="210">
        </li>
        <li class="p-sect-mission__slider-item">
          <img class="p-sect-mission__slider-img" src="<?php echo esc_url(get_theme_file_uri("images/slide-03.jpg")); ?>" alt="イスに座って面談をするスーツ姿の女性二人。" width="271" height="210">
        </li>
      </ul>
    </div>
    <!-- /.l-inner-top -->
  </section>
  <!-- /.p-sect-mission -->

  <!-- .p-sect-staff -->
  <section class="p-sect-staff p-page-top__staff">
    <!-- .l-inner-top -->
    <div class="p-sect-staff__inner l-inner-top js-inview u-fade-in-up">
      <!-- .c-heading-lv2 -->
      <hgroup class="c-heading-lv2">
        <h2 class="c-heading-lv2__main"><span class="c-heading-lv2__underline">人</span>を知る</h2>
        <p class="c-heading-lv2__sub">Member</p>
      </hgroup>
      <!-- /.c-heading-lv2 -->
      <p class="p-sect-staff__text">
        <span class="u-text-upper">Tetote</span>の社員がどういった信念を持って働いているのか、<br>一日のスケジュールや仕事内容などを紹介します。
      </p>
      <?php
      $the_query = new WP_Query([
        "post_type" => "staff",
      ]);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <ul class="p-sect-staff__list" id="js-staffSlider">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <!-- .c-card-staff -->
            <li class="c-card-staff p-sect-staff__item">
              <a href="<?php the_permalink(); ?>" class="c-card-staff__link">
                <div class="c-card-staff__body">
                  <?php
                  // 社員情報のカスタムフィールドを取得
                  $post_id = get_the_ID();
                  $meta = [
                    'message'  => get_post_meta($post_id, 'cf-staff-message', true),  // メッセージ（1行目）
                    'message2' => get_post_meta($post_id, 'cf-staff-message2', true), // メッセージ（2行目）
                    'position' => get_post_meta($post_id, 'cf-staff-position', true), // 職種
                    'name'     => get_post_meta($post_id, 'cf-staff-name', true),     // 名前
                    'joined'   => get_post_meta($post_id, 'cf-staff-joined', true),   // 入社年
                  ];
                  ?>
                  <!-- メッセージ -->
                  <div class="c-card-staff__message-wrap">
                    <p class="c-card-staff__message"><?php echo esc_html($meta['message']); ?></p>
                    <p class="c-card-staff__message"><?php echo esc_html($meta['message2']); ?></p>
                  </div>
                  <!-- プロフィール -->
                  <div class="c-card-staff__profile">
                    <p class="c-card-staff__position"><?php echo esc_html($meta['position']); ?></p>
                    <p class="c-card-staff__joined"><?php echo esc_html($meta['joined']); ?></p>
                    <p class="c-card-staff__name"><?php echo esc_html($meta['name']); ?></p>
                  </div>
                </div>
                <figure class="c-card-staff__img-wrap">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail( 'full', ['class' => 'c-card-staff__img']); ?>
                  <?php else : ?>
                    <img class="c-card-staff__img" src="<?php echo esc_url(get_theme_file_uri("images/noimage.png" )); ?>)" alt="NoImage画像" width="246" height="311">
                  <?php endif ; ?>
                </figure>
              </a>
            </li>
            <!-- /.c-card-staff -->
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
      <?php else : ?>
          <p>記事が投稿されていません。</p>
      <?php endif; ?>
      <div class="p-sect-staff__btn-wrap">
        <!-- .c-btn-rect -->
        <a href="<?php echo esc_url(home_url("/staff")) ?>" class="c-btn-rect p-sect-staff__btn">
          <span class="c-btn-rect__text">View more</span>
          <svg class="c-btn-rect__icon" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path d="M6.40298 0L3.59705 2.80555L10.7913 9.99984L3.59705 17.1945L6.40298 20L16.403 9.99984L6.40298 0Z" fill="currentColor"/>
          </svg>
        </a>
        <!-- /.c-btn-rect -->
        <div class="p-sect-staff__arrow-btns">
          <!-- .c-btn-icon -->
          <button class="c-btn-icon p-sect-staff__arrow-btn" id="js-prevBtn" type="button" aria-label="前のスライドへ">
            <svg width="17" height="15" viewBox="0 0 17 15" fill="none">
              <path d="M0.292892 6.65691C-0.0976315 7.04743 -0.0976315 7.6806 0.292892 8.07112L6.65685 14.4351C7.04738 14.8256 7.68054 14.8256 8.07107 14.4351C8.46159 14.0446 8.46159 13.4114 8.07107 13.0209L2.41421 7.36401L8.07107 1.70716C8.46159 1.31664 8.46159 0.68347 8.07107 0.292946C7.68054 -0.0975785 7.04738 -0.0975785 6.65685 0.292946L0.292892 6.65691ZM17 6.36401L1 6.36401L1 8.36401L17 8.36401L17 6.36401Z" fill="currentColor"/>
            </svg>
          </button>
          <!-- /.c-btn-icon -->

          <!-- .c-btn-icon -->
          <button class="c-btn-icon p-sect-staff__arrow-btn" id="js-nextBtn" type="button" aria-label="次のスライドへ">
            <svg class="c-btn-icon__icon" width="17" height="15" viewBox="0 0 17 15" fill="none">
              <path d="M16.7071 8.07112C17.0976 7.6806 17.0976 7.04743 16.7071 6.65691L10.3431 0.292946C9.95262 -0.0975785 9.31946 -0.0975785 8.92893 0.292946C8.53841 0.68347 8.53841 1.31664 8.92893 1.70716L14.5858 7.36401L8.92893 13.0209C8.53841 13.4114 8.53841 14.0446 8.92893 14.4351C9.31946 14.8256 9.95262 14.8256 10.3431 14.4351L16.7071 8.07112ZM0 8.36401H16V6.36401H0V8.36401Z" fill="currentColor"/>
            </svg>
          </button>
          <!-- /.c-btn-icon -->
        </div>
      </div>
    </div>
    <!-- /.l-inner-top -->
  </section>
  <!-- /.p-sect-staff -->

  <!-- .p-sect-benefits -->
  <section class="p-sect-benefits p-page-top__benefits">
    <!-- .l-inner-top -->
    <div class="p-sect-benefits__inner l-inner-top js-inview u-fade-in-up">
      <!-- .c-heading-lv2 -->
      <hgroup class="c-heading-lv2 p-sect-benefits__title">
        <h2 class="c-heading-lv2__main"><span class="c-heading-lv2__underline">制度・環境</span>を知る</h2>
        <p class="c-heading-lv2__sub">Benefits</p>
      </hgroup>
      <!-- /.c-heading-lv2 -->
      <p class="p-sect-benefits__text">
        当社では働く従業員とそのご家族が健やかに過ごせるよう、<br>多様な研修、福利厚生を提供しています。
      </p>
      <ul class="p-sect-benefits__list">
        <li class="p-sect-benefits__item">
          <a href="<?php echo esc_url(home_url("/career")) ?>" class="p-sect-benefits__card">
            <div class="p-sect-benefits__body">
              <h3 class="p-sect-benefits__card-title">研修制度とキャリアパス</h3>
              <p class="p-sect-benefits__card-text">
                個々の目標に合わせたキャリアパスを支える、豊富な研修メニューで、あなた自身の成長を強力にサポートします。
              </p>
            </div>
            <figure class="p-sect-benefits__img-wrap">
              <img src="<?php echo esc_url(get_theme_file_uri("images/benefits.png")); ?>" alt="" class="p-sect-benefits__img" width="251" height="251">
              <!-- .c-btn-icon -->
              <span class="c-btn-icon p-sect-benefits__btn">
                <svg class="c-btn-icon__icon" width="17" height="15" viewBox="0 0 17 15" fill="none">
                  <path d="M16.7071 8.07112C17.0976 7.6806 17.0976 7.04743 16.7071 6.65691L10.3431 0.292946C9.95262 -0.0975785 9.31946 -0.0975785 8.92893 0.292946C8.53841 0.68347 8.53841 1.31664 8.92893 1.70716L14.5858 7.36401L8.92893 13.0209C8.53841 13.4114 8.53841 14.0446 8.92893 14.4351C9.31946 14.8256 9.95262 14.8256 10.3431 14.4351L16.7071 8.07112ZM0 8.36401H16V6.36401H0V8.36401Z" fill="currentColor"/>
                </svg>
              </span>
              <!-- /.c-btn-icon -->
            </figure>
          </a>
        </li>
        <li class="p-sect-benefits__item">
          <a href="<?php echo esc_url(home_url("/benefits")) ?>" class="p-sect-benefits__card">
            <div class="p-sect-benefits__body">
              <h3 class="p-sect-benefits__card-title">福利厚生</h3>
              <p class="p-sect-benefits__card-text">
                <span class="u-text-upper">Tetote</span>の福利厚生制度は、従業員の健康と幸福を重視し、働きやすい環境を提供することを目的としています。
              </p>
            </div>
            <figure class="p-sect-benefits__img-wrap">
              <img src="<?php echo esc_url(get_theme_file_uri("images/benefits-02.png")); ?>" alt="" class="p-sect-benefits__img" width="251" height="251">
              <!-- .c-btn-icon -->
              <span class="c-btn-icon p-sect-benefits__btn">
                <svg class="c-btn-icon__icon" width="17" height="15" viewBox="0 0 17 15" fill="none">
                  <path d="M16.7071 8.07112C17.0976 7.6806 17.0976 7.04743 16.7071 6.65691L10.3431 0.292946C9.95262 -0.0975785 9.31946 -0.0975785 8.92893 0.292946C8.53841 0.68347 8.53841 1.31664 8.92893 1.70716L14.5858 7.36401L8.92893 13.0209C8.53841 13.4114 8.53841 14.0446 8.92893 14.4351C9.31946 14.8256 9.95262 14.8256 10.3431 14.4351L16.7071 8.07112ZM0 8.36401H16V6.36401H0V8.36401Z" fill="currentColor"/>
                </svg>
              </span>
              <!-- /.c-btn-icon -->
            </figure>
          </a>
        </li>
      </ul>
    </div>
    <!-- /.l-inner-top -->
  </section>
  <!-- /.p-sect-benefits -->

  <!-- .p-sect-blog -->
  <section class="p-sect-blog p-page-top__blog">
    <!-- .l-inner-top -->
    <div class="p-sect-blog__inner l-inner-top js-inview u-fade-in-up">
      <!-- .c-heading-lv2 -->
      <hgroup class="c-heading-lv2">
        <h2 class="c-heading-lv2__main">採用ブログ</h2>
        <p class="c-heading-lv2__sub">Blog</p>
      </hgroup>
      <!-- /.c-heading-lv2 -->
      <p class="p-sect-blog__text">
        採用情報やイベント情報、社員の紹介など、<br>日々の現場の様子をご紹介します。
      </p>
      <?php
      $the_query = new WP_Query([
        "post_type" => "post",
        "posts_per_page" => 4,
      ]);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <ul class="p-sect-blog__list">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="p-sect-blog__item">
              <!-- .p-media -->
              <a href="<?php esc_url(the_permalink()); ?>" class="p-media p-sect-blog__media">
                <div class="p-media__body">
                  <?php // カテゴリー一覧
                  $categories = get_the_category();
                  if (!empty($categories)) {
                    $limit = 5;
                    $count = 0;
  
                    echo '<ul class="c-categories p-media__categories">';
                    foreach ($categories as $category) {
                      if ($count >= $limit) {
                        break;
                      }
                      echo '<li class="c-categories__item">';
                      echo '<span class="c-categories__text">' . esc_html($category->name) . '</span>';
                      echo '</li>';
                      $count++;
                    }
                    echo '</ul>';
                  }
                  ?>
                  <div class="p-media__title-wrap">
                    <!-- タイトル -->
                    <h3 class="p-media__title"><?php esc_html(the_title()); ?></h3>
                  </div>
                  <!-- 公開日 -->
                  <time class="p-media__date" datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                    <?php echo esc_html(get_the_date('Y.m.d')); ?>
                  </time>
                </div>
                <figure class="p-media__img-wrap">
                  <?php if (has_post_thumbnail()) : ?>
                    <!-- アイキャッチ画像 -->
                    <?php the_post_thumbnail('full', ['class' => 'p-media__img']); ?>
                  <?php else : ?>
                    <!-- NoImage画像 -->
                    <img class="p-media__img" src="<?php echo esc_url(get_theme_file_uri("images/noimage.png")); ?>" alt="NoImage画像" width="121" height="121">
                  <?php endif ; ?>
                </figure>
              </a>
              <!-- /.p-media -->
            </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
      <?php else : ?>
        <p class="u-mt100">記事が投稿されていません。</p>
      <?php endif; ?>
      <div class="p-sect-blog__btn-wrap">
        <!-- .c-btn-icon -->
        <a href="<?php echo esc_url(home_url("/blog")) ?>" class="c-btn-icon p-sect-blog__btn" aria-label="採用ブログ一覧ページに移動する">
          <svg class="c-btn-icon__icon" width="17" height="15" viewBox="0 0 17 15" fill="none">
            <path d="M16.7071 8.07112C17.0976 7.6806 17.0976 7.04743 16.7071 6.65691L10.3431 0.292946C9.95262 -0.0975785 9.31946 -0.0975785 8.92893 0.292946C8.53841 0.68347 8.53841 1.31664 8.92893 1.70716L14.5858 7.36401L8.92893 13.0209C8.53841 13.4114 8.53841 14.0446 8.92893 14.4351C9.31946 14.8256 9.95262 14.8256 10.3431 14.4351L16.7071 8.07112ZM0 8.36401H16V6.36401H0V8.36401Z" fill="currentColor"/>
          </svg>
        </a>
        <!-- /.c-btn-icon -->
        <p class="p-sect-blog__btn-text">View More</p>
      </div>
    </div>
    <!-- /.l-inner-top -->
  </section>
  <!-- /.p-sect-blog -->

  <!-- .p-sect-recruit -->
  <section class="p-sect-recruit p-page-top__recruit">
    <!-- .l-inner-top -->
    <div class="p-sect-recruit__inner l-inner-top js-inview u-fade-in-up">
      <!-- .c-heading-lv2 -->
      <hgroup class="c-heading-lv2 p-sect-recruit__title">
        <h2 class="c-heading-lv2__main">採用情報</h2>
        <p class="c-heading-lv2__sub">Recruitment</p>
      </hgroup>
      <!-- /.c-heading-lv2 -->
      <p class="p-sect-recruit__text">
        募集要項（職種、業務内容、応募条件、選考フロー）とよくある質問・会社概要などをまとめています。
      </p>
      <div class="p-sect-recruit__btn-wrap">
        <!-- .c-btn-rect -->
        <a href="<?php echo esc_url(home_url("/details")) ?>" class="c-btn-rect p-sect-recruit__btn">
          <span class="c-btn-rect__text">募集要項</span>
          <svg class="c-btn-rect__icon" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path d="M6.40298 0L3.59705 2.80555L10.7913 9.99984L3.59705 17.1945L6.40298 20L16.403 9.99984L6.40298 0Z" fill="currentColor"/>
          </svg>
        </a>
        <!-- /.c-btn-rect -->

        <!-- .c-btn-rect -->
        <a href="<?php echo esc_url(home_url("/faq")) ?>" class="c-btn-rect p-sect-recruit__btn">
          <span class="c-btn-rect__text">よくある質問</span>
          <svg class="c-btn-rect__icon" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path d="M6.40298 0L3.59705 2.80555L10.7913 9.99984L3.59705 17.1945L6.40298 20L16.403 9.99984L6.40298 0Z" fill="currentColor"/>
          </svg>
        </a>
        <!-- /.c-btn-rect -->

        <!-- .c-btn-rect -->
        <a href="<?php echo esc_url(home_url("/about-us#company")) ?>" class="c-btn-rect p-sect-recruit__btn">
          <span class="c-btn-rect__text">会社概要</span>
          <svg class="c-btn-rect__icon" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path d="M6.40298 0L3.59705 2.80555L10.7913 9.99984L3.59705 17.1945L6.40298 20L16.403 9.99984L6.40298 0Z" fill="currentColor"/>
          </svg>
        </a>
        <!-- /.c-btn-rect -->
      </div>
    </div>
    <!-- /.l-inner-top -->
  </section>
  <!-- /.p-sect-recruit -->
</main>
<!-- /.p-page-top -->

<?php get_footer(); ?>