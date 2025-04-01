<?php
/**
 * 代理管理
**/
$mod='blank';
include("../api.inc.php");
$title='代理页面管理';
include './head.php';
$rs=$DB->get_row("SELECT * FROM auth_config");
$regok=$rs['regok'];
$activeok=$rs['activeok'];
$dl0=$rs['dl0'];
$dl1=$rs['dl1'];
$dl2=$rs['dl2'];
$dl3=$rs['dl3'];
$dl4=$rs['dl4'];
$dl5=$rs['dl5'];
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
          代理配置
        </div>';
$ak=$_POST['ak'];
$rk=$_POST['rk'];
$dl00=$_POST['dl0'];
$dl01=$_POST['dl1'];
$dl02=$_POST['dl2'];
$dl03=$_POST['dl3'];
$dl04=$_POST['dl4'];
$dl05=$_POST['dl5'];
$sql=$DB->query("update `auth_config` set  `activeok`='$ak',`regok`='$rk',`dl1`='$dl01',`dl2`='$dl02',`dl3`='$dl03',`dl4`='$dl04',`dl5`='$dl05',`dl0`='$dl00' where 1");
$DB->query("insert into auth_configs set k='daili_add_money',v='".daddslashes($_POST['daili_add_money'])."' on duplicate key update v='".daddslashes($_POST['daili_add_money'])."'");
if($sql){echo '保存成功！';}
else{echo '保存失败！';}
echo '<hr/><a href="./dlconfig.php">>>返回代理页面设置</a></div></div>';
foot();
exit;
}

 ?>
        <div class="panel-body">
          <form action="./dlconfig.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
            	<input type="hidden" name="my" value="config"/>
              <label class="form-label">开放注册</label><br>
                <div class="col-sm-10"><select name="rk" class="form-control">
                <?php 
					if($regok==1){
						echo '<option value="0">开放注册</option><option value="1" selected="selected">关闭开放注册</option>';
					}else{echo '<option value="0" selected="selected">开放注册</option><option value="1" >关闭开放注册</option>';}
                ?>
              </select></div>
            </div>
			<div class="form-group">
            <label class="form-label">注册默认开通</label><br>
                 <div class="col-sm-10"><select name="ak" class="form-control">
                  <?php 
					if($activeok==1){
						echo ' <option value="0">默认开通账号</option><option value="1" selected="selected">默认关闭账号</option>';
					}else{ echo ' <option value="0" selected="selected" >默认开通账号</option><option value="1" >默认关闭账号</option>';}
                  ?>
              </select></div>
			 </div>
			 <div class="form-group">
             <label class="form-label">代理VIP0价格</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="dl0" value="<?php echo $dl0;?>"/></div>
			 </div>
			 <div class="form-group">
             <label class="form-label">代理VIP1价格</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="dl1" value="<?php echo $dl1;?>"/></div>
			 </div>
			 <div class="form-group">
             <label class="form-label">代理VIP2价格</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="dl2" value="<?php echo $dl2;?>"/></div>
			 </div>
			 <div class="form-group">
             <label class="form-label">代理VIP3价格</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="dl3" value="<?php echo $dl3;?>"/></div>
			 </div>
			 <div class="form-group">
             <label class="form-label">代理VIP4价格</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="dl4" value="<?php echo $dl4;?>"/></div>
			 </div>
			 <div class="form-group">
             <label class="form-label">代理VIP5价格</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="dl5" value="<?php echo $dl5;?>"/></div>
			 </div>     	
            <input type="submit" value="保存" class="btn btn-primary"/>
          </form>
		<div class="panel-footer">
          <span class="glyphicon glyphicon-info-sign"></span> 管理员在这里可以管理代理页面的公告和代理拿货价格。
        </div>
      </div>
    </div>
  </div>
 <?php foot();
  