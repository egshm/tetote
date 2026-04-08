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


// スライダー
//--------------------------------------------

const fvSliderEl = document.querySelector('#js-fvSlider');

if (fvSliderEl) {
  const fvSlider = new Swiper(fvSliderEl, {
    effect: "fade",
    loop: true,
    speed: 1500,
    allowTouchMove: false,
    autoplay: {
      delay: 3000,
    },
  });
}

const staffSliderEl = document.querySelector('#js-staffSlider');
const staffSlides = document.querySelectorAll('.js-staffSlideItem');

if (staffSliderEl) {
  const staffSlider = new Swiper('#js-staffSlider', {
    slidesPerView: 'auto',
    loop: true,
    navigation: {
      nextEl: '#js-nextBtn',
      prevEl: '#js-prevBtn',
    },
    keyboard: {
      enabled: true
    },
    breakpoints: {
      0: {
        spaceBetween: 23,
      },
      992: {
        spaceBetween: 43,
      }
    }
  });

  // スライド切り替え時の処理
  staffSlider.on('slideChangeTransitionEnd', function() {
    staffSlides.forEach(slide => {
      const link = slide.querySelector('.js-staffSlideLink');

      // アクティブなスライドにフォーカスを当てる
      if (slide.classList.contains('swiper-slide-active')) {
        link.setAttribute('tabindex', '0');
        link.classList.add('is-focus');
        link.focus();
      // 非アクティブなスライドのフォーカスを解除
      } else {
        link.setAttribute('tabindex', '-1');
        link.classList.remove('is-focus');
        link.blur();
      }
    });
  });

  staffSlides.forEach(slide => {
    const index = parseInt(slide.getAttribute('data-swiper-slide-index'), 10);
    if (!isNaN(index) && (index + 1) % 2 === 0) {
      slide.classList.add('is-odd');
    } else {
      slide.classList.remove('is-odd');
    }
  });
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


// 要素をふわっと表示（Intersection Observer API）
//--------------------------------------------

const targets = document.querySelectorAll('.js-inview');
const options = {
  root: null, // 監視範囲をビューポートに設定
  rootMargin: '0px',
  threshold: 0
};

function doWhenIntersect(entries) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-active');
      observer.unobserve(entry.target); // 一度発火したら監視を停止
    }
  });
}

// オブザーバをインスタンス化
const observer = new IntersectionObserver(doWhenIntersect, options);

// 監視
targets.forEach(target => {
  observer.observe(target);
});


// 全img要素の読込み完了を監視
//--------------------------------------------
function onAllImagesLoaded(callback) {
  const images = document.querySelectorAll("img");
  let loadedCount = 0;
  let isCalled = false;

  // callback の重複実行を防ぐ
  function done() {
    if (!isCalled) {
      isCalled = true;
      callback();
    }
  }

  // 画像が無い場合は即実行
  if (images.length === 0) {
    done();
    return;
  }

  images.forEach(image => {
    // すでに読込みが完了している場合
    if (image.complete) {
      loadedCount++;
      if (loadedCount === images.length) done();
      return;
    }

    // 読込みが完了した場合
    image.addEventListener('load', function() {
      loadedCount++;
      if (loadedCount === images.length) done();
    });

    // 読込みエラーの場合
    image.addEventListener('error', function() {
      loadedCount++;
      if (loadedCount === images.length) done();
    });
  });
}


// スムーススクロール
//--------------------------------------------

// スクロールオフセット調整値（px）
const SCROLL_OFFSET_ADJUST = 20;

// ページ遷移後のスクロール待機時間（ms）
const SCROLL_DELAY_TIME = 300;

document.querySelectorAll('a[href*="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();

    const href = anchor.getAttribute('href');

    // ページ内スクロール
    if (href.startsWith('#')) {

      // 遅延読込み画像を強制的に読込むように設定
      document.querySelectorAll('img[loading="lazy"]').forEach(lazyImage => {
        lazyImage.loading = "eager";
      });

      // 画像の読み込みがすべて完了したら処理を継続
      onAllImagesLoaded(function() {

        const target = document.querySelector(
          href === '#' || href === '' ? 'html' : href
        );
        const offset = header.offsetHeight + SCROLL_OFFSET_ADJUST;
        const position = target.getBoundingClientRect().top + window.pageYOffset;

        // スムーススクロール
        window.scrollTo({
          top: position - offset,
          behavior: 'smooth'
        });

        // URLにハッシュを追加
        history.pushState(null, '', href);
      });
    }
    // ページ外へ遷移
    else {
      // 移動先ページ
      const destPage = anchor.href.split('#')[0];
      // 移動先ハッシュ
      const destHash = anchor.href.split('#')[1];

      // ハッシュを一時保存
      sessionStorage.setItem('scrollTarget', destHash);

      // 移動先ページに遷移
      window.location.href = destPage;
    }
  });
});

// ページ外スムーススクロール
window.addEventListener('load', function() {

  // スクロール先のハッシュ値を取得
  const urlHash = sessionStorage.getItem('scrollTarget');

  if (urlHash) {
    // 遅延読込み画像を強制的に読込むように設定
    document.querySelectorAll('img[loading="lazy"]').forEach(lazyImage => {
      lazyImage.loading = "eager";
    });

    // 画像の読み込みがすべて完了したら処理を継続
    onAllImagesLoaded(function() {

      // ページの先頭に移動
      window.scrollTo(0, 0);
      // 保存情報を破棄
      sessionStorage.removeItem('scrollTarget');
      // 移動先を取得
      const target = document.querySelector('#' + urlHash);

      if (target) {
        const offset = header.offsetHeight + SCROLL_OFFSET_ADJUST;
        const position = target.getBoundingClientRect().top + window.pageYOffset;

        setTimeout(function(){
          // 移動先へスムーススクロール
          window.scrollTo({
            top: position - offset,
            behavior: 'smooth'
          });
          // ハッシュを再設定
          history.replaceState(null, '', window.location.pathname + '#' + urlHash);
        }, SCROLL_DELAY_TIME);
      }
    });
  }
});


// エントリーフォーム（Contact Form 7）
//--------------------------------------------

// 送信完了時
document.addEventListener('wpcf7mailsent', function(event) {
  // 送信完了メッセージを非表示に設定
  document.querySelectorAll('.wpcf7-response-output').forEach(function(output) {
    output.style.display = 'none';
  });
  // 送信完了画面に遷移
  location = '/entry-thanks/';
}, false);
