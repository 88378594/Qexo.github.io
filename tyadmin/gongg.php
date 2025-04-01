<?php
$mod='blank';
include("../api.inc.php");
$title='公告管理';
include './head.php';
$rs=$DB->get_row("SELECT * FROM auth_config");
$gongg=$rs['gg'];
$tz=$rs['tz'];
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
<div class="col-md-12">
      <div class="panel panel-default">
<?php

$my=$_POST['my'];
if($my=='config'){
echo '<div class="col-md-12">
      <div class="panel panel-default">';
$tz=daddslashes($_POST['tz']);
$gg=daddslashes($_POST['gongg']);
$sql=$DB->query("update `auth_config` set  `gg`='$gg',`tz`='$tz' where 1");
if($sql){echo '保存成功！';}
else{echo '保存失败！';}
echo '<hr/><a href="./gongg.php">>>返回代理页面设置</a></div></div>';
foot();
exit;
}

 ?>
        <div class="panel-body">
          <form action="./gongg.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
            	<input type="hidden" name="my" value="config"/>
              <label class="form-label">代理公告</label><br>
			<div class="col-sm-10"><textarea class="form-control" name="gongg" rows="5" cols="50" required><?php echo stripslashes($gongg);?></textarea></div>
            </div>
            <div class="form-group">
              <label class="form-label">代理通知</label><br>
			<div class="col-sm-10"><textarea class="form-control" name="tz" rows="3" cols="50" required><?php echo $tz;?></textarea></div>
            </div>
            <input type="submit" value="保存" class="btn btn-primary"/>
          </form>
		<div class="panel-footer">
          <span class="glyphicon glyphicon-info-sign"></span> 管理员在这里可以管理公告。
        </div>
      </div>
    </div>
  </div>
 <?php foot();
  