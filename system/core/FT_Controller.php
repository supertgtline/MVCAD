<?php if(!defined('PATH_SYSTEM')) die("Bad requested!");
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/10/2017
 * Time: 8:39 AM
 */
class FT_Controller
{
    // Doi tuong view
    protected $view = NUlL;

    // Doi tuong model

    protected $model = NULL;

    // Doi tuong library

    protected $library = NULL;

    // Doi tuong config

    protected $config = NULL;

    /**
     * Ham Khoi Thao
     * $desc load cac thu vien can thiet
     */
    public function __construct()
    {
        // Loader cho config
        require_once PATH_SYSTEM . '/core/loader/FT_Config_Loader.php';
        $this->config   = new FT_Config_Loader();
        $this->config->load('config');
    }

    /**
     * Ham Chay ung dung
     * desc tham so truyen vao bao gom controller and action
     */
    /**
     * Ham Chay ung dung
     * desc tham so truyen vao bao gom controller and action

    public function load($controller, $action)
    {
        // Chuyển đổi tên controller vì nó có định dạng là {Name}_Controller
        $controller = ucfirst(strtolower($controller)) . '_Controller';

        // chuyển đổi tên action vì nó có định dạng {name}Action
        $action = strtolower($action) . 'Action';

        // Kiểm tra file controller có tồn tại hay không
        if (!file_exists(PATH_APPLICATION . '/controller/' . $controller . '.php')) {
            die ('Controller không tồn tại');
        }

        require_once PATH_APPLICATION . '/controller/' . $controller . '.php';

        // Kiểm tra class controller có tồn tại hay không
        if (!class_exists($controller)) {
            die ('Controller không tồn tại');
        }

        // Khởi tạo controller
        $controllerObject = new $controller();

        // Kiểm tra action có tồn tại hay không
        if (!method_exists($controllerObject, $action)) {
            die ('Action không tồn tại');
        }

        // Gọi tới action
        $controllerObject->{$action}();
    }
     * */

}
?>