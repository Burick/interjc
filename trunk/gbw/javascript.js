$(function(){
	//多级导航栏
	$('#nav ul li').hover(
			function(){
				$(this).addClass('nav_li_hover');
			},
			function(){
				$(this).removeClass('nav_li_hover');
	});
  $('#nav ul>li').hover(
		function(){
  		$(this).addClass('hover').children('ul').show();
		},
		function(){
 			$(this).removeClass('hover').children('ul').fadeOut(); 
	});
	$('#nav li ul li').removeClass('hover').hover(
		function(){
      $(this).addClass('focus').children('ul').show();
		},
		function(){
 			$(this).removeClass('focus').children('ul').fadeOut(); 
	});
	$('#nav li:has(ul)').addClass('li_ul');
  //侧边栏
  $('#sidebar>ul>li>h3').click(function(){
    $(this).siblings('ul').slideToggle();
  });
  //评论区样式
  $('ol.commentlist>li:odd').addClass('comment_odd');
});