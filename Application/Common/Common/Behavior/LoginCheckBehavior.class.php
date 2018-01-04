<?php
namespace Common\Behavior;
use Think\Behavior;
header("Content-Type:text/html;charset=utf-8");

defined('THINK_PATH') or exit();


class LoginCheckBehavior extends Behavior {
    protected $config;

    public function run(&$params) {
        #todo 行为扩展
    }
}
