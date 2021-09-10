<?php
require_once BASE_Ctl . '/BaseController.php';
require_once BASE_MD . '/ProductModel.php';
require_once BASE_MD . '/SliderModel.php';

class HomeController extends BaseController
{
    public function homeMain()
    {
        $slider = SliderModel::all();
        $products = ProductModel::all();
        $this->render('homeMain', compact('products','slider'));
    }
    public function profileAdmin(){
        $this->renderAdmin('profile');
    }

    public function homeAdmin()
    {
        $this->renderAdmin('/homeAdmin');
    }

    public function contact()
    {
        $this->render('contact');
    }

    public function sendmail()
    {
        $con_name = $_POST['con_name'];
        $con_email = $_POST['con_email'];
        $con_message = $_POST['con_message'];
        $content_email = "Khách hàng: $con_name <br> Email: $con_email <br>Nội dung phản hồi:<br> $con_message";

        sendMail("Phản hồi, Khách!" , 'panh23368@gmail.com', $content_email);

        header('Location: /contact');
    }

}
