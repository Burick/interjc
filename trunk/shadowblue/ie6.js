jQuery(function($){
//修正大尺寸图片大小
	$('img').each(function(){ 
		if(this.width>450){
			$(this).width(450);
	}});
//anti IE6
  $('#anti_ie6 a.close').fadeTo(0,0.6).click(function(){
    $('#anti_ie6').fadeOut(200);
    setCookie('closeAnti',true,7);
    return false;
  }).hover(function(){
    $(this).fadeTo(300,0.9);
  },function(){
    $(this).fadeTo(300,0.6);
  });
});