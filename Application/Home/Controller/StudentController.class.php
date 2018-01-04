<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type:text/html; charset=utf-8");
class StudentController extends CommonController {
    public function index() {
        $this->show();
    }
    public function query(){
      $student = M('student');
      $list = $student->select();

      $this->assign('list', $list);
      $this->show();
    }

    public function add() {
        $this->show();
    }

    public function modify() {
      $id = I('id');
      $vo = M('student')->where(array('id'=>$id))->find();

      if($vo){
        $this->assign('vo', $vo);
      }
      $this->show();
    }
    public function update() {
      $id = I('id');
      $data = I('post.');
      if(!empty($id)) {
        $student = M('student');
        $res = $student->where(array('id' => $id))->find();
        if($res){
          $result = $student->where(array('id' => $id))->data($data)->save();
          $result && $this->success('修改成功', U('student/query'));
        } else {
          $this->error('修改失败');
        }
      }else {
        $this->error('修改失败');
      }
    }

    public function delete() {
        $id = I('id');

        if(!empty($id)) {
          $student = M('student');
          $res = $student->where(array('id' => $id))->find();
          if($res){
            $student->where(array('id' => $id))->delete();
            $this->success('删除成功');
          } else {
            $this->error('删除失败');
          }
        }else {
          $this->error('删除失败');
        }
    }

    public function addCheck() {
        $data = I('post.');
        foreach ($data as $key => $value) {
          if(empty($value)) {
              $this->error('请填写完整信息');
          }
        }
        $res = M('student')->data($data)->add();

        if($res) {
            $this->success('增加成功',U('student/query'));
        } else {
            $this->error('添加失败');
        }
    }
}
