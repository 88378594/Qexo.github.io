<?php
$mod='blank';
include("../api.inc.php");
$title='开通分站管理';
include './head.php';
$rs=$DB->get_row("SELECT * FROM auth_config");
$domain=$rs['domain'];
$domain1=$rs['domain1'];
$domain2=$rs['domain2'];
$domain3=$rs['domain3'];
$domain4=$rs['domain4'];
$domain5=$rs['domain5'];
$domain6=$rs['domain6'];
$domain7=$rs['domain7'];
$domain8=$rs['domain8'];
$domain9=$rs['domain9'];
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
<div class="col-md-12">
      <div class="panel panel-default">
<?php

$my=$_POST['my'];
if($my=='config'){
echo '<div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          开通分站设置
        </div>';
$domain0=$_POST['domain'];
$domain11=$_POST['domain1'];
$domain21=$_POST['domain2'];
$domain31=$_POST['domain3'];
$domain41=$_POST['domain4'];
$domain51=$_POST['domain5'];
$domain61=$_POST['domain6'];
$domain71=$_POST['domain7'];
$domain81=$_POST['domain8'];
$domain91=$_POST['domain9'];
$sql=$DB->query("update `auth_config` set  `domain1`='$domain11',`domain2`='$domain21',`domain3`='$domain31',`domain`='$domain0',`domain4`='$domain41',`domain5`='$domain51',`domain6`='$domain61',`domain7`='$domain71',`domain8`='$domain81',`domain9`='$domain91' where 1");
if($sql){echo '保存成功！';}
else{echo '保存失败！';}
echo '<hr/><a href="./fzurl.php">>>返回分站域名设置</a></div></div>';
foot();
exit;
}

 ?>
        <div class="panel-body">
          <form action="./fzurl.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
            	<input type="hidden" name="my" value="config"/>
             <label class="form-label">已设置泛解析域名,例如:6cmz.com</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="domain" value="<?=$domain?>"/></div>
			 </div> 	
            <div class="form-group">
             <label class="form-label">已设置泛解析域名1,例如:6cmz.com</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="domain1" value="<?=$domain1?>"/></div>
			 </div> 	
            <div class="form-group">
             <label class="form-label">已设置泛解析域名2,例如:6cmz.com</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="domain2" value="<?=$domain2?>"/></div>
			 </div> 	
            <div class="form-group">
             <label class="form-label">已设置泛解析域名3,例如:6cmz.com</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="domain3" value="<?=$domain3?>"/></div>
			 </div> 	
            <div class="form-group">
             <label class="form-label">已设置泛解析域名4,例如:6cmz.com</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="domain4" value="<?=$domain4?>"/></div>
			 </div> 	
            <div class="form-group">
             <label class="form-label">已设置泛解析域名5,例如:6cmz.com</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="domain5" value="<?=$domain5?>"/></div>
			 </div> 	
            <div class="form-group">
             <label class="form-label">已设置泛解析域名6,例如:6cmz.com</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="domain6" value="<?=$domain6?>"/></div>
			 </div> 	
            <div class="form-group">
             <label class="form-label">已设置泛解析域名7,例如:6cmz.com</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="domain7" value="<?=$domain7?>"/></div>
			 </div> 	
            <div class="form-group">
             <label class="form-label">已设置泛解析域名8,例如:6cmz.com</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="domain8" value="<?=$domain8?>"/></div>
			 </div> 	
            <div class="form-group">
             <label class="form-label">已设置泛解析域名9,例如:6cmz.com</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="domain9" value="<?=$domain9?>"/></div>
			 </div> 	
            <input type="submit" value="保存" class="btn btn-primary"/>
          </form>
           <div class="table-responsive">
        <table class="table table-striped">
</table>
        </div>
      </div>
    </div>
  </div>
 <?php foot();
  