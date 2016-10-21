<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>刘鑫的博客首页</title>
 	<link rel="stylesheet" type="text/css" href="/tp/Public/Css/Home/Index.css" />
 </head>
 <body>
 	<div class="main-header">
 		<div class="navbar">
 			<div class="log">
 			  <div class="log_img"><a href="#"><img src=""></a></div>
 			</div>
 			<div class="navigation">
 				<ul class="nav_list">
 					<li class="nav_list_item"><a href="/tp/index.php/index/index" style="color: white">刘鑫的博客</a> </li>
 					<?php if(is_array($cate_data)): foreach($cate_data as $key=>$v): ?><li class="nav_list_item"><a href="<?php echo U('Home/Index/showBlog',array('cate_id'=>$v[id]));?>"><?php echo ($v["name"]); ?></a> </li><?php endforeach; endif; ?>
 				</ul>
 			</div>
 		</div>
 	</div>
 	<div class="body_container">
 	<div class="body_left">
 	 <div class="show_cate">
 	  
 	 </div>
 	</div>
 	<div class="body_center">
 	<?php if(is_array($cate_blog)): foreach($cate_blog as $key=>$v): ?><div class="center_new" id="center_new1">
			<div class="center_img" id="center_img1">
				<a href="/tp/Public/<?php echo ($v["picture"]); ?>"><image src="/tp/Public/<?php echo ($v["picture"]); ?>"></a>
			</div>
			<div class="center_article" id="center_article1">
				<div class="center_a" >
				<div class="center_title" id="center_title1">
					<span><?php echo ($v["title"]); ?></span>
				</div>
				<br/>
			 <div class="center_js" id="center_js1">	
				<div class="center_author" id="center_author1">
					<span><?php echo ($v[""]); ?></span>
				</div>
				<div class="center_time" id="center_time1">
					<span><?php echo (date('y-m-d H:i',$v["time"])); ?></span>
				</div>
			</div>
			
				<div class="center_content" id="center_content1" >
				
					<span><?php echo ($v["content"]); ?></span>
				
				</div>
				
			</div>
				<br/>
				<?php if(is_array($v["attribute"])): foreach($v["attribute"] as $key=>$v1): ?><div class="center_footer" id="center_footer">
				<span> <font color="<?php echo ($v1["color"]); ?>"><?php echo ($v1["name"]); ?></font></span>
			</div><?php endforeach; endif; ?>
			</div>
		</div><?php endforeach; endif; ?>
	</div>
	<div class="body_right">
		 <table>
		  <td>1</td>
		 </table>
		</div>
		</div>
		</body>