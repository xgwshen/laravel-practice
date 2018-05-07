<?php
/**
 *  model 模型位于app目录下 ，系统自带user.php ....
 *  一直不知道模型在哪.....(可能稍后又会由新的认知呢....)
 */
namespace App;

use Illuminate\Database\Eloquent\Model;
//统一继承上面路径的Model类下
class Member extends Model
{
    public static function getMember(){
        return "Member name is xgwshen ! ";
    }

    public function getMember1(){
        return "this is not a static function";
    }
}