<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type:text/html; charset=utf-8");
class PublicController extends Controller {
    public function login() {
      $this->display();
    }

    public function checkLogin() {
        $number = I('number');
        $password = I('password');

        $refer = cookie('refer');  //返回的地址

        $user = M('user');
        $u = $user->where(array('number' => $number)) ->find();
        if($u) {
            if($u['password'] == md5($password)){
                session('user_id', $u['user_id']);
                session('user_name', $u['user_name']);
                if(empty($refer)) {
                    $this->success('登录成功',U('Home/index/index'));
                } else {
                    $this->success('登录成功',$refer);
                }
            } else {
                $this->error('账号或密码错误');
            }
        } else {
            $this->error('账号不存在');
        }

    }

    public function logout(){
          session('user_id',null);
          session('user_name',null);
          $this -> assign("jumpUrl", U(C('USER_AUTH_GATEWAY')));
          $this -> success('退出成功！');

    }

}
