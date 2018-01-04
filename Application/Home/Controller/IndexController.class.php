<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
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

    public function student() {
        $student = M("student");
        $list = $student->select();

        $this->assign('list', $list);
        $this->display();
    }

    public function addStudent() {
        $this->display();
    }

    public function checkAddStudent() {
        $data['no'] = I('number');
        $data['major'] = I('major');
        $data['name'] = I('user_name');
        $data['sex'] = I('sex');
        $data['year'] = strtotime(I('time'));
        $student = M('student');

        if($student->add($data)) {
            $this->success('添加成功', U('student'));
        } else {
            $this->success('添加失败', U('student'));
        }
    }


}
