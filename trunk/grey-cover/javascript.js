$(function(){
	$('.categories,.linkcat,.pagenav').addClass('widget');
	$('#widget-box>ul>li:odd,.widget-inner>ul>li:odd').addClass('widget-odd');
	$('#widget-box>ul>li:even:not(:first),.widget-inner>ul>li:even').addClass('widget-even');
	$('#nav>ul>li:not(:last)').addClass('nav-li-notlast');
	$('.comment_li:odd').addClass('comment_li_odd');
	//Slider
	$('#slider-boxer').easySlider({
			prevId: 'slider-pre',
			prevText: 'Previous',
			nextId: 'slider-next',
			nextText: 'Next',
			controlsShow: true,
			controlsBefore: '<div id="slider-control">',
			controlsAfter: '</div>',
			controlsFade: false,
			firstId: 'slider-first',
			firstText: 'First',
			firstShow: false,
			lastId: 'slider-last',
			lastText: 'Last',
			lastShow: false,
			vertical: false,
			speed: 1000,
			auto: true,
			pause: 3000,
			continuous: true
	});
	//外部链接 rel="external"
	$('a[rel="external"]').click(function(){
		window.open(this.href);
		return false;
	});
});