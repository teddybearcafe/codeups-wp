jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  // ハンバーガーメニュー
  $(".js-hamburger,.js-drawer").click(function () {
    $(".js-hamburger").toggleClass("is-drawer-active");
    $("body").toggleClass("is-drawer-active");
    $(".js-drawer").fadeToggle();
  });

  // ウィンドウ幅が768px以上になったらドロアーを閉じる
  $(window).resize(function () {
    if ($(window).width() >= 768) {
      $(".js-hamburger").removeClass("is-drawer-active");
      $("body").removeClass("is-drawer-active");
      $(".js-drawer").fadeOut();
    }
  });

  // // スクロールするとロゴの色変更
  // $(window).on("scroll", function () {
  //   const sliderHeight = $(".mv").height();
  //   if (sliderHeight - 30 < $(this).scrollTop()) {
  //     $(".js-top").addClass("is-return-button-active");
  //   } else {
  //     $(".js-top").removeClass("is-return-button-active");
  //   }
  // });
});

//--------------------------------
// メインビューSlider/ローディングアニメーションが終わってから表示させる
//--------------------------------
let mvSwiper;
if (document.querySelector(".js-mv")) {
  mvSwiper = new Swiper(".js-mv", {
    init: false, // ← いったん初期化しない
    effect: "fade",
    fadeEffect: { crossFade: true },
    loop: true,
    slidesPerView: 1,
    speed: 600,
    autoplay: { delay: 5000, disableOnInteraction: false },
    observer: true,
    observeParents: true,
  });
}

window.addEventListener("load", () => {
  setTimeout(() => {
    const loader = document.querySelector(".loader");
    if (loader) loader.style.display = "none";
    const mv = document.querySelector(".mv");
    if (mv) mv.style.display = "block";

    // 表示されたタイミングで初期化
    if (mvSwiper && !mvSwiper.initialized) {
      mvSwiper.init();
      // 念のため再計測
      mvSwiper.update();
    }
  }, 6000); // 長すぎる待ち時間は不具合の温床。まずは短く検証を
});

//--------------------------------
// トップページ：キャンペーンSlider
//--------------------------------
if (document.querySelector(".js-campaign")) {
  const campaignSwiper = new Swiper(".js-campaign", {
    spaceBetween: 24,
    centeredSlides: true,

    // Optional parameters
    loop: true,
    loopAdditionalSlides: 1,
    // loopslides: 3,
    autoplay: {
      delay: 5000,
    },
    // speed: 5000,

    // Navigation arrows
    navigation: {
      prevEl: ".swiper-button-prev",
      nextEl: ".swiper-button-next",
    },
    // スライドの表示枚数
    slidesPerView: "auto",
    // breakpoints: {
    //   // スライドの表示枚数：768px以上の場合
    //   768: {
    //     // spaceBetween: 40,
    //     slidesPerView: "1",
    //   },
    // },
  });
}

//要素の取得とスピードの設定
var box = $(".voice-card__figure , .information__image , .price__header-image"),
  speed = 700;

//--------------------------------
// .colorboxの付いた全ての要素に対して下記の処理を行う
//--------------------------------
box.each(function () {
  $(this).append('<div class="color"></div>');
  var color = $(this).find($(".color")),
    image = $(this).find("img");
  var counter = 0;

  image.css("opacity", "0");
  color.css("width", "0%");
  //inviewを使って背景色が画面に現れたら処理をする
  color.on("inview", function () {
    if (counter == 0) {
      $(this)
        .delay(200)
        .animate({ width: "100%" }, speed, function () {
          image.css("opacity", "1");
          $(this).css({ left: "0", right: "auto" });
          $(this).animate({ width: "0%" }, speed);
        });
      counter = 1;
    }
  });
});

//--------------------------------
// information タブ切り替え
//任意のタブにURLからリンクするための設定
//---------------------------------
$(function () {
  // パラメータ取得
  function getParam(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    let regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return "";
    return decodeURIComponent(results[2].replace(/\+/g, " "));
  }

  // ページ読み込み時のタブ切り替え
  let pram = getParam("active-tab");
  if (pram && $('[data-tab="' + pram + '"]').length) {
    $(".tab-button").removeClass("tab-button--active");
    $(".tab-panel").removeClass("tab-panel--active");
    $(".tab-button__link-icon").removeClass("tab-button__link-icon--active");

    $('.tab-button[data-tab="' + pram + '"]').addClass("tab-button--active");
    $('.tab-button[data-tab="' + pram + '"] .tab-button__link-icon').addClass(
      "tab-button__link-icon--active"
    );
    $('.tab-panel[data-tab="' + pram + '"]').addClass("tab-panel--active");
  }

  // ロード後のタブ切り替え
  $(".tab-button").on("click", function () {
    let dataTab = $(this).data("tab"); // data-tab属性の値を取得
    $(".tab-button").removeClass("tab-button--active");
    $(".tab-panel").removeClass("tab-panel--active");
    $(".tab-button__link-icon").removeClass("tab-button__link-icon--active");

    $(this).addClass("tab-button--active");
    $(this)
      .find(".tab-button__link-icon")
      .addClass("tab-button__link-icon--active");
    $('.tab-panel[data-tab="' + dataTab + '"]').addClass("tab-panel--active");
  });
});

