<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>우재</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../../include/css/base.css">
    <link rel="stylesheet" href="../../include/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="wrap">
<div class="top_menu clear">
    <ul>
        <li>Sitemap</li>
        <li>Join</li>
        <li>Login</li>
    </ul>
</div>
<div class="top clear">
    <div class="logo">LOGO</div>
    <div class="bars">
        <span class="fa fa-bars"></span>
    </div>
</div>
<ul class="navs clear">
	<li><a href="../../board/bbs/board.php?bo_table=qa&S=0">HOME</a></li>
	<li><a href="../../board/bbs/board.php?bo_table=gallery&S=1">PORTFOLIO</a></li>
	<li><a href="../../sub/skill.php?S=2">SKILL</a></li>
	<li><a href="../../sub/about.php?S=3">ABOUT ME</a></li>
</ul>

<script>
<?
$location = 0;
if(isset($_GET['S'])) $location = $_GET['S'];
?>
$(".navs li").css({"background-color":"#f8f8f8","border-bottom":"1px solid #999"});
$(".navs li").eq(<? echo $location?>).css({"background-color":"#fff","border-bottom":"1px solid #fff"});
</script>
<div class="mbody">