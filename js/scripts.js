$(document).ready(function() {
	$('.hamburger').click(function() {
		$( '.hamburger' ).toggleClass( "is-active" );
		$('.sidenav').toggleClass( "open" );
	});
});

$(document).ready(function(){
	$('.slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 4000,
		fade: true,
		arrows: false,
		dots: false,
		draggable: true,
		pauseOnHover: false,
  });
});

$(document).ready(function () {
	$('.tabs-nav li').click(function(e){
		let tab_id = $(this).attr('data-tab'); 
		e.preventDefault();
		$('.tabs-nav li').each(function(){
			$(this).removeClass('active');
		});
		$(this).addClass('active');
		$('.tabs .tab').each(function(){
			$(this).hide();
		});
		$('#'+tab_id).show();
	});
});

$("[data-fancybox]").fancybox({
	// Options will go here
});

//mobile menu > adds arrow for elements with sub-menu
$('.sidenav li.menu-item-has-children >a').append('<span class=arrow></span>');
$('.sidenav li.menu-item-has-children a span.arrow').parent().parent().find('>a').prepend('<span class=back-arrow></span>');
//mobile menu > open sub-menu, hide list elements, arrow and stuff
$('.sidenav li.menu-item-has-children a span.arrow').click(function(e){
	e.preventDefault();
	$(this).parent().parent().parent().find('li').hide();
	$(this).parent().parent().parent().parent('.menu-item-has-children').find('>a').hide();
	$(this).parent().parent().show();
	$(this).hide();
	$(this).parent().parent().find('>a').find('span.back-arrow').show();
	$(this).parent().parent().find('>a').addClass('menu-item-going-back');
	$(this).parent().parent().find('>.sub-menu').show();
	$(this).parent().parent().find('>.sub-menu li').show();
	//mobile menu > back to previous menu after click on back arrow
	$('.sidenav li.menu-item-has-children a span.back-arrow').click(function(e){
		e.preventDefault();
		$(this).hide();
		$(this).parent().removeClass('menu-item-going-back');
		$(this).parent().parent().find('>.sub-menu').hide();
		$(this).parent().parent().parent().find('>li').show();
		$(this).parent().find('span.arrow').show();
		$(this).parent().parent().parent().parent().find('>a').show();
	});
});
//mobile menu background color change
$('span.arrow').on('click', function(e){
	e.preventDefault();
	$('.menu-bg-wrap').addClass('background-sub-menu');
});
$('.sidenav >li >a >.back-arrow').click(function(e){
	e.preventDefault();
	$('.menu-bg-wrap').removeClass('background-sub-menu');
});