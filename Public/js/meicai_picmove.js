$(document).ready(function(){

	(function($)
	{
	$.fn.scrollable = function(config){
		var deplay = 1500,//轮播时间间隔
		pageSize = 1,//每次滚动的数目
		current = 1,//当前页数
		dir = true,//标记可向后
		autopaly = true,//标记翻滚
		page = Math.ceil($('.items>li').length/pageSize),
		self = this,
		itemContainer = $('.items',this),
		items = $('.items>li',this);
		
		//将定义的函数派生为方法，将方法改成json格式
		$.extend(self,{
		seekTo :function(i){
			left = items.eq(i).position().left;
			itemContainer.animate({left:-left},500,'swing');
		},
		goPlay :function(){
		time = setInterval(function(){
				if(dir){
					self.goNext();
				}
				else{
					self.goPrev();	
				}
			},deplay);
		//鼠标放上去时暂停滚动	
		$('#pic_move').mouseover(function()
		{
			clearTimeout(time);
		});
		//鼠标移开时继续滚动，再次执行setInterval
		$('#pic_move').mouseout(function()
		{
			time=setInterval(function(){
				if(dir){
					self.goNext();
				}
				else{
					self.goPrev();	
				}
			},deplay);
		});
		//按钮控制左移
		$(".icon-left").click(function(){
			if(current <= 1){dir = true;return;}
			self.seekTo((pageSize)*(current-2));
			self.goPrev();
		});
		//按钮控制右移
		$(".icon-right").click(function(){
			self.goNext();
		});
		//简历中心的
		//按钮控制左移
		$(".left_sicon").click(function(){
			if(current <= 1){dir = true;return;}
			self.seekTo((pageSize)*(current-2));
			self.goPrev();
		});
		//按钮控制右移
		$(".right_sicon").click(function(){
			self.goNext();
		});
		},
		goNext :function(){
			if(page == current){dir = false;return;}
			self.seekTo(pageSize*current);
			current++;
			//圆圈
			yuanshunxu = $("#picshunxu").children();			
			if(current==2){
				yuanshunxu.eq(1).css("background-color","#616262");
				yuanshunxu.eq(0).css("background-color","");
				yuanshunxu.eq(2).css("background-color","");
			}
			else{
				yuanshunxu.eq(2).css("background-color","#616262");
				yuanshunxu.eq(0).css("background-color","");
				yuanshunxu.eq(1).css("background-color","");
			}
		},
		goPrev :function(){
			itemContainer.css("left","0px");
			yuanshunxu.eq(0).css("background-color","#616262");
			yuanshunxu.eq(1).css("background-color","");
			yuanshunxu.eq(2).css("background-color","");			
			current -= (page-1);
			dir = true;
			return;			
		}
		});
		if(autopaly)
		self.goPlay();
		return self;
	
	}

	})(jQuery);
	$("#pic_move").scrollable();

});