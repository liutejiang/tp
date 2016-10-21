<?php
//博客添加与展示
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\BlogRelationModel;
class BlogController extends Controller{
	public function index(){//展示博客主页
		$blog = D('BlogRelation')->relation(true)->where('del=0')->select();
		$this->assign('blog',$blog);
		//dump($blog);
		$this->display();
		//echo "跨模块调用";
	}
	public function addblog(){//添加博客，传递给模板相应的值
		$categroy = new \Org\Util\Categroy();
		$cate = M('Cate')->order('cate_sort asc')->select();
		$cate = $categroy->unlimitedForLevel($cate);
		$this->assign('cate',$cate);
		$attribute = M('Attribute')->order('id asc')->select();
		$this->assign('Attribute',$attribute);
		$this->display();
	}
	public function showaddblog(){//添加博客，获取数据
		//dump($_POST);
		//D(BlogRelation);
		
		if(!empty($_FILES)){//图片上传类
			$config = array(
					'maxSize'    =>    4194304,
					'rootPath'   =>    './Public/',
					'savePath'   =>    'upload/image/',
					'saveName'   =>    array('uniqid',''),
					'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
					'autoSub'    =>    true,
					'subName'    =>    array('date','Ymd')
			);
			$upload = new \Think\Upload($config);
			$g = $upload->uploadOne($_FILES['picture']);
			//dump($g);
		}
			if(!$g){
				print_r($upload->getError());
			}else{
				$imgnews = $g['savepath'].$g['savename'];//图片地址的生成
				$_POST['gimage'] = $imgnews;
			}
			
		$data = array(
				'title' => $_POST['blog_name'],
				'content' => $_POST['blog_article'],
				'time' => time(),
				'clink' => $_POST['click'],
				'cid' => $_POST['cid'],
				'picture' => $_POST['gimage'],
		);
		if(isset($_POST['aid'])){
			foreach($_POST['aid'] as $v){
				$data['attribute'][] = $v;
			}
		}
		dump($data);
		if(D('BlogRelation')->relation(true)->add($data)){
			$this->success("博文添加成功",U('blog/index'));
		}else{
			$this->error("博文添加失败");
		}
	}
	public function moveblog(){
		$updata = array(//获取文章id，和del值
				'id' => $_GET['blog_id'],
				'del'=> 1,
		);
		//dump($data);
		if(M('blog')->save($updata)){//更新数据
			$this->success("删除成功",U('blog/index'));
		}else{
			$this->error("删除失败");
		}
		//$this->index();
	}
	public function recoveryblog(){//回收站操作
		$blog = D('BlogRelation')->relation(true)->where('del=1')->select();
		$this->assign('blog',$blog);
		//dump($blog);
		$this->display();
	}
	public function backtoblog(){//回收博客到回收站
		$updata = array(
				'id' => $_GET['aid'],
				'del' => 0,
		);
		if(M('blog')->save($updata)){
			$this->success("成功撤销回收",U('blog/index'));
		}else{
			$this->error("撤销回收失败");
		}
	}
	public function deleteblog(){//删除博客
		$bid = $_GET['bid'];
		//echo "$bid";
		$blog = M('Blog')->where("id=%d",array($bid))->delete();
		if($blog){
			$this->success("删除成功",U('blog/recoveryblog'));
		}else{
			$this->error("删除失败");
		}
	}
	public function changeblog(){//修改博客文章
		$cid = $_GET['cblog_id'];
		$blog = D('BlogRelation')->relation(true)->where("id=%d",array($cid))->select();
		//dump($blog);
		$this->assign('cblog',$blog);
		$categroy = new \Org\Util\Categroy();
		$cate = M('Cate')->order('cate_sort asc')->select();
		$cate = $categroy->unlimitedForLevel($cate);
		$this->assign('cate',$cate);
		$attribute = M('Attribute')->order('id asc')->select();
		$this->assign('Attribute',$attribute);
		$this->display();
	}
	public function showchangeblog(){//传递修改的博客文章到后台
		$data1 = array(
			'id' => $_POST['blog_id'],	
		);
		if(!empty($_FILES)){//图片上传类
			$config = array(
					'maxSize'    =>    3145728,
					'rootPath'   =>    './Public/',
					'savePath'   =>    'upload/image/',
					'saveName'   =>    array('uniqid',''),
					'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
					'autoSub'    =>    true,
					'subName'    =>    array('date','Ymd')
			);
			$upload = new \Think\Upload($config);
			$g = $upload->uploadOne($_FILES['picture']);
			//dump($g);
		}
		else{
			echo 1;
		}
		if(!$g){
			print_r($upload->getError());
		}else{
			$imgnews = $g['savepath'].$g['savename'];//图片地址的生成
			$_POST['gimage'] = $imgnews;
		}
		$data = array(
				'title' => $_POST['blog_name'],
				'content' => $_POST['blog_article'],
				'time' => time(),
				'cid' => $_POST['cid'],
				'clink' => $_POST['clink'],
				'picture' => $_POST['gimage']
		);
		if(isset($_POST['aid'])){
			foreach($_POST['aid'] as $v){
				$data['attribute'][] = $v;
			}
		}
		//dump($data);
		if(D('Blog')->where(array($data1))->save($data)){
			$this->success("修改成功",U('blog/index'));
		}else{
			$this->error("修改失败");
		}
	}
}
?>