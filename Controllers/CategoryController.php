<?php
require_once BASE_Ctl . '/BaseController.php';
require_once BASE_MD . '/CategoryModel.php';
class CategoryController extends BaseController
{
    public function listCate()
    {
        $categories = CategoryModel::all();
        $this->renderAdmin('category/listCate' ,compact('categories'));
    }

    public function createCate()
    {
        $this->renderAdmin('category/createCate');
    }

    public function insertCate()
    {
        $image = $_FILES['image'];
        $image = uploadImage($image);
        $name = $_POST['name'];
        CategoryModel::insert(compact('image','name'));
        header('Location: /list-category');
    }

    public function deleteCate()
    {
        CategoryModel::delete($_GET['id']);
        header('Location: /list-category');
    }

    public function detailCate()
    {
        $categories = CategoryModel::find($_GET['id']);
        $this->renderAdmin('category/updateCate', compact('categories'));
    }

    public function updateCate()
    {
        $id = empty($_POST['id']) ? 0 : $_POST['id'];
        $params = $_POST;
        $params['image'] = empty($_FILES['image']['size']) ? $params['image_existed'] : uploadImage($_FILES['image']);
        unset($params['image_existed']);
        CategoryModel::update($id, $params);
        header('Location: /list-category');
    }
}