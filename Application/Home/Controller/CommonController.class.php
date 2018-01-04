<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize() {
        if(C('USE_LOGIN')) {
            $user_id = session(C('USER_AUTH_KEY'));
            if(!isset($user_id)) {
              $refer = __SELF__;
              cookie('refer', $refer);
              $this->error('请先登录', U(C('USER_AUTH_GATEWAY')));
            } else {
              $user_name = session('user_name');
              $user_id = session('user_id');
              $user = M('user');
              $u = $user->where(array('user_id' => $user_id))->find();

              $this->type = $u['type'];
              $this->assign('user_name', $user_name);
            }
        }
    }

    public function index(){

        $this->show();
    }






}
