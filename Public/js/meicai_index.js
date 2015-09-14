$(document).ready(function(){
	//首页手动轮播
	var pageSize = 1,//每次滚动的数目
		current = 1,//当前页数
		dir = true,//标记可向后
		page = Math.ceil($('.items >li').length/pageSize),
		itemContainer = $('.items',this),
		items = $('.items>li',this);

		function seekTo(i){
			var left = $('.items >li').eq(i).position().left;
			$(".items").animate({left:-left},300,'swing');
		}
		function goNext(){
			if(page == current){dir = false;return;}//当前页为2时不能向后
			seekTo(pageSize*current);
			current++;
		}
		function goPrev(){
			if(current == 1){dir = true;return;}//第一页则跳出函数
			current--;
			seekTo(pageSize*(current-1));
		}
	$(".zuojiantoubox").click(function(){
		goPrev();	
	});
	$(".youjiantoubox").click(function(){
		goNext();
	});

	$("#dingzhi").click(function(){
		if(current==1){
			window.close();
			window.open("meicaiSchGoddessA.html");
		}
		else{
			window.open("meicaiHeadhunter.html");
			window.close();
		}
	})
	
});