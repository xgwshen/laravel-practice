<?php
/**
 * Created by PhpStorm.
 * User: xgwshen
 * Email: xgwshen@gmail.com
 * Date: 2018/4/22
 * Time: 22:32
 */
class my{
    private $m;
    public function __construct($param)
    {
        $this->m=$param;
    }
    public function toEat(){
        echo 'eat is function';
    }
    public function randfuc(){
        echo rand(1,100000);
    }

}

$my = new my(6);
echo $my->randfuc();