<?php
require_once BASE_MD .'/UserModel.php';
require_once BASE_MD .'/MenuModel.php';
class BaseController
{
    protected function render($view = '', $params = [])
    {
        $menus = MenuModel::all();
        extract($params);
        ob_start();
        require_once BASE_MAIN . "/Resources/main/$view.php";
        $contents = ob_get_clean();
        require_once BASE_MAIN . '/Resources/layout/mainLayout.php';
    }
    protected function renderAdmin($view = '', $params = [])
    {
        checkAuthAdmin();
        if (isset($_SESSION['id_user'])){
            $id = $_SESSION['id_user'];
            $array_user = UserModel::find($id);
        }
        extract($params);
        ob_start();
        require_once BASE_MAIN . "/Resources/admin/$view.php";
        $contents = ob_get_clean();
        require_once BASE_MAIN . '/Resources/layout/adminLayout.php';
    }
    protected function renderUser($view = '', $params = [])
    {
        extract($params);
        ob_start();
        require_once BASE_MAIN . "/Resources/user/$view.php";
        $contents = ob_get_clean();
        require_once BASE_MAIN . '/Resources/layout/userLayout.php';
    }

}

