<?php
//print_r($_SERVER);
$_controller = 'pages';
$_action = 'index';

if ( $_GET ){
    if ( isset($_GET['controller']) ){
        $_controller = strtolower($_GET['controller']);
    }
    if ( isset($_GET['action']) ){
        $_action = strtolower($_GET['action']);
    }
}
include(__DIR__.DIRECTORY_SEPARATOR.'config.php');

include (__DIR__.DIRECTORY_SEPARATOR.'helpers/menu.helper.php');

//$menu = getMenu();
//print_r($menu); die;
/**
 * Данные для шаблона
 */
$data = array();
$data['page_title'] = $site_name;
$data['menu'] = getMenu();

$_controller_path = CONTROLLERS_PATH . '/' . $_controller . '.controller.php';

if ( file_exists($_controller_path) ){
     require_once($_controller_path);
call_user_func($_action,$_GET);
} else {
    die('Error');
}

include (__DIR__.DIRECTORY_SEPARATOR.'templates/index.php');
//echo $site_name;



