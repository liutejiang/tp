<?php 
namespace Home\Model;
use Think\Model\ViewModel;
class BlogViewModel extends ViewModel{
	public $viewFileds = array(
		'Blog'=>array('id','title','content','time'),
		'cate'=>array('id','name'),
		'attribute'=>array('id',)
	);
}
?>