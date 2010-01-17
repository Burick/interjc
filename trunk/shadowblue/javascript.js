jQuery(function($){
//判断浏览器
if($.browser.msie){
  var ieVer = $.browser.version;
  switch(ieVer){
    case 7:
      $('#searchreset,#searchsubmit').css({'top':'3px'});
    default:
      //nothing to do
  }
}else{
  var ieVer = 100;
}
//.story
$('.story:last').addClass('last-story');
//.widget
$('.sidebar>ul>li').addClass('widget');
//评论 Ctrl+Enter
$('#commentform input,#commentform textarea').keydown(function(e){
  if(e.ctrlKey && (e.keyCode==13 || e.keyCode==10)){
    $('#commentform :submit').click();
  }
});
//评论 Respond
$('.comment-reply-link').click(function(){
  // $(this).parent().next('.respond-box').empty().append($('.respond-in'));
  // $('.respond-in .cancel-comment-reply small').addClass('show');
  // return false;
});
//welcome back
if($('#commentform #author').attr('value')!=''){
  var commentAuthor = $('#commentform #author').attr('value');
  $('.welcome-back').addClass('show').children('strong').append(commentAuthor);
  $('.welcome-new').addClass('hidden');
}
$('.welcome-back .comment-reset').click(function(){
  $('.welcome-back').removeClass('show').siblings('.welcome-new').slideDown().children('input').attr('value','');
  return false;
});
//搜索样式
$('#searchreset').click(function(){
  $(this).hide();
});
$('#searchform :text').focus(function(){
  $('#searchreset').show();
  if(ieVer<8){
    $('#searchform :text').css({'border-color':'#79a8e7'});
  }
});
$('#searchform :text').blur(function(){
  if($(this).attr('value')==''){
    $('#searchreset').hide();
  }
  if(ieVer<8){
    $('#searchform :text').css({'border-color':'#ccc'});
  }
});
//返回页首
$('#scroll a').fadeTo(0,0.2).hover(
  function(){
    $(this).fadeTo(300,0.9);
  },
  function(){
    $(this).fadeTo(600,0.2);
});
$('a.back-to-top').click(function(){
  $('html, body').animate({scrollTop: 0}, {duration:1200, easing:'easeInOutSine'});
  return false;
});
$('a.back-to-bottom').click(function(){
  $('html, body').scrollTo( '#footer', 1200, {easing:'easeInOutSine'} );
  return false;
});
//外部链接 rel="external"
$('a[rel="external"],a.url').click(function(){
	window.open(this.href);
	return false;
});
//WP-Spread-Comment
$('.comment-childs img.avatar')
  .next('p').addClass('comment-childs-meta').after('<div class="clear"></div>');
$('.thdrpy a').attr('title','点此回复');
//Zelig-Plugin
$('.plugins-list tbody tr').each(function(){
  $(this).children('td:eq(0)').addClass('td-1');
  $(this).children('td:eq(1)').addClass('td-2');
  $(this).children('td:eq(2)').addClass('td-3');
});
//End
});