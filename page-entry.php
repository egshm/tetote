<?php get_header(); ?>

<!-- .p-page-entry -->
<main class="p-page-entry">
  <!-- .c-breadcrumb -->
  <?php if (function_exists('bcn_display')) : ?>
    <nav class="c-breadcrumb p-page-entry__breadcrumb" aria-label="パンくずナビゲーション" vocab="https://schema.org/" typeof="BreadcrumbList">
      <div class="c-breadcrumb__inner">
        <?php bcn_display(); ?>
      </div>
    </nav>
  <?php endif; ?>
  <!-- /.c-breadcrumb -->

  <div class="p-page-entry__inner">
    <section class="p-page-entry__content">
      <hgroup class="p-page-entry__title">
        <h2 class="p-page-entry__title-main"><span class="p-page-entry__title-accent">新卒・中途採用</span>エントリーフォーム</h2>
        <p class="p-page-entry__title-sub">Entry Form</p>
      </hgroup>
      <p class="p-page-entry__text" id="form-desc">
        当社へ入社ご希望の方は、下記の送信フォームより送信して下さい。※は必須項目になります。
      </p>

      <!-- .c-form -->
      <?php echo do_shortcode('[contact-form-7 id="ff83cc1" title="新卒・中途採用エントリーフォーム"]'); ?>
      <!-- /.c-form -->
    </section>
  </div>
</main>
<!-- /.p-page-entry -->

<?php get_footer(); ?>
