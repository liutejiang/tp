<?php 
namespace Admin\Model;
use Think\Model;
class AttributeModel extends Model{
	protected $_validate = array(
			array('name','require','属性名不能为空!'),
			array('name','','属性名已存在',0,'unique',1)
	);
	public function getcolor(){
		if($this->where('color=红色')->select()){
			$fontcolor=red;
		}
		return $fontcolor;
	}
}
?>