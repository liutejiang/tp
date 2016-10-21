<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="/tp/Public/Css/public.css" />
</head>
<body>
 <form action="/tp/admin.php/Admin/Attribute/addAttribute" method="post">
 <table>
 <tr>
 <th colspan="2">添加属性</th>
 </tr>
 <tr>
  <td align="right">添加属性名称</td>
   <td>
   <input type="text" name="name"></input>
   </td>
  </tr>
  <tr>
  <td align="right">添加属性颜色</td>
   <td>
   <input type="text" name="color"></input>
   </td>
  </tr>
  <tr>
   <td colspan="2" align="center">
   <input type="submit" value="提交"></input>
   </td>
  </tr>
 </table>
 </form>
</body>