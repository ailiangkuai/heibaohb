<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="content-type" content="text/html; charset=utf-8" /><meta name="robots" content="index, follow" /><meta name="keywords" content="<?php echo ($seo_keywords); ?>" /><meta name="description" content="<?php echo ($seo_description); ?>" /><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /><title><?php echo ($seo_title); ?>-<?php echo ($site_name); ?></title><link href="__ROOT__/index.php?m=Format&a=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" /><link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /><meta name="robots" content="index, follow"><meta name="googlebot" content="index, follow"><link href="/Public/Css/A_css.css" rel="stylesheet" type="text/css"><script language=javascript src="/Public/Image/A_menu.js"></script><script type="text/javascript" src="/Public/Image/A_kf_jquery-1.8.3.min.js"></script><script type="text/javascript" src="/Public/Image/A_kf_lrtk.js"></script><script>
		var URL_blank = "";
	</script></head><body leftmargin="0" topmargin="0" rightmargin="0" background="/Public/Image/in_1001.jpg" onLoad="init(); initAd001();"><div style="background:url(/Public/Image/ad_1002.jpg) center top no-repeat;"><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000"><TR><TD height="70"></TD></TR></table><script language="javascript">
		function $G(Read_Id) {
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
	</script><div id="test1" class="test"><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000"><TR><TD height="180" background="/Public/Image/ad_1003.jpg"></TD></TR></table></div><script language="javascript">
		setTimeout(Effect, 5000);
	</script><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000"><TR><TD height="5" bgcolor="#FFFFFF"></TD></TR></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000" height="80" background="/Public/Image/in_1002.png"><form action="<?php echo ($site_url); ?>?" method="get" target="_blank"><input type="hidden" id=""  name="m" value="Search"/><?php if(APP_LANG) : ?><input type="hidden" name="l" value="<?php echo ($l); ?>" /><?php endif;?><input type="hidden" name="module" value="Product"><input type="hidden" name="catid" value="22"><TR><TD width="450"></TD><TD width="120"><center><img src="/Public/Image/bg_1001.gif" width="1" height="18"></center><a href="#" onMouseOver="document.getElementById('Fwsm_12').style.visibility ='visible';"
					   onMouseOut="document.getElementById('Fwsm_12').style.visibility ='hidden'; "
					   class="top3"><img src="/Public/Image/dot_1009.png" align="absmiddle" border="0">微信</a></TD><TD width="4" valign="top"><div id="Fwsm_11" style="position:absolute; z-index:1"><div id="Fwsm_12" style="z-index:1; position:absolute;visibility: hidden; width:240px; height:129px; background-image:url(/Public/Image/in_5046.png); top:58px; left:-170px;"
							 onMouseOver="document.getElementById('Fwsm_12').style.visibility ='visible'; "
							 onMouseOut="document.getElementById('Fwsm_12').style.visibility ='hidden'; "></div></div></TD><TD width="195"><center><img src="/Public/Image/bg_1001.gif" width="1" height="18"></center><input name="keyword" type="text" maxlength="50" style="color:#666666; width:108px; border:0px #333333 solid;"><img src="/Public/Image/bg_1001.gif" width="17" height="1"><input type="image" src="/Public/Image/in_1036.gif" align="absmiddle"></TD><TD width="206" align="right" class="font01"><center><img src="/Public/Image/bg_1001.gif" width="1" height="21"></center><a href="#" onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('<?php echo ($site_url); ?>');"
					   class="top3">
						设为首页
					</a>
					|
					<a href="javascript:window.external.AddFavorite('<?php echo ($site_url); ?>','深圳市新黑豹建材有限公司')"
					   class="top3">
						加入收藏
					</a>
					|
					<a href="yc/" target="_blank" class="top3">
						宜昌分公司
					</a></TD><TD width="32"></TD></TR></form></table><script>
		var URL_blank = "BLANK";
	</script><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000"
           background="/Public/Image/in_1003.png"><TR><TD align="center"><object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' width='950'
                        height='260' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0'
                        id=ShockwaveFlash1><param name='movie' value='/Public/Image/_1001.swf'><param name='wmode' value='transparent'><param name='quality' value='high'><param name='scale' value='Exactfit'><embed src='/Public/Image/_1001.swf' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer'
                           width='950' height='260' type='application/x-shockwave-flash'></embed></object></TD></TR></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000"
           background="/Public/Image/in_1004.png"><TR><TD height="2"></TD></TR><TR><TD height="28"><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000"><TR><TD width="25"></TD><TD width="113"><a href="<?php echo ($site_url); ?>"><img src="/Public/Image/in_1011.png" id="button0" name="button0" onMouseOver="this.src='/Public/Image/in_1021.png';"
                                     onMouseOut="this.src='/Public/Image/in_1011.png';" border="0"></a></TD><TD width="97"><a href="<?php echo ($Categorys[29][url]); ?>" target='_blank' id="menu1" onFocus="if(this.blur)this.blur()"><img src="/Public/Image/in_1012.png" id="button1" name="button1" onMouseOver="this.src='/Public/Image/in_1022.png';"
                                     onMouseOut="this.src='/Public/Image/in_1012.png';" border="0"></a></TD><TD width="93"><a href="<?php echo ($Categorys[21][url]); ?>" target='_blank' id="menu2" onFocus="if(this.blur)this.blur()"><img src="/Public/Image/in_1013.png" id="button2" name="button2" onMouseOver="this.src='/Public/Image/in_1023.png';"
                                     onMouseOut="this.src='/Public/Image/in_1013.png';" border="0"></a></TD><TD width="93"><a href="<?php echo ($Categorys[22][url]); ?>" target='_blank' id="menu3" onFocus="if(this.blur)this.blur()"><img src="/Public/Image/in_1014.png" id="button3" name="button3" onMouseOver="this.src='/Public/Image/in_1024.png';"
                                     onMouseOut="this.src='/Public/Image/in_1014.png';" border="0"></a></TD><TD width="95"><a href="<?php echo ($Categorys[23][url]); ?>" target='_blank' id="menu4" onFocus="if(this.blur)this.blur()"><img src="/Public/Image/in_1015.png" id="button4" name="button4" onMouseOver="this.src='/Public/Image/in_1025.png';"
                                     onMouseOut="this.src='/Public/Image/in_1015.png';" border="0"></a></TD><TD width="96"><a href="<?php echo ($Categorys[49][url]); ?>" target='_blank' id="menu5" onFocus="if(this.blur)this.blur()"><img src="/Public/Image/in_1016.png" id="button5" name="button5" onMouseOver="this.src='/Public/Image/in_1026.png';"
                                     onMouseOut="this.src='/Public/Image/in_1016.png';" border="0"></a></TD><TD width="97"><a href="<?php echo ($Categorys[25][url]); ?>" target='_blank' id="menu6" onFocus="if(this.blur)this.blur()"><img src="/Public/Image/in_1017.png" id="button6" name="button6" onMouseOver="this.src='/Public/Image/in_1027.png';"
                                     onMouseOut="this.src='/Public/Image/in_1017.png';" border="0"></a></TD><TD width="97"><a href="<?php echo ($Categorys[37][url]); ?>" target='_blank' id="menu7" onFocus="if(this.blur)this.blur()"><img src="/Public/Image/in_1018.png" id="button7" name="button7" onMouseOver="this.src='/Public/Image/in_1028.png';"
                                     onMouseOut="this.src='/Public/Image/in_1018.png';" border="0"></a></TD><TD width="94"><a href="<?php echo ($Categorys[57][url]); ?>" target='_blank' id="menu8" onFocus="if(this.blur)this.blur()"><img src="/Public/Image/in_1019.png" id="button8" name="button8" onMouseOver="this.src='/Public/Image/in_1029.png';"
                                     onMouseOut="this.src='/Public/Image/in_1019.png';" border="0"></a></TD><TD width="100"></TD></TR></table><script language="javascript">
                    if (GDNetMenuDown.isSupported()) {
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
                </script></TD></TR><TR><TD height="5"></TD></TR></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000"
           background="/Public/Image/in_1005.png"><TR><TD height="10" width="25"></TD><TD width="240"></TD><TD width="480"></TD><TD width="230"></TD><TD width="25"></TD></TR><TR valign="top"><TD></TD><TD><table align="center" cellpadding="0" cellspacing="0" border="0" width="240"
                       height="285" background="/Public/Image/in_5001.png"><TR><TD height="40"></TD></TR><TR><TD height="31" align="center"><a href="<?php echo ($Categorys[41][url]); ?>" class="top1" target="_blank"><img src="/Public/Image/in_5002.png" alt="新品上市" onMouseOver="this.src='/Public/Image/in_5007.png';"
                                     onMouseOut="this.src='/Public/Image/in_5002.png';" border="0"></a></TD></TR><TR><TD height="9"></TD></TR><TR><TD height="31" align="center"><a href="<?php echo ($Categorys[42][url]); ?>" class="top1" target="_blank"><img src="/Public/Image/in_5003.png" alt="防水涂料" onMouseOver="this.src='/Public/Image/in_5008.png';"
                                     onMouseOut="this.src='/Public/Image/in_5003.png';" border="0"></a></TD></TR><TR><TD height="9"></TD></TR><TR><TD height="31" align="center"><a href="<?php echo ($Categorys[43][url]); ?>" class="top1" target="_blank"><img src="/Public/Image/in_5004.png" alt="防水砂浆改性剂" onMouseOver="this.src='/Public/Image/in_5009.png';"
                                     onMouseOut="this.src='/Public/Image/in_5004.png';" border="0"></a></TD></TR><TR><TD height="9"></TD></TR><TR><TD height="31" align="center"><a href="<?php echo ($Categorys[44][url]); ?>" class="top1" target="_blank"><img src="/Public/Image/in_5005.png" alt="防水卷材" onMouseOver="this.src='/Public/Image/in_5010.png';"
                                     onMouseOut="this.src='/Public/Image/in_5005.png';" border="0"></a></TD></TR><TR><TD height="9"></TD></TR><TR><TD height="31" align="center"><a href="<?php echo ($Categorys[45][url]); ?>" class="top1" target="_blank"><img src="/Public/Image/in_5006.png" alt="嵌缝材料" onMouseOver="this.src='/Public/Image/in_5011.png';"
                                     onMouseOut="this.src='/Public/Image/in_5006.png';" border="0"></a></TD></TR><TR><TD height="9"></TD></TR><TR><TD height="31" align="center"><a href="<?php echo ($Categorys[39][url]); ?>" class="top1" target="_blank"><img src="/Public/Image/in_5012.png" alt="施工指南" onMouseOver="this.src='/Public/Image/in_5013.png';"
                                     onMouseOut="this.src='/Public/Image/in_5012.png';" border="0"></a></TD></TR><TR><TD height="9"></TD></TR><TR><TD></TD></TR></table></TD><TD><table align="center" cellpadding="0" cellspacing="0" border="0" width="456"
                       height="285" background="/Public/Image/in_5014.png"><TR><TD height="40" align="right"><a href="<?php echo ($Categorys[35][url]); ?>" class="top1" target="_blank"><img src="/Public/Image/in_5017.gif" border="0"></a>
                            &nbsp;
                        </TD></TR><TR><TD height="80"><?php  $_result=M("Article")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  and lang=1 AND status=1  AND catid=35  AND posid =1")->order("id desc")->limit("1")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><table align='center' cellpadding='0' cellspacing='0' border='0' width='445'><TR><TD width='140' align=center><a href='<?php echo ($r["url"]); ?>' target='_blank' class='top4'><img src='<?php echo ($r["thumb"]); ?>' width='120' height='80'
                                                 border=0></a></TD><TD width='3'></TD><TD width='290'><a href='<?php echo ($r["url"]); ?>' target='_blank' class='top1' style='color:#4B4B4B; font-weight:bold;'><?php echo (str_cut($r["title"],30)); ?></a><center><img src='/Public/Image/bg_1001.gif' width='1' height='4'></center><font style='color:#999999; line-height:17px;'><?php echo (str_cut($r["description"],100)); ?></font><a href='<?php echo ($r["url"]); ?>' target='_blank' class='top6'>
                                            [点击阅读]
                                        </a></TD><TD width='12'></TD></TR></table><?php endforeach; endif;?></TD></TR><TR><TD height="17"></TD></TR><TR><TD valign="top"><table align='center' cellpadding='0' cellspacing='0' border='0' width='430'><?php  $_result=M("Article")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  and lang=1 AND status=1  AND catid=35")->order("id desc")->limit("6")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><TR><TD height='23' class=font08>
                                        &nbsp;
                                        <img src='/Public/Image/dot_1003.gif'>
                                        &nbsp; <?php echo (todate($r["createtime"],'Y-m-d')); ?> |
                                        <a href='<?php echo ($r["url"]); ?>' class='top8' target='_blank'><?php echo (str_cut($r["title"],40)); ?></a></TD></TR><?php endforeach; endif;?></table></TD></TR></table></TD><TD><table align="center" cellpadding="0" cellspacing="0" border="0" width="230"
                       height="206" background="/Public/Image/in_5015.png"><TR><TD height="35" align="right"><a href="<?php echo ($Categorys[34][url]); ?>" class="top1" target="_blank"><img src="/Public/Image/in_5018.gif" border="0"></a>
                            &nbsp;
                        </TD></TR><TR><TD align="center"><DIV id=rolllink style="OVERFLOW: hidden; WIDTH: 210px; HEIGHT: 150px"><DIV id=rolllink1><table cellpadding='0' cellspacing='0' border='0' width='210'><?php  $_result=M("Article")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  and lang=1 AND status=1  AND catid=34")->order("id desc")->limit("6")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><TR><TD valign='top' align=center width=20><font style='color:#919191;'>·</font></TD><TD style='line-height:18px;'><a href='<?php echo ($r["url"]); ?>' class='top1'
                                                                             target='_blank'><?php echo (str_cut($r["title"],50)); ?></a><br><font
                                                    style='color:#FF931E'>[<?php echo (todate($r["createtime"],'Y年m月d日')); ?>]</font></TD></TR><TR><TD colspan='2' height='8'></TD></TR><TR><TD colspan='2' height='2' background='/Public/Image/line_102.gif'></TD></TR><TR><TD colspan='2' height='8'></TD></TR><?php endforeach; endif;?></table></DIV><DIV id=rolllink2></DIV></DIV><SCRIPT>
                                var rollspeed=60
                                rolllink2.innerHTML=rolllink1.innerHTML
                                function Marquee(){
                                    if(rolllink2.offsetTop-rolllink.scrollTop<=0)
                                        rolllink.scrollTop-=rolllink1.offsetHeight
                                    else{
                                        rolllink.scrollTop++
                                    }
                                }
                                var MyMar=setInterval(Marquee,rollspeed)
                                rolllink.onmouseover=function() {clearInterval(MyMar)}
                                rolllink.onmouseout=function() {MyMar=setInterval(Marquee,rollspeed)}
                            </SCRIPT></TD></TR><TR><TD height="5"></TD></TR></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="230"><TR><TD height="5"></TD></TR><TR><TD style="position: relative;width:230px;height: 75px;display: block; "><a href="<?php echo ($Categorys[32][url]); ?>" style="background: url(about:blank);width:230px;height: 75px;display: block;position: absolute;" target="_blank"></a><object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' width='230'
                                    height='75' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0'
                                    id=ShockwaveFlash1><param name='movie' value='/Public/Image/_1003.swf'><param name='wmode' value='transparent'><param name='quality' value='high'><param name='scale' value='Exactfit'><embed src='/Public/Image/_1003.swf' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer'
                                       width='230' height='75' type='application/x-shockwave-flash'></embed></object></TD></TR></table></TD><TD></TD></TR></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000"
           background="/Public/Image/in_10051.png"><TR><TD height="10" width="25"></TD><TD width="708"></TD><TD width="12"></TD><TD width="230"></TD><TD width="25"></TD></TR><TR valign="top"><TD></TD><TD><table align="center" cellpadding="0" cellspacing="0" border="0" width="708"
                       height="58" background="/Public/Image/in_5020.png"><TR><TD width="75"></TD><TD width="120" valign="top"><center><img src="/Public/Image/bg_1001.gif" width="1" height="7"></center><object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' width='80'
                                    height='30' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0'
                                    id=ShockwaveFlash1><param name='movie' value='/Public/Image/_1002.swf'><param name='wmode' value='transparent'><param name='quality' value='high'><param name='scale' value='Exactfit'><embed src='/Public/Image/_1002.swf' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer'
                                       width='80' height='30' type='application/x-shockwave-flash'></embed></object></TD><TD width="260" style="color:#999999" valign="top"><center><img src="/Public/Image/bg_1001.gif" width="1" height="5"></center>
                            输入防伪标签上的20密码数字(
                            <a href="<?php echo ($Categorys[46][url]); ?>" target="_blank" onMouseOver="document.getElementById('Fwsm_02').style.visibility ='visible';"
                               onMouseOut="document.getElementById('Fwsm_02').style.visibility ='hidden'; "
                               style="color:#FF6600;text-decoration: underline;">
                                如何获取
                            </a>
                            ):
                            <center><img src="/Public/Image/bg_1001.gif" width="1" height="2"></center></TD><TD width="3" valign="top"><div id="Fwsm_01" style="position:absolute; z-index:1"><div id="Fwsm_02" style="z-index:1; position:absolute;visibility: hidden; width:403px; height:294px; background-image:url(/Public/Image/in_5042.png); top:22px; left:-230px;"
                                     onMouseOver="document.getElementById('Fwsm_02').style.visibility ='visible'; "
                                     onMouseOut="document.getElementById('Fwsm_02').style.visibility ='hidden'; "></div></div></TD><TD width="250"></TD></TR></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="708"><TR><TD height="8" width="240"></TD><TD width="12"></TD><TD width="456"></TD></TR><TR valign="top"><TD><table align="center" cellpadding="0" cellspacing="0" border="0" width="240"
                                   height="200" background="/Public/Image/in_5021.png"><TR><TD height="35" align="right"><a href="<?php echo ($Categorys[50][url]); ?>" class="top1" target="_blank"><img src="/Public/Image/in_5017.gif" border="0"></a>
                                        &nbsp;
                                    </TD></TR><TR><TD align="center"><TABLE cellSpacing=0 cellPadding=0 width=222 align=center border=0><TR><TD><DIV id=fc align="center" style="FILTER: progid:DXImageTransform.Microsoft.Fade ( duration=0.5,overlap=1.0 ); WIDTH: 222; HEIGHT: 156"><DIV style='DISPLAY:block'><A  href='<?php echo ($Categorys[50][url]); ?>' target=_blank><IMG onmouseover='clearAuto();' onmouseout='setAuto()' src='/Uploads/201611/201182753030000.jpg' width=222 height=156 border=0></A></DIV><DIV style='DISPLAY:none'><A  href='<?php echo ($Categorys[50][url]); ?>' target=_blank><IMG onmouseover='clearAuto();' onmouseout='setAuto()' src='/Uploads/201611/201182753011000.jpg' width=222 height=156 border=0></A></DIV><DIV style='DISPLAY:none'><A  href='<?php echo ($Categorys[50][url]); ?>' target=_blank><IMG onmouseover='clearAuto();' onmouseout='setAuto()' src='/Uploads/201611/201182752989000.jpg' width=222 height=156 border=0></A></DIV><DIV style='DISPLAY:none'><A  href='<?php echo ($Categorys[50][url]); ?>' target=_blank><IMG onmouseover='clearAuto();' onmouseout='setAuto()' src='/Uploads/201611/201182752966999.jpg' width=222 height=156 border=0></A></DIV><DIV style='DISPLAY:none'><A  href='<?php echo ($Categorys[50][url]); ?>' target=_blank><IMG onmouseover='clearAuto();' onmouseout='setAuto()' src='/Uploads/201611/201182752941000.jpg' width=222 height=156 border=0></A></DIV></DIV></TD></TR><TR><TD><div style="position:absolute; z-index:1"><div style="z-index:1; position:absolute; top:1px; left:0px;"><div id="inphoto_popup" style="width:222px; height:40px;"></div><div id="inphoto_text"  style="width:222px; height:40px;"><TABLE cellSpacing=0 cellPadding=0 width=222 align=center border=0><TR><TD height="29" onMouseOver="clearAuto();" onMouseOut="setAuto()"><table align=center cellpadding=0 cellspacing=0 border=0 width="100%"><TR><TD><DIV id=con><DIV style='DISPLAY:block'>&nbsp;<A  href='<?php echo ($Categorys[50][url]); ?>' target=_blank style='color:#ffffff;font-family:黑体;font-size:16px;line-height:23px;text-decoration: none; '></A></DIV><DIV style='DISPLAY:none'>&nbsp;<A  href='<?php echo ($Categorys[50][url]); ?>' target=_blank style='color:#ffffff;font-family:黑体;font-size:16px;line-height:23px;text-decoration: none; '></A></DIV><DIV style='DISPLAY:none'>&nbsp;<A  href='<?php echo ($Categorys[50][url]); ?>' target=_blank style='color:#ffffff;font-family:黑体;font-size:16px;line-height:23px;text-decoration: none; '></A></DIV><DIV style='DISPLAY:none'>&nbsp;<A  href='<?php echo ($Categorys[50][url]); ?>' target=_blank style='color:#ffffff;font-family:黑体;font-size:16px;line-height:23px;text-decoration: none; '></A></DIV><DIV style='DISPLAY:none'>&nbsp;<A  href='<?php echo ($Categorys[50][url]); ?>' target=_blank style='color:#ffffff;font-family:黑体;font-size:16px;line-height:23px;text-decoration: none; '></A></DIV></DIV></TD></TR></table></TD><TD height="29"><TABLE id=num cellSpacing=0 cellPadding=0  align=right border=0><TR><TD class=bigon onmouseover=clearAuto(); style='CURSOR: pointer' onclick=Mea(0); onmouseout=setAuto() align=middle width=19 height=15>1</TD><TD class=bigoff onmouseover=clearAuto(); style='CURSOR: pointer' onclick=Mea(1); onmouseout=setAuto() align=middle width=19 height=15>2</TD><TD class=bigoff onmouseover=clearAuto(); style='CURSOR: pointer' onclick=Mea(2); onmouseout=setAuto() align=middle width=19 height=15>3</TD><TD class=bigoff onmouseover=clearAuto(); style='CURSOR: pointer' onclick=Mea(3); onmouseout=setAuto() align=middle width=19 height=15>4</TD><TD class=bigoff onmouseover=clearAuto(); style='CURSOR: pointer' onclick=Mea(4); onmouseout=setAuto() align=middle width=19 height=15>5</TD></TR></TABLE></TD></TR></TABLE></div></div></div></TD></TR></TABLE><SCRIPT>
                                            var n=0;
                                            var showNum = document.getElementById("num");
                                            function Mea(value){
                                                n=value;
                                                setBg(value);
                                                plays(value);
                                                cons(value);
                                            }
                                            function setBg(value){
                                                for(var i=0;i<5;i++)
                                                    if(value==i){
                                                        showNum.getElementsByTagName("td")[i].className='bigon';
                                                    }
                                                    else{
                                                        showNum.getElementsByTagName("td")[i].className='bigoff';
                                                    }
                                            }
                                            function plays(value){
                                                try
                                                {
                                                    with (fc)
                                                    {
                                                        filters[0].Apply();
                                                        for(i=0;i<5;i++)i==value?children[i].style.display="block":children[i].style.display="none";
                                                        filters[0].play();
                                                    }
                                                }
                                                catch(e)
                                                {
                                                    var divlist = document.getElementById("fc").getElementsByTagName("div");
                                                    for(i=0;i<5;i++)
                                                    {
                                                        i==value?divlist[i].style.display="block":divlist[i].style.display="none";
                                                    }
                                                }


                                            }
                                            function cons(value){
                                                try
                                                {
                                                    with (con)
                                                    {
                                                        for(i=0;i<5;i++)i==value?children[i].style.display="block":children[i].style.display="none";
                                                    }
                                                }
                                                catch(e)
                                                {
                                                    var divlist = document.getElementById("con").getElementsByTagName("div");
                                                    for(i=0;i<5;i++)
                                                    {
                                                        i==value?divlist[i].style.display="block":divlist[i].style.display="none";
                                                    }
                                                }
                                            }

                                            function clearAuto(){clearInterval(autoStart)}
                                            function setAuto(){autoStart=setInterval("auto(n)", 3000)}
                                            function auto(){
                                                n++;
                                                if(n>4)n=0;
                                                Mea(n);
                                            }
                                            function sub(){
                                                n--;
                                                if(n<0)n=4;
                                                Mea(n);
                                            }
                                            setAuto();

                                        </SCRIPT></TD></TR><TR><TD height="5"></TD></TR></table></TD><TD></TD><TD><table align="center" cellpadding="0" cellspacing="0" border="0" width="456"
                                   height="200" background="/Public/Image/in_5022.png"><TR><TD height="40" align="right"><a href="<?php echo ($Categorys[38][url]); ?>" class="top1" target="_blank"><img src="/Public/Image/in_5017.gif" border="0"></a>
                                        &nbsp;
                                    </TD></TR><TR><TD valign="top"><table align='center' cellpadding='0' cellspacing='0' border='0' width='430'><?php  $_result=M("Article")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  and lang=1 AND status=1  AND catid=38")->order("id desc")->limit("6")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><TR><TD height='25' class=font08>
                                                    &nbsp;
                                                    <img src='/Public/Image/dot_1003.gif'>
                                                    &nbsp; <?php echo (todate($r["createtime"],'Y-m-d')); ?> |
                                                    <a href='<?php echo ($r["title"]); ?>' class='top8' target='_blank'><?php echo (str_cut($r["title"],40)); ?></a></TD></TR><?php endforeach; endif;?></table></TD></TR><TR><TD height="8"></TD></TR></table></TD></TR><TR><TD height="10"></TD></TR></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="708"
                       height="165" background="/Public/Image/in_5023.png"><TR><TD height="31" align="right"><a href="<?php echo ($Categorys[22][url]); ?>" class="top1" target="_blank"><img src="/Public/Image/in_5017.gif" border="0"></a>
                            &nbsp;
                        </TD></TR><TR><TD height="5"></TD></TR><TR><TD valign="top" align="center"><div align="center" id=demo style="overflow:hidden;height:125px;width:668px;"><table align="center" cellpadding="0" cellspacing="0" border="0" width="668"><TR align="center"><TD width=668 id=demo1 valign=middle><Table cellpadding='0' cellspacing='0' border='0' width='100%'><TR><?php  $_result=M("Product")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  and lang=1 AND status=1  AND catid in(22,40,41,42,43,44,45,46)")->order("id desc")->limit("15")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><TD align=center><a href="<?php echo ($r["url"]); ?>" target=_balnk class='top1'><img src="<?php echo (thumb($r["thumb"])); ?>" width=128  height=96 border=0></a></TD><TD><img src='/Public/Image/bg_1001.gif' width='6' height='1'></TD><?php endforeach; endif;?></TR><TR><TD height=10></TD></TR><TR><?php  $_result=M("Product")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  and lang=1 AND status=1  AND catid in(22,40,41,42,43,44,45,46)")->order("id desc")->limit("15")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><TD align=center valign=top height=20><a href="<?php echo ($r["url"]); ?>"
                                                                                             target=_balnk class='top1'><?php echo (str_cut($r["title"],30)); ?></a></TD><TD></TD><?php endforeach; endif;?></TR></Table></TD><td id=demo2 valign=top></td></TR></table></div><script>
                                var speed02=40
                                demo2.innerHTML=demo1.innerHTML
                                function Marquee02(){ if(demo2.offsetWidth-demo.scrollLeft<=0) demo.scrollLeft-=demo1.offsetWidth;  else{demo.scrollLeft++ } }
                                var MyMar02=setInterval(Marquee02,speed02)
                                demo.onmouseover=function() {clearInterval(MyMar02)}
                                demo.onmouseout=function() {MyMar02=setInterval(Marquee02,speed02)}
                            </script></TD></TR></table></TD><TD></TD><TD><table align="center" cellpadding="0" cellspacing="0" border="0" width="230"
                       height="230" background="/Public/Image/in_5024.png"><TR><TD colspan="4" height="35" align="right"><a href="<?php echo ($Categorys[25][url]); ?>" class="top1" target="_blank"><img src="/Public/Image/in_5018.gif" border="0"></a>
                            &nbsp;
                        </TD></TR><TR align="center"><TD width="10"></TD><TD width="105"><a href="<?php echo ($Categorys[25][url]); ?>" class="top1" target="_blank"><img src="/Public/Image/in_5031.png" border="0"></a></TD><TD width="105"><a href="<?php echo ($Categorys[25][url]); ?>" class="top1" target="_blank"><img src="/Public/Image/in_5032.png" border="0"></a></TD><TD width="10"></TD></TR><TR align="center"><TD width="10"></TD><TD width="105"><a href="<?php echo ($Categorys[25][url]); ?>" class="top1" target="_blank"><img src="/Public/Image/in_5033.png" border="0"></a></TD><TD width="105"><a href="<?php echo ($Categorys[25][url]); ?>" class="top1" target="_blank"><img src="/Public/Image/in_5034.png" border="0"></a></TD><TD width="10"></TD></TR><TR><TD height="5"></TD></TR></table><center><img src="/Public/Image/bg_1001.gif" height="6" width="1"></center><table align="center" cellpadding="0" cellspacing="0" border="0" width="230"
                       height="205" background="/Public/Image/in_5025.png"><TR><TD height="35" align="right"><a href="<?php echo ($Categorys[33][url]); ?>" class="top1" target="_blank"><img src="/Public/Image/in_5018.gif" border="0"></a>
                            &nbsp;
                        </TD></TR><TR><TD align="center"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="205" height="150"><param name="movie" value="/Public/Image/_Flvplayer.swf"><param name="quality" value="high"><param name="allowFullScreen" value="true"><param name="FlashVars" value="vcastr_file=/Uploads/video/lg.flv"><embed src="/Public/Image/_Flvplayer.swf" allowfullscreen="true" flashvars="vcastr_file=/Uploads/video/lg.flv" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="205" height="150"></embed></object></TD></TR><TR><TD height="5"></TD></TR></table></TD><TD></TD></TR><TR><TD height="10"></TD></TR></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000"
           height="113" background="/Public/Image/in_5019.png"><TR><TD height="11"></TD></TR><TR><TD width="65" height="65"></TD><TD valign="top" width="900"><table cellpadding="0" cellspacing="0" border="0" width="900"><tr><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.hbjzfs.cn/' target=_blank class='top8'>
                                湖北省建筑防水协会
                            </a></td><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.gdwa.org/' target=_blank class='top8'>
                                广东建筑防水材料协
                            </a></td><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.ycwb.com/' target=_blank class='top8'>
                                金羊网（羊城晚报
                            </a></td><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.gdaqi.org/' target=_blank class='top8'>
                                广东省质量检验协会
                            </a></td><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.baidu.com' target=_blank class='top8'>
                                百度搜索
                            </a></td><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.google.com' target=_blank class='top8'>
                                谷歌搜索
                            </a></td><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.hbbm.com.cn' target=_blank class='top8'>
                                湖北建材工业协会
                            </a></td><tr><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.hpbwa.com/' target=_blank class='top8'>
                                海南省建筑防水协会
                            </a></td><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.sz12365.net/ ' target=_blank class='top8'>
                                深圳市质量技术监督
                            </a></td><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.cnbwp.com' target=_blank class='top8'>
                                中国建筑防水网
                            </a></td><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.sist.gov.cn/' target=_blank class='top8'>
                                深圳市标准技术研究
                            </a></td><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.sztmjz.com/' target=_blank class='top8'>
                                深圳土木建筑网
                            </a></td><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.szjs.gov.cn/' target=_blank class='top8'>
                                深圳住房和建设局
                            </a></td><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.cnbmec.com/' target=_blank class='top8'>
                                中国建材电子商务网
                            </a></td><tr><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.zhb.gov.cn/' target=_blank class='top8'>
                                国家环境保护部
                            </a></td><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.aqsiq.gov.cn/' target=_blank class='top8'>
                                国家质量监督检验检
                            </a></td><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.qlfsw.net/' target=_blank class='top8'>
                                中国桥梁防水网
                            </a></td><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.cnwb.net/' target=_blank class='top8'>
                                中国建筑防水协会
                            </a></td><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.mohurd.gov.cn/' target=_blank class='top8'>
                                住房与城乡建设部
                            </a></td><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://lnwbmia.cn/Index.html' target=_blank class='top8'>
                                辽宁省防水协会
                            </a></td><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.szfsxh.com/' target=_blank class='top8'>
                                深圳防水协会
                            </a></td><tr><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.hbfsxh.com/' target=_blank class='top8'>
                                河北省建筑防水工程
                            </a></td><td height='21' width=130><font color='#666666'>
                                ·
                            </font><a href='http://www.jzfsonline.com/html/' target=_blank class='top8'>
                                中国防水在线
                            </a></td></table></TD><TD width="35"></TD></TR><TR><TD></TD></TR></table><table align="center" cellpadding="0" cellspacing="0" border="0" width="1000"
       height="65" background="/Public/Image/in_1006.png"><TR><td width="40" rowspan="4"></td><TD height="10"></TD></TR><TR><TD height="17" style="color:#D31414">
            公司地址/深圳市南山区松坪山路1号 &nbsp;电话/0755-26634075 26634851 &nbsp;
            <img src="/Public/Image/in_1031.gif" border="0" align="absmiddle"></TD></TR><TR><TD height="17" style="color:#D31414"><font style=" font-family:Arial, Helvetica, sans-serif">
                &copy;
            </font>
            2003 深圳市新黑豹建材有限公司 HEIBAOHB.COM 版权所有 All Right Reserved. &nbsp;
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