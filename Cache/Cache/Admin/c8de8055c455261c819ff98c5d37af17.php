<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=<?php echo C('DEFAULT_CHARSET');?>" /><title><?php echo L('welcome');?></title><link rel="stylesheet" type="text/css" href="__ROOT__/Public/Css/style.css" /><script type="text/javascript" src="__ROOT__/Public/Js/jquery.min.js"></script><script type="text/javascript" src="__ROOT__/Public/Js/jquery.artDialog.js?skin=default"></script><script type="text/javascript" src="__ROOT__/Public/Js/iframeTools.js"></script><script type="text/javascript" src="__ROOT__/Public/Js/jquery.form.js"></script><script type="text/javascript" src="__ROOT__/Public/Js/jquery.validate.js"></script><script type="text/javascript" src="__ROOT__/Public/Js/MyDate/WdatePicker.js"></script><script type="text/javascript" src="__ROOT__/Public/Js/jquery.colorpicker.js"></script><script type="text/javascript" src="__ROOT__/Public/Js/my.js"></script><script type="text/javascript" src="__ROOT__/Public/Js/swfupload.js"></script><script language="JavaScript"><!--
var ROOT =	 '__ROOT__';
var URL = '__URL__';
var APP	 =	 '__APP__';
var PUBLIC = '__PUBLIC__';
function confirm_delete(url){
	art.dialog.confirm("<?php echo L('real_delete');?>", function(){location.href = url;});
}
//--></script></head><body width="100%"><div id="loader" ><?php echo L('load_page');?></div><div id="result" class="result none"></div><div class="mainbox"><?php if(empty($_GET['isajax'])): ?><div id="nav" class="mainnav_title"><div id="lang"><?php if(APP_LANG): parse_str($_SERVER['QUERY_STRING'],$urlarr); unset($urlarr[l]); $url='index.php?'.http_build_query($urlarr); if(is_array($Lang)): $i = 0; $__LIST__ = $Lang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$langvo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($url); ?>&l=<?php echo ($langvo["mark"]); ?>" <?php if($langvo[mark]==$_SESSION['YP_lang']): ?>class="on"<?php endif; ?>><?php echo ($langvo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; endif; ?></div><ul><a href="<?php echo U($nav[bnav][model].'/'.$nav[bnav][action],$nav[bnav][data]);?>"><?php echo ($nav["bnav"]["name"]); ?></a>|
	<?php if(is_array($nav["nav"])): $i = 0; $__LIST__ = $nav["nav"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vonav): $mod = ($i % 2 );++$i; if($vonav[data][isajax]): ?><a href="javascript:void(0);" onclick="openwin('<?php echo ($vonav[action]); ?>','<?php echo U($vonav[model].'/'.$vonav[action],$vonav[data]);?>','<?php echo ($vonav["name"]); ?>',600,440)"><?php echo ($vonav["name"]); ?></a>|
	<?php else: ?><a href="<?php echo U($vonav[model].'/'.$vonav[action],$vonav[data]);?>"><?php echo ($vonav["name"]); ?></a>|<?php endif; endforeach; endif; else: echo "" ;endif; ?></ul></div><script>	//|str_replace=__ROOT__.'/index.php','',###
	var onurl ='<?php echo ($_SERVER["REQUEST_URI"]); ?>';
	jQuery(document).ready(function(){
		$('#nav ul a ').each(function(i){
		if($('#nav ul a').length>1){
			var thisurl= $(this).attr('href');
			thisurl = thisurl.replace('&menuid=<?php echo cookie("menuid");?>','');
			if(onurl.indexOf(thisurl) == 0 ) $(this).addClass('on').siblings().removeClass('on');
		}else{
			$('#nav ul').hide();
		}
		});
		if($('#nav ul a ').hasClass('on')==false){
		$('#nav ul a ').eq(0).addClass('on');
		}
	});
	</script><?php endif; ?><form id="myform" action="<?php if($action_name=='edit'): echo U('Role/update'); else: echo U('Role/insert'); endif; ?>" method="post"><table cellpadding=0 cellspacing=0 class="table_form" width="100%"><tr><td width="120"><?php echo L('user_group'); echo L('name');?></td><td><input type="text" name="name" class="inputbox" class="input-text"  value="<?php echo ($vo['name']); ?>"  validate="required:true,cn_username:true,  minlength:2, maxlength:20"/></td></tr><tr><td><?php echo L('user_is_enable');?></td><td><?php echo L('yes');?><input type="radio" name="status" value="1" <?php if(($vo['status']) == "1"): ?>checked="checked"<?php endif; ?> /><?php echo L('no');?><input type="radio" name="status" value="0" <?php if(($vo['status']) == "0"): ?>checked="checked"<?php endif; ?> /></td></tr><tr><td><?php echo L('role_prve');?></td><td><span class="ik lf" style="width:120px;"><input type="checkbox" class="input_checkbox" name="allowpost" value="1"<?php if($vo['allowpost']) : ?> checked<?php endif;?>/><?php echo L(role_allowpost);?></span><span class="ik lf" style="width:120px;"><input type="checkbox" class="input_checkbox" name="allowpostverify" value="1"<?php if($vo['allowpostverify']) : ?> checked<?php endif;?>/><?php echo L(role_allowpostverify);?></span><span class="ik lf" style="width:120px;"><input type="checkbox" class="input_checkbox" name="allowupgrade" value="1"<?php if($vo['allowupgrade']) : ?> checked<?php endif;?> /><?php echo L(role_allowupgrade);?></span><span class="ik lf" style="width:120px;"><input type="checkbox" class="input_checkbox" name="allowsendmessage" value="1"<?php if($vo['allowsendmessage']) : ?> checked<?php endif;?> / ><?php echo L(role_allowsendmessage);?></span><span class="ik lf" style="width:120px;"><input type="checkbox" class="input_checkbox" name="allowattachment" value="1"<?php if($vo['allowattachment']) : ?> checked<?php endif;?>/><?php echo L(role_allowattachment);?></span><span class="ik lf" style="width:120px;"><input type="checkbox" class="input_checkbox" name="allowsearch" value="1"<?php if($vo['allowsearch']) : ?> checked<?php endif;?>/><?php echo L(role_allowsearch);?></span></td></tr><tr><td width="80"><?php echo L(role_update);?></td><td><span class="ik lf" style="width:120px;"><?php echo L(role_price_d);?>:
					<input type="text" name="price_d" class="input-text" value="<?php echo ($vo['price_d']); ?>" size="6"  validate="required:true,number:true"></span><span class="ik lf" style="width:120px;"><?php echo L(role_price_m);?>:
					<input type="text" name="price_m" class="input-text" value="<?php echo ($vo['price_m']); ?>" size="6" validate="required:true,number:true"></span><span class="ik lf" style="width:120px;"><?php echo L(role_price_y);?>:
					<input type="text" name="price_y" class="input-text" value="<?php echo ($vo['price_y']); ?>" size="6" validate="required:true,number:true"></span></td></tr><tr><td width="80"><?php echo L(role_maxmessagenum);?></td><td><input type="text" name="maxmessagenum" class="input-text" id="maxmessagenum" value="<?php echo (intval($vo['maxmessagenum'])); ?>" size="8" validate="required:true,number:true"></td></tr><tr><td width="80"><?php echo L(role_maxpostnum);?></td><td><input type="text" name="maxpostnum" class="input-text" id="maxpostnum" size="8" value="<?php echo (intval($vo['maxpostnum'])); ?>" validate="required:true,number:true"></td></tr><tr><td><?php echo L('remark');?></td><td><textarea rows="5" cols="30" name="remark"><?php echo ($vo['remark']); ?></textarea></td></tr></table><div class="btn"><?php if($action_name=='edit'): ?><input type="hidden" id="id" name="id" value="<?php echo ($vo['id']); ?>" /><?php endif; ?><INPUT TYPE="submit"  value="<?php echo L('dosubmit');?>" class="button" ><input TYPE="reset"  value="<?php echo L('cancel');?>" class="button"></div></form></div></body></html>