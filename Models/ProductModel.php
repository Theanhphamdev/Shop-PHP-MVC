<?php
require_once BASE_MD . '/BaseModels.php';
require_once BASE_MD . '/CategoryModel.php';

class ProductModel extends BaseModels
{
    protected $table_name = 'products';
    protected $primary_key = 'id';


    public function cateName()
    {
        $cate = CategoryModel::find($this->category_id);
        return empty($cate) ? '' : $cate->name;
    }

    public static function check($id)
    {
        $self = new static();

        $self->query = "SELECT * FROM {$self->table_name} WHERE {$self->primary_key} = $id";

        $result = $self->get();

        return empty($result[0]) ? null : $result[0];
    }

}
