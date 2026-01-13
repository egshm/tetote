<?php get_header(); ?>

<!-- .p-page-benefits -->
<main class="p-page-benefits">
  <!-- .p-fv-sub -->
  <div style="background-image: url('<?php echo esc_url(get_theme_file_uri("images/fv-benefits.jpg")); ?>')" class="p-fv-sub p-page-benefits__fv">
    <div class="p-fv-sub__inner">
      <div class="p-fv-sub__content">
        <hgroup class="p-fv-sub__title">
          <h1 class="p-fv-sub__title-main">Benefits</h1>
          <p class="p-fv-sub__title-sub">福利厚生について</p>
        </hgroup>
        <p class="p-fv-sub__text">充実した福利厚生制度を設けています。</p>
      </div>
    </div>
  </div>
  <!-- /.p-fv-sub -->

  <!-- .c-breadcrumb -->
  <?php if (function_exists('bcn_display')) : ?>
    <nav class="c-breadcrumb p-page-benefits__breadcrumb" aria-label="パンくずナビゲーション" vocab="https://schema.org/" typeof="BreadcrumbList">
      <div class="c-breadcrumb__inner">
        <?php bcn_display(); ?>
      </div>
    </nav>
  <?php endif; ?>
  <!-- /.c-breadcrumb -->

  <!-- .p-sect-system -->
  <section class="p-sect-system p-page-benefits__system">
    <div class="p-sect-system__inner">
      <h2 id="system-title" class="p-sect-system__title">各種制度</h2>
      <!-- .c-table -->
      <div class="c-table p-sect-system__table">
        <table class="c-table__inner" aria-labelledby="system-title">
          <tbody class="c-table__body">
            <tr class="c-table__row">
              <th class="c-table__header">手当</th>
              <td class="c-table__text">
                <ul class="c-table__list">
                  <li class="c-table__item">通勤手当（上限月5万円）</li>
                  <li class="c-table__item">時間外割増手当</li>
                  <li class="c-table__item">役職手当</li>
                  <li class="c-table__item">退職金</li>
                </ul>
              </td>
            </tr>
            <tr class="c-table__row">
              <th class="c-table__header">制度</th>
              <td class="c-table__text">財形貯蓄</td>
            </tr>
            <tr class="c-table__row">
              <th class="c-table__header">保険</th>
              <td class="c-table__text">社会保険完備</td>
            </tr>
            <tr class="c-table__row">
              <th class="c-table__header">施設</th>
              <td class="c-table__text">
                <ul class="c-table__list">
                  <li class="c-table__item">社員向けジム</li>
                  <li class="c-table__item">社内託児所</li>
                </ul>
              </td>
            </tr>
            <tr class="c-table__row">
              <th class="c-table__header">休暇・休日</th>
              <td class="c-table__text">
                <ul class="c-table__list">
                  <li class="c-table__item">完全週休2日制</li>
                  <li class="c-table__item">年次有給休暇（初年度10日／年度途中入社は比例付与）</li>
                  <li class="c-table__item">年末年始休暇（12月29日～1月3日：6日間）</li>
                  <li class="c-table__item">夏季休暇（6月～9月中：5日間）</li>
                  <li class="c-table__item">慶弔休暇</li>
                  <li class="c-table__item">産前産後休暇</li>
                  <li class="c-table__item">リフレッシュ休暇（3年勤続で5日／以降5年勤続ごとに5日支給）</li>
                </ul>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- .c-table -->
    </div>
  </section>
  <!-- /.p-sect-system -->

  <!-- .p-sect-voice -->
  <section class="p-sect-voice p-page-benefits__voice">
    <div class="p-sect-voice__inner">
      <h2 class="p-sect-voice__title">制度利用者の声</h2>
      <ul class="p-sect-voice__list">
        <li class="p-sect-voice__item">
          <p class="p-sect-voice__joined">2013年入社</p>
          <p class="p-sect-voice__name">堀内 優</p>
          <p class="p-sect-voice__text">
            資格取得のための費用を会社が負担してくれる制度を利用して、念願の応用技術者資格を取得できました。<br>
            この制度は、自己啓発を支援してくれるので、とても助かります。今後は、さらにスキルアップを目指して、他の資格も取得していきたいと思っています。<br>
            会社が成長を支援してくれるので、安心して仕事に取り組むことができます。
          </p>
        </li>
        <li class="p-sect-voice__item">
          <p class="p-sect-voice__joined">2015年入社</p>
          <p class="p-sect-voice__name">神凪 理沙</p>
          <p class="p-sect-voice__text">
            出産後、育休を取得して、現在は短時間勤務で働いています。会社が育児に理解があるので、安心して仕事に集中できます。<br>
            特に、社内託児所があるので、子供を預けながら安心して働けるのは助かります。また、短時間勤務制度も充実しているので、自分のペースで仕事復帰することができました。<br>
            今後は、子供の成長に合わせて、勤務時間を調整しながら、長く働き続けたいと思っています。
          </p>
        </li>
      </ul>
      <figure class="p-sect-voice__img-wrap">
        <img src="<?php echo esc_url(get_theme_file_uri("images/voice.jpg")); ?>" alt="左：堀内 優（2013年入社） 右：神凪 理沙（2015年入社）" class="p-sect-voice__img" width="980" height="560">
      </figure>
    </div>
  </section>
  <!-- /.p-sect-voice -->
</main>
<!-- /.p-page-benefits -->

<?php get_footer(); ?>
