<?php
$mod='blank';
include("../api.inc.php");
if(isset($_POST['user']) && isset($_POST['pass'])){
	$user=daddslashes($_POST['user']);
	$pass=daddslashes($_POST['pass']);
	$row = $DB->get_row("SELECT * FROM auth_user WHERE user='$user' limit 1");
	if($user==$auth_user && $pass==$auth_pass) {
		$session=md5($user.$pass.$password_hash);
		$token=authcode("{$user}\t{$session}", 'ENCODE', SYS_KEY);
		setcookie("ol_token", $token, time() + 604800);
		@header('Content-Type: text/html; charset=UTF-8');
		exit("<script language='javascript'>alert('登陆管理中心成功！');window.location.href='./';</script>");
	}elseif ($pass != $row['pass']) {
		@header('Content-Type: text/html; charset=UTF-8');
		exit("<script language='javascript'>alert('用户名或密码不正确！');history.go(-1);</script>");
	}
}elseif(isset($_GET['logout'])){
	setcookie("ol_token", "", time() - 604800);
	@header('Content-Type: text/html; charset=UTF-8');
	exit("<script language='javascript'>alert('您已成功注销本次登陆！');window.location.href='./login.php';</script>");
}elseif($islogin2==1){
	exit("<script language='javascript'>alert('您已登陆！');window.location.href='./';</script>");
}
?>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>管理系统-登录</title>
    <link rel="shortcut icon" href="favicon.ico"> 
<link href="/assets/Login/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
<link href="/assets/Login/css/font-awesome.css?v=4.3.0" rel="stylesheet">
<link href="/assets/Login/css/animate.css" rel="stylesheet">
<link href="/assets/Login/css/style.css?v=2.2.0" rel="stylesheet">
</head>

<body class="gray-bg">
    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>




                <h1 class="logo-name">DG</h1>

            </div>
            <h3>欢迎使用探游等级代挂程序</h3>
		<form action="?"  method="post" class="" >
                <div class="form-group">
    			<input type="text" class="form-control" placeholder="请输入后台账号" name="user" />
                </div>
                <div class="form-group">
    			<input type="password" class="form-control" placeholder="请输入密码" name="pass" />
                </div>
    	<button name="submit" class="btn btn-primary block full-width m-b" class="btn btn-primary form-control">登 录</button>
        </form>
        </div>
    </div>
<script src="/assets/Login/js/bootstrap.min.js?v=3.4.0"></script>
</body>

</html>
