<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    const SEX_UN = 10;
    const SEX_BOY = 20;
    const SEX_GRIL = 30;
    protected $table = 'users';
    public $timestamps = true ;

    public function getDateFormat()
    {
        return time();
    }
    public function asDateTime($value)
    {
        return $value;
    }

    public function sex($ind=null){
        $arr = [
          self::SEX_UN => '未知',
          self::SEX_BOY => '男s',
          self::SEX_GRIL => '女',
        ];
        if($ind!==null){
            return array_key_exists($ind,$arr)? $arr[$ind] : $arr[SELF::UN];
        }
    }
}