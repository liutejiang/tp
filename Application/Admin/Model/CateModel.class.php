<?php
namespace Admin\Model;
use Think\Model;
class CateModel extends Model{
	protected  $_validate = array(
		array('name','','分类已存在',0,'unique',1),
	);
}
?>