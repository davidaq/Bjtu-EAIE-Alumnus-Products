<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> 交大校友产品展示 </title>
	<script type="text/javascript" src="jq.js"></script>
	<link rel = "stylesheet" type = "text/css" href = "style.css"></link>
</head>
<script type="text/javascript">
	$(function(){
		$(".header .menu .menuList").hover(function(){
			$(this).css('opacity', '0.7');
		}, function(){
			$(this).css('opacity', '1.0');
		});
	});
</script>
<body>
	<div id = "outDiv">
	<div class = "header">
		<!--<h4 class = "title">
			交大校友产品展示
		</h4>-->
		<div class = "logoArea">
			<img src = "images/logo.png"/>
		</div>
		<div class = "menu">
			<ul>
				<li class = "menuList">
					<a href = "index.php">首页</a>
				</li>
				<li class = "menuList">
					<a href = "index.php?season=spring">春天</a>
				</li>
				<li class = "menuList">
					<a href = "index.php?season=summer">夏天</a>
				</li>
				<li class = "menuList">
					<a href = "index.php?season=autumn">秋天</a>
				</li>
				<li class = "menuList">
					<a href = "index.php?season=winter">冬天</a>
				</li>
			</ul>
		</div>
	</div>
		<?php
			if (isset($_GET['season']))
				include('./page.php');
			else
				include('./main-page.php');
		?>
	</div>
</body>