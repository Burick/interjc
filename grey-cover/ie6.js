jQuery(function(){
	//修正大尺寸图片大小
	jQuery('.entry img').each(function(){ 
		if(this.width>450){
			jQuery(this).width(450);}
	});
});