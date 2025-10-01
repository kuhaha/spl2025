<?php
// namespace spl2024\models;

require_once("Model.php");

class User extends Model 
{
    public function getList()
    {
        return self::$users;
    }
    
    public function login($uid, $upass)
    {
        foreach (self::$users as $user) {
            if ($user['uid']===$uid and $user['upass']===$upass){
                return $user;
            }
        }   
        return false;
    }
}
