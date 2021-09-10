<?php
require_once BASE_MD . '/BaseModels.php';

class CustomerModel extends BaseModels
{
    protected $table_name = 'customer';
    protected $primary_key = 'id';
}
