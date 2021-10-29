var wW = $(window).innerWidth();
var pos = $(window).scrollTop();
var wH = $(window).innerHeight();
var hH;
var hPos;
var sp_flag = false;
var dvCheck = device();

$(function(){
   wW = $(window).innerWidth();
  objectFitImages();
  resizePcSp();
  page_scroll();
  scrollProcess();
  
  
//  if(dvCheck == 'tablet'){
//     $('.mega_btn .contact_btn').removeClass('.sp_btn');
//     }
  megamenu();
});
$(window).on("resize orientationchange", function () {
  wW = $(window).innerWidth();
  resizePcSp();
});
$(window).on("scroll touchmove", function () {
  pos = $(window).scrollTop();
  scrollProcess();
 
});
//関数
////////////////////////////////
/*スマホ判断
----------------------------------------------------------------------------------*/
function resizePcSp() {
    if (wW > 767) {
      sp_flag = false;
      var hposObj = $('.mv_wrap');
      hPos = hposObj.offset().top + hposObj.innerHeight();
      hH = $('header').innerHeight();
    } else {
      sp_flag = true;
      nav_btn();
    }
  }

/*nav_btn
 ----------------------------------------------------------------------------------*/
function nav_btn(){
  var menuObj = $('.nav_wrap');
  
  $('.nav_btn').off();
  $('.nav_btn').on('click',function(){
     menuObj.toggleClass('active');
    return false;
  })
}

/*scroll 処理
----------------------------------------------------------------------------------*/
function scrollProcess() {
  if(!sp_flag){
    if(pos > hPos){
      $('header').addClass('active');
    }
    if(pos < hPos - hH){
      $('header').removeClass('active');
    }
  }
  

  
  /*scroll fadeinなどタイミング*/
  $(".scrollItem").each(function () {
    var startPos = 0.8;
    if ($(this).attr('data-spos') !== undefined) {
      startPos = $(this).data('spos');
    }
    if ($(this).offset().top < pos + wH * startPos) {
      $(this).addClass("scrollActive");
    }
  });

  /*scroll_listの順番で表示タイミング*/
   $(".scrollList").each(function () {
  var delaySpeed = 300;
  var startPos = 0.5;
  var listType = "";

  if ($(this).attr('data-speed') !== undefined) {
    delaySpeed = $(this).data('speed');
  }
  if ($(this).attr('data-spos') !== undefined) {
    startPos = $(this).data('spos');
  }
  if ($(this).attr('data-list') !== undefined) {
    listType = "." + $(this).data('list');
  }

  if ($(this).offset().top < pos + wH * startPos) {
    $(this).find(".scrollListItem" + listType).each(function (i) {
      $(this).delay(delaySpeed * i).queue(function () {
        $(this).addClass("scrollActive").dequeue();
      });
    });
  }
});
  
  /*scroll_listの直下全部を順番で表示タイミング*/
   $(".scrollListAll").each(function () {
  var delaySpeed = 300;
  var startPos = 0.8;

  if ($(this).attr('data-speed') !== undefined) {
    delaySpeed = $(this).data('speed');
  }
  if ($(this).attr('data-spos') !== undefined) {
    startPos = $(this).data('spos');
  }

  if ($(this).offset().top < pos + wH * startPos) {
    $(this).children().not('br').each(function (i) {
      $(this).delay(delaySpeed * i).queue(function () {
        $(this).addClass("scrollActive").dequeue();
      });
    });
  }
});

}

/*ページスクロール
      ----------------------------------------------------------------------------------*/
function page_scroll() {
    $('a[href^="#"]').not(".noScroll,.aco_btn,.aco_btn_sp,.nav_btn").on("click", function () {
      var speed = 800;
      var href = jQuery(this).attr("href");
      
      var target = jQuery(href === "#" || href === "" ? 'html' : href);
      var position = target.offset().top;
      if(!sp_flag){
        position = position - hH;
      }
      $('body,html').animate({
        scrollTop: position
      }, speed, 'swing');
      return false;
    });
  }

/*megamenu
----------------------------------------------------------------------------------*/
function megamenu(){
  if(sp_flag || dvCheck == 'tablet' || dvCheck == 'mobile'){
   console.log(dvCheck);
    $('.mega_btn').children('a').off();
    $('.mega_btn').children('a').removeClass('sp_btn');
    $('.mega_btn').children('a').on('click',function(){
      //$(this).toggleClass('active');
      $('.mega_btn').find('.mega_cont').slideToggle(300);
      return false;
    });
  }else{
    $('.mega_btn:not(:animated)').hover(
    function(){
      $('.mega_cont').stop().slideDown(300);
    },
    function(){
      $('.mega_cont').stop().slideUp(200);
    }
    );
  }
}



/*SPvh
----------------------------------------------------------------------------------*/

let userAgent = window.navigator.userAgent.toUpperCase();
if (userAgent.indexOf('MSIE') === -1 && userAgent.indexOf('TRIDENT') === -1) {
var vh = window.innerHeight * 0.01;
///document.documentElement.style.setProperty('--vh', `${vh}px`);
document.documentElement.style.setProperty('--vh', vh + 'px');

//window.addEventListener('resize', () => {
window.addEventListener('resize', function() {
  var vh = window.innerHeight * 0.01;
  //document.documentElement.style.setProperty('--vh', `${vh}px`);
  document.documentElement.style.setProperty('--vh', vh + 'px');
});
}

// デバイスの判定
function device() {
  var ua = navigator.userAgent;
  if(ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0){
    return 'mobile';
  }else if(ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0){
     
    return 'tablet';
  }else{
    return 'desktop';
  }
}

