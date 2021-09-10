<?php
require_once BASE_Ctl . '/BaseController.php';
require_once BASE_MD . '/SliderModel.php';
require_once BASE_MD . '/MenuModel.php';

class FrontendController extends BaseController
{
    public function listMenu()
    {
        $menus = MenuModel::all();
        $this->renderAdmin('MenuShow/list',compact('menus'));
    }
    public function createMenu()
        {
            $this->renderAdmin('MenuShow/create');
        }
    public function detailMenu()
        {
            $menus = MenuModel::find($_GET['id']);
            $this->renderAdmin('MenuShow/update',compact('menus'));
        }
    public function insertMenu()
        {
            $name = $_POST['name'];
            $url = $_POST['url'];
            MenuModel::insert(compact('name','url'));
            header('Location: /list-menu');
        }
    public function updateMenu()
        {
            $id = empty($_POST['id']) ? 0 : $_POST['id'];
            $params = $_POST;
            MenuModel::update($id, $params);
            header('Location: /list-menu');
        }
    public function deleteMenu()
        {
            MenuModel::delete($_GET['id']);
            header('Location: /list-menu');
        }

    public function listSlide()
    {
        $slider = SliderModel::all();
        $this->renderAdmin('Slider/list',compact('slider'));
    }
    public function createSlide()
    {
        $this->renderAdmin('Slider/create');
    }
    public function detailSlide()
    {
        $slider = SliderModel::find($_GET['id']);
        $this->renderAdmin('Slider/update', compact('slider'));
    }
    public function insertSlide()
    {
        $image = $_FILES['image'];
        $image = uploadImage($image);
        $title_slide = $_POST['title_slide'];
        $heading = $_POST['heading'];
        $description = $_POST['description'];
        SliderModel::insert(compact('image','title_slide','heading','description'));
        header('Location: /list-slider');
    }
    public function updateSlide()
    {
        $id = empty($_POST['id']) ? 0 : $_POST['id'];
        $params = $_POST;
        $params['image'] = empty($_FILES['image']['size']) ? $params['image_existed'] : uploadImage($_FILES['image']);
        unset($params['image_existed']);
        SliderModel::update($id, $params);
        header('Location: /list-slider');
    }

    public function deleteSlide()
    {
        SliderModel::delete($_GET['id']);
        header('Location: /list-slider');
    }
}