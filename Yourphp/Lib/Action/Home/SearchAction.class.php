<?php
/**
 * 
 * SearchAction.class.php (前台搜索功能)
 *



 
 * @version        	YourPHP企业网站管理系统 v2.1 2011-03-01 yourphp.cn $
 */
if(!defined("Yourphp")) exit("Access Denied");
class SearchAction extends BaseAction
{

	function _initialize()
    {	
		parent::_initialize();
    }

    public function index()
    {
		//搜索
		$_REQUEST['id'] = $catid =  intval($_REQUEST['id']);
		$p= max(intval($_REQUEST[C('VAR_PAGE')]),1);
		$_REQUEST['keyword'] = $keyword = get_safe_replace($_REQUEST['keyword']);
		$_REQUEST['module'] = $module =  get_safe_replace($_REQUEST['module']);
		
		$_REQUEST['nametype'] = $nametype =  get_safe_replace($_REQUEST['nametype']);
		$_REQUEST['kuanshi'] = $kuanshi =  get_safe_replace($_REQUEST['kuanshi']);
		$_REQUEST['price'] = $price =  get_safe_replace($_REQUEST['price']);
		
		
		$module =  $module ? $module  : 'Article' ;
		$this->assign($_REQUEST);
		$this->assign('bcid',0);
		$where = " status=1 ";

		
		
		if(APP_LANG){
			$lang = LANG_NAME;
			$langid= LANG_ID;
			$where .=" and lang= $langid";
			$this->assign('lang',$lang);
			$this->assign('langid',$langid);
		}

		if($catid){
			$cat = $this->categorys[$catid];		
			$bcid = explode(",",$cat['arrparentid']); 
			$bcid = $bcid[1]; 
			if($bcid == '') $bcid=intval($catid);
			if(empty($module))$module=$cat['module'];	
			unset($cat['id']);
			$this->assign($cat);
			$cat['id']=$catid;
			$this->assign('catid',$catid);
			$this->assign('bcid',$bcid);


			if($cat['child']){							
				$where .= " and catid in(".$cat['arrchildid'].")";			
			}else{
				$where .=  " and catid=".$catid;			
			}
		}
		$seo_title = $cat['title'] ? $cat['title'] : $cat['catname'];
		$this->assign ('seo_title',$keyword.' '.$seo_title);
		$this->assign ('seo_keywords',$keyword.$cat['keywords']);
		$this->assign ('seo_description',$keyword.$cat['description']);

		if($keyword){ 
			
			if(strstr($keyword,'or')){
				$keydo = ' or ';
				$keyword_arr= explode('or',$keyword);
			}elseif(strstr($keyword,' ')){
				$keydo = ' AND ';
				$keyword_arr= explode(' ',$keyword);
			}
			
			if(count($keyword_arr)>1){
				foreach($keyword_arr as $key =>$keywordz){
					$keyword_arr[$key] = ' title like "%'.trim($keywordz).'%" ';
				}
				$where .= ' AND ('.implode($keydo,$keyword_arr).')';
			}else{
				$where .= ' AND title like "%'.$keyword.'%" ';
			}
		}
		if($nametype)
		{
			$where .= ' AND nametype= '.$nametype.' ';
		}
		if($kuanshi)
		{
			$where .= ' AND kuanshi= '.$kuanshi.' ';
		}
		switch($price)
		{
			case 1: $where .=' AND price>0 AND price <100';break;
			case 2: $where .=' AND price>200 AND price <300';break;
			case 3: $where .=' AND price>300 AND price <400';break;
			case 4: $where .=' AND price>400 AND price <500';break;
			case 5: $where .=' AND price>500 AND price <600';break;
		}
	
		
		
		
		
		
		
		
		
		
		
		$this->dao= M($module);
		$count = $this->dao->where($where)->count();
		$this->assign('count',$count);
		
		if($count){
			import ( "@.ORG.Page" );
			$listRows =  !empty($cat['pagesize']) ? $cat['pagesize'] : C('PAGE_LISTROWS');
			$page = new Page ( $count, $listRows );
			$_REQUEST['p'] = '{$page}';
			$page->urlrule =  URL('Home-Search/index',$_REQUEST);
			$pages = $page->show();
			$field =  $this->module[$cat['moduleid']]['listfields'];
			$field =  $field ? $field : 'id,catid,userid,url,username,title,title_style,keywords,description,thumb,createtime,hits';
			$list = $this->dao->field($field)->where($where)->order('id desc')->limit($page->firstRow . ',' . $page->listRows)->select();
			$this->assign('pages',$pages);
			$this->assign('list',$list);
		}

		$this->display();

    } 
}
?>