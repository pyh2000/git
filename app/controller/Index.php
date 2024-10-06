<?php
namespace app\controller;

use app\BaseController;
use think\facade\Db;

class Index extends BaseController
{
    public function index()
    {
        $name="hello git three";
        $name1="hello git four";
        $name2="hello git five";
        $name3="hello git six";
        $name4="hello git seven";
        $name5="hello git nine";
        $name6="hello git 1";
        $name7="hello git 2";
        $name8="hello git 3";
        $name9="hello git 3";
        $name10="hello git 3";
        $name11="hello git 3";
        $name12="hello git 3";
        $name13="hello git 3";
        echo $name;
        echo $name1;
        echo $name2;
        echo $name3;
        $user=Db::table("user")->select()->toArray();
        dump($user);
        dump($user);
        dump($user);
        dump($user);
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
