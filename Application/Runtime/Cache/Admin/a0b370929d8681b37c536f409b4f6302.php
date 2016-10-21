<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="/tp/Public/Css/public.css" />
</head>
<body>
 <table class="table">
  <tr>
   <th>ID</th>
   <th>属性名称</th>
   <th>属性颜色</th>
  </tr>
  <?php if(is_array($fontcolor)): foreach($fontcolor as $key=>$v): ?><td><font size=3 color="<?php echo ($v["fontcolor"]); ?>">红色的</font></td><?php endforeach; endif; ?>
  <?php if(is_array($attribute)): foreach($attribute as $key=>$vo): ?><tr>
    <td><?php echo ($vo["id"]); ?></td>
    <td><?php echo ($vo["name"]); ?></td>
    <td><font size="3" color="<?php echo ($vo["color"]); ?>"><?php echo ($vo["color"]); ?></font></td>
   </tr><?php endforeach; endif; ?>
 </table>
 </form>
</body>