// 最初のアーカイブアイテムを開いた状態にする
$(document).ready(function () {
  $(".article-archive__item:first-child").addClass(
    "article-archive__item--open"
  );
  $(".article-archive__item:first-child .article-archive__list").show();
});

$(".article-archive__item-btn").click(function () {
  const parentItem = $(this).closest(".article-archive__item");

  // 月リストの表示/非表示
  $(this).siblings(".article-archive__list").stop().slideToggle();

  // アイテムの状態を更新
  parentItem.toggleClass("article-archive__item--open");
});

//スクロールした際の動きを関数でまとめる
function PageTopAnime() {
  const scroll = $(window).scrollTop(); //スクロール値を取得
  if (scroll >= 200) {
    //200pxスクロールしたら
    $("#page-top").removeClass("DownMove"); // DownMoveというクラス名を除去して
    $("#page-top").addClass("UpMove"); // UpMoveというクラス名を追加して出現
  } else {
    //それ以外は
    if ($("#page-top").hasClass("UpMove")) {
      //UpMoveというクラス名が既に付与されていたら
      $("#page-top").removeClass("UpMove"); //  UpMoveというクラス名を除去し
      $("#page-top").addClass("DownMove"); // DownMoveというクラス名を追加して非表示
    }
  }

  const wH = window.innerHeight; //画面の高さを取得
  const footerPos = $("#footer").offset().top; //footerの位置を取得
  if (scroll + wH >= footerPos + 10) {
    const pos = scroll + wH - footerPos + 20; //スクロールの値＋画面の高さからfooterの位置＋40pxを引いた場所を取得し
    $("#page-top").css("bottom", pos); //#page-topに上記の値をCSSのbottomに直接指定してフッター手前で止まるようにする
  } else {
    //それ以外は
    if ($("#page-top").hasClass("UpMove")) {
      //UpMoveというクラス名がついていたら
      $("#page-top").css("bottom", "10px"); // 下から10pxの位置にページリンクを指定
    }
  }
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  PageTopAnime(); //スクロールした際の動きの関数を呼ぶ
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on("load", function () {
  PageTopAnime(); //スクロールした際の動きの関数を呼ぶ
});

// #page-topをクリックした際の設定
$("#page-top").click(function () {
  $("body,html").animate(
    {
      scrollTop: 0, //ページトップまでスクロール
    },
    500
  ); //ページトップスクロールの速さ。数字が大きいほど遅くなる
  return false; //リンク自体の無効化
});

//--------------------------------
// campaignページのカテゴリータグの動き
//--------------------------------
// document.addEventListener("DOMContentLoaded", function () {
//   const categoryLinks = document.querySelectorAll(".category-tag-item__link");

//   categoryLinks.forEach((link) => {
//     link.addEventListener("click", function (event) {
//       event.preventDefault(); // リンクのデフォルト動作を防止

//       // 全てのリンクから active クラスを削除
//       categoryLinks.forEach((item) => {
//         item.classList.remove("category-tag-item__link--active");
//       });

//       // クリックされたリンクに active クラスを追加
//       this.classList.add("category-tag-item__link--active");
//     });
//   });
// });

//--------------------------------
// FAQ
//--------------------------------
document.addEventListener("DOMContentLoaded", function () {
  const triggers = document.querySelectorAll(".faq-accordion__header");
  triggers.forEach((trigger) => {
    trigger.addEventListener("click", (e) => {
      const target = e.currentTarget;
      const panel = target.nextElementSibling;

      if (!panel) return;

      const isOpen = target.classList.contains(
        "faq-accordion__header--is-open"
      );

      if (isOpen) {
        // アコーディオンを閉じる
        target.classList.remove("faq-accordion__header--is-open");
        panel.classList.add("faq-accordion__panel--is-close");
        panel.classList.remove("faq-accordion__panel--is-open");
      } else {
        // アコーディオンを開く
        target.classList.add("faq-accordion__header--is-open");
        panel.classList.remove("faq-accordion__panel--is-close");
        panel.classList.add("faq-accordion__panel--is-open");
      }
    });
  });
});
