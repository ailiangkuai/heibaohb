<?php
/**
 * 
 * SearchAction.class.php (前台搜索功能)
 *



 
 * @version        	YourPHP企业网站管理系统 v2.1 2011-03-01 yourphp.cn $
 */
if(!defined("Yourphp")) exit("Access Denied");
class CodeAction extends BaseAction
{

	function _initialize()
    {	
		parent::_initialize();
    }

    public function index()
    {
		//搜索
		$p= max(intval($_REQUEST[C('VAR_PAGE')]),1);
        $code = preg_match('/\d{20}/', $_POST['code']) ? $_POST['code'] : null;
        $_POST['code'] = $code;
		$where = " status=1 ";

		
		
		if(APP_LANG){
			$lang = LANG_NAME;
			$langid= LANG_ID;
			$where .=" and lang= $langid";
			$this->assign('lang',$lang);
			$this->assign('langid',$langid);
		}


		$this->assign ('seo_title',$code);
        if($code){
            $where .= ' AND title = "'.$code.'" ' ;
            $this->assign('code',$code);
        }
		$this->dao= M('Code');

        $model = $this->dao->where($where)->limit(1)->find();
        if(!is_null($model)){
            if($model['hits']==0){
                $this->dao->where(array('id'=>$model['id']))->data(array('updatetime' => time(), 'hits' => array('exp', 'hits+1')))->save();
            }else{
                $this->dao->where(array('id'=>$model['id']))->data(array('hits' => array('exp', 'hits+1')))->save();
            }
        }
        $model && ++$model['hits'];
        $this->assign('model',$model);
        $this->assign($_POST);
		$this->display();

    } 
}
?>