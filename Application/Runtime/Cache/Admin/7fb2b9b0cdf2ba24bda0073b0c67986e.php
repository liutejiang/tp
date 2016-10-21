<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="/tp/Public/Css/public.css" />
</head>
<body>
 <table class="table">
  <tr>
   <th>ID</th>
   <th>名称</th>
   <th>排序</th>
   <th>级别</th>
   <th>操作</th>
  </tr>
  <?php if(is_array($cate)): foreach($cate as $key=>$vo): ?><tr>
    <td><?php echo ($vo["id"]); ?></td>
    <td><?php echo ($vo["name"]); ?></td>
    <td><?php echo ($vo["cate_id"]); ?></td>
    <td><?php echo ($vo["cate_sort"]); ?></td>
    <td>
     <a href="#">添加子分类</a>
     <a href="#">修改</a>
     <a href="#">删除</a>
    </td>
   </tr><?php endforeach; endif; ?>
 </table>
</body>