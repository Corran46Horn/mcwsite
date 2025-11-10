//font size buttons
jQuery(document).ready(function () {
  var small = '16px';
  var medium = '18px';
  var large = '20px';

  if (Cookies.get('fontsize') == 1) {
    jQuery('html').css('font-size', small);
    jQuery('.wcag-font-size').removeClass('active');
    jQuery('.wcag-font-size-1').addClass('active');
  }
  if (Cookies.get('fontsize') == 2) {
    jQuery('html').css('font-size', medium);
    jQuery('.wcag-font-size').removeClass('active');
    jQuery('.wcag-font-size-2').addClass('active');
  }
  if (Cookies.get('fontsize') == 3) {
    jQuery('html').css('font-size', large);
    jQuery('.wcag-font-size').removeClass('active');
    jQuery('.wcag-font-size-3').addClass('active');
  }

  jQuery('.wcag-wrap .wcag-font-size-1').click(function (e) {
    e.preventDefault();
    jQuery('.wcag-wrap .wcag-font-size').removeClass('active');
    jQuery(this).addClass('active');
    jQuery('html').css('font-size', small);
    Cookies.set('fontsize', 1);
  });
  jQuery('.wcag-wrap .wcag-font-size-2').click(function (e) {
    e.preventDefault();
    jQuery('.wcag-wrap .wcag-font-size').removeClass('active');
    jQuery(this).addClass('active');
    jQuery('html').css('font-size', medium);
    Cookies.set('fontsize', 2);
  });
  jQuery('.wcag-wrap .wcag-font-size-3').click(function (e) {
    e.preventDefault();
    jQuery('.wcag-wrap .wcag-font-size').removeClass('active');
    jQuery(this).addClass('active');
    jQuery('html').css('font-size', large);
    Cookies.set('fontsize', 3);
  });
});

//contrast version button
$(document).ready(function () {
  if (Cookies.get('contrast') == 'true') {
    jQuery('body').addClass('contrast');
  }
  $('#contrast-btn-pc').click(function (e) {
    e.preventDefault();
    $('body').toggleClass('contrast');
    if (Cookies.get('contrast') == 'true') {
      Cookies.set('contrast', 'false');
    } else {
      Cookies.set('contrast', 'true');
    }
  });
});
