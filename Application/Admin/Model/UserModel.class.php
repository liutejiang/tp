<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
	protected  $_validate = array(
			array('username','','帐号名称已经存在！',0,'unique',1),
			array('username','require','用户名必须'),
			array('password','require','密码必须'),
	);
	protected $_auto = array(
			array('password','MD5',3,'function'),
	);
	public function checkuser($username,$password){
		$user = D('user');
		$map['username'] = $username;
		$map['password'] = $password;
		$info = $user->where($map)->select();
		//$user->add();
		echo $info['$username'];
		return $info;
	}
}
?>