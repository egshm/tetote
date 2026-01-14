<?php get_header(); ?>

<!-- .p-page-career -->
<main class="p-page-career">
  <!-- .p-fv-sub -->
  <div class="p-fv-sub p-page-career__fv">
    <div class="p-fv-sub__inner">
      <div class="p-fv-sub__content">
        <hgroup class="p-fv-sub__title">
          <h1 class="p-fv-sub__title-main">Career</h1>
          <p class="p-fv-sub__title-sub">研修制度とキャリアパス</p>
        </hgroup>
        <p class="p-fv-sub__text">キャリアパスを支える充実した、研修制度</p>
      </div>
    </div>
    <div class="p-fv-sub__img-wrap" aria-hidden="true">
      <img
        src="<?php echo esc_url(get_theme_file_uri("images/fv-career.jpg")); ?>"
        alt=""
        class="p-fv-sub__img"
        width="1440"
        height="339"
        fetchpriority="high"
        decoding="async"
        loading="eager"
      >
    </div>
  </div>
  <!-- /.p-fv-sub -->

  <!-- .c-breadcrumb -->
  <?php if (function_exists('bcn_display')) : ?>
    <nav class="c-breadcrumb p-page-career__breadcrumb" aria-label="パンくずナビゲーション" vocab="https://schema.org/" typeof="BreadcrumbList">
      <!-- .l-inner-sub -->
      <div class="c-breadcrumb__inner l-inner-sub">
        <?php bcn_display(); ?>
      </div>
      <!-- /.l-inner-sub -->
    </nav>
  <?php endif; ?>
  <!-- /.c-breadcrumb -->

  <!-- .p-sect-career -->
  <section class="p-sect-career p-page-career__career">
    <!-- .l-inner-sub -->
    <div class="p-sect-career__inner l-inner-sub">
      <h2 class="p-sect-career__title">キャリアパスに沿った研修制度を用意</h2>
      <p class="p-sect-career__text">
        弊社では、コンサルタントのキャリアパスを、大きく4つのステージに分けています。
      </p>
      <figure class="p-sect-career__img-wrap">
        <img
          src="<?php echo esc_url(get_theme_file_uri("images/career-path.png")); ?>"
          alt="TETOTEでのキャリアパス（※コンサルタントの場合）"
          class="p-sect-career__img"
          width="980"
          height="734"
          aria-describedby="career-path-desc"
        >
        <figcaption id="career-path-desc" class="u-visually-hidden">
          <p>
            この図は、TETOTEにおけるコンサルタント職のキャリアパスを示しています。
          </p>
          <dl>
            <dt>01.コンサルタント</dt>
            <dd>入社後2～3年。プロジェクトチームの一員として、データ分析、資料作成、クライアントとの調整などを担当。</dd>
            <dt>02.シニアコンサルタント</dt>
            <dd>コンサルタント経験3～5年。プロジェクトリーダーとして、プロジェクト全体の指揮を執る。</dd>
            <dt>03.マネージャー</dt>
            <dd>シニアコンサルタント経験5年以上。複数のプロジェクトを管理し、コンサルタントの指揮・育成。</dd>
            <dt>04.パートナー</dt>
            <dd>マネージャー経験10年以上。コンサルティングファームの経営に参画。新規事業の立ち上げ、クライアントとの関係構築。</dd>
          </dl>
        </figcaption>
      </figure>
      <p class="p-sect-career__text">
        TETOTEは、コンサルタントのキャリアパスを支えるために、以下の独自の研修制度を設けています。
      </p>
      <ul class="p-sect-career__list">
        <li class="p-sect-career__item">
          <h3 class="p-sect-career__item-title">1. ケーススタディ研修</h3>
          <p class="p-sect-career__text">
            TETOTEの過去のプロジェクト事例を基にしたケーススタディ研修を実施しています。<br>
            この研修では、実際のプロジェクトで直面する課題を解決するために、分析力、問題解決能力、プレゼンテーション能力などを実践的に習得することができます。
          </p>
        </li>
        <li class="p-sect-career__item">
          <h3 class="p-sect-career__item-title">2. クライアント対応研修</h3>
          <p class="p-sect-career__text">
            TETOTEは、クライアントとの信頼関係構築を重視しています。<br>
            この研修では、クライアントとのコミュニケーションスキル、交渉スキル、プレゼンテーションスキルなどを習得し、クライアントの課題解決に貢献できるコンサルタントを育成します。
          </p>
        </li>
        <li class="p-sect-career__item">
          <h3 class="p-sect-career__item-title">3. 専門知識研修</h3>
          <p class="p-sect-career__text">
            財務、会計、ITなど、コンサルタント業務に必要な専門知識を習得するための研修を実施しています。<br>
            TETOTEは、幅広い分野の知識を持つコンサルタントを育成し、クライアントに最適なソリューションを提供できるようにしています。
          </p>
        </li>
        <li class="p-sect-career__item">
          <h3 class="p-sect-career__item-title">4. マネジメント研修</h3>
          <p class="p-sect-career__text">
            プロジェクトマネジメント、リーダーシップ、チームビルディングなど、マネジメントスキルを習得するための研修を実施しています。<br>
            TETOTEは、将来的にマネジメント層を担うコンサルタントを育成し、組織全体の成長を促進しています。
          </p>
        </li>
        <li class="p-sect-career__item">
          <h3 class="p-sect-career__item-title">5. 外部研修</h3>
          <p class="p-sect-career__text">
            社外で実施される研修にも積極的に参加することができます。<br>
            TETOTEは、最新の知識やスキルを習得し、常に成長し続けるコンサルタントを育成します。
          </p>
        </li>
      </ul>
    </div>
    <!-- /.l-inner-sub -->
  </section>
  <!-- /.p-sect-career -->
</main>
<!-- /.p-page-career -->

<?php get_footer(); ?>
