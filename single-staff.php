<?php get_header(); ?>

<!-- .p-page-staff-detail -->
<main class="p-page-staff-detail">
  <!-- .p-sect-hero-staff -->
  <section class="p-sect-hero-staff p-page-staff-detail__hero">
    <!-- .l-inner-sub -->
    <div class="p-sect-hero-staff__inner l-inner-sub">
      <div class="p-sect-hero-staff__body">
        <?php
          // 社員情報のカスタムフィールドを取得
          $current_post_id = get_the_ID();
          $meta = [
            'message'  => get_post_meta($current_post_id, 'cf-staff-message', true),  // メッセージ（1行目）
            'message2' => get_post_meta($current_post_id, 'cf-staff-message2', true), // メッセージ（2行目）
            'position' => get_post_meta($current_post_id, 'cf-staff-position', true), // 職種
            'name'     => get_post_meta($current_post_id, 'cf-staff-name', true),     // 名前
            'joined'   => get_post_meta($current_post_id, 'cf-staff-joined', true),   // 入社年
            'career'   => get_post_meta($current_post_id, 'cf-staff-career', true),   // 経歴
          ];
        ?>
        <!-- メッセージ -->
        <hgroup class="p-sect-hero-staff__title">
          <h2 class="p-sect-hero-staff__title-main"><?php echo esc_html($meta['message']); ?></h2>
          <p class="p-sect-hero-staff__title-sub"><?php echo esc_html($meta['message2']); ?></p>
        </hgroup>
        <!-- プロフィール -->
        <div class="p-sect-hero-staff__profile">
          <p class="p-sect-hero-staff__position"><?php echo esc_html($meta['position']); ?></p>
          <p class="p-sect-hero-staff__name"><?php echo esc_html($meta['name']); ?></p>
          <p class="p-sect-hero-staff__joined"><?php echo esc_html($meta['joined']); ?></p>
          <p class="p-sect-hero-staff__career"><?php echo esc_html($meta['career']); ?></p>
        </div>
      </div>
      <figure class="p-sect-hero-staff__img-wrap">
        <?php if (has_post_thumbnail()) : ?>
          <!-- アイキャッチ画像 -->
          <?php the_post_thumbnail( 'full', ['class' => 'p-sect-hero-staff__img']); ?>
        <?php else : ?>
          <!-- NoImage画像 -->
          <img class="p-sect-hero-staff__img" src="<?php echo esc_url(get_theme_file_uri("images/noimage.png" )); ?>)" alt="NoImage画像" width="286" height="368">
        <?php endif ; ?>
      </figure>
    </div>
    <!-- /.l-inner-sub -->
  </section>
  <!-- .p-sect-hero-staff -->

  <!-- .c-breadcrumb -->
  <?php if (function_exists('bcn_display')) : ?>
    <nav class="c-breadcrumb p-page-staff-detail__breadcrumb" aria-label="パンくずナビゲーション" vocab="https://schema.org/" typeof="BreadcrumbList">
      <!-- .l-inner-sub -->
      <div class="c-breadcrumb__inner l-inner-sub">
        <?php bcn_display(); ?>
      </div>
      <!-- /.l-inner-sub -->
    </nav>
  <?php endif; ?>
  <!-- /.c-breadcrumb -->

  <!-- .l-inner-sub -->
  <div class="p-page-staff-detail__inner l-inner-sub">
    <div class="p-page-staff-detail__layout">
      <!-- .p-sect-post-staff -->
      <section id="js-tocContent" class="p-sect-post-staff p-page-staff-detail__post">
        <?php the_content(); ?>
      </section>
      <!-- /.p-sect-post-staff -->

      <div class="p-page-staff-detail__toc-wrap">
        <!-- .c-toc -->
        <div class="c-toc p-page-staff-detail__toc">
          <h3 class="c-toc__title">目次</h3>
          <div class="c-toc__body" id="js-toc"></div>
        </div>
        <!-- /.c-toc -->
      </div>
    </div>

    <section class="p-page-staff-detail__members">
      <h2 class="p-page-staff-detail__members-title">その他のメンバー</h2>
      <?php
      $the_query = new WP_Query([
        "post_type" => "staff",
        "posts_per_page" => 3,
        "orderby" => "rand", // ランダム表示
        "post__not_in"=> array($current_post_id), // 現在の投稿IDを除く
      ]);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <ul class="p-page-staff-detail__members-list">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <!-- .c-card-staff -->
            <li class="c-card-staff p-page-staff-detail__members-item">
              <a href="<?php the_permalink(); ?>" class="c-card-staff__link">
                <div class="c-card-staff__body">
                  <?php
                  // その他メンバーのカスタムフィールドを取得
                  $other_post_id = get_the_ID();
                  $meta = [
                    'message'  => get_post_meta($other_post_id, 'cf-staff-message', true),  // メッセージ（1行目）
                    'message2' => get_post_meta($other_post_id, 'cf-staff-message2', true), // メッセージ（2行目）
                    'position' => get_post_meta($other_post_id, 'cf-staff-position', true), // 職種
                    'name'     => get_post_meta($other_post_id, 'cf-staff-name', true),     // 名前
                    'joined'   => get_post_meta($other_post_id, 'cf-staff-joined', true),   // 入社年
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
        <p>その他のメンバーはいません。</p>
      <?php endif; ?>
    </section>
  </div>
  <!-- /.l-inner-sub -->
</main>
<!-- /.p-page-staff-detail -->

<?php get_footer(); ?>