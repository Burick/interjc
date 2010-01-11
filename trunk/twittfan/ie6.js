//修正大尺寸图片大小
$(function(){
	$('img').each(function(){ 
		if(this.width>500){
			$(this).width(500);
	}});
});
