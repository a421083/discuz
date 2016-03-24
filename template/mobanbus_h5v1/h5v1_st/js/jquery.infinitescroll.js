// 模板巴士
//Power By diesto
//Copyright www.mobanbus.cn


function item_masonry(){ 
	jQuery('.item img').load(function(){ 
		jQuery('.mobanbus_scroll').masonry({ 
			itemSelector: '.masonry_brick',
			columnWidth:250,
			gutterWidth:15								
		});		
	});
		
	jQuery('.mobanbus_scroll').masonry({ 
		itemSelector: '.masonry_brick',
		columnWidth:250,
		gutterWidth:15								
	});	
}

jQuery(function(){

	function item_callback(){ 
		
		item_masonry();	

	}

	item_callback();  

	jQuery('.item').fadeIn();

	var sp = 1
	
	jQuery(".mobanbus_scroll").infinitescroll({
		navSelector  	: "#more",
		nextSelector 	: "#more a",
		itemSelector 	: ".item",
		
		loading:{
			img: "template/mobanbus_h5v1/h5v1_st/img/loading_1.gif",
			msgText: ' ',
			finishedMsg: 'No More!',
			finished: function(){
				sp++;
				if(sp>=10){ //到第10页结束事件
					jQuery("#more").remove();
					jQuery("#infscr-loading").hide();
					jQuery("#page").show();
					jQuery(window).unbind('.infscr');
				}
			}	
		},errorCallback:function(){ 
			jQuery("#page").show();
		}
		
	},function(newElements){
		var $newElems = jQuery(newElements);
		jQuery('.mobanbus_scroll').masonry('appended', $newElems, false);
		$newElems.fadeIn();
		item_callback();
		return;
	});

});
