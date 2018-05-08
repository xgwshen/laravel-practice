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
}