<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type:text/html; charset=uyf-8");
class BaseCourseController extends CommonController {
		public function query() {
			 $bc = M('base_course');
			 $list = $bc->select();

			 $this->assign('list', $list);
			 $this->show();
		}

		public function add() {
			$this->show();
		}

    public function modify() {
      $id = I('bc_id');
      $vo = M('base_course')->where(array('bc_id'=>$id))->find();

      if($vo){
        $this->assign('vo', $vo);
      }
      $this->show();
    }
    public function update() {
      $id = I('bc_id');
      $data = I('post.');
      if(!empty($id)) {
        $bc = M('base_course');
        $res = $bc->where(array('bc_id' => $id))->find();
        if($res){
          $result = $bc->where(array('bc_id' => $id))->data($data)->save();
          $this->success('修改成功', U('BaseCourse/query'));
        } else {
          $this->error('修改失败');
        }
      }else {
        $this->error('修改失败');
      }
    }

    public function delete() {
        $id = I('bc_id');

        if(!empty($id)) {
          $bc = M('base_course');
          $res = $bc->where(array('bc_id' => $id))->find();
          if($res){
            $bc->where(array('bc_id' => $id))->delete();
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
        $res = M('base_course')->data($data)->add();

        if($res) {
            $this->error('增加成功',U('query'));
        }
    }


}
