<?php
require_once BASE_MD . '/BaseModels.php';
require_once BASE_MD . '/ProductModel.php';

class CommentModel extends BaseModels
{
    protected $table_name = 'comment';
    protected $primary_key = 'id';


    public function getComment(){
        $product_id = $_GET['id'];
        $comment = ProductModel::where('product_id', '=', $product_id)->get();
        return 0;
    }
}