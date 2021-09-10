<?php

require_once BASE_Ctl . '/BaseController.php';
require_once BASE_MD . '/ProductModel.php';
require_once BASE_MD . '/CategoryModel.php';
require_once BASE_MD . '/CommentModel.php';
require_once BASE_MD . '/CustomerModel.php';

class ProductController extends BaseController
{
    public function listShop()
    {
        $cates = CategoryModel::all();
        $products = ProductModel::all();
        $this->render('shop',compact('products','cates'));
    }

    public function listProduct()
    {
        $products = ProductModel::all();
        $this->renderAdmin('product/listProduct',compact('products'));
    }

    public function detailProduct()
    {
        $categories = CategoryModel::all();
        $product = ProductModel::find($_GET['id']);
        $productes = ProductModel::all();
        $this->renderAdmin('product/updateProduct',compact('product','categories','productes'));
    }

    public function singleProduct()
    {
        if (!isset($_SESSION['id_customer'])){
            $product_id = $_GET['id'];
            $categories = CategoryModel::all();
            $product = ProductModel::find($product_id);
            $productes = ProductModel::all();
            $comments = CommentModel::where('product_id', '=', $product_id)->get();
            $this->render('detailProduct',compact('product','categories','productes','comments'));
        }else{
            $ses_id = $_SESSION['id_customer'];
            $product_id = $_GET['id'];
            $customer = CustomerModel::find($ses_id);
            $categories = CategoryModel::all();
            $product = ProductModel::find($product_id);
            $productes = ProductModel::all();
            $comments = CommentModel::where('product_id', '=', $product_id)->get();
            $this->render('detailProduct',compact('product','categories','productes','comments','customer'));
        }

    }
    public function createProduct()
    {
        $categories = CategoryModel::all();
        $this->renderAdmin('product/createProduct', compact('categories'));
    }

    public function insertProduct()
    {
        $image = $_FILES['image'];
        $image = uploadImage($image);
        $name = $_POST['name'];
        $category_id = $_POST['category_id'];
        $description = $_POST['description'];
        $sale = $_POST['sale'];
        $status = $_POST['status'];
        $price = $_POST['price'];
        ProductModel::insert(compact('image','name', 'category_id', 'description', 'sale', 'status', 'price'));
        header('Location: /list-product');
    }
    public function updateProduct(){
        $id = empty($_POST['id']) ? 0 : $_POST['id'];
        $params = $_POST;
        $params['image'] = empty($_FILES['image']['size']) ? $params['image_existed'] : uploadImage($_FILES['image']);
        unset($params['image_existed']);
        ProductModel::update($id, $params);
        header('Location: /list-product');
    }
    public function deleteProduct(){
        ProductModel::delete($_GET['id']);
        header('Location: /list-product');
    }
}