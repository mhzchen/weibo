<?php
/**
 * Created by PhpStorm.
 * User: 18384
 * Date: 2020/6/28
 * Time: 17:10
 */

namespace App\Http\Controllers\home;


class StaticPagesController extends HomeController
{
    public function index()
    {
        return view('home/index/index');
    }
}
