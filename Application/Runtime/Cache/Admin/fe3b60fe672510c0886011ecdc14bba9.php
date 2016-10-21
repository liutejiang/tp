<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="/tp/Public/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/tp/Public/Js/index.js"></script>
<link rel="stylesheet" href="/tp/Public/Css/public.css" />
<link rel="stylesheet" href="/tp/Public/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
	<div id="top">
		<div class="exit">
			<a href="http://www.baidu.com" target="_blank">去百度看看</a>
			<a href="http://www.freebuf.com" target="_blank">freebuf</a>
		</div>
	</div>
	<div id="left">
		<dl>
			<dt>博文管理</dt>
			<dd><a href="/tp/admin.php/Admin/Blog/index">博文列表</a></dd>
			<dd><a href="/tp/admin.php/Admin/Blog/addblog">博文添加</a></dd>
			<dd><a href="/tp/admin.php/Admin/Blog/recoveryblog">回收站</a></dd>
		</dl>
		<dl>
			<dt>属性管理</dt>
			<dd><a href="/tp/admin.php/Admin/Attribute/index">属性列表</a></dd>
			<dd><a href="/tp/admin.php/Admin/Attribute/add">属性添加</a></dd>
		</dl>
		<dl>
			<dt>分类管理</dt>
			<dd><a href="/tp/admin.php/Admin/Cate/typesort">分类列表</a></dd>
			<dd><a href="/tp/admin.php/Admin/Cate/add">分类添加</a></dd>
		</dl>
	</div>
	<div id="right">
		<iframe name="iframe" src="/tp/admin.php/Admin/Blog/index"></iframe>
	</div>
</body>
</html>