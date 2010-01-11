$(function(){
	$('#sidebar li>ul>li>ul').addClass('ul_lulu');
	$('#sidebar li>ul>li').hover(
		function(){
			$(this).addClass('li_lul');
		},
		function(){
			$(this).removeClass('li_lul');
		});
/* 暂时屏蔽的功能：鼠标移动到文章内容时背景高亮	
    $('div.story').hover(
		function(){
			$(this).addClass('story_hover');
		},
		function(){
			$(this).removeClass('story_hover');
		});
暂时屏蔽的功能 */
});