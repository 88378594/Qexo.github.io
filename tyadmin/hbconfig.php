<?php
$mod='blank';
include("../api.inc.php");
$title='红包设置';
include './head.php';
$rs=$DB->get_row("SELECT * FROM auth_config");
$x=$rs['x'];
$s=$rs['s'];
$hb=$rs['hb'];
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
<div class="col-md-12">
      <div class="panel panel-default">
<?php

$my=$_POST['my'];
if($my=='config'){
echo '<div class="col-md-12">
      <div class="panel panel-default">';
$x=daddslashes($_POST['x']);
$s=daddslashes($_POST['s']);
$hb=daddslashes($_POST['hb']);
$sql=$DB->query("update `auth_config` set  `x`='$x',`s`='$s',`hb`='$hb',`hbsy`='$hb' where 1");
if($sql){echo '保存成功！';}
else{echo '保存失败！';}
echo '<hr/><a href="./hbconfig.php">>>返回红包页面设置</a></div></div>';
foot();
exit;
}

 ?>
        <div class="panel-body">
          <form action="./hbconfig.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
            	<input type="hidden" name="my" value="config"/>
              <label class="form-label">红包下限(最小数额)</label><br>
			<div class="col-sm-10"><textarea class="form-control" name="x" rows="1" cols="10" required><?php echo $x;?></textarea></div>
            </div>
            <div class="form-group">
              <label class="form-label">红包上限(最大数额)</label><br>
			<div class="col-sm-10"><textarea class="form-control" name="s" rows="1" cols="10" required><?php echo $s;?></textarea></div>
            </div>
            <div class="form-group">
              <label class="form-label">红包个数</label><br>
			<div class="col-sm-10"><textarea class="form-control" name="hb" rows="1" cols="10" required><?php echo $hb;?></textarea></div>
            </div>
            <input type="submit" value="保存" class="btn btn-primary"/>
          </form>
		<div class="panel-footer">
          <span class="glyphicon glyphicon-info-sign"></span> 管理员在这里可以管理红包系统。
        </div>
      </div>
    </div>
  </div>
 <?php foot();
  