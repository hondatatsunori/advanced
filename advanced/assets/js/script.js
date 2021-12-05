// ローディング判定
jQuery(function ($) {
jQuery(window).on("load", function() {
	jQuery("body").attr("data-loading", "true");
});

jQuery(function() {
	// スクロール判定
	jQuery(window).on("scroll", function() {
		if (100 < jQuery(this).scrollTop()) {
			jQuery("body").attr("data-scroll", "true");
		} else {
			jQuery("body").attr("data-scroll", "false");
		}
	});

	// ドロワーメニュー
	$('.js-hamburger').on('click', function() {
		if ($('.js-hamburger').hasClass('is-open')) {
			$('.js-drawer-menu').fadeOut();
			$(this).removeClass('is-open');
		} else {
			$('.js-drawer-menu').fadeIn();
			$(this).addClass('is-open');
		}
	});
	
	// 背景を暗くする
	$('.p-header__background').on('click', function() {
		$('.js-hamburger').removeClass('is-open');
		$('.js-drawer-menu').fadeOut();
	});

	// アコーディオン
	$('.js-accordion').on('click', function() {
		$(this).toggleClass('open');
	});

	/* スムーススクロール */
	jQuery('a[href^="#"]').click(function() {
		let header = jQuery(".js-header").height();
		let speed = 300;
		let id = jQuery(this).attr("href");
		let target = jQuery("#" == id ? "html" : id);
		let position = jQuery(target).offset().top - header;
		if ("fixed" !== jQuery("#header").css("position")) {
			position = jQuery(target).offset().top;
		}
		if (0 > position) {
			position = 0;
		}
		jQuery("html, body").animate(
			{
				scrollTop: position
			},
			speed
		);
		return false;
	});

	/* 電話リンク */
	let ua = navigator.userAgent;
	if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
		jQuery('a[href^="tel:"]')
			.css("cursor", "default")
			.on("click", function(e) {
				e.preventDefault();
			});
	}

	// 料金表のスクロールヒント
	new ScrollHint('.js-scroll-able');

});
});
