<?php
require_once BASE_MD . '/BaseModels.php';
require_once BASE_MD . '/CustomerModel.php';

class OrderController extends BaseController
{
    public function listOrder()
    {
        $orders = OrderModel::all();
        $this->renderAdmin('order/listOrder',compact('orders'));
    }

    public function detailOrder()
    {
        $order = OrderModel::find($_GET['id']);
        $this->renderAdmin('order/updateOrder',compact('order'));
    }

    public function updateOrder()
    {
        $id = empty($_POST['id']) ? 0 : $_POST['id'];
        $params = $_POST;
        OrderModel::update($id, $params);
        header('Location: /list-order');
    }

    public function receiving()
    {
        $id = $_SESSION['id_customer'];
        $customer = CustomerModel::find($id);
        $receiving =  OrderModel::getCustomerID($id);
        $this->render('informationReceiving',compact('receiving','customer'));
    }

}
