<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">\
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="/tp/Public/Css/public.css" />
<script type="text/javascript">
 window.UEDITOR_HOME_URL = '/tp/Public/Data/ueditor/';
 window.onload = function(){
	 window.UEDITOR_CONFIG.initialFrameHeight = 400; 
	 window.UEDITOR_CONFIG.initialFrameWidth = 700;
	 window.UEDITOR_CONFIG.imageUrl = "/tp/Admin/blog/upload";
	 UE.getEditor('blog_article');
 }
</script>
<script type="text/javascript" src="/tp/Public/Data/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/tp/Public/Data/ueditor/ueditor.all.min.js"></script>
</head>
<body>
 <form action="/tp/admin.php/Admin/Blog/showchangeblog" enctype="multipart/form-data" method="post">
 <?php if(is_array($cblog)): foreach($cblog as $key=>$v1): ?><table>
 <tr>
 <th colspan="2">修改博客</th>
 <input type="hidden" value="<?php echo ($v1["id"]); ?>" name="blog_id"></input>
 </tr>
 <tr>
 <tr><input type="file" name="picture" value="添加图片">添加图片</input></tr>
  <td align="left">添加博客标题</td>
  </tr>
  <tr>
   <td>
   <input type="text" name="blog_name" value="<?php echo ($v1["title"]); ?>"></input>
   </td>
  </tr>
  <tr>
  <td align="left">博客类型</td>
  </tr>
  <tr>
   <td>
   <select name="cid">
   <?php if(is_array($$v1["attribute"])): foreach($$v1["attribute"] as $key=>$v2): ?><option value=""><?php echo ($v2["cate"]); ?></option><?php endforeach; endif; ?>
   <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
   </select>
   </td>
  </tr>
  <tr>
  <td align="left">博客属性</td>
  </tr>
  <tr>
  <td>
  <?php if(is_array($Attribute)): foreach($Attribute as $key=>$v): ?><input type="checkbox" name='aid[]' value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></input><?php endforeach; endif; endforeach; endif; ?>
  </tr>
  </td>
  <tr>
  <td>点击量</td>
  </tr>
  <tr>
  <td><input type="text" name="click" value="10"></td>
  </tr>
  <tr>
  <td align="left">博客正文<textarea name="blog_article" id="blog_article"><?php echo ($v1["content"]); ?></textarea></td>
  </tr>
  <tr>
   <td colspan="2" align="center">
   <input type="submit" value="修改提交"></input>
   </td>
  </tr>
 </table>
 </foreach>
 </form>
</body>