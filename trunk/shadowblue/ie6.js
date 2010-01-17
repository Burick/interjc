jQuery(function($){
//修正大尺寸图片大小
	$('img').each(function(){ 
		if(this.width>450){
			$(this).width(450);
	}});
//anti IE6
  $('#anti_ie6 p strong a').click(function(){
    $('#anti_ie6').fadeOut('slow');
    setCookie('closeAnti',true,7);
  });
});