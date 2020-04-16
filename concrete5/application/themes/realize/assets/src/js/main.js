import 'css/style.scss';

$(function(){


  var x = $(window).width();
  var y = 600;
  if (x <= y) {
    $('body').addClass('is-sp').removeClass('is-pc');
  }else{
    $('body').addClass('is-pc').removeClass('is-sp');
  }

  $(window).resize(function(){
    var x = $(window).width();
    var y = 600;
    if (x <= y) {
      $('body').addClass('is-sp').removeClass('is-pc');
    }else{
      $('body').addClass('is-pc').removeClass('is-sp');
    }
  });

  $(window).scroll(function() {
    if(location.pathname != ''){
      var sc = $(this).scrollTop();
      if(sc > 80)  $('.hd.is-pc').addClass('is-sticky');
      else         $('.hd.is-pc').removeClass('is-sticky');
      if(sc > 320) $('.hd.is-pc').addClass('is-active');
      else         $('.hd.is-pc').removeClass('is-active');
    }
  });


  var scrollObject = (function() {
    var elm = (function() {
      if('scrollingElement' in document) {
        return document.scrollingElement;
      }
      if(navigator.userAgent.indexOf('WebKit') != -1) {
        return document.body;
      }
      return document.documentElement;
    })();
    var speed = 300;
    var easing = 'swing';
    return {
      getElm: function() {
        return elm;
      },
      smoothScroll: function() {
        var href= $(this).attr("href");
        $(elm).animate({
          scrollTop: ($(href).offset().top - 80)
        }, speed, easing);
        return false;
      }
    }
  })();

  $('a[href^="#"]').not('.noscroll').on('click', scrollObject.smoothScroll);

  $('.js-nv').on('click',function(){
    $('.nv.is-sp').addClass('is-active');
  });

  $('.js-close').on('click',function(){
    $('.nv.is-sp').removeClass('is-active');
  });

});
