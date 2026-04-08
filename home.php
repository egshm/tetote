<?php get_header(); ?>

<!-- .p-page-blog -->
<main class="p-page-blog">
  <!-- .p-fv-sub -->
  <div class="p-fv-sub p-page-blog__fv">
    <div class="p-fv-sub__inner">
      <div class="p-fv-sub__content">
        <hgroup class="p-fv-sub__title">
          <h1 class="p-fv-sub__title-main">Blog</h1>
          <p class="p-fv-sub__title-sub">採用ブログ</p>
        </hgroup>
        <p class="p-fv-sub__text">採用情報やイベント情報などをご紹介します。</p>
      </div>
    </div>
    <div class="p-fv-sub__img-wrap" aria-hidden="true">
      <picture>
        <source
          srcset="<?php echo esc_url(get_theme_file_uri("images/fv-blog_sp.webp")); ?>"
          type="image/webp"
          media="(max-width: 767.9px)"
        >
        <source
          srcset="<?php echo esc_url(get_theme_file_uri("images/fv-blog_sp.jpg")); ?>"
          media="(max-width: 767.9px)"
        >
        <source
          srcset="<?php echo esc_url(get_theme_file_uri('images/fv-blog.webp')); ?>"
          type="image/webp"
        >
        <source
          srcset="<?php echo esc_url(get_theme_file_uri("images/fv-blog.jpg")); ?>"
        >
        <img
          src="<?php echo esc_url(get_theme_file_uri("images/fv-blog.jpg")); ?>"
          alt=""
          class="p-fv-sub__img"
          width="1440"
          height="339"
          fetchpriority="high"
          decoding="async"
          loading="eager"
        >
      </picture>
    </div>
  </div>
  <!-- /.p-fv-sub -->

  <!-- .c-breadcrumb -->
  <?php if (function_exists('bcn_display')) : ?>
    <nav class="c-breadcrumb p-page-blog__breadcrumb" aria-label="パンくずナビゲーション" vocab="https://schema.org/" typeof="BreadcrumbList">
      <!-- .l-content -->
      <div class="c-breadcrumb__inner l-content l-content--sub">
        <?php bcn_display(); ?>
      </div>
      <!-- /.l-content -->
    </nav>
  <?php endif; ?>
  <!-- /.c-breadcrumb -->

  <!-- .l-content -->
  <div class="p-page-blog__inner l-content l-content--sub">
    <?php if (have_posts()) : ?>
      <ul class="p-page-blog__list">
        <?php while (have_posts()) : the_post(); ?>
          <li class="p-page-blog__item">
            <!-- .p-media -->
            <a href="<?php the_permalink(); ?>" class="p-media p-media--floral-white p-page-blog__media">
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
                  <h2 class="p-media__title"><?php the_title(); ?></h2>
                </div>
                <!-- 公開日 -->
                <time class="p-media__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
              </div>
              <figure class="p-media__img-wrap">
                <?php
                $thumb = get_field('cf-blog-thumb');
                $thumb_sp = get_field('cf-blog-thumb-sp');
                ?>
                <picture>
                  <source
                    srcset="<?php echo esc_url($thumb_sp['url']); ?>"
                    media="(max-width: 767.9px)"
                  >
                  <img
                    src="<?php echo esc_url($thumb['url']); ?>"
                    alt="<?php echo esc_attr($thumb['alt']); ?>"
                    class="p-media__img"
                    width="158"
                    height="180"
                    loading="lazy"
                  >
                </picture>
              </figure>
            </a>
            <!-- /.p-media -->
          </li>
        <?php endwhile; ?>
      </ul>
    <?php else : ?>
      <p>記事が投稿されていません。</p>
    <?php endif; ?>

    <?php
    the_posts_pagination([
      'prev_next'  => false,
      'class'      => 'c-pagination',
      'aria_label' => '採用ブログのページネーション',
    ]);
    ?>
  </div>
  <!-- /.l-content -->
</main>
<!-- /.p-page-blog -->

<?php get_footer(); ?>