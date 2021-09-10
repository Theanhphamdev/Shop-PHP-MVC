<?php
require_once BASE_Ctl . '/BaseController.php';
class CartController extends BaseController
{
    public function viewCart()
    {
        $this->render('cart');
    }

    public function deleteCart()
    {
        $id = $_GET['id']; // lay id tu duong link
        unset($_SESSION['cart'][$id]);
        header('Location: /cart');
    }
    public function deleteAllCart()
    {
        unset($_SESSION['cart']);
        header('Location: /cart');
    }

    public function AddCart(){
        // unset($_SESSION);
        $id = $_GET['id'];
        if(!isset($_SESSION['cart']))//neu khong ton tai gio hang
        {
            $_SESSION['cart']=array();//tao gio hang
        }
        if(!isset($_SESSION['cart'][$id]))//neu khong ton tai ma hang
        {
            $_SESSION['cart'][$id]['id'] = $id;
            $_SESSION['cart'][$id]['sl']=1;//gan so luong =1
        }
        else//neu ton tai ma hang, cong so luong them 1
        {
            $_SESSION['cart'][$id]['id'] = $id;
            $_SESSION['cart'][$id]['sl'] +=1;
        }
        header("Location: /");
    }
}