<?php get_header(); ?>

<!-- .p-page-about -->
<main class="p-page-about">
  <!-- .p-fv-sub -->
  <div class="p-fv-sub p-page-about__fv">
    <div class="p-fv-sub__inner">
      <div class="p-fv-sub__content">
        <hgroup class="p-fv-sub__title">
          <h1 class="p-fv-sub__title-main">About Us</h1>
          <p class="p-fv-sub__title-sub">TETOTEについて</p>
        </hgroup>
        <p class="p-fv-sub__text">私たちの理念を紹介します。</p>
      </div>
    </div>
    <div class="p-fv-sub__img-wrap" aria-hidden="true">
      <img
        src="<?php echo esc_url(get_theme_file_uri("images/fv-about.jpg")); ?>"
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
    <nav class="c-breadcrumb p-page-about__breadcrumb" aria-label="パンくずナビゲーション" vocab="https://schema.org/" typeof="BreadcrumbList">
      <!-- .l-inner-sub -->
      <div class="c-breadcrumb__inner l-inner-sub">
        <?php bcn_display(); ?>
      </div>
      <!-- /.l-inner-sub -->
    </nav>
  <?php endif; ?>
  <!-- /.c-breadcrumb -->

  <!-- .p-sect-philosophy -->
  <section class="p-sect-philosophy p-page-about__philosophy">
    <!-- .l-inner-sub -->
    <div class="p-sect-philosophy__inner l-inner-sub">
      <h2 class="p-sect-philosophy__title">私達が大切にしていること</h2>
      <ul class="p-sect-philosophy__list">
        <li class="p-sect-philosophy__item">
          <div class="p-sect-philosophy__item-content">
            <h3 class="p-sect-philosophy__item-title">
              <span class="p-sect-philosophy__number">1</span>飽くなき探求心で、革新を創り出す
            </h3>
            <p class="p-sect-philosophy__item-text">
              100年を超える歴史を誇りながらも、常に挑戦し続ける気概を忘れずに、未来を切り開くソリューションを提供し続けます。
              変化を恐れず、最新技術やトレンドを積極的に研究し、お客様のニーズを超える価値を生み出すことに情熱を燃やしています。
            </p>
          </div>
        </li>
        <li class="p-sect-philosophy__item">
          <div class="p-sect-philosophy__item-content">
            <h3 class="p-sect-philosophy__item-title">
              <span class="p-sect-philosophy__number">2</span>デジタル技術の力で、未来を加速させる
            </h3>
            <p class="p-sect-philosophy__item-text">
              ITコンサルタント会社として、業務効率化やイノベーション創出に貢献するために、デジタル技術を活用した最適なソリューションを提案します。
              自動化、データ分析、AIなどの技術を駆使し、お客様のビジネスを革新し、未来への飛躍を力強くサポートします。
            </p>
          </div>
        </li>
        <li class="p-sect-philosophy__item">
          <div class="p-sect-philosophy__item-content">
            <h3 class="p-sect-philosophy__item-title">
              <span class="p-sect-philosophy__number">3</span>人材こそが、未来への鍵
            </h3>
            <p class="p-sect-philosophy__item-text">
              従業員一人ひとりが、高い専門性と人間性を兼ね備えた人材であることが、お客様への最高のサービスにつながると確信しています。
              個々の能力やキャリア目標に合わせた育成プログラムや、多様な経験を積む機会を提供することで、成長を支援します。
            </p>
          </div>
        </li>
        <li class="p-sect-philosophy__item">
          <div class="p-sect-philosophy__item-content">
            <h3 class="p-sect-philosophy__item-title">
              <span class="p-sect-philosophy__number">4</span>未経験者も歓迎！情熱と意欲があれば、誰でも活躍できる
            </h3>
            <p class="p-sect-philosophy__item-text">
              IT業界未経験の方でも、熱意と向上心があれば、当社で活躍できるチャンスがあります。
              研修やOJTを通じて、必要な知識やスキルを丁寧に習得し、即戦力となる人材へと育成します。
              先輩社員によるサポート体制も充実しているので、安心してスキルアップを目指せます。
            </p>
          </div>
        </li>
        <li class="p-sect-philosophy__item">
          <div class="p-sect-philosophy__item-content">
            <h3 class="p-sect-philosophy__item-title">
              <span class="p-sect-philosophy__number">5</span>働きがいと充実感あふれる環境
            </h3>
            <p class="p-sect-philosophy__item-text">
              ワークライフバランスを重視し、従業員が働きがいと充実感を感じられる環境づくりに積極的に取り組んでいます。
              充実した福利厚生制度や、多様な働き方を可能にする制度を導入し、個々のライフスタイルに合わせた働き方を支援します。
            </p>
          </div>
        </li>
      </ul>
    </div>
    <!-- /.l-inner-sub -->
  </section>
  <!-- /.p-sect-philosophy -->

  <!-- .p-sect-ceo -->
  <section class="p-sect-ceo p-page-about__ceo">
    <!-- .l-inner-sub -->
    <div class="p-sect-ceo__inner l-inner-sub">
      <h2 class="p-sect-ceo__title">代表メッセージ</h2>
      <div class="p-sect-ceo__content">
        <div class="p-sect-ceo__body">
          <p class="p-sect-ceo__text-main">
            あなたがやりたいこと<br>それを全力でサポートできる、<br>それがTETOTEの強みです。
          </p>
          <p class="p-sect-ceo__text">
            TETOTEは、ITコンサルティングとコンサル導入企業への営業を専門とする会社です。
            設立以来、私たちは「お客様の課題解決に真摯に取り組み、共に成長する」という理念を掲げ、お客様とパートナーと共に歩んできました。
          </p>
          <p class="p-sect-ceo__text">
            お客様のニーズを深く理解し、最適なソリューションを提供することで、数多くの課題解決を支援してきました。
            その結果、お客様との深い信頼関係を築き、共に成長することができています。
          </p>
          <p class="p-sect-ceo__text">
            TETOTEは、個々の能力や個性を尊重し、多様な人材が活躍できる環境づくりに力を入れています。
            年齢、性別、国籍、経験などに関係なく、意欲と向上心のある人材を歓迎します。
          </p>
          <p class="p-sect-ceo__text">
            私たちと共に、未来を創造していきましょう。
          </p>
          <img src="<?php echo esc_url(get_theme_file_uri("images/ceo-name.svg")); ?>" alt="田中浩二郎" class="p-sect-ceo__name" width="185" height="35">
        </div>
        <figure class="p-sect-ceo__img-wrap">
          <img src="<?php echo esc_url(get_theme_file_uri("images/ceo.jpg")); ?>" alt="代表 田中浩二郎の顔写真" class="p-sect-ceo__img" width="484" height="629">
        </figure>
      </div>
    </div>
    <!-- /.l-inner-sub -->
  </section>
  <!-- /.p-sect-ceo -->

  <!-- .p-sect-service -->
  <section class="p-sect-service p-page-about__service">
    <!-- .l-inner-sub -->
    <div class="p-sect-service__inner l-inner-sub">
      <h2 class="p-sect-service__title">事業紹介</h2>
      <p class="p-sect-service__text">
        TETOTEの主力事業である「コンサルティング」以外に、新規に取り組んでいる事業をいくつか紹介させていただきます。
      </p>
      <ul class="p-sect-service__media-list">
        <li class="p-sect-service__media-item">
          <div class="p-sect-service__body">
            <h3 class="p-sect-service__media-title">コンサルティング事業</h3>
            <p class="p-sect-service__media-text-main">お客様と伴走し、売上に直接貢献できる</p>
            <p class="p-sect-service__media-text">
              営業との連携で、人と組織の成長・変革に向けた計画立案・サービス実施、さらにフォローまで。コンサルタントとして一気通貫で携わります。
            </p>
          </div>
          <figure class="p-sect-service__img-wrap">
            <img src="<?php echo esc_url(get_theme_file_uri("images/consulting.jpg")); ?>" alt="オフィスで腕を組み、自信に満ちた表情で立つ女性ビジネスパーソン" class="p-sect-service__img" width="457" height="261">
          </figure>
        </li>
        <li class="p-sect-service__media-item">
          <div class="p-sect-service__body">
            <h3 class="p-sect-service__media-title">ソリューション営業事業</h3>
            <p class="p-sect-service__media-text-main">お客様の課題を見つけ出し、必要な施策を提案する</p>
            <p class="p-sect-service__media-text">
              お客様が抱える課題へ、ヒアリングベースで提案型営業を行い、コンサルタントとの連携で課題解決を目指します。
            </p>
          </div>
          <figure class="p-sect-service__img-wrap">
            <img src="<?php echo esc_url(get_theme_file_uri("images/solution.jpg")); ?>" alt="オフィスでノートPCを使って業務に取り組む男性ビジネスパーソン" class="p-sect-service__img" width="457" height="261">
          </figure>
        </li>
        <li class="p-sect-service__media-item">
          <div class="p-sect-service__body">
            <h3 class="p-sect-service__media-title">業務系システム開発事業</h3>
            <p class="p-sect-service__media-text-main">お客様の課題解決を強力にサポートするシステムを設計する</p>
            <p class="p-sect-service__media-text">
              基本設計書に従って開発とテストを実施し、本番稼働をサポート。
              企画から運用までの全工程を通じて包括的なアプローチで、安定した運用と迅速な対応を保証します。
            </p>
          </div>
          <figure class="p-sect-service__img-wrap">
            <img src="<?php echo esc_url(get_theme_file_uri("images/development.jpg")); ?>" alt="デスクに座り、2台のモニターを使って開発業務に取り組む女性" class="p-sect-service__img" width="457" height="261">
          </figure>
        </li>
      </ul>
    </div>
    <!-- /.l-inner-sub -->
  </section>
  <!-- /.p-sect-service -->

  <!-- .p-sect-company -->
  <section class="p-sect-company p-page-about__company">
    <!-- .l-inner-sub -->
    <div class="p-sect-company__inner l-inner-sub">
      <h2 id="company" class="p-sect-company__title">会社概要</h2>
      <!-- .c-table -->
      <div class="c-table p-sect-company__table">
        <table class="c-table__inner" aria-labelledby="company">
          <tbody class="c-table__body">
            <tr class="c-table__row">
              <th class="c-table__header">会社名</th>
              <td class="c-table__text">TETOTE株式会社</td>
            </tr>
            <tr class="c-table__row">
              <th class="c-table__header">所在地</th>
              <td class="c-table__text">〒100-0001 東京都千代田区千代田 1-1-1</td>
            </tr>
            <tr class="c-table__row">
              <th class="c-table__header">代表者名</th>
              <td class="c-table__text">田中 浩二郎 (代表取締役)</td>
            </tr>
            <tr class="c-table__row">
              <th class="c-table__header">事業内容</th>
              <td class="c-table__text">
                <ul class="c-table__list">
                  <li class="c-table__item">ITコンサルティング</li>
                  <li class="c-table__item">コンサル導入企業への営業</li>
                </ul>
              </td>
            </tr>
            <tr class="c-table__row">
              <th class="c-table__header">電話番号</th>
              <td class="c-table__text">03-1234-5678</td>
            </tr>
            <tr class="c-table__row">
              <th class="c-table__header">ウェブサイトURL</th>
              <td class="c-table__text">https://tetote.co.jp</td>
            </tr>
            <tr class="c-table__row">
              <th class="c-table__header">メールアドレス</th>
              <td class="c-table__text">tetote@tetote.co.jp</td>
            </tr>
            <tr class="c-table__row">
              <th class="c-table__header">設立年月</th>
              <td class="c-table__text">1923年4月1日</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- .c-table -->
    </div>
    <!-- /.l-inner-sub -->
  </section>
  <!-- /.p-sect-company -->
</main>
<!-- /.p-page-about -->

<?php get_footer(); ?>