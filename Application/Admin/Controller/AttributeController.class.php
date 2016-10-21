<?php
//博客类型
namespace Admin\Controller;
use Think\Controller;
class AttributeController extends Controller{
	public function index(){//显示博客类型
		$attribute = M('Attribute')->order('id asc')->select();
		$this->assign('attribute',$attribute);
		$this->display();
	}
	public function add(){
		$this->display();
	}
	public function addAttribute(){//添加博客类型
		$attribute = M('Attribute');
		$data = array(
				'name' => $_POST['name'],
				'color' => $_POST['color'],
		);
		if($attribute->add($data)){
			$this->success("数据创建成功",U('Attribute/index'));
		}else{
			$this->error('数据创建失败');
		}
	}
}
?>