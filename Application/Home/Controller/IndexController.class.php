<?php
namespace Home\Controller;
use Think\Controller;
use Org\Util;
class IndexController extends Controller {
	public function index(){
	   $categroy = new \Org\Util\Categroy();
	   $cate = M('cate')->order('cate_id asc')->select();
	   $cate1 = $categroy->unlimitedForLatry($cate);
	   $this->assign('cate_data',$cate1);                //展示分类信息
	   //分页
	   $count = D('blog')->where('del=0')->count();      //获取符合条件的博客
	   //分页设置
	   $p = new \Think\Page($count,2);                   //分页数
	   $p->setConfig('header', '条数据');                  //分页样式可自定义
	   $p->setConfig('prev', "-");
	   $p->setConfig('next', '+');
	   $p->setConfig('first', '<<');
	   $p->setConfig('last', '>>');
	   
	   $list = D('BlogRelation')->relation(true)->where('del=0')->order('id asc')->limit($p->firstRow.','.$p->listRows)->select();//按照id排序输出$blog
	   /*
	   dump($blog);
	   $content = D('BlogRelation')->field('content')->select();//输出标题
	   $this->assign('blog_content',$content);
	   */
	   $page = $p->show();                              //展示分页
	   $this->assign('page',$page);
	   $this->assign('blog_article',$list);
	   $this->display();
   }
    public function showCateblog(){
    	$categroy = new \Org\Util\Categroy();
    	$cateid = $_GET['cate_id'];
    	$cate = M('cate')->order('cate_id asc')->select();
    	$getcateid = $categroy->getChildId($cate, $cateid);       //获取子类id
    	$cid = array_merge((array)$getcateid,(array)$cateid);     //合并id
    	//dump($cid);
    	//循环获取相关的博文
    	$data = array(
    			'cid' => $cid,
    			'del' => 0,
    	);
    	
    	//dump($data);
    	
        $cateblog = D('BlogRelation')->relation(true)->where($data)->select();
        
        //$this->assign('cate_data',$catetype);
        
        $this->assign('cate_blog',$cateblog);
        $this->display();
    }
}