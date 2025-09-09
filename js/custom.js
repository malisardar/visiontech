// $('.SubMenu, .SubMenuSec').hover(function(){
//     $(this).addClass('active');
//     $('.SubMenuSec').slideDown('fast');
// }).mouseleave(function() {
//     $(this).removeClass("active");
//     $('.SubMenuSec').hide();
// })

$(window).on('beforeunload', function(){
    $(window).scrollTop(0);
});
// Toggle Button
$('.toggleBtn').click(function(){
    $(this).toggleClass('active');
    $('.toggleBox').slideToggle(1000);
    
});
// : Moving Arrow
$('.MenuNav li a').hover(function(){
	var dataID = $(this).attr("data-id");
	if( dataID == 'mobility'){
		$('.MenuNav li a').removeClass('active');
		$(this).addClass('active');
		$('svg.ArrowMove').removeClass('ArrowPosition2');
		$('svg.ArrowMove').removeClass('ArrowPosition3');
		$('svg.ArrowMove').removeClass('ArrowPosition4');
		$('svg.ArrowMove').removeClass('ArrowPosition5');
		$('svg.ArrowMove').addClass('ArrowPosition1');
		$('.MenuListBox').hide();
		$('.MobilityList').show();
	} else if( dataID == 'digital'){
		$('.MenuNav li a').removeClass('active');
		$(this).addClass('active');
		$('svg.ArrowMove').removeClass('ArrowPosition1');
		$('svg.ArrowMove').removeClass('ArrowPosition3');
		$('svg.ArrowMove').removeClass('ArrowPosition4');
		$('svg.ArrowMove').removeClass('ArrowPosition5');
		$('svg.ArrowMove').addClass('ArrowPosition2');
		$('.MenuListBox').hide();
		$('.DigitalList').show();
	} else if( dataID == 'technology'){
		$('.MenuNav li a').removeClass('active');
		$(this).addClass('active');
		$('svg.ArrowMove').removeClass('ArrowPosition1');
		$('svg.ArrowMove').removeClass('ArrowPosition2');
		$('svg.ArrowMove').removeClass('ArrowPosition4');
		$('svg.ArrowMove').removeClass('ArrowPosition5');
		$('svg.ArrowMove').addClass('ArrowPosition3');
		$('.MenuListBox').hide();
		$('.TechnologyList').show();
	} else if( dataID == 'ott'){
		$('.MenuNav li a').removeClass('active');
		$(this).addClass('active');
		$('svg.ArrowMove').removeClass('ArrowPosition1');
		$('svg.ArrowMove').removeClass('ArrowPosition2');
		$('svg.ArrowMove').removeClass('ArrowPosition3');
		$('svg.ArrowMove').removeClass('ArrowPosition5');
		$('svg.ArrowMove').addClass('ArrowPosition4');
		$('.MenuListBox').hide();
		$('.OttList').show();
	}
	 else if( dataID == 'product'){
		$('.MenuNav li a').removeClass('active');
		$(this).addClass('active');
		$('svg.ArrowMove').removeClass('ArrowPosition1');
		$('svg.ArrowMove').removeClass('ArrowPosition2');
		$('svg.ArrowMove').removeClass('ArrowPosition3');
		$('svg.ArrowMove').removeClass('ArrowPosition4');
		$('svg.ArrowMove').addClass('ArrowPosition5');
		$('.MenuListBox').hide();
		$('.ProductList').show();
	}
});
$('.tabsBtns li a').click(function(){
	$('.tabsBtns li a').removeClass('active');
    $(this).addClass('active');
});
// Tabs Style
// var t;
//     (t = jQuery)(document).ready((function() {
//         var i = t(window);
//         // console.log(i, "jd");
//         t(".tabsBtnBox").length && (t(".tabsBtnBox").prepend('<span id="tgbg" class="tgbg"></span>'), i.on("click", (function() {
//             var i = t(".tabsBtnBox a.active");
//             if (i.length > 0) {
//                 var e = i.parent(),
//                     a = e.offset();
//                 t("#tgbg").animate({
//                     height: e.height(),
//                     left: a.left,
//                     width: e.width()
//                 }, {
//                     duration: 0
//                 })
//             }
//         })));
//     }));


$(document).ready(function(){
	// Mobile Tab Style
	$(".mobTabsBtn").click(function(){
	  $(".UltabsBtns").toggleClass("showMenu");
		$(".UltabsBtns > li a").click(function(){
			$(".mobTabsBtn > p").text($(this).text());
		});
	});
	// filter Tabs
	$(".mobFilterBtn").click(function(){
		console.log('Clicked');
	  $(".UlFilterBtns").toggleClass("showFilter");
		$(".UlFilterBtns > li a").click(function(){
			$(".mobFilterBtn > p").text($(this).text());
		});
	});
  });
//   Mobile Menu
$('.MobileMenuBtn').click(function(){
    $(this).toggleClass('OpenMenuBtn');
    $('body').toggleClass('HiddenScroll');
		$('header').toggleClass('OpenMenu');
		$('.MobileMenu').toggle();
});

  var mainHeight = $( window ).height();
  var HeaderHeight = $('.HeaderMain').height();
  var Plus = HeaderHeight + 26;
  var CalcHeight = mainHeight - Plus;
  $('.MobileMenuWrap').css('max-height', CalcHeight + 'px');
  $('.HomeHeader').css('height', mainHeight + 'px');
  $('.CasestudiesHeader').css('height', mainHeight + 'px');
  $('.WhatsappHeader').css('height', mainHeight + 'px');
  $('.SeoHeader').css('height', mainHeight + 'px');
  
  
  $( window ).resize(function() {
	var mainHeight = $( window ).height();
  var HeaderHeight = $('.HeaderMain').height();
  var Plus = HeaderHeight + 26;
  var CalcHeight = mainHeight - Plus;
	$('.MobileMenuWrap').css('max-height', CalcHeight + 'px');
	 $('.HomeHeader').css('height', mainHeight + 'px');
	$('.CasestudiesHeader').css('height', mainHeight + 'px');
	$('.WhatsappHeader').css('height', mainHeight + 'px');
	$('.SeoHeader').css('height', mainHeight + 'px');
	});
  
//   $(document).ready(function () {
//     $(".vidImgBox").hover(function () {
//     	 	$(this).children('img').css("opacity", 0);
//         $(this).children("video")[0].play();
        
//     }, function () {
//     	$(this).children('img').css("opacity", 1);
//         var el = $(this).children("video")[0];
//         el.pause();
//         el.currentTime = 0;
//     });
// });

// $(window).load(function() {
// 	function loadIT(){
// 		$('body').addClass('loaded');
// 		$('.overlay-transition').fadeOut(300);
// 	$('.loadbg').hide().fadeOut(500);
// 	}
// 		setTimeout(loadIT,50);	
// }); 
$('body').addClass('loaded');
$('.overlay-transition').fadeOut(300);
$('.loadbg').hide().fadeOut(500);
