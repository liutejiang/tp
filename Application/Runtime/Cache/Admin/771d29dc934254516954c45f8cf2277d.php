<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
 <title>发表博客</title>
</head>
<body>
 <div id="header">
 </div>
 <div id="barder_left">
 </div>
 <form method="get">
 <div id="article-title">
  文章标题<br/>
  <div id="category">
   <select id="select-category">
   <option value="0">请选择</option>
   <option value="1">原创</option>
   <option value="2">转载</option>
   </select>
   <input type="text" id="text-title"/>
  </div>
 </div>
  <div id="section">
  <textarea rows="10" cols="100" id="article-content"></textarea>
 </div>
 <div id="post_picture">
 <button id="article-picture" type="submit" name="pictureup">上传图片</button>
 </div>
 <br/>

 <div id="article-type">
 请选择文章类型
 <lable><input name="article-type" type="checkbox" value="food">饮食</lable>
 <lable><input name="article-type" type="checkbox" value="web-qd">Web前端</lable>
 <lable><input name="article-type" type="checkbox" value="web-ht">Web后台</lable>
 <lable><input name="article-type" type="checkbox" value="web-ht">Web安全</lable>
 </div>
 <div>
  <br/>
 <input type="submit" id="article-submit" value="上传博客"/>
 </div>
 </form>
 <script type="text/javascript">
  $(document).ready(function(){
	$('#article-submit').click(function(){
		var article_type= $('#select-category').value();
		var title=$('#text-title').value();
		var content=$('#article-content').value();
		var picture=$('#article-picture').value();
		if(!article_type){
			err("文章类型不能为空!");
			return false;
		}else if(!title){
			err("文章标题不为空!");
			return false;
		}else if(!content){
			err("文章内容不为空!");
			return false;
		}
		$('#article-submit').attr("disable",true);
		$.ajax({
		type:"post";
		url:"/tp/admin.php/Admin/Article/Article/postedit";
		async:true;
		data:{"title":title,"content":content,"picture":picture,"article_type":type},
		success:function(data){
			if(data.error=0){
				succ("文章添加完成",data.msg,"Article/postlist");
			}else{
				err(data.msg);
				$("#article-submit").removeAttr('disabled');
			}
		},
		error:function(data){
			err("网络错误!");
			$("#article-submit").removeAttr('disabled');
			
		}
		})；
	})；  
  })；
 </script>
</body>
</html>