//图片自适应,参数fitType=fill为填充式，fitType=auto为横竖排列自适应
(function($){
    $.fn.picFit = function(fitType){


        var maxHeight,maxWidth,accMax,MT,ML;

        $("div.picFit").each(function(){
            maxHeight=parseInt($(this).css("height"));
            maxWidth=parseInt($(this).css("width"));
            accMax=maxWidth/maxHeight;

            $(this).find("img").each(function(){

                $(this).css({width:"",height:""});

                if(fitType=="auto"){
                    if($(this)[0].offsetHeight>=$(this)[0].offsetWidth/accMax){
                        $(this).css({height:maxHeight+"px"});
                    }else{
                        $(this).css({width:maxWidth+"px"});
                        MT = (maxHeight-$(this)[0].offsetHeight)/2 + "px";
                        $(this).css({marginTop:MT});
                    }

                }else if(fitType=="fill"){
                    if($(this)[0].offsetHeight>=$(this)[0].offsetWidth/accMax){
                        $(this).css({width:maxWidth+"px"});
                        MT = (maxHeight-$(this)[0].offsetHeight)/2 + "px";
                        //$(this).css({marginTop:MT});
                    }else{
                        $(this).css({height:maxHeight+"px"});
                        ML = (maxWidth-$(this)[0].offsetWidth)/2 + "px";
                        //$(this).css({marginLeft:ML});
                    }
                }else{
                    $(this).css({width:maxWidth+"px",height:maxHeight+"px"});
                }

            });


        });

    };

})(jQuery);
jQuery(function() {
    window.setTimeout(function(){jQuery().picFit("auto");},500);

});