<?php get_header(); ?>

<!-- .p-page-entry -->
<main class="p-page-entry p-page-entry--thanks">
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
      <h2 class="p-page-entry__title-main">送信ありがとうございました。</h2>
      <p class="p-page-entry__text">3営業日以内に人事担当者より連絡させていただきます。</p>
    </section>
  </div>
</main>
<!-- /.p-page-entry -->

<?php get_footer(); ?>
