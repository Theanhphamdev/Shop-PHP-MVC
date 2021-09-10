<?php
require_once BASE_MD .'/UserModel.php';
class EmployeeController extends BaseController
{
    public function listEmployee()
    {
        $employees = UserModel::all();
        $this->renderAdmin('employee/listEmployee',compact('employees'));
    }
    public function deleteEmployee(){
        UserModel::delete($_GET['id']);
        header('Location: /list-employee');
    }

    public function createEmployee()
    {
        $this->renderAdmin('employee/createEmployee');
    }
    public function addEmployee(){
        $image = $_FILES['image'];
        $image = uploadImage($image);
        $username = $_POST['username'];
        $email = $_POST['username'];
        $phone = $_POST['phone'];
        $full_name = $_POST['full_name'];
        $password = $_POST['password'];
        $status = $_POST['status'];
        $working_time = $_POST['working_time'];
        $age = $_POST['age'];
        $home_town = $_POST['home_town'];
        $experience = $_POST['experience'];
        $id_card = $_POST['id_card'];
        UserModel::insert(compact('image','username','email','phone','full_name','password','status','working_time','age','home_town','experience','id_card'));
        header('Location: /list-employee');
    }
    public function detailEmployee()
    {
        $employee = UserModel::find($_GET['id']);
        $this->renderAdmin('employee/updateEmployee',compact('employee'));
    }
    public function updateEmployee(){
        $id = empty($_POST['id']) ? 0 : $_POST['id'];
        $params = $_POST;
        $params['image'] = empty($_FILES['image']['size']) ? $params['image_existed'] : uploadImage($_FILES['image']);
        unset($params['image_existed']);
        UserModel::update($id, $params);
        header('Location: /list-employee');
    }
}
