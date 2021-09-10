<?php
require_once BASE_MD .'/BaseModels.php';
require_once BASE_MD .'/CustomerModel.php';


class OrderModel extends BaseModels
{
    protected $table_name = 'transport';
    protected $primary_key = 'id';
    protected $customer_id = 'customer_id';

    public function customerName()
    {
        $cus = CustomerModel::find($this->customer_id);
        return empty($cus) ? '' : $cus->name;
    }

    public static function getCustomerID($id)
    {
        $self = new static();

        $self->query = "SELECT * FROM {$self->table_name} WHERE {$self->customer_id} = $id";

        $result = $self->get();

        return empty($result[0]) ? null : $result[0];
    }
}