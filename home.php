<?php get_header(); ?>

<!-- .p-page-blog -->
<main class="p-page-blog">
  <!-- .p-part-fv-sub -->
  <div style="background-image: url('<?php echo esc_url(get_theme_file_uri("images/fv-blog.jpg")); ?>')" class="p-part-fv-sub p-page-blog__fv">
    <div class="p-part-fv-sub__inner">
      <div class="p-part-fv-sub__content">
        <hgroup class="p-part-fv-sub__title">
          <h1 class="p-part-fv-sub__title-main">Blog</h1>
          <p class="p-part-fv-sub__title-sub">採用ブログ</p>
        </hgroup>
        <p class="p-part-fv-sub__text">採用情報やイベント情報などをご紹介します。</p>
      </div>
    </div>
  </div>
  <!-- /.p-part-fv-sub -->

  <!-- .c-breadcrumb -->
  <?php if (function_exists('bcn_display')) : ?>
    <nav class="c-breadcrumb p-page-blog__breadcrumb" aria-label="パンくずナビゲーション" vocab="https://schema.org/" typeof="BreadcrumbList">
      <div class="c-breadcrumb__inner">
        <?php bcn_display(); ?>
      </div>
    </nav>
  <?php endif; ?>
  <!-- /.c-breadcrumb -->

  <div class="p-page-blog__inner">
    <?php if (have_posts()) : ?>
      <ul class="p-page-blog__list">
        <?php while (have_posts()) : the_post(); ?>
          <li class="p-page-blog__item">
            <!-- .p-part-media -->
            <a href="<?php the_permalink(); ?>" class="p-part-media p-part-media--floral-white p-page-blog__media">
              <div class="p-part-media__body">
                <?php // カテゴリー一覧
                $categories = get_the_category();
                if (!empty($categories)) {
                  $limit = 5;
                  $count = 0;

                  echo '<ul class="c-categories p-part-media__categories">';
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
                <div class="p-part-media__title-wrap">
                  <!-- タイトル -->
                  <h2 class="p-part-media__title"><?php the_title(); ?></h2>
                </div>
                <!-- 公開日 -->
                <time class="p-part-media__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
              </div>
              <figure class="p-part-media__img-wrap">
                <?php if (has_post_thumbnail()) : ?>
                  <!-- アイキャッチ画像 -->
                  <?php the_post_thumbnail('full', ['class' => 'p-part-media__img']); ?>
                <?php else : ?>
                  <!-- NoImage画像 -->
                  <img class="p-part-media__img" src="<?php echo esc_url(get_theme_file_uri("images/noimage.png")); ?>" alt="NoImage画像" width="121" height="121">
                <?php endif ; ?>
              </figure>
            </a>
            <!-- /.p-part-media -->
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
</main>
<!-- /.p-page-blog -->

<?php get_footer(); ?>