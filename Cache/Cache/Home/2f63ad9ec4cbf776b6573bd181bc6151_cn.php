<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="content-type" content="text/html; charset=utf-8" /><meta name="robots" content="index, follow" /><meta name="keywords" content="<?php echo ($seo_keywords); ?>" /><meta name="description" content="<?php echo ($seo_description); ?>" /><meta name="Copyright" content="Copyright (c) 2008 yourphp.cn" /><meta name="author" content="<?php echo ($site_name); ?>--Powered by yourphp"><meta name="generator" content="Yourphp 2.0" /><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /><title><?php echo ($seo_title); ?>-<?php echo ($site_name); ?></title><link href="__ROOT__/index.php?m=Format&a=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" /><link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /><meta name="robots" content="index, follow"><meta name="googlebot" content="index, follow"><link href="/Public/Css/A_css.css" rel="stylesheet" type="text/css"><script language=javascript src="/Public/Image/A_menu.js"></script><script type="text/javascript" src="/Public/Image/A_kf_jquery-1.8.3.min.js"></script><script type="text/javascript" src="/Public/Image/A_kf_lrtk.js"></script><script>		var URL_blank = "";
	</script></head><body leftmargin="0" topmargin="0" rightmargin="0" background="/Public/Image/in_1001.jpg" onLoad="init(); initAd001();"><div style="background:url(/Public/Image/ad_1002.jpg) center top no-repeat;"><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000"><TR><TD height="70"></TD></TR></table><script language="javascript">		function $G(Read_Id) {
			return document.getElementById(Read_Id)
		}

		function Effect() {
			var ObjectId = "test1";
			if ($G(ObjectId).style.display == 'none') {
				Start(ObjectId, 'Opens');
			} else {
				Start(ObjectId, 'Close');
			}
		}

		function Start(ObjId, method) {
			var BoxHeight = $G(ObjId).offsetHeight; //获取对象高度
			var MinHeight = 5; //定义对象最小高度
			var MaxHeight = 180; //定义对象最大高度
			var BoxAddMax = 1; //递增量初始值
			var Every_Add = 0.15; //每次的递(减)增量  [数值越大速度越快]
			var Reduce = (BoxAddMax - Every_Add);
			var Add = (BoxAddMax + Every_Add);

			if (method == "Close") {
				var Alter_Close = function() { //构建一个虚拟的[递减]循环
					BoxAddMax /= Reduce;
					BoxHeight -= BoxAddMax;
					if (BoxHeight <= MinHeight) {
						$G(ObjId).style.display = "none";
						window.clearInterval(BoxAction);
					} else $G(ObjId).style.height = BoxHeight;
				}
				var BoxAction = window.setInterval(Alter_Close, 1);
			}

			else if (method == "Opens") {
				var Alter_Opens = function() { //构建一个虚拟的[递增]循环
					BoxAddMax *= Add;
					BoxHeight += BoxAddMax;
					if (BoxHeight >= MaxHeight) {
						$G(ObjId).style.height = MaxHeight;
						window.clearInterval(BoxAction);
					} else {
						$G(ObjId).style.display = "block";
						$G(ObjId).style.height = BoxHeight;
					}
				}
				var BoxAction = window.setInterval(Alter_Opens, 1);
			}

		}
	</script><div id="test1" class="test"><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000"><TR><TD height="180" background="/Public/Image/ad_1003.jpg"></TD></TR></table></div><script language="javascript">		setTimeout(Effect, 5000);
	</script><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000"><TR><TD height="5" bgcolor="#FFFFFF"></TD></TR></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000" height="80" background="/Public/Image/in_1002.png"><form action="Product.asp" method="post" target="_blank"><TR><TD width="450"></TD><TD width="120"><center><img src="/Public/Image/bg_1001.gif" width="1" height="18"></center><a href="#" onMouseOver="document.getElementById('Fwsm_12').style.visibility ='visible';"
					   onMouseOut="document.getElementById('Fwsm_12').style.visibility ='hidden'; "
					   class="top3"><img src="/Public/Image/dot_1009.png" align="absmiddle" border="0">微信</a></TD><TD width="4" valign="top"><div id="Fwsm_11" style="position:absolute; z-index:1"><div id="Fwsm_12" style="z-index:1; position:absolute;visibility: hidden; width:240px; height:129px; background-image:url(/Public/Image/in_5046.png); top:58px; left:-170px;"
							 onMouseOver="document.getElementById('Fwsm_12').style.visibility ='visible'; "
							 onMouseOut="document.getElementById('Fwsm_12').style.visibility ='hidden'; "></div></div></TD><TD width="188"><center><img src="/Public/Image/bg_1001.gif" width="1" height="18"></center><input name="title" type="text" maxlength="50" style="color:#666666; width:108px; border:0px #333333 solid;"><img src="/Public/Image/bg_1001.gif" width="17" height="1"><input type="image" src="/Public/Image/in_1036.gif" align="absmiddle"></TD><TD width="206" align="right" class="font01"><center><img src="/Public/Image/bg_1001.gif" width="1" height="21"></center><a href="#" onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.hbheibao.com');"
					   class="top3">						设为首页
					</a>					|
					<a href="javascript:window.external.AddFavorite('http://www.hbheibao.com','深圳市新黑豹建材有限公司')"
					   class="top3">						加入收藏
					</a>					|
					<a href="yc/" target="_blank" class="top3">						宜昌分公司
					</a></TD><TD width="32"></TD></TR></form></table><script>		var URL_blank = "BLANK";
	</script><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000"
           background="/Public/Image/in_1004.png"><TR><TD height="2"></TD></TR><TR><TD height="28"><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000"><TR><TD width="25"></TD><TD width="113"><a href="<?php echo ($site_url); ?>"><img src="/Public/Image/in_1011.png" id="button0" name="button0" onMouseOver="this.src='/Public/Image/in_1021.png';"
                                     onMouseOut="this.src='/Public/Image/in_1011.png';" border="0"></a></TD><TD width="97"><a href="<?php echo ($Categorys[29][url]); ?>" target='_blank' id="menu1" onFocus="if(this.blur)this.blur()"><img src="/Public/Image/in_1012.png" id="button1" name="button1" onMouseOver="this.src='/Public/Image/in_1022.png';"
                                     onMouseOut="this.src='/Public/Image/in_1012.png';" border="0"></a></TD><TD width="93"><a href="<?php echo ($Categorys[21][url]); ?>" target='_blank' id="menu2" onFocus="if(this.blur)this.blur()"><img src="/Public/Image/in_1013.png" id="button2" name="button2" onMouseOver="this.src='/Public/Image/in_1023.png';"
                                     onMouseOut="this.src='/Public/Image/in_1013.png';" border="0"></a></TD><TD width="93"><a href="<?php echo ($Categorys[22][url]); ?>" target='_blank' id="menu3" onFocus="if(this.blur)this.blur()"><img src="/Public/Image/in_1014.png" id="button3" name="button3" onMouseOver="this.src='/Public/Image/in_1024.png';"
                                     onMouseOut="this.src='/Public/Image/in_1014.png';" border="0"></a></TD><TD width="95"><a href="<?php echo ($Categorys[23][url]); ?>" target='_blank' id="menu4" onFocus="if(this.blur)this.blur()"><img src="/Public/Image/in_1015.png" id="button4" name="button4" onMouseOver="this.src='/Public/Image/in_1025.png';"
                                     onMouseOut="this.src='/Public/Image/in_1015.png';" border="0"></a></TD><TD width="96"><a href="<?php echo ($Categorys[49][url]); ?>" target='_blank' id="menu5" onFocus="if(this.blur)this.blur()"><img src="/Public/Image/in_1016.png" id="button5" name="button5" onMouseOver="this.src='/Public/Image/in_1026.png';"
                                     onMouseOut="this.src='/Public/Image/in_1016.png';" border="0"></a></TD><TD width="97"><a href="<?php echo ($Categorys[25][url]); ?>" target='_blank' id="menu6" onFocus="if(this.blur)this.blur()"><img src="/Public/Image/in_1017.png" id="button6" name="button6" onMouseOver="this.src='/Public/Image/in_1027.png';"
                                     onMouseOut="this.src='/Public/Image/in_1017.png';" border="0"></a></TD><TD width="97"><a href="<?php echo ($Categorys[37][url]); ?>" target='_blank' id="menu7" onFocus="if(this.blur)this.blur()"><img src="/Public/Image/in_1018.png" id="button7" name="button7" onMouseOver="this.src='/Public/Image/in_1028.png';"
                                     onMouseOut="this.src='/Public/Image/in_1018.png';" border="0"></a></TD><TD width="94"><a href="<?php echo ($Categorys[57][url]); ?>" target='_blank' id="menu8" onFocus="if(this.blur)this.blur()"><img src="/Public/Image/in_1019.png" id="button8" name="button8" onMouseOver="this.src='/Public/Image/in_1029.png';"
                                     onMouseOut="this.src='/Public/Image/in_1019.png';" border="0"></a></TD><TD width="100"></TD></TR></table><script language="javascript">                    if (GDNetMenuDown.isSupported()) {
                        var ms = new GDNetMenuDownSet(GDNetMenuDown.direction.down, 0, 0, GDNetMenuDown.reference.bottomLeft);
                        var menu1 = ms.addMenu(document.getElementById("menu1"));
                        var menu2 = ms.addMenu(document.getElementById("menu2"));
                        var menu3 = ms.addMenu(document.getElementById("menu3"));
                        var menu4 = ms.addMenu(document.getElementById("menu4"));
                        var menu5 = ms.addMenu(document.getElementById("menu5"));
                        var menu6 = ms.addMenu(document.getElementById("menu6"));
                        var menu7 = ms.addMenu(document.getElementById("menu7"));
                        var menu8 = ms.addMenu(document.getElementById("menu8"));

                        menu7.addItem('- 招聘信息 ', '<?php echo ($Categorys[37][url]); ?>');
                        <?php $n=0;foreach($Categorys as $key=>$r):if( $r['ismenu']==1 && intval(20)==$r["parentid"] ) :++$n;?>menu1.addItem('- <?php echo ($r["catname"]); ?>', '<?php echo ($r["url"]); ?>');<?php endif; endforeach; $n=0;foreach($Categorys as $key=>$r):if( $r['ismenu']==1 && intval(21)==$r["parentid"] ) :++$n;?>menu2.addItem('- <?php echo ($r["catname"]); ?>', '<?php echo ($r["url"]); ?>');<?php endif; endforeach; $n=0;foreach($Categorys as $key=>$r):if( $r['ismenu']==1 && intval(22)==$r["parentid"] ) :++$n;?>menu3.addItem('- <?php echo ($r["catname"]); ?>', '<?php echo ($r["url"]); ?>');<?php endif; endforeach; $n=0;foreach($Categorys as $key=>$r):if( $r['ismenu']==1 && intval(23)==$r["parentid"] ) :++$n;?>menu4.addItem('- <?php echo ($r["catname"]); ?>', '<?php echo ($r["url"]); ?>');<?php endif; endforeach; $n=0;foreach($Categorys as $key=>$r):if( $r['ismenu']==1 && intval(24)==$r["parentid"] ) :++$n;?>menu5.addItem('- <?php echo ($r["catname"]); ?>', '<?php echo ($r["url"]); ?>');<?php endif; endforeach; $n=0;foreach($Categorys as $key=>$r):if( $r['ismenu']==1 && intval(25)==$r["parentid"] ) :++$n;?>menu6.addItem('- <?php echo ($r["catname"]); ?>', '<?php echo ($r["url"]); ?>');<?php endif; endforeach; $n=0;foreach($Categorys as $key=>$r):if( $r['ismenu']==1 && intval(27)==$r["parentid"] ) :++$n;?>menu8.addItem('- <?php echo ($r["catname"]); ?>', '<?php echo ($r["url"]); ?>');<?php endif; endforeach;?>                        GDNetMenuDown.renderAll();
                    }
                </script></TD></TR><TR><TD height="5"></TD></TR></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000" height="120" background="/Public/Image/in_2021.png"><TR><TD align="center"><object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' width='950' height='120' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0' id=ShockwaveFlash1><param name='movie' value='<?php echo ($Categorys[$bcid][flash]); ?>'><param name='wmode' value='transparent'><param name='quality' value='high'><param name='scale' value='Exactfit'><embed src='<?php echo ($Categorys[$bcid][flash]); ?>' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer'  width='950' height='120' type='application/x-shockwave-flash'></embed></object></TD></TR></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000" background="/Public/Image/in_2022.png"><TR valign="top"><TD width="25" height="650"><img src="/Public/Image/in_2023.png"></TD><TD width="210" background="/Public/Image/in_2017.png"><table align="center" cellpadding="0" cellspacing="0" border="0" width="185"><TR><TD><img src="<?php echo ($Categorys[$bcid][image]); ?>" border="0"></TD></TR><?php $n=0;foreach($Categorys as $key=>$r):if( $r['ismenu']==1 && intval($bcid)==$r["parentid"] ) :++$n;?><TR><Td height=12></TD></TR><TR><Td height=23>&nbsp; &nbsp;<img src='/Public/Image/dot_1001.gif' align='absmiddle'> &nbsp;<a href='<?php echo ($r["url"]); ?>' class=top4><?php echo ($r["catname"]); ?></a></TD></TR><TR><TD><img src='/Public/Image/in_2018.png'></TD></TR><?php endif; endforeach;?><TR><TD><img src='/Public/Image/in_2020.png'></TD></TR></table></TD><TD width="15"></TD><TD width="725"><table align="center" cellpadding="0" cellspacing="0" border="0" width="725"><TR><TD height="10"></TD></TR><TR><TD height="23"><img src="/Public/Image/dot_1002.gif" align="absmiddle"><font class="font03"><?php echo ($catname); ?></font></TD><TD align="right" class="font01">当前位置: 首页 ><?php  $arrparentid = array_filter(explode(',', $Categorys[$catid]['arrparentid'].','.$catid));foreach($arrparentid as $cid):$parsestr[] = '<a href="'.$Categorys[$cid]['url'].'">'.$Categorys[$cid]['catname'].'</a>'; endforeach;echo implode(" &gt; ",$parsestr);?>&nbsp;
				</TD></TR><TR><TD height="1" bgcolor="#D8D8D8" colspan="2"></TD></TR></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="720"><tbody><tr><td height="25"></td></tr><tr><td align="center"><font style="font-size:20px;font-family:黑体; color:#C60000; line-height:30px;"><?php echo ($title); ?></font></td></tr><tr><td height="8"></td></tr></tbody></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="720"><tbody><tr><td background="/Public/Image/dot_1005.gif" height="4" colspan="4" bgcolor="#f4f4f4"></td></tr><tr style="color:#666666;" bgcolor="#f4f4f4"><td class="font3">&nbsp; [来源:深圳新黑豹]</td><td class="font3" height="20" align="center">[发布时间:<?php echo date('Y-年-m月-d日',$createtime) ?>]</td><td class="font3" align="right">[文章点击数:<?php echo ($hits); ?>] &nbsp;</td></tr><tr><td background="/Public/Image/dot_1005.gif" height="4" colspan="4"></td></tr><tr><td height="15" colspan="4"></td></tr></tbody></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="680"><tbody><tr><td height="15"></td></tr><tr><td height="200" valign="top" class="article-content"
					style="font-size:14px; line-height:23px; color:#333333; word-break : break-all"><?php echo ($content); ?></td></tr><tr><td align="center" height="20"></td></tr></tbody></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="720"><tbody><tr><td width="10"></td><td width="710" height="15"></td></tr><tr><td height="1"></td></tr><tr><td></td><td height="6" background="/Public/Image/dot_1004.gif"></td></tr><tr><td height="10" colspan="2"></td></tr><tr><td></td><td height="20" style="color:#ff4400">&nbsp; &nbsp; <b>上一篇</b>： 没有了
				</td></tr><tr><td></td><td height="20" style="color:#ff4400">&nbsp; &nbsp; <b>下一篇</b>： 没有了
				</td></tr><tr><td height="10" colspan="2"></td></tr></tbody></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="100%"><tbody><tr><td height="10"></td></tr><tr><td height="28"></td></tr></tbody></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="100%"><tbody><tr><td height="10"></td></tr><tr><td height="33" align="center"  style="color:#888888" class="pages"><?php echo ($pages); ?></td></tr><tr><td height="30"></td></tr></tbody></table></TD><TD width="25"><img src="/Public/Image/in_2024.png"></TD></TR></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000" background="/Public/Image/in_2022.png"><TR valign="top"><TD width="25" height="5"></TD><TD width="210" background="/Public/Image/in_2017.png"><div style="position:absolute; z-index:1;"><div style="position:absolute; left:0px; top:-95px; z-index:1"><img src="/Public/Image/in_2019.png" border="0"></div></div></TD><TD width="765"></TD></TR></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000"
       height="65" background="/Public/Image/in_1006.png"><TR><td width="40" rowspan="4"></td><TD height="10"></TD></TR><TR><TD height="17" style="color:#D31414">            公司地址/深圳市南山区松坪山路1号 &nbsp;电话/0755-26634075 26634851 &nbsp;
            <img src="/Public/Image/in_1031.gif" border="0" align="absmiddle"></TD></TR><TR><TD height="17" style="color:#D31414"><font style=" font-family:Arial, Helvetica, sans-serif">                &copy;
            </font>            2003 深圳市新黑豹建材有限公司 HBHEIBAO.COM 版权所有 All Right Reserved. &nbsp;
        </TD></TR><TR><TD height="21"></TD></TR></table></div><script language="JavaScript"><!--
    function initAd001() {
        document.all.AdLayer001.style.posTop = -200;
        //设置onLoad事件激发以后，广告层相对于固定后的y方向位置
        document.all.AdLayer001.style.visibility = 'visible' //设置层为可见
        MoveLayer('AdLayer001'); //调用函数MoveLayer()
    }
    function MoveLayer(layerName) {
        var x = 20; //浮动广告层固定于浏览器的x方向位置
        var y = 160; //浮动广告层固定于浏览器的y方向位置
        var diff = (document.body.scrollTop + y - document.all.AdLayer001.style.posTop) * .40;
        var y = document.body.scrollTop + y - diff;
        eval("document.all." + layerName + ".style.posTop = y");
        eval("document.all." + layerName + ".style.posLeft = x"); //移动广告层
        setTimeout("MoveLayer('AdLayer001');", 20); //设置20毫秒后再调用函数MoveLayer()
    }

    //--></script><!--下面为一个ID为AdLayer001的层(如ID名不为AdLayer001， 上面MoveLayer()内的AdLayer001也要作相应修改)，包括一张带链接的图片--><div id="AdLayer001" style='position:fixed; width:160px; height:240px; z-index:20; visibility:hidden;; left: 20px; top: 100px'><A href="News_show.asp?id=675" target="_blank"><img src="/Public/Image/ad_1002.png" border="0" style="background-color:transparent;"></A></div><div id="KF_right"></div></body></html>