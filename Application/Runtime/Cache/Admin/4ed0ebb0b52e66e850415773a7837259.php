<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="/tp/Public/Css/public.css" />
</head>
<body>
 <table class="table">
 <tr>
  <th>ID</th>
  <th>标题</th>
  <th>属性</th>
  <th>点击次数</th>
  <th>发布时间</th>
  <th>操作</th>
 </tr>
 <?php if(is_array($blog)): foreach($blog as $key=>$v): ?><tr>
  <td><?php echo ($v["id"]); ?></td>
  <td>
  <?php echo ($v["title"]); ?>
  <?php if(is_array($v["attribute"])): foreach($v["attribute"] as $key=>$vo): ?><strong style="color:<?php echo ($vo["color"]); ?>;padding:0 5px">[<?php echo ($vo["name"]); ?>]</strong><?php endforeach; endif; ?>
  </td>
  <td><?php echo ($v["cate"]["name"]); ?></td>
  <td><?php echo ($v["clink"]); ?></td>
  <td><?php echo (date('y-m-d H:i',$v["time"])); ?></td>
  <td>
 <a href="<?php echo U('Admin/Blog/backtoblog',array('aid'=>$v[id]));?>">撤销</a>
  <a href="<?php echo U('Admin/Blog/deleteblog',array('bid'=>$v[id]));?>">删除这篇博客</a>
  </td>
  </tr><?php endforeach; endif; ?>
 </table>
 </form>
</body>