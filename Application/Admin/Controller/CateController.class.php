<?php 
//博客属性
namespace Admin\Controller;
use Think\Controller;
use Org\Util\Categroy;
class CateController extends Controller{
	//添加子模板分类
	public function add(){
		$this->cate_id = I('cate_id',0);
		$this->display();
	}
	//添加类别
	public function addcate(){
		$cate= M('Cate');
		$data['name'] = I('name');
		$data['cate_sort'] = I('sort');
		$data['cate_id'] = I('cate_id');
		if(!$cate->create($data)){
			exit($cate->getError());
		}else{
		$cate->add();
		$this->success("数据创建成功");
		}
	}
	//类别排序
	public function typesort(){
		$categroy = new \Org\Util\Categroy();
		$cate = M('Cate')->order('cate_sort asc')->select();
		$cate = $categroy->unlimitedForLevel($cate);
		//$cate =$categroy->getParentElement($cate,6);
		//$cate = $categroy->unlimitedForLatry($cate);
		//$cate = $categroy->getChildId($cate,2);
		//dump($cate);
		$this->assign('cate',$cate);
		$this->display();
	}
	//修改序号后重新排序
	public function changesort(){
		dump($_POST);
		$cate = M('Cate');
		foreach ($_POST as $cate_id=>$cate_sort){
			$cate->where(array('id' => $cate_id))->setField('cate_sort',$cate_sort);
		}
		$this->redirect(Admin/Cate/typesort);
	}
}
?>