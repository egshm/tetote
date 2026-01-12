<?php get_header(); ?>

<!-- .p-page-blog-detail -->
<main class="p-page-blog-detail">
  <!-- .c-breadcrumb -->
  <?php if (function_exists('bcn_display')) : ?>
    <nav class="c-breadcrumb p-page-blog-detail__breadcrumb" aria-label="パンくずナビゲーション" vocab="https://schema.org/" typeof="BreadcrumbList">
      <div class="c-breadcrumb__inner">
        <?php bcn_display(); ?>
      </div>
    </nav>
  <?php endif; ?>
  <!-- /.c-breadcrumb -->

  <div class="p-page-blog-detail__inner">
    <div class="p-page-blog-detail__content">
      <!-- .p-sect-hero-blog -->
      <section class="p-sect-hero-blog p-page-blog-detail__hero">
        <div class="p-sect-hero-blog__inner">
          <div class="p-sect-hero-blog__header">
            <?php // カテゴリー一覧
            $categories = get_the_category();
            if (!empty($categories)) {
              $limit = 5;
              $count = 0;

              echo '<ul class="c-categories p-sect-hero-blog__categories">';
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
            <!-- 公開日 -->
            <time class="p-sect-hero-blog__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.n.j'); ?></time>
          </div>
          <!-- タイトル -->
          <h1 class="p-sect-hero-blog__title"><?php the_title(); ?></h1>
          <figure class="p-sect-hero-blog__img-wrap">
            <?php if (has_post_thumbnail()) : ?>
              <!-- アイキャッチ画像 -->
              <?php the_post_thumbnail('full', ['class' => 'p-sect-hero-blog__img']); ?>
            <?php else : ?>
              <!-- NoImage画像 -->
              <img class="p-sect-hero-blog__img" src="<?php echo esc_url(get_theme_file_uri("images/noimage.png")); ?>" alt="NoImage画像" width="720" height="411">
            <?php endif ; ?>
          </figure>
        </div>
      </section>
      <!-- /.p-sect-hero-blog -->

      <!-- .p-sect-post-blog -->
      <section class="p-sect-post-blog p-page-blog-detail__post">
        <?php the_content(); ?>
      </section>
      <!-- .p-sect-post-blog -->
    </div>
  </div>

  <?php
  $prev_post = get_adjacent_post(false, '', true);
  $next_post = get_adjacent_post(false, '', false);
  ?>
  <?php if ($prev_post || $next_post): ?>
    <!-- .p-part-post-navi -->
    <nav class="p-part-post-navi p-page-blog-detail__post-navi" aria-label="記事の前後ナビゲーション">
      <ul class="p-part-post-navi__inner">
        <?php if ($prev_post): ?>
          <li class="p-part-post-navi__prev">
            <!-- 前の記事のURL -->
            <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="p-part-post-navi__link">
              <div class="p-part-post-navi__body">
                <div class="p-part-post-navi__title-wrap">
                  <p class="p-part-post-navi__title"><?php echo esc_html(get_the_title($prev_post->ID)); ?></p>
                </div>
                <time class="p-part-post-navi__date" datetime="<?php echo esc_attr(get_the_date('Y-m-d', $prev_post->ID)); ?>">
                  <?php echo esc_html(get_the_date('Y.m.d', $prev_post->ID)); ?>
                </time>
              </div>
              <!-- .c-btn-icon -->
              <div class="c-btn-icon p-part-post-navi__btn" aria-hidden="true">
                <svg width="8" height="12" viewBox="0 0 8 12" fill="none">
                  <path d="M5.76938 0L0 5.76933L5.76938 11.5383L7.67405 9.63361L3.81014 5.76933L7.67405 1.90505L5.76938 0Z" fill="currentColor"/>
                </svg>
              </div>
              <!-- /.c-btn-icon -->
            </a>
          </li>
        <?php endif; ?>

        <?php if ($next_post): ?>
          <li class="p-part-post-navi__next">
            <!-- 次の記事のURL -->
            <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="p-part-post-navi__link">
              <div class="p-part-post-navi__body">
                <div class="p-part-post-navi__title-wrap">
                  <p class="p-part-post-navi__title"><?php echo esc_html(get_the_title($next_post->ID)); ?></p>
                </div>
                <time class="p-part-post-navi__date" datetime="<?php echo esc_attr(get_the_date('Y-m-d', $next_post->ID)); ?>">
                  <?php echo esc_html(get_the_date('Y.m.d', $next_post->ID)); ?>
                </time>
              </div>
              <!-- .c-btn-icon -->
              <div class="c-btn-icon p-part-post-navi__btn" aria-hidden="true">
                <svg width="8" height="12" viewBox="0 0 8 12" fill="none">
                  <path d="M0 1.90472L3.86391 5.769L0 9.63328L1.90472 11.5384L7.67409 5.769L1.90472 0L0 1.90472Z" fill="currentColor"/>
                </svg>
              </div>
              <!-- /.c-btn-icon -->
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </nav>
    <!-- /.p-part-post-navi -->
  <?php endif; ?>
</main>
<!-- /.p-page-blog-detail -->

<?php get_footer(); ?>