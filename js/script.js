// スティッキーヘッダー
//--------------------------------------------

// ヘッダー
const header = document.getElementById('js-header');
// ファーストビュー
const firstView = document.getElementById('js-fv');

if (firstView) {
  // スクロールされた時
  window.addEventListener('scroll', function() {
    stickyHeader();
  });

  // ページを読み込んだ時
  window.addEventListener('load', function() {
    stickyHeader();
  });

  function stickyHeader() {
    const headerHeight = header.offsetHeight;
    const firstViewHeight = firstView.offsetHeight;
    const scrollY = window.scrollY || window.pageYOffset;
    // 縦スクロール位置がファーストビューを越えたらヘッダースタイルを変更
    header.classList.toggle('is-sticky', scrollY >= (firstViewHeight - headerHeight));
  }
}


// ハンバーガーメニュー
//--------------------------------------------

// ハンバーガーメニューボタン
const hamburger = document.getElementById('js-hamburger');
// ハンバーガーメニュー
const menu = document.querySelector('.js-menu');
// 各メニュー項目
const menuItems = document.querySelectorAll('.js-menuItem');

// ハンバーガーメニューボタンがクリックされた時
hamburger.addEventListener('click', function() {

  const expanded = this.getAttribute('aria-expanded');

  // メニューが開くとき
  if (expanded === 'false') {
    this.setAttribute('aria-expanded', 'true');
    menu.setAttribute('aria-hidden', 'false');
    header.classList.add('is-menu-open');
  }
  // メニューが閉じるとき
  else {
    this.setAttribute('aria-expanded', 'false');
    menu.setAttribute('aria-hidden', 'true');
    header.classList.remove('is-menu-open');
  }
});


// Slickスライダー
//--------------------------------------------

const $fvSlider = $('#js-fvSlider');
const $staffSlider = $('#js-staffSlider');

//ファーストビュー
if ($fvSlider.length) {
  $fvSlider.slick({
    fade: true,
    autoplay: true,
    speed: 1500,
    autoplaySpeed : 2000,
    pauseOnFocus: false,
    pauseOnHover: false,
    arrows: false,
    accessibility: false, //アクセシビリティ無効化
  });
}

//メンバー紹介
if ($staffSlider.length) {
  $staffSlider
    .slick({
      slidesToScroll: 1,
      infinite: true, //スライドを循環させる
      arrows: true,
      prevArrow: $('#js-prevBtn'),
      nextArrow: $('#js-nextBtn'),
      variableWidth: true, //スライド幅をcssで制御
    })
    //スライド切り替え前のイベント
    .on(
      'beforeChange',
      function(event, slick, currentIndex, nextIndex) {
        //フォーカス中の要素を取得
        const active = document.activeElement;
        //フォーカス中の要素が無ければ処理終了
        if (!active) {
          return;
        }
  
        //フォーカス中のスライドを取得
        const slide = active.closest('.slick-slide');
        //フォーカス中のスライドが無ければ処理終了
        if (!slide) {
          return;
        }
  
        //スライド番号を取得
        const idx = Number(slide.getAttribute('data-slick-index'));
        //切り替え前の古いスライドであればフォーカス解除
        if (idx !== nextIndex) {
          active.blur();
        }
      }
    )
    //スライド切り替え後のイベント
    .on(
      'afterChange',
      function(event, slick, currentIndex) {
        //切り替え後のスライドを取得
        const newSlide = slick.$slides[currentIndex];
        //切り替え後のスライドをフォーカス
        if (newSlide) {
          newSlide.focus({ preventScroll: true });
        }
      }
    );
}


// カスタム投稿詳細ページの目次（Tocbot）
//--------------------------------------------

if (typeof tocbot !== 'undefined') {
  tocbot.init({
    tocSelector: '#js-toc',
    contentSelector: '#js-tocContent',
    headingSelector: 'h2', //HTMLの各見出しにidを設定すること
    linkClass: 'c-toc__link',
    listItemClass: 'c-toc__item',
    activeListItemClass: 'is-active',
    headingsOffset: header.offsetHeight,
  });
}


