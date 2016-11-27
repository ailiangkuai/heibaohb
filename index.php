<?php
/**
 *
 * index(入口文件)
 *

 */
if(!is_file('./Cache/config.php'))header("location: ./Install");
header("Content-type: text/html;charset=utf-8");
ini_set('memory_limit','32M');
error_reporting(E_ERROR | E_WARNING | E_PARSE);
define('Yourphp',true);
define('UPLOAD_PATH','./Uploads/');
define('VERSION','');
define('UPDATETIME','20121225');
define('APP_NAME','Yourphp');
define('APP_PATH','./Yourphp/');
define('APP_LANG',true);//禁止多语言
define('APP_DEBUG',false);//开启调试模式
define('THINK_PATH','./Core/');

require(THINK_PATH.'Core.php');
?>
