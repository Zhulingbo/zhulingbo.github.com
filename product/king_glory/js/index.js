//预加载图片
var loaded = 0;
if ($('.container img[src]').length === 0 || navigator.userAgent.indexOf('MSIE 9') != -1){
}else{
   $('.container').imagesLoaded().progress(function(instance,image){
       loaded ++ ;
       $('.loading_bar').css('width', parseInt(loaded / instance.images.length * 100) + '%');
       if (loaded == instance.images.length) {
           setTimeout(function () {
               $('.mask').fadeOut();
               $(".container").fadeIn();
               init_page();
           }, 100);
       }
   });
}

function init_page(){
	location.hash="index";
	$('.home,.hero,.set_meal,.prize').on('touchmove', function (event) {
		event.preventDefault();
	});

	var mySwiper = new Swiper('.index', {
		noSwiping : true,
		preloadImages: false,
		lazyLoading: true,
		effect:'fade',
		onSlideChangeEnd:function(swiper){

			$(".swiper-container-fade .swiper-slide .swiper-slide").css('pointer-events','none')
			['#wzbs', '#ldzq', '#psyx', '#skdh']
			// 首页

			if (swiper.activeIndex == 0) {
				location.hash="index";
			}else if (swiper.activeIndex == 1) {
				location.hash="ldzq";
			}else if (swiper.activeIndex == 2) {
				location.hash="skdh";
			}else if(swiper.activeIndex == 3) {
				location.hash="wzbs";
			}else if (swiper.activeIndex == 4) {
				$(".swiper-container-fade .swiper-slide .swiper-slide").css('pointer-events','auto')
				location.hash="psyx";
			}
		}
	});

	// set_meal
	var mySwiper2 = new Swiper('.tc_main .swiper-container', {
		effect:'fade',
		loop:true
	});
	$(".check_now").on('click',function(){
		$(".set_meal2 .mask").show();
	})
	$(".set_meal2 .mask").on('click',function(){
		$(".set_meal2 .mask").hide();
	})
	// $(".tc_food .swiper-slide-active").fadeIn();
	// $(".tc_food .swiper-slide-prev").fadeIn();

	var galleryTop = new Swiper('.gallery-top', {
		loop:true,
		loopedSlides:10,
		resistanceRatio:0,
		spaceBetween: 10,
		onSlideChangeStart:function(swiper){
			console.log(swiper.activeIndex);
			if(swiper.activeIndex == 10 ||swiper.activeIndex ==20){

				$(".pic1").fadeIn();
				$(".pic2,.pic3,.pic4,.pic5,.pic6,.pic7,.pic8,.pic9,.pic10").fadeOut();
			}
			if(swiper.activeIndex == 11){
				$(".pic2").fadeIn();
				$(".pic1,.pic3,.pic4,.pic5,.pic6,.pic7,.pic8,.pic9,.pic10").fadeOut();
			}
			if(swiper.activeIndex == 12){
				$(".pic3").fadeIn();
				$(".pic1,.pic2,.pic4,.pic5,.pic6,.pic7,.pic8,.pic9,.pic10").fadeOut();
			}
			if(swiper.activeIndex == 13){
				$(".pic4").fadeIn();
				$(".pic1,.pic2,.pic3,.pic5,.pic6,.pic7,.pic8,.pic9,.pic10").fadeOut();
			}
			if(swiper.activeIndex == 14){
				$(".pic5").fadeIn();
				$(".pic1,.pic2,.pic3,.pic4,.pic6,.pic7,.pic8,.pic9,.pic10").fadeOut();
			}
			if(swiper.activeIndex == 15){
				$(".pic6").fadeIn();
				$(".pic1,.pic2,.pic3,.pic4,.pic5,.pic7,.pic8,.pic9,.pic10").fadeOut();
			}
			if(swiper.activeIndex == 16){
				$(".pic7").fadeIn();
				$(".pic1,.pic2,.pic3,.pic4,.pic5,.pic6,.pic8,.pic9,.pic10").fadeOut();
			}
			if(swiper.activeIndex == 17){
				$(".pic8").fadeIn();
				$(".pic1,.pic2,.pic3,.pic4,.pic5,.pic6,.pic7,.pic9,.pic10").fadeOut();
			}
			if(swiper.activeIndex == 18){
				$(".pic9").fadeIn();
				$(".pic1,.pic2,.pic3,.pic4,.pic5,.pic6,.pic7,.pic8,.pic10").fadeOut();
			}
			if(swiper.activeIndex == 19 ||swiper.activeIndex ==9){
				$(".pic10").fadeIn();
				$(".pic1,.pic2,.pic3,.pic4,.pic5,.pic6,.pic7,.pic8,.pic9").fadeOut();
			}
		}
	});

	// 箭头按钮

	$(".hero .left_arrow").on('click',function(){
		galleryTop.slidePrev();
	})
	$(".hero .right_arrow").on('click',function(){
		galleryTop.slideNext();
	})
	$(".set_meal2 .left_arrow").on('click',function(){
		mySwiper2.slidePrev();
	})
	$(".set_meal2 .right_arrow").on('click',function(){
		mySwiper2.slideNext();
	})

	var galleryThumbs = new Swiper('.gallery-thumbs', {
		loop:true,
		loopedSlides:10,
		spaceBetween: 10,
		centeredSlides: true,
		slidesPerView:'auto',
		resistanceRatio:0,
		touchRatio: 0.3
	});



	//	套餐按钮
	$(".tc1_btn").on('touchstart',function(){
		$(this).addClass('tc1_in');
		$(".page1").show();
		$(".page2,.page3,.page4").hide();
		$(".tc2_btn").removeClass('tc2_in');
		$(".tc3_btn").removeClass('tc3_in');
		$(".tc4_btn").removeClass('tc4_in');
	})
	$(".tc2_btn").on('touchstart',function(){
		$(this).addClass('tc2_in');
		$(".page2").show();
		$(".page1,.page3,.page4").hide();
		$(".tc1_btn").removeClass('tc1_in');
		$(".tc3_btn").removeClass('tc3_in');
		$(".tc4_btn").removeClass('tc4_in');
	})
	$(".tc3_btn").on('touchstart',function(){
		$(this).addClass('tc3_in');
		$(".page3").show();
		$(".page1,.page2,.page4").hide();
		$(".tc1_btn").removeClass('tc1_in');
		$(".tc2_btn").removeClass('tc2_in');
		$(".tc4_btn").removeClass('tc4_in');
	})
	$(".tc4_btn").on('touchstart',function(){
		$(this).addClass('tc4_in');
		$(".page4").show();
		$(".page2,.page3,.page1").hide();
		$(".tc2_btn").removeClass('tc2_in');
		$(".tc3_btn").removeClass('tc3_in');
		$(".tc1_btn").removeClass('tc1_in');
	})



	$(".gallery-thumbs .swiper-slide").each(function(i){
		$(this).click(function(){
			galleryTop.slideTo(i);
		})
	})
	galleryTop.params.control = galleryThumbs;
	galleryThumbs.params.control = galleryTop;

	var $elBtnWzbs = $('.home .btn-wzbs');
	var $elBtnLdzq = $('.home .btn-ldzq');
	var $elBtnPsyx = $('.home .btn-psyx');
	var $elBtnSkdh = $('.home .btn-skdh');

	$elBtnWzbs.on('click', function(evt){
		var target = $(this);
		if(target.attr('data-num') != 4) {
			return;
		}
		location.hash="wzbs";
		mySwiper.slideTo(3);
		mySwiper.lockSwipeToPrev();
		mySwiper.lockSwipeToNext();
	})
	$elBtnLdzq.on('click', function(evt){
		var target = $(this)
		if(target.attr('data-num') != 4) {
			return;
		}
		location.hash="ldzq";
		mySwiper.slideTo(1);
	})
	$elBtnPsyx.on('click', function(evt){
		var target = $(this)
		if(target.attr('data-num') != 4) {
			return;
		}
		location.hash="psyx";
		mySwiper.slideTo(4);
		mySwiper.lockSwipeToPrev();
		mySwiper.lockSwipeToNext();
	})
	$elBtnSkdh.on('click', function(evt){
		var target = $(this)
		if(target.attr('data-num') != 4) {
			return;
		}
		location.hash="skdh";
		mySwiper.slideTo(2);
		mySwiper.lockSwipeToPrev();
		mySwiper.lockSwipeToNext();
	})

	$(window).bind( 'hashchange', function(e) {
		if(['#wzbs', '#ldzq', '#psyx', '#skdh'].indexOf(location.hash) == -1) {
			mySwiper.unlockSwipeToPrev();
			mySwiper.unlockSwipeToNext();
			mySwiper.slideTo(0);
		}
	});


	//prize
	var swiper2 = new Swiper('.prize .swiper-container', {
		effect: 'coverflow',
		grabCursor: true,
		// centeredSlides: true,
		slidesPerView:7,
		loop:true,
		coverflow: {
			rotate: 0,
			stretch:-10,
			depth: 50,
			modifier: 1,
			slideShadows : true
		}
	});

	//index
	var num, i,go,num_click,url,url_4;
	url_4 = $('.links a[data-num=4] img').attr('src');
	$('.links a[data-num=4] img').attr('src',url_4.split("_")[0]+'.png');

	$('.links a').on('click',function(){
		num_click = $(this).attr('data-num');
		if(num_click != 4){
			go(num_click);
		}
	})
	go = function(index){
		$('.links a').each(function(){
			num = $(this).attr('data-num');
			if(num > 1 ){
				num--;
			}else{
				num = 4;
			}
			//console.log(num);
			$(this).attr('data-num',num);
			url = $(this).find('img').attr('src');
			if( num == 1){
				$(this).css({ '-webkit-transform': "translate3d(100%, 0, -500px)",'z-index':num  });
			}
			else if( num == 2 ){
				$(this).css({ '-webkit-transform': "translate3d(0, -50%, -700px)",'z-index':num  });
			}
			else if( num == 3 ){
				$(this).css({ '-webkit-transform': "translate3d(-100%, 0, -500px)",'z-index':num });
				$(this).find('img').attr('src',url.split(".")[0]+'_gray.png');
			}
			else if( num == 4 ){
				$(this).css({ '-webkit-transform': "translate3d(0, 50%, 0)",'z-index':num });
				$(this).find('img').attr('src',url.split("_")[0]+'.png');
			}
		});
		setTimeout(function(){
			if(index>1){
				index--;
				go(index);
			}
		},500)
	}
}
