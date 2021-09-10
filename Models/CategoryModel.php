<?php
require_once BASE_MD . '/BaseModels.php';
require_once  BASE_MD . '/ProductModel.php';

class CategoryModel extends BaseModels
{
    protected $table_name = 'categories';
    protected $primary_key = 'id';


    public function getTotalProduct(){
        $cate_id = $this->id;
        $products = ProductModel::where('category_id', '=', $cate_id)->get();
        return count($products);
    }


}
