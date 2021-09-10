<?php

class UserValidate
{
    static function CheckUsername($str){
        $regex = '/^[\w]{3,6}$/' ;
        if (preg_match($regex, $str)) {
            return true;
        }else{
            return false;
        }
    }
    static function CheckEmail($str){
        $regex = '/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/' ;
        if (preg_match($regex, $str)) {
            return true;
        }else{
            return false;
        }
    }
    static function CheckPhone($str){
            $regex = '/ ^(\+84|0)[0-9]{8,9}$/' ;
            if (preg_match($regex, $str)) {
                return true;
            }else{
                return false;
            }
        }
}
