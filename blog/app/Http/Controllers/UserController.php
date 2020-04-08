<?php
/**
 * Created by PhpStorm.
 * User: 86158
 * Date: 2020/4/3
 * Time: 16:27
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends  Controller
{

    public function index(){
        //dd(123456);
        $users = DB::table('users')->value('email');
        dd($users);
        $test = "测试下这个结果级别是否正确";
        return view("user.index",["test"=>$test]);
    }
}