// アコーディオン
//--------------------------------------------

// アコーディオンアニメーション
const accordions = document.querySelectorAll('.js-details');

if (accordions.length) {
  accordions.forEach(accordion => {
    const summary = accordion.querySelector('.js-summary');
    const content = accordion.querySelector('.js-content');
    const DURATION_TIME = 400;
    const EASING_TYPE = 'linear';
  
    accordion.addEventListener('click', (e) => {
      e.preventDefault();
      // 閉じるアニメーション
      if (accordion.open) {
        const closeDetails = content.animate(
          {
            opacity: [1, 0],
            height: [content.offsetHeight + 'px', 0],
          },
          {
            duration: DURATION_TIME,
            easing: EASING_TYPE,
          }
        );
        // 開閉ボタン（横棒）
        const horizBar = summary.animate(
          {
            rotate: ["180deg", "0deg"],
          },
          {
            duration: DURATION_TIME,
            pseudoElement: "::before",
            easing: EASING_TYPE,
            fill: 'forwards',
          }
        );
        // 開閉ボタン（縦棒）
        const vertBar = summary.animate(
          {
            rotate: ["90deg", "0deg"],
            opacity: [0,1]
          },
          {
            duration: DURATION_TIME,
            pseudoElement: "::after",
            easing: EASING_TYPE,
            fill: 'forwards',
          }
        );
        closeDetails.onfinish = () => {
          accordion.removeAttribute('open');
        }
      // 開くアニメーション
      } else {
        accordion.setAttribute('open', 'true');
        const openDetails = content.animate(
          {
            opacity: [0, 1],
            height: [0, content.offsetHeight + 'px'],
          },
          {
            duration: DURATION_TIME,
            easing: EASING_TYPE,
          }
        );
        // 開閉ボタン（横棒）
        const horizBar = summary.animate(
          {
            rotate: ["0deg", "180deg"],
          },
          {
            duration: DURATION_TIME,
            pseudoElement: "::before",
            easing: EASING_TYPE,
            fill: 'forwards',
          }
        );
        // 開閉ボタン（縦棒）
        const vertBar = summary.animate(
          {
            rotate: ["0deg", "90deg"],
            opacity: [1,0]
          },
          {
            duration: DURATION_TIME,
            pseudoElement: "::after",
            easing: EASING_TYPE,
            fill: 'forwards',
          }
        );
      }
    });
  });
}


// ふわっと表示
//--------------------------------------------

$(".js-inview").on("inview", function (event, isInView) {
  if (isInView) {
    $(this).stop().addClass("is-show");
  }
});


// スムーススクロール
//--------------------------------------------

// スクロール先のハッシュ値を取得
const urlHash = location.hash;
// スクロール速度（ms）
const SCROLL_SPEED = 800;
// スクロールオフセット調整値（px）
const SCROLL_OFFSET_ADJUST = 20;

// ページ内スクロール
$('a[href^="#"]').on('click', function() {
  const href = $(this).attr('href');
  const target = $(href === '#' || href === '' ? 'html' : href);
  const offset = $('#js-header').outerHeight() + SCROLL_OFFSET_ADJUST;
  const position = target.offset().top - offset;
  $('html, body').animate({scrollTop: position}, SCROLL_SPEED, 'swing');
  return false;
});

// 他ページへ移動するときのスクロール
if(urlHash) {
  const SCROLL_DELAY_TIME = 100; // ページ遷移後のスクロール待機時間（ms）
  history.replaceState(null, '', window.location.pathname);
  $('html, body').stop().scrollTop(0);
  // ページ遷移後に一定時間（SCROLL_DELAY_TIME）待ってからスクロール
  setTimeout(function(){
    const target = $(urlHash);
    const offset = $('#js-header').outerHeight() + SCROLL_OFFSET_ADJUST;
    const position = target.offset().top - offset;
    $('html, body').stop().animate({scrollTop:position}, SCROLL_SPEED);
  }, SCROLL_DELAY_TIME);
}
