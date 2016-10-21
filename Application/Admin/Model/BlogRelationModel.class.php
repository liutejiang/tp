<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class BlogRelationModel extends RelationModel{//关联表
	protected $tableName = 'blog';//设置表名
	protected $_link = array(
			'attribute'=>array(
					'mapping_type' => self:: MANY_TO_MANY,//多对多关联
					'foreign_key' => 'bid',
					'relation_foreign_key' => 'aid',
					'relation_table' => 'think_blog_attr',
			),
			'cate'=>array(
					'mapping_type' => self::BELONGS_TO,
					'foreign_key' => 'cid',
					'relation_foreign_key' => 'name',
					'as_filed' => 'name:cate',
			)
			
	);
	
}
?>