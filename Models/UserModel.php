<?php
require_once BASE_MD . '/BaseModels.php';

class UserModel extends BaseModels
{
    protected $table_name = 'user';
    protected $primary_key = 'id';
}
