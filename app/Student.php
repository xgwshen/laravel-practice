<?php
/**
 * Created by PhpStorm.
 * User: xgwshen
 * Date: 2018/5/8
 * Time: 15:48
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 * @package App
 * Eloquent ORM 简介 模型的建立以及查询数据
 * 每个数据表都有一个与之相对应的模型， 用来数据的交互
 */
class Student extends Model
{
    //student 模型 （最基础的模型）
    protected $table = 'student'; //表名
    protected $primaryKey = 'id'; //主键
    //默认情况下 Eloquent 期望数据表中存在 created_at 和 updated_at 字段.也可以取消(自动维护时间戳)
    public $timestamps = true ;
    //指定可以批量赋值的字段
    protected $fillable = ['name','age'];
    //指定不允许更新的字段
    protected $guarded = [];

  //自动存时间戳 created_at updated_at
    protected function getDateFormat(){
        return time();
    }
    //取时间时不自动转化为Y-m-d H:i:s 格式
    protected function asDateTime($val){
        return $val;
    }

}