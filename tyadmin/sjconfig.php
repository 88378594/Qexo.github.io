<?php
$mod='blank';
include("../api.inc.php");
$title='升级页面管理';
include './head.php';
$rs=$DB->get_row("SELECT * FROM auth_config");
$dl0=$rs['dl0+'];
$dl1=$rs['dl1+'];
$dl2=$rs['dl2+'];
$dl3=$rs['dl3+'];
$dl4=$rs['dl4+'];
$dl5=$rs['dl5+'];
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
<div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          升级配置
        </div>
<?php

$my=$_POST['my'];
if($my=='config'){
echo '<div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          代理配置
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>';
$dl00=$_POST['dl0'];
$dl01=$_POST['dl1'];
$dl02=$_POST['dl2'];
$dl03=$_POST['dl3'];
$dl04=$_POST['dl4'];
$dl05=$_POST['dl5'];
$sql=$DB->query("update `auth_config` set  `dl1+`='$dl01',`dl2+`='$dl02',`dl3+`='$dl03',`dl4+`='$dl04',`dl5+`='$dl05',`dl0+`='$dl00' where 1");
if($sql){echo '保存成功！';}
else{echo '保存失败！';}
echo '<hr/><a href="./sjconfig.php">>>返回代理页面设置</a></div></div>';
foot();
exit;
}

 ?>
        <div class="panel-body">
          <form action="sjconfig.php" method="post" class="form-horizontal" role="form">
			 <div class="form-group">
            	<input type="hidden" name="my" value="config"/>
             <label class="form-label">代理VIP0价格</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="dl0" value="<?php echo $dl0;?>"/></div>
			 </div>
			 <div class="form-group">
             <label class="form-label">代理VIP1价格</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="dl1" value="<?php echo $dl1;?>"/></div>
			 </div>
			 <div class="form-group">
             <label class="form-label">代理VIP2价格(代理自助升级到VIP2的价格=代理VIP2价格-之前的等级的价格)</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="dl2" value="<?php echo $dl2;?>"/></div>
			 </div>
			 <div class="form-group">
             <label class="form-label">代理VIP3价格(代理自助升级到VIP3的价格=代理VIP3价格-之前的等级的价格)</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="dl3" value="<?php echo $dl3;?>"/></div>
			 </div>
			 <div class="form-group">
             <label class="form-label">代理VIP4价格(代理自助升级到VIP4的价格=代理VIP4价格-之前的等级的价格)</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="dl4" value="<?php echo $dl4;?>"/></div>
			 </div>
			 <div class="form-group">
             <label class="form-label">代理VIP5价格(代理自助升级到VIP5的价格=代理VIP5价格-之前的等级的价格)</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="dl5" value="<?php echo $dl5;?>"/></div>
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
  