<?php get_header(); ?>

<!-- .p-page-faq -->
<main class="p-page-faq">
  <!-- .p-fv-sub -->
  <div style="background-image: url('<?php echo esc_url(get_theme_file_uri("images/fv-faq.jpg")); ?>')" class="p-fv-sub p-page-faq__fv">
    <div class="p-fv-sub__inner">
      <div class="p-fv-sub__content">
        <hgroup class="p-fv-sub__title">
          <h1 class="p-fv-sub__title-main">FAQ</h1>
          <p class="p-fv-sub__title-sub">よくある質問</p>
        </hgroup>
        <p class="p-fv-sub__text">皆様からよく頂くご質問にお答えします。</p>
      </div>
    </div>
  </div>
  <!-- /.p-fv-sub -->

  <!-- .c-breadcrumb -->
  <?php if (function_exists('bcn_display')) : ?>
    <nav class="c-breadcrumb p-page-faq__breadcrumb" aria-label="パンくずナビゲーション" vocab="https://schema.org/" typeof="BreadcrumbList">
      <!-- .l-inner-sub -->
      <div class="c-breadcrumb__inner l-inner-sub">
        <?php bcn_display(); ?>
      </div>
      <!-- /.l-inner-sub -->
    </nav>
  <?php endif; ?>
  <!-- /.c-breadcrumb -->

  <!-- .p-sect-faq -->
  <div class="p-sect-faq p-page-faq__faq">
    <!-- .l-inner-sub -->
    <div class="p-sect-faq__inner l-inner-sub">

      <!-- .p-btn-list -->
      <ul class="p-btn-list p-sect-faq__btn-list">
        <li class="p-btn-list__item">
          <!-- .c-btn-rounded -->
          <a href="#application" class="c-btn-rounded p-btn-list__btn">
            <span class="c-btn-rounded__text">応募・選考について</span>
            <svg class="c-btn-rounded__icon" aria-hidden="true" width="15" height="21" viewBox="0 0 15 21" fill="none">
              <path d="M6.65715 20.7071C7.04768 21.0976 7.68084 21.0976 8.07136 20.7071L14.4353 14.3431C14.8259 13.9526 14.8259 13.3195 14.4353 12.9289C14.0448 12.5384 13.4116 12.5384 13.0211 12.9289L7.36426 18.5858L1.7074 12.9289C1.31688 12.5384 0.683714 12.5384 0.29319 12.9289C-0.0973344 13.3195 -0.0973344 13.9526 0.29319 14.3431L6.65715 20.7071ZM6.36426 0L6.36426 20H8.36426L8.36426 0L6.36426 0Z" fill="currentColor"/>
            </svg>
          </a>
          <!-- /.c-btn-rounded -->
        </li>
        <li class="p-btn-list__item">
          <!-- .c-btn-rounded -->
          <a href="#career" class="c-btn-rounded p-btn-list__btn">
            <span class="c-btn-rounded__text">キャリアについて</span>
            <svg class="c-btn-rounded__icon" aria-hidden="true" width="15" height="21" viewBox="0 0 15 21" fill="none">
              <path d="M6.65715 20.7071C7.04768 21.0976 7.68084 21.0976 8.07136 20.7071L14.4353 14.3431C14.8259 13.9526 14.8259 13.3195 14.4353 12.9289C14.0448 12.5384 13.4116 12.5384 13.0211 12.9289L7.36426 18.5858L1.7074 12.9289C1.31688 12.5384 0.683714 12.5384 0.29319 12.9289C-0.0973344 13.3195 -0.0973344 13.9526 0.29319 14.3431L6.65715 20.7071ZM6.36426 0L6.36426 20H8.36426L8.36426 0L6.36426 0Z" fill="currentColor"/>
            </svg>
          </a>
          <!-- /.c-btn-rounded -->
        </li>
        <li class="p-btn-list__item">
          <!-- .c-btn-rounded -->
          <a href="#benefits" class="c-btn-rounded p-btn-list__btn">
            <span class="c-btn-rounded__text">福利厚生について</span>
            <svg class="c-btn-rounded__icon" aria-hidden="true" width="15" height="21" viewBox="0 0 15 21" fill="none">
              <path d="M6.65715 20.7071C7.04768 21.0976 7.68084 21.0976 8.07136 20.7071L14.4353 14.3431C14.8259 13.9526 14.8259 13.3195 14.4353 12.9289C14.0448 12.5384 13.4116 12.5384 13.0211 12.9289L7.36426 18.5858L1.7074 12.9289C1.31688 12.5384 0.683714 12.5384 0.29319 12.9289C-0.0973344 13.3195 -0.0973344 13.9526 0.29319 14.3431L6.65715 20.7071ZM6.36426 0L6.36426 20H8.36426L8.36426 0L6.36426 0Z" fill="currentColor"/>
            </svg>
          </a>
          <!-- /.c-btn-rounded -->
        </li>
      </ul>
      <!-- /.p-btn-list -->

      <ul class="p-sect-faq__accordion-list">
        <li class="p-sect-faq__accordion-item">
          <h2 id="application" class="p-sect-faq__title">応募・選考について</h2>
          <div class="p-sect-faq__body">
            <!-- .c-accordion -->
            <details class="c-accordion p-sect-faq__accordion js-details">
              <summary class="c-accordion__summary js-summary">
                <span class="c-accordion__text">応募資格はありますか？</span>
                <span class="c-accordion__icon">Q</span>
              </summary>
              <div class="c-accordion__content-wrap">
                <div class="c-accordion__content js-content">
                  <p class="c-accordion__text">
                    特にありません。<br>
                    これまでのご経験や想いをもとに、私たちと一緒に可能性を探っていける方をお待ちしています。
                  </p>
                </div>
              </div>
            </details>
            <!-- /.c-accordion -->

            <!-- .c-accordion -->
            <details class="c-accordion p-sect-faq__accordion js-details">
              <summary class="c-accordion__summary js-summary">
                <span class="c-accordion__text">応募方法は？</span>
                <span class="c-accordion__icon">Q</span>
              </summary>
              <div class="c-accordion__content-wrap">
                <div class="c-accordion__content js-content">
                  <p class="c-accordion__text">
                    弊社採用サイトからエントリーしてください。
                  </p>
                </div>
              </div>
            </details>
            <!-- /.c-accordion -->

            <!-- .c-accordion -->
            <details class="c-accordion p-sect-faq__accordion js-details">
              <summary class="c-accordion__summary js-summary">
                <span class="c-accordion__text">選考フローは？</span>
                <span class="c-accordion__icon">Q</span>
              </summary>
              <div class="c-accordion__content-wrap">
                <div class="c-accordion__content js-content">
                  <p class="c-accordion__text">
                    書類選考の後、面接（複数回）を予定しております。
                  </p>
                </div>
              </div>
            </details>
            <!-- /.c-accordion -->

            <!-- .c-accordion -->
            <details class="c-accordion p-sect-faq__accordion js-details">
              <summary class="c-accordion__summary js-summary">
                <span class="c-accordion__text">選考にかかる時間は？</span>
                <span class="c-accordion__icon">Q</span>
              </summary>
              <div class="c-accordion__content-wrap">
                <div class="c-accordion__content js-content">
                  <p class="c-accordion__text">
                    選考には通常1〜2週間程度のお時間をいただいております。<br>
                    状況により前後する場合がございますので、あらかじめご了承ください。
                  </p>
                </div>
              </div>
            </details>
            <!-- /.c-accordion -->

            <!-- .c-accordion -->
            <details class="c-accordion p-sect-faq__accordion js-details">
              <summary class="c-accordion__summary js-summary">
                <span class="c-accordion__text">面接では何を聞かれますか？</span>
                <span class="c-accordion__icon">Q</span>
              </summary>
              <div class="c-accordion__content-wrap">
                <div class="c-accordion__content js-content">
                  <p class="c-accordion__text">
                    面接では、これまでのご経験や志望動機、当社で挑戦したいことなどをお伺いします。
                  </p>
                </div>
              </div>
            </details>
            <!-- /.c-accordion -->

            <!-- .c-accordion -->
            <details class="c-accordion p-sect-faq__accordion js-details">
              <summary class="c-accordion__summary js-summary">
                <span class="c-accordion__text">面接官はどんな人ですか？</span>
                <span class="c-accordion__icon">Q</span>
              </summary>
              <div class="c-accordion__content-wrap">
                <div class="c-accordion__content js-content">
                  <p class="c-accordion__text">
                    各部署の担当者や人事スタッフが面接官を担当します。<br>
                    温厚で気さくな人たちばかりですので、ぜひリラックスして臨んでください。
                  </p>
                </div>
              </div>
            </details>
            <!-- /.c-accordion -->
          </div>
        </li>

        <li class="p-sect-faq__accordion-item">
          <h2 id="career" class="p-sect-faq__title">キャリアについて</h2>
          <div class="p-sect-faq__body">
            <!-- .c-accordion -->
            <details class="c-accordion p-sect-faq__accordion js-details">
              <summary class="c-accordion__summary js-summary">
                <span class="c-accordion__text">自分の希望するキャリアパスに進むことはできますか？</span>
                <span class="c-accordion__icon">Q</span>
              </summary>
              <div class="c-accordion__content-wrap">
                <div class="c-accordion__content js-content">
                  <p class="c-accordion__text">
                    はい、ご自身の希望や適性に応じて、キャリアパスを柔軟に設計することが可能です。
                  </p>
                </div>
              </div>
            </details>
            <!-- /.c-accordion -->

            <!-- .c-accordion -->
            <details class="c-accordion p-sect-faq__accordion js-details">
              <summary class="c-accordion__summary js-summary">
                <span class="c-accordion__text">転勤はありますか？</span>
                <span class="c-accordion__icon">Q</span>
              </summary>
              <div class="c-accordion__content-wrap">
                <div class="c-accordion__content js-content">
                  <p class="c-accordion__text">
                    業務の必要に応じて、転勤が発生する場合があります。
                  </p>
                </div>
              </div>
            </details>
            <!-- /.c-accordion -->

            <!-- .c-accordion -->
            <details class="c-accordion p-sect-faq__accordion js-details">
              <summary class="c-accordion__summary js-summary">
                <span class="c-accordion__text">転勤の希望は出せますか？</span>
                <span class="c-accordion__icon">Q</span>
              </summary>
              <div class="c-accordion__content-wrap">
                <div class="c-accordion__content js-content">
                  <p class="c-accordion__text">
                    可能です。ご本人の意向や状況を考慮し、柔軟に対応しています。
                  </p>
                </div>
              </div>
            </details>
            <!-- /.c-accordion -->

            <!-- .c-accordion -->
            <details class="c-accordion p-sect-faq__accordion js-details">
              <summary class="c-accordion__summary js-summary">
                <span class="c-accordion__text">ワークライフバランスは？</span>
                <span class="c-accordion__icon">Q</span>
              </summary>
              <div class="c-accordion__content-wrap">
                <div class="c-accordion__content js-content">
                  <p class="c-accordion__text">
                    当社では、働きやすい環境づくりに力を入れており、ワークライフバランスの確保を重視しています。
                  </p>
                </div>
              </div>
            </details>
            <!-- /.c-accordion -->

            <!-- .c-accordion -->
            <details class="c-accordion p-sect-faq__accordion js-details">
              <summary class="c-accordion__summary js-summary">
                <span class="c-accordion__text">具体的にはどのような制度がありますか？</span>
                <span class="c-accordion__icon">Q</span>
              </summary>
              <div class="c-accordion__content-wrap">
                <div class="c-accordion__content js-content">
                  <p class="c-accordion__text">
                    以下の独自の研修制度を設けています。
                  </p>
                  <ul class="c-accordion__list">
                    <li class="c-accordion__item">ケーススタディ研修</li>
                    <li class="c-accordion__item">クライアント対応研修</li>
                    <li class="c-accordion__item">専門知識研修</li>
                    <li class="c-accordion__item">マネジメント研修</li>
                    <li class="c-accordion__item">外部研修</li>
                  </ul>
                </div>
              </div>
            </details>
            <!-- /.c-accordion -->

            <!-- .c-accordion -->
            <details class="c-accordion p-sect-faq__accordion js-details">
              <summary class="c-accordion__summary js-summary">
                <span class="c-accordion__text">育児休暇制度はありますか？</span>
                <span class="c-accordion__icon">Q</span>
              </summary>
              <div class="c-accordion__content-wrap">
                <div class="c-accordion__content js-content">
                  <p class="c-accordion__text">
                    はい、育児休暇制度を設けています。また、育休復帰後に時短勤務も可能です。
                  </p>
                </div>
              </div>
            </details>
            <!-- /.c-accordion -->
          </div>
        </li>

        <li class="p-sect-faq__accordion-item">
          <h2 id="benefits" class="p-sect-faq__title">福利厚生について</h2>
          <div class="p-sect-faq__body">
            <!-- .c-accordion -->
            <details class="c-accordion p-sect-faq__accordion js-details">
              <summary class="c-accordion__summary js-summary">
                <span class="c-accordion__text">どのような福利厚生制度がありますか？</span>
                <span class="c-accordion__icon">Q</span>
              </summary>
              <div class="c-accordion__content-wrap">
                <div class="c-accordion__content js-content">
                  <p class="c-accordion__text">
                    詳細は、福利厚生の説明ページを参照ください。
                  </p>
                </div>
              </div>
            </details>
            <!-- /.c-accordion -->

            <!-- .c-accordion -->
            <details class="c-accordion p-sect-faq__accordion js-details">
              <summary class="c-accordion__summary js-summary">
                <span class="c-accordion__text">財形貯蓄制度の内容は？</span>
                <span class="c-accordion__icon">Q</span>
              </summary>
              <div class="c-accordion__content-wrap">
                <div class="c-accordion__content js-content">
                  <p class="c-accordion__text">
                    財形貯蓄を支援する制度です。
                  </p>
                </div>
              </div>
            </details>
            <!-- /.c-accordion -->

            <!-- .c-accordion -->
            <details class="c-accordion p-sect-faq__accordion js-details">
              <summary class="c-accordion__summary js-summary">
                <span class="c-accordion__text">社内イベントの内容は？</span>
                <span class="c-accordion__icon">Q</span>
              </summary>
              <div class="c-accordion__content-wrap">
                <div class="c-accordion__content js-content">
                  <p class="c-accordion__text">
                    懇親会や季節ごとの交流企画などを実施しています。
                  </p>
                </div>
              </div>
            </details>
            <!-- /.c-accordion -->

            <!-- .c-accordion -->
            <details class="c-accordion p-sect-faq__accordion js-details">
              <summary class="c-accordion__summary js-summary">
                <span class="c-accordion__text">部活動について教えてください。</span>
                <span class="c-accordion__icon">Q</span>
              </summary>
              <div class="c-accordion__content-wrap">
                <div class="c-accordion__content js-content">
                  <p class="c-accordion__text">
                    フットサルや写真、ボードゲームなど、社員の「好き」から生まれた部活動がたくさんあります。<br>
                    参加は自由で、ゆるく楽しくつながれる場になっています。
                  </p>
                </div>
              </div>
            </details>
            <!-- /.c-accordion -->

            <!-- .c-accordion -->
            <details class="c-accordion p-sect-faq__accordion js-details">
              <summary class="c-accordion__summary js-summary">
                <span class="c-accordion__text">資格取得支援制度はいくら補助が出ますか？</span>
                <span class="c-accordion__icon">Q</span>
              </summary>
              <div class="c-accordion__content-wrap">
                <div class="c-accordion__content js-content">
                  <p class="c-accordion__text">
                    資格の種類や難易度によって異なりますが、1資格につき最大3万円までとなっています。
                  </p>
                </div>
              </div>
            </details>
            <!-- /.c-accordion -->

            <!-- .c-accordion -->
            <details class="c-accordion p-sect-faq__accordion js-details">
              <summary class="c-accordion__summary js-summary">
                <span class="c-accordion__text">年次有給休暇について教えてください</span>
                <span class="c-accordion__icon">Q</span>
              </summary>
              <div class="c-accordion__content-wrap">
                <div class="c-accordion__content js-content">
                  <p class="c-accordion__text">
                    初年度10日／年度中途入社は比例付与とします。
                  </p>
                </div>
              </div>
            </details>
            <!-- /.c-accordion -->
          </div>
        </li>
      </ul>
    </div>
    <!-- /.l-inner-sub -->
  </div>
  <!-- /.p-sect-faq -->
</main>
<!-- /.p-page-faq -->

<?php get_footer(); ?>
