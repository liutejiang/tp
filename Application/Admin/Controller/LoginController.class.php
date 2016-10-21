<?php 
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
	public function index(){
		echo "这是后台登录控制器";
		$this->display();
	}
	public function checkuser($username,$password){
		$info = D('User')->checkuser(I('post.username'),I('post.password'));
		if(!$info){
			echo '用户名或者密码错误';//exit($user->getError());
		}else{
		echo '成功';
		}
}
}
?>