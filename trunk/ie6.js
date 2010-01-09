$(function(){
//修正大尺寸图片大小
	$('img').each(function(){ 
		if(this.width>690){
			$(this).width(690);
    }
  });
	$('#sidebar>ul>li').addClass('s_widgets');
//anti IE6
    $('#anti_ie6 p strong a').click(function(){
        $('#anti_ie6').fadeOut('slow');
        setCookie('cloaseAntiIE',1,7);
    });
});