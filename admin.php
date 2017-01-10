<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/10/2017
 * Time: 8:36 AM
 */
/**
 *

define('PATH_SYSTEM',__DIR__.'/system');
define('PATH_APPLICATION',__DIR__.'/admin');
// Lay thong so cau hinh
require (PATH_SYSTEM.'/config/config.php');
//Danh sach tham so gom hai thanh phan
//- controller : controller hien tai
//- action: action hien tai
$segments = array(
    'controller'=>'', 'action' =>array()
);
// Neu khong truyen controller thi lay controller mac dinh
$segments['controller'] =empty($_GET['c']) ? CONTROLLER_DEFFAULT : $_GET['c'];
var_dump($segments);
// Nếu không truyền action thì lấy action mặc định
$segments['action'] = empty($_GET['a']) ? ACTION_DEFAULT : $_GET['a'];

// Require controller
require_once  PATH_SYSTEM .'/core/FT_Controller.php';
// Chạy controller
$controller = new FT_Controller();
$controller->load($segments['controller'], $segments['action']);  */
// Đường dẫn tới hệ  thống
define('PATH_SYSTEM', __DIR__ .'/system');
define('PATH_APPLICATION', __DIR__ . '/admin');

// Lấy thông số cấu hình
require (PATH_SYSTEM . '/config/config.php');

//mở file FT_Common.php, file này chứa hàm FT_Load() chạy hệ thống
include_once PATH_SYSTEM . '/core/FT_Common.php';

// Chương trình chính
FT_load();
?>