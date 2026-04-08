<?php get_header(); ?>

<!-- .p-page-staff -->
<main class="p-page-staff">
  <!-- .p-fv-sub -->
  <div class="p-fv-sub p-page-staff__fv">
    <div class="p-fv-sub__inner">
      <div class="p-fv-sub__content">
        <hgroup class="p-fv-sub__title">
          <h2 class="p-fv-sub__title-main">Staff</h2>
          <p class="p-fv-sub__title-sub">社員について</p>
        </hgroup>
        <p class="p-fv-sub__text">弊社社員のリアルな声を紹介しています。</p>
      </div>
    </div>
    <div class="p-fv-sub__img-wrap" aria-hidden="true">
      <picture>
        <source
          srcset="<?php echo esc_url(get_theme_file_uri("images/fv-staff_sp.webp")); ?>"
          type="image/webp"
          media="(max-width: 767.9px)"
        >
        <source
          srcset="<?php echo esc_url(get_theme_file_uri("images/fv-staff_sp.jpg")); ?>"
          media="(max-width: 767.9px)"
        >
        <source
          srcset="<?php echo esc_url(get_theme_file_uri('images/fv-staff.webp')); ?>"
          type="image/webp"
        >
        <source
          srcset="<?php echo esc_url(get_theme_file_uri("images/fv-staff.jpg")); ?>"
        >
        <img
          src="<?php echo esc_url(get_theme_file_uri("images/fv-staff.jpg")); ?>"
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
    <nav class="c-breadcrumb p-page-staff__breadcrumb" aria-label="パンくずナビゲーション" vocab="https://schema.org/" typeof="BreadcrumbList">
      <!-- .l-content -->
      <div class="c-breadcrumb__inner l-content l-content--sub">
        <?php bcn_display(); ?>
      </div>
      <!-- /.l-content -->
    </nav>
  <?php endif; ?>
  <!-- /.c-breadcrumb -->

  <!-- .l-content -->
  <div class="p-page-staff__inner l-content l-content--sub">
    <?php
    $the_query = new WP_Query([
      "post_type" => "staff",
    ]);
    ?>
    <?php if ($the_query->have_posts()) : ?>
      <ul class="p-page-staff__list">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <!-- .c-card-staff -->
          <li class="c-card-staff p-page-staff__item">
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
                <?php
                $thumb = get_field('cf-staff-thumb');
                $thumb_sp = get_field('cf-staff-thumb-sp');
                ?>
                <picture>
                  <source
                    srcset="<?php echo esc_url($thumb_sp['url']); ?>"
                    media="(max-width: 767.9px)"
                  >
                  <img
                    src="<?php echo esc_url($thumb['url']); ?>"
                    alt="<?php echo esc_attr($thumb['alt']); ?>"
                    class="c-card-staff__img"
                    width="300"
                    height="379"
                    loading="lazy"
                  >
                </picture>
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
  </div>
  <!-- /.l-content -->
</main>
<!-- /.p-page-staff -->

<?php get_footer(); ?>