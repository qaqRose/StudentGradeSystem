<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type:text/html; charset=uyf-8");
class GradeController extends CommonController {
		public function classGrade() {
			$class_grade = M('class_grade');

			$b_list = $class_grade
								->join('class ON class.class_id = class_grade.class_id', 'LEFT')
								->join('base_course ON base_course.bc_id = class_grade.c_id ', 'LEFT')
								->where(array('is_base' =>1))
								->select();

			$a_list = $class_grade
								->join('class ON class.class_id = class_grade.class_id', 'LEFT')
								->join('course ON course.c_id = class_grade.c_id ', 'LEFT')
								->where(array('is_base' =>0))
								->select();

			$list = array_merge($b_list, $a_list);
		  $this->assign('list', $list);
			$this->show();
		}

		public function studentGrade() {
			$student = M('student');
			$grade =M('grade');
			$content = I('content');
			if(I('get.search') && $content) {


				if(preg_match("/^[0-9]*$/",$content)) {
					 $where['id'] = $content;
				} else {
					$where['name'] = $content;
				}

				$list = $student
								 ->join('grade ON grade.s_id = student.id', 'LEFT')
								 ->where($where)
								 ->select();
			} else {
				$list = $student
									->join('grade ON grade.s_id = student.id', 'LEFT')
									->select();
			}




			// p($list);die;
			$this->assign('list', $list);
			$this->show();
		}

		public function student() {
				$s_id = I('s_id');

				$grade = M('grade');
				$student = M('student');
				$so = $student->where(array('id' => $s_id))->find();
				$list = $grade->where(array('s_id' => $s_id, 'is_base' => 1))->select();

				foreach ($list as $key => $value) {
						$temp += $value['totality'];
				}
				$avg = $temp/ count($list);

				$this->assign('avg', $avg);
				$this->assign('list', $list);
				$this->assign('so', $so);

				// p($list);die;
				$this->show();

		}

		public function add() {
			$isBase = I('base');
			if($isBase) {
					$id = I('bc_id');
					$course = M('base_course');
					$student = M('student');
					$bo = $course->where(array('bc_id' => $id))->find();
					$list = $student
						->join('grade ON grade.s_id = student.id AND grade.is_base = 1 AND grade.c_id = '.$id, 'LEFT')
						->where(array('major'=>$bo['major']))
						->select();

					// p($list);die;

					$this->assign('is_base','1');
					$this->assign('key','bc_id');
					$this->assign('id', $id);
					$this->assign('bo', $bo);
					$this->assign('list', $list);
			} else {
					$id = I('c_id');
					$course = M('course');
					$student = M('student');
					$course_choose = M('course_choose');

					$bo = $course->where(array('c_id' => $id))->find();

					// $list = M()
					// 				->table('student a,course_chooese b')
					// 				->where('b.c_id = '.$id.' AND a.id = b.s_id')
					// 				->select();
					$list = $student
									->join('course_choose ON course_choose.s_id= student.id AND course_choose.c_id = '.$id , 'INNER')
									->join('grade ON grade.s_id = student.id AND grade.is_base = 0 AND grade.c_id = '.$id, 'LEFT')
									->select();
					// p($bo);
					// p($list);die;

					$this->assign('is_base','0');
					$this->assign('key','bc_id');
					$this->assign('id', $id);
					$this->assign('bo', $bo);
					$this->assign('list', $list);
			}

			$this->show();
		}
		//录入成绩
		public function input() {
			$course  = M('course');
			$list = $course->select();

			$base_course = M('base_course');
			$b_list = $base_course->select();

			$this->assign('list', $list);
			$this->assign('b_list', $b_list);
			$this->show();
		}

		public function addCheck() {
				$data = I('post.');
				$type = I('button');

				// p($data);die;

				if($type== 'delete') {
					M('grade')->where(array('s_id'=>$data['s_id'], 'c_id'=>$data['c_id'], 'is_base'=>$data['is_base']))->delete();
					$this->success('删除成功');
					return ;
				}

				$grade = M('grade');
				$where = array('s_id'=>$data['s_id'], 'c_id'=>$data['c_id'], 'is_base'=>$data['is_base']);
				$result = $grade->where($where)->find();
				if($result) {
						$res = $grade->data($data)->where($where)->save();
						if($res) {
							$this->success('更新成功');
						} else {
							$this->error('更新成功');
						}
				} else {
					$stu = M('student')->where(array('id'=>$data['s_id']))->find();
					$class =  M('class')->where(array('major'=>$stu['major'], 'class'=>$stu['class']))->find();
					$data['class_id'] = $class['class_id'];
					$res = $grade->data($data)->add();
					if($res) {
						$this->success('录入成功');
					} else {
						$this->error('录入失败');
					}
				}



		}
}
