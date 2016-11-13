/*======================公共方法==================*/
function setcookie(name,value){
    var Days = 30;
    var exp  = new Date();
    exp.setTime(exp.getTime() + Days*24*60*60*1000);
    document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
}

function getcookie(name){
    var arr = document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)"));
    if(arr != null){
        name1=unescape(arr[2]);
        var name = name1.replace(/[\',\"]/g,"");
        return name;
    }else{
        return "";
    }
}



function delcookie(name){

    var exp = new Date();

    exp.setTime(exp.getTime() - 1);

    var cval=getCookie(name);

    if(cval!=null) document.cookie= name + "="+cval+";expires="+exp.toGMTString();

}


/*启用客服
 {if $Module[9]['status']}
 <YP:kefu id="kefu" left="-10" top="180" />
 {/if}
 var kefu = new Floaters(); kefu.addItem("kefu",-10,180,"");kefu.play("kefu");
 */
/*================客服浮动==================*/

function Floaters() {

    this.delta=0.15;

    this.playid =null;

    this.items	= [];

    this.addItem	= function(id,x,y,content) {

        var newItem = {};

        newItem.object = document.getElementById(id);



        if(x==0){

            objw= newItem.object.offsetWidth;

            var body = (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body;

            newItem.x = x = body.scrollLeft + (body.clientWidth - objw)/2;

            newItem.y = y;

        }else{

            newItem.x = x;

            newItem.y = y;

        }



        this.items[this.items.length]		= newItem;

    }

    this.play =function(varname){

        this.playid = setInterval(varname+'.plays()',30);

    }

    this.close = function(obj){

        document.getElementById(obj).style.display='none';

        //clearInterval(this.playid);

    }

}

Floaters.prototype.plays = function(){

    var diffY;

    if (document.documentElement && document.documentElement.scrollTop)

    {

        diffY = document.documentElement.scrollTop;

    }

    else if (document.body)

    {

        diffY = document.body.scrollTop;

    }else{}



    for(var i=0;i<this.items.length;i++) {

        var obj = this.items[i].object;

        var followObj_y = this.items[i].y;

        var total = diffY + followObj_y;

        if(this.items[i].x >= 0){

            obj.style['left'] = this.items[i].x+ 'px';

        }else{

            obj.style['right'] = Math.abs(this.items[i].x)+ 'px';

        }

        if( obj.offsetTop != total)

        {

            var oldy = (total - obj.offsetTop) * this.delta;

            newtop = obj.offsetTop + ( oldy>0?1:-1 ) * Math.ceil( Math.abs(oldy) );

            obj.style['top'] = newtop + 'px';

        }

    }

}
/*=============会员状态===========*/

function showlogin()
{
    var auth = getcookie('YP_auth');

    if(auth != '')
    {
        $('#login_username').html(unescape(getcookie('YP_username')));

        $('#login_div').hide();

        $('#logined_div').show();
    }
    else
    {
        $('#logined_div').hide();

        $('#login_div').show();
    }
}



$(function(){

    showlogin();

});


/*==================订单处理=======================*/
//加入购物车
function changeorder(obj,moduleid,id,doit,ordercall){
    var objs  =  document.getElementById(obj);
    var datas={'moduleid':moduleid,'id': id,'num':objs.value};
    $.ajax({
        type:"POST",
        url: ROOT+"/index.php?m=Order&a=ajax&do="+doit,
        data: datas,
        timeout:"4000",
        dataType:"JSON",
        success: function(data){
            if(data.data==1){
                ordercall.call(this,obj,moduleid,id,doit,data);
            }else{
                alert(doit + ' error'+data.msg);

            }
        },
        error:function(){
            alert("time out,try it");
        }

    });

}





function area_change(id,level,province,city,area,provinceid,cityid,areaid){
    var datas={'level':level,'provinceid':provinceid,'cityid':cityid,'areaid':areaid};
    $.ajax({
        type:"POST",
        url: ROOT+"/index.php?m=Ajax&a=Area&id="+id,
        data: datas,
        timeout:"4000",
        dataType:"JSON",
        success: function(data){
            if(level==0){
                $('#'+province).html(data.province);
                $('#'+city).html(data.city);
                $('#'+area).html(data.area);
            }else if(level==1){
                $('#'+city).html(data.city);
                $('#'+area).html(data.area);
            }else if(level==2){
                $('#'+area).html(data.area);
            }
        },
        error:function(){
            alert("time out,try it");
        }
    });

}

jQuery(function(){
    jQuery(document).scroll(function(){
        var scrollTop=jQuery(document).scrollTop();

        var maxHei=jQuery(".topcons").outerHeight()+jQuery(".navs").outerHeight()+jQuery(".banner").outerHeight();
        if(scrollTop>maxHei){
            jQuery("#leftcons").css({"position":"fixed"});

        }else{
            jQuery("#leftcons").css({"position":"static"});
        }
    });
});


