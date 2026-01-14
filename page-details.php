<?php get_header(); ?>

<!-- .p-page-details -->
<main class="p-page-details">
  <!-- .p-fv-sub -->
  <div class="p-fv-sub p-page-details__fv">
    <div class="p-fv-sub__inner">
      <div class="p-fv-sub__content">
        <hgroup class="p-fv-sub__title">
          <h1 class="p-fv-sub__title-main">Details</h1>
          <p class="p-fv-sub__title-sub">募集要項</p>
        </hgroup>
        <p class="p-fv-sub__text"><span class="u-text-upper">Tetote</span>は幅広く仲間を募集しています。</p>
      </div>
    </div>
    <div class="p-fv-sub__img-wrap" aria-hidden="true">
      <img
        src="<?php echo esc_url(get_theme_file_uri("images/fv-details.jpg")); ?>"
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
    <nav class="c-breadcrumb p-page-details__breadcrumb" aria-label="パンくずナビゲーション" vocab="https://schema.org/" typeof="BreadcrumbList">
      <!-- .l-inner-sub -->
      <div class="c-breadcrumb__inner l-inner-sub">
        <?php bcn_display(); ?>
      </div>
      <!-- /.l-inner-sub -->
    </nav>
  <?php endif; ?>
  <!-- /.c-breadcrumb -->

  <!-- .p-sect-details -->
  <section class="p-sect-details p-page-details__details">
    <!-- .l-inner-sub -->
    <div class="p-sect-details__inner l-inner-sub">
      <h2 class="p-sect-details__title">あなたが輝ける場所が、ここにはある</h2>
      <p class="p-sect-details__text">
        <span class="u-text-upper">Tetote</span>では、コンサルタントを中心に、様々な職種を募集しています。
      </p>

      <!-- .p-btn-list -->
      <ul class="p-btn-list p-sect-details__btn-list">
        <li class="p-btn-list__item">
          <!-- .c-btn-rounded -->
          <a href="#details-consultant" class="c-btn-rounded p-btn-list__btn">
            <span class="c-btn-rounded__text">コンサルタント</span>
            <svg class="c-btn-rounded__icon" aria-hidden="true" width="15" height="21" viewBox="0 0 15 21" fill="none">
              <path d="M6.65715 20.7071C7.04768 21.0976 7.68084 21.0976 8.07136 20.7071L14.4353 14.3431C14.8259 13.9526 14.8259 13.3195 14.4353 12.9289C14.0448 12.5384 13.4116 12.5384 13.0211 12.9289L7.36426 18.5858L1.7074 12.9289C1.31688 12.5384 0.683714 12.5384 0.29319 12.9289C-0.0973344 13.3195 -0.0973344 13.9526 0.29319 14.3431L6.65715 20.7071ZM6.36426 0L6.36426 20H8.36426L8.36426 0L6.36426 0Z" fill="currentColor"/>
            </svg>
          </a>
          <!-- /.c-btn-rounded -->
        </li>
        <li class="p-btn-list__item">
          <!-- .c-btn-rounded -->
          <a href="#details-solution" class="c-btn-rounded p-btn-list__btn">
            <span class="c-btn-rounded__text">ソリューション営業</span>
            <svg class="c-btn-rounded__icon" aria-hidden="true" width="15" height="21" viewBox="0 0 15 21" fill="none">
              <path d="M6.65715 20.7071C7.04768 21.0976 7.68084 21.0976 8.07136 20.7071L14.4353 14.3431C14.8259 13.9526 14.8259 13.3195 14.4353 12.9289C14.0448 12.5384 13.4116 12.5384 13.0211 12.9289L7.36426 18.5858L1.7074 12.9289C1.31688 12.5384 0.683714 12.5384 0.29319 12.9289C-0.0973344 13.3195 -0.0973344 13.9526 0.29319 14.3431L6.65715 20.7071ZM6.36426 0L6.36426 20H8.36426L8.36426 0L6.36426 0Z" fill="currentColor"/>
            </svg>
          </a>
          <!-- /.c-btn-rounded -->
        </li>
        <li class="p-btn-list__item">
          <!-- .c-btn-rounded -->
          <a href="#details-engineer" class="c-btn-rounded p-btn-list__btn">
            <span class="c-btn-rounded__text">システムエンジニア</span>
            <svg class="c-btn-rounded__icon" aria-hidden="true" width="15" height="21" viewBox="0 0 15 21" fill="none">
              <path d="M6.65715 20.7071C7.04768 21.0976 7.68084 21.0976 8.07136 20.7071L14.4353 14.3431C14.8259 13.9526 14.8259 13.3195 14.4353 12.9289C14.0448 12.5384 13.4116 12.5384 13.0211 12.9289L7.36426 18.5858L1.7074 12.9289C1.31688 12.5384 0.683714 12.5384 0.29319 12.9289C-0.0973344 13.3195 -0.0973344 13.9526 0.29319 14.3431L6.65715 20.7071ZM6.36426 0L6.36426 20H8.36426L8.36426 0L6.36426 0Z" fill="currentColor"/>
            </svg>
          </a>
          <!-- /.c-btn-rounded -->
        </li>
      </ul>
      <!-- /.p-btn-list -->

      <ul class="p-sect-details__table-list">
        <li class="p-sect-details__table-item">
          <h3 id="details-consultant" class="p-sect-details__table-title">募集要項-コンサルタント</h3>
          <!-- .c-table -->
          <div class="c-table p-sect-details__table">
            <table class="c-table__inner" aria-labelledby="details-consultant">
              <tbody class="c-table__body">
                <tr class="c-table__row">
                  <th class="c-table__header">職種名</th>
                  <td class="c-table__text">コンサルタント</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">雇用形態</th>
                  <td class="c-table__text">正社員</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">業務内容</th>
                  <td class="c-table__text">クライアントの課題解決のためのコンサルティング業務</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">就業時間</th>
                  <td class="c-table__text">9:00～18:00（フレックスタイム制）</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">給与</th>
                  <td class="c-table__text">年収500万円～（経験・能力による）</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">勤務地</th>
                  <td class="c-table__text">東京、大阪、名古屋</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">転勤の有無</th>
                  <td class="c-table__text">あり</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">休日・休暇</th>
                  <td class="c-table__text">土日祝日、年末年始、夏季休暇</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">選考について</th>
                  <td class="c-table__text">書類選考、面接</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">採用人数</th>
                  <td class="c-table__text">若干名</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- .c-table -->
        </li>

        <li class="p-sect-details__table-item">
          <h3 id="details-solution" class="p-sect-details__table-title">募集要項-ソリューション営業</h3>
          <!-- .c-table -->
          <div class="c-table p-sect-details__table">
            <table class="c-table__inner" aria-labelledby="details-solution">
              <tbody class="c-table__body">
                <tr class="c-table__row">
                  <th class="c-table__header">職種名</th>
                  <td class="c-table__text">ソリューション営業</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">雇用形態</th>
                  <td class="c-table__text">正社員</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">業務内容</th>
                  <td class="c-table__text">顧客の課題解決のためのソリューション提案、販売</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">就業時間</th>
                  <td class="c-table__text">9:00～18:00（フレックスタイム制）</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">給与</th>
                  <td class="c-table__text">年収500万円～（経験・能力による）</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">勤務地</th>
                  <td class="c-table__text">東京、大阪、名古屋</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">転勤の有無</th>
                  <td class="c-table__text">あり</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">休日・休暇</th>
                  <td class="c-table__text">土日祝日、年末年始、夏季休暇</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">選考について</th>
                  <td class="c-table__text">書類選考、面接</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">採用人数</th>
                  <td class="c-table__text">若干名</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- .c-table -->
        </li>

        <li class="p-sect-details__table-item">
          <h3 id="details-engineer" class="p-sect-details__table-title">募集要項-システムエンジニア</h3>
          <!-- .c-table -->
          <div class="c-table p-sect-details__table">
            <table class="c-table__inner" aria-labelledby="details-engineer">
              <tbody class="c-table__body">
                <tr class="c-table__row">
                  <th class="c-table__header">職種名</th>
                  <td class="c-table__text">システムエンジニア</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">雇用形態</th>
                  <td class="c-table__text">正社員</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">業務内容</th>
                  <td class="c-table__text">システム開発、インフラ構築、データ分析など</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">就業時間</th>
                  <td class="c-table__text">9:00～18:00（フレックスタイム制）</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">給与</th>
                  <td class="c-table__text">年収500万円～（経験・能力による）</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">勤務地</th>
                  <td class="c-table__text">東京、大阪、名古屋</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">転勤の有無</th>
                  <td class="c-table__text">あり</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">休日・休暇</th>
                  <td class="c-table__text">土日祝日、年末年始、夏季休暇</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">選考について</th>
                  <td class="c-table__text">書類選考、面接</td>
                </tr>
                <tr class="c-table__row">
                  <th class="c-table__header">採用人数</th>
                  <td class="c-table__text">若干名</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- .c-table -->
        </li>
      </ul>
    </div>
    <!-- /.l-inner-sub -->
  </section>
  <!-- /.p-sect-details -->
</main>
<!-- /.p-page-details -->

<?php get_footer(); ?>
