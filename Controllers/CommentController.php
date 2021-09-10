<?php
require_once BASE_Ctl . '/BaseController.php';
require_once BASE_MD . '/CommentModel.php';
class CommentController extends BaseController
{
    public function insertComment()
    {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $product_id = $_POST['product_id'];
        CommentModel::insert(compact('name', 'description', 'product_id'));
        header('Location: /single-product&id='. $product_id);
    }
}
