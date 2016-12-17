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
        $this->sysConfig = F('sys.config');

        if(APP_LANG){
            $this->Lang = F('Lang');
            $this->assign('Lang',$this->Lang);
            if(get_safe_replace($_GET['l'])){
                if(!$this->Lang[$_GET['l']]['status'])$this->error ( L ( 'NO_LANG' ) );
                $lang=$_GET['l'];
            }else{
                $lang=$this->sysConfig['DEFAULT_LANG'];
            }
            define('LANG_NAME', $lang);
            define('LANG_ID', $this->Lang[$lang]['id']);
            $this->categorys = F('Category_'.$lang);
            $this->Config = F('Config_'.$lang);
            $this->assign('l',$lang);
            $this->assign('langid',LANG_ID);
            $T = F('config_'.$lang,'', APP_PATH.'Tpl/Home/'.$this->sysConfig['DEFAULT_THEME'].'/');
            C('TMPL_CACHFILE_SUFFIX','_'.$lang.'.php');
            cookie('think_language',$lang);
        }else{
            $T = F('config_'.$this->sysConfig['DEFAULT_LANG'],'',  APP_PATH.'Tpl/Home/'.$this->sysConfig['DEFAULT_THEME'].'/');
            $this->categorys = F('Category');
            $this->Config = F('Config');
            cookie('think_language',$this->sysConfig['DEFAULT_LANG']);
        }
    }

    public function index()
    {
        header('Cache-Control:no-cache,must-revalidate');
        header('Pragma:no-cache');
        header("Expires:0");
        if(!isset($_GET['rand'])){
            $this->redirect('?rand='.time());
        }
        $isPost = $this->isPost();
        if ($isPost) {
            if ($code = preg_match('/\d{20}/', $_POST['code']) ? $_POST['code'] : '') {
                $where = " status=1 ";
                $where .= ' AND title = "' . $code . '" ';
                $this->dao = M('Code');
                $model = $this->dao->where($where)->limit(1)->find();
                if (!is_null($model)) {
                    file_put_contents(CACHE_PATH . '/test.txt', $model['title'] . '-' . date('Y-m-d H:i:s').' - '.get_client_ip() . "\r\n", FILE_APPEND);
                    if ($model['hits'] == 0) {
                        $this->dao->where(array('id' => $model['id']))->data(array('updatetime' => time(), 'hits' => array('exp', 'hits+1')))->save();
                        ++$model['hits'];
                    } else {
                        if (!isset($_SESSION[$code]) || time() - $_SESSION[$code] > 35) {
                            $this->dao->where(array('id' => $model['id']))->data(array('hits' => array('exp', 'hits+1')))->save();
                            ++$model['hits'];
                        }
                    }
                    $this->assign('model', $model);
                    $_SESSION[$code] = time();
                }
            }
            $this->assign('code',$code);
        }
        $this->assign('isPost',$isPost);
		$this->display();

    } 
}
?>