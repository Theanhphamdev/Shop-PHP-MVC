<?php
require_once BASE_Ctl . '/BaseController.php';
require_once BASE_MD . '/UserModel.php';
require_once BASE_MAIN . './Validates/UserValidate.php';


class UserController extends BaseController
{
    public function logform()
    {
        $this->renderUser('login');
    }
    public function forgotform()
    {
        $this->renderUser('forgot');
    }

    public function logout()
    {
        unset($_SESSION['id_user']);
        unset($_SESSION['status']);
        header('Location: /');
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $result = UserModel::checkLogin($email,$password);
        if (isset($result->email)) {
            $_SESSION['id_user'] = $result->id;
            $_SESSION['status'] = $result->status;
            header('Location: /admin');
        } else {
            header('Location: /login');
        }
    }
}
