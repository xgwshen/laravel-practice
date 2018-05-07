<?php
/**
 * Created by PhpStorm.
 * User: xgwshen
 * Date: 2018/5/7
 * Time: 15:38
 */
namespace App\Http\Controllers;

class MemberController extends Controller
{

    public function info($id){
        return 'member-info-id-' .$id ;
    }
}