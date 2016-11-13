$(function(){
	var tophtml="<div id=\"izl_rmenu\" class=\"izl-rmenu\">"
	            +"<div class=\"btn btn-qq\"><a href=\"chaxun.asp\" target=\"_blank\"><img class=\"qq\" src=\"/Public/Image/KF_chaxun.jpg\" /></a></div>"
				+"<div class=\"btn btn-wx\"><img class=\"pic\" src=\"/Public/Image/KF_weixin.jpg\" /></div>"
				+"<div class=\"btn btn-top\"></div></div>";
	$("#KF_right").html(tophtml);
	$("#izl_rmenu").each(function(){
		$(this).find(".btn-wx").mouseenter(function(){
			$(this).find(".pic").fadeIn("fast");
		});
		$(this).find(".btn-wx").mouseleave(function(){
			$(this).find(".pic").fadeOut("fast");
		});
		$(this).find(".btn-qq").mouseenter(function(){
			$(this).find(".qq").fadeIn("fast");
		});
		$(this).find(".btn-qq").mouseleave(function(){
			$(this).find(".qq").fadeOut("fast");
		});
		$(this).find(".btn-top").click(function(){
			$("html, body").animate({
				"scroll-top":0
			},"fast");
		});
	});
	
	var lastRmenuStatus=false;
	$(window).scroll(function(){//bug
		var _top=$(window).scrollTop();
		if(_top>200){
			$("#izl_rmenu").data("expanded",true);
		}else{
			$("#izl_rmenu").data("expanded",false);
		}
		if($("#izl_rmenu").data("expanded")!=lastRmenuStatus){
			lastRmenuStatus=$("#izl_rmenu").data("expanded");
			if(lastRmenuStatus){
				$("#izl_rmenu .btn-top").slideDown();
			}else{
				$("#izl_rmenu .btn-top").slideUp();
			}
		}
	});
});