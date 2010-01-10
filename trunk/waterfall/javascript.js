jQuery(function(){	
	//外部链接 rel="external"
	jQuery('a[rel="external"],a.url').click(function(){
		window.open(this.href);
		return false;
	});	
	//多级导航栏
	jQuery('#nav ul li').hover(
		function(){
			jQuery(this).addClass('nav_li_hover');
		},
		function(){
			jQuery(this).removeClass('nav_li_hover');
	});
  jQuery('#nav ul>li').hover(
    function(){
      $(this).doTimeout('hoverNAV',300,function(){
        jQuery(this).addClass('hover').children('ul').fadeIn();      
      });
    },
    function(){
      $(this).doTimeout('hoverNAV',0,function(){
        jQuery(this).removeClass('hover').children('ul').fadeOut('slow');     
      });
    }
  );
	jQuery('#nav li:has(ul)').addClass('li_ul');
  //导航按钮
  jQuery('#cancel_reply a').attr('title','点击取消回复');
  jQuery('#nav_buttons a,#cancel_reply a').fadeTo(0,0.6).hover(function(){jQuery(this).fadeTo(300,1);}, function(){ jQuery(this).fadeTo(300,0.6);});
  jQuery('#nav_comment').click(function(){
    if(jQuery(this).attr('name')=='go-comment'){
      jQuery('html, body').scrollTo(jQuery('#respond'), 1200,{easing: 'easeInOutSine', offset: -50 });
      return false;
    } else {
      setCookie('goGbook',1);
    }
  });
	//正文样式
  if(jQuery.browser.msie){
      var storyChildren = 0;
      jQuery('.story').each(function(){
          storyChildren++;
      });
      if(storyChildren>1){    
          jQuery('.story:lt('+(storyChildren-1)+')').addClass('story_not_last');
          jQuery('.story:gt(0)').addClass('story_not_first');     
      }    
  }else{
      jQuery('.story:not(:last)').addClass('story_not_last');
      jQuery('.story:not(:first)').addClass('story_not_first');     
  }
  //链接样式
  jQuery('.entry a:has(img)').addClass('hasIMG');
  //图片Hover
  jQuery('.entry .inner img').hover(function(){
    jQuery(this).doTimeout('hoverIMG',500,function(){
      jQuery(this).animate(
        {
        borderTopColor: '#003E7B',
        borderRightColor: '#003E7B',
        borderBottomColor: '#003E7B',
        borderLeftColor: '#003E7B'   
        },
        {
        duration: 1200,
        complete: function(){
            jQuery(this).addClass('hover');
          }
        }
      ); 
    });
  }, function(){
    jQuery(this).doTimeout('hoverIMG',500,function(){
      jQuery(this).animate(
        {
        borderTopColor: '#ccc',
        borderRightColor: '#ccc',
        borderBottomColor: '#ccc',
        borderLeftColor: '#ccc'   
        },
        {
        duration: 1200,
        complete: function(){
            jQuery(this).removeClass('hover');
          }
        }
      ); 
    });
  });
  //评论区样式
  jQuery('.thdrpy a').attr('title','点此回复');
  if(jQuery.browser.msie && jQuery.browser.version<8){
    jQuery('.thdrpy').addClass('show');
  } else {
    jQuery('div.commentmetadata').hover(
      function(){
        jQuery(this).closest('li[id^="comment-"]').find('.thdrpy:first').show();
      },function(){
        jQuery(this).closest('li[id^="comment-"]').find('.thdrpy:first').hide();
      }
    );
    jQuery('.comment_text').children(':not(".comment-childs")').hover(
      function(){
        jQuery(this).closest('li[id^="comment-"]').find('.thdrpy:first').show();
      },function(){
        jQuery(this).closest('li[id^="comment-"]').find('.thdrpy:first').hide();
      }
    );  
    jQuery('.comment-childs').children().not('.comment-childs').hover(
      function(){
        jQuery(this).closest('div[id^="comment-"]').find('.thdrpy:first').show();
      },function(){
        jQuery(this).closest('div[id^="comment-"]').find('.thdrpy:first').hide();
      }
    );
  }
  jQuery('ol.commentlist>li:odd').addClass('comment_odd');
	//侧边栏样式
	jQuery('.pagenav,.linkcat').addClass('widget');    
	//自定义链接样式
	jQuery('#better-blogroll a[rel="co-worker"]').addClass('co-worker'); 
  //搜索样式
  jQuery('#searchreset').click(function(){
    $(this).hide();
  });
  jQuery('#searchform :text').focus(function(){
    jQuery('#searchreset').show();
    if(jQuery.browser.msie && jQuery.browser.version<8){
      jQuery('#searchform :text').css({'border-color':'#79a8e7'});
    }
  });
  jQuery('#searchform :text').blur(function(){
    if($(this).attr('value')==''){
      jQuery('#searchreset').hide();
    }
    if(jQuery.browser.msie && jQuery.browser.version<8){
      jQuery('#searchform :text').css({'border-color':'#ccc'});
    }
  });
  if(jQuery.browser.msie && jQuery.browser.version==7){
    jQuery('#searchreset,#searchsubmit').css({'top':'3px'});
  }
  //返回页首
  /* jQuery('a.back-to-top').click(function(){
      jQuery('html, body').animate(
          {scrollTop: 0},
          800
          );
      return false;
  }); */
  jQuery('a.back-to-top').click(function(){
    jQuery('html, body').animate(
      {scrollTop: 0},
      {
      duration:1200,
      easing:'easeInOutSine'
      });
    return false;
  });
  jQuery('a.back-to-bottom').click(function(){
    jQuery('html, body').scrollTo( '#sidebar', 1200, {easing:'easeInOutSine'} );
    return false;
  });
});
//Wibiya
/* jQuery(function(){
	jQuery('#wrap').after('<script src="http://toolbar.wibiya.com/toolbarLoader.php?toolbarId=13976" type="text/javascript"></script>');
}); */
//载入中 Loding..
jQuery(function(){
  jQuery('#loading').click(function(){
    jQuery(this).fadeOut();
  });
  jQuery('#loading-one').empty().append('页面载入完毕.').parent().fadeOut('slow');
  if(getCookie('goGbook')==1 && jQuery('li.page-item-6').hasClass('current_page_item')){
    jQuery('html, body').animate({scrollTop: 0},2000).scrollTo(jQuery('#respond'), 1200,{easing: 'easeInOutSine', offset:-50, onAfter: function(){setCookie('goGbook',0);}}); 
  }
});