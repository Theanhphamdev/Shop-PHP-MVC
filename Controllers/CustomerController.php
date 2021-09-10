<?php
require_once BASE_Ctl . '/BaseController.php';
require_once BASE_MD . '/CustomerModel.php';
require_once BASE_MD . '/OrderModel.php';

class CustomerController extends BaseController
{
    public function loginCustomer()
    {
        $this->renderUser('customer/login');
    }
    public function loginData()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $result = CustomerModel::checkLogin($email,$password);
        if (isset($result->email)) {
            $_SESSION['id_customer'] = $result->id;
            header('Location: /');
        } else {
            header('Location: /login-customer');
        }
    }
    public function logoutCustomer()
    {
        unset($_SESSION['id_customer']);
        header('Location: /');
    }
    public function registerCustomer()
    {
        $this->renderUser('customer/register');
    }
    public function insertCustomer()
    {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $detail_address = $_POST['detail_address'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $district = $_POST['district'];
        CustomerModel::insert(compact('name','password','email','phone','detail_address','city','province','district'));
        header('Location: /register-customer');
    }
    public function forgotCustomer()
    {
        $this->renderUser('customer/forgot');
    }
    public function informationCustomer()
    {
        $id = $_SESSION['id_customer'];
        $customer = CustomerModel::find($id);
        $this->render('informationCustomer',compact('customer'));
    }
    public function upInformationCustomer()
    {
        $id = empty($_POST['id']) ? 0 : $_POST['id'];
        $params = $_POST;
        CustomerModel::update($id, $params);
        header('Location: /information-line');
    }

    public function informationLine()
    {
        $this->render('informationLine');
    }

    public function checkoutProduct()
    {
        $customer_id = $_POST['customer_id'];
        $product_name = $_POST['product_name'];
        $total_price = $_POST['total_price'];
        $payment = $_POST['payment'];
        $status = $_POST['status'];
        OrderModel::insert(compact('customer_id','product_name','total_price','payment','status'));
        unset($_SESSION['cart']);
        header('Location: /information-receiving');
    }
}