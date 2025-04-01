<?php
/**
 * 代理管理
**/
$mod='blank';
include("../api.inc.php");
$title='邀请注册管理';
include './head.php';
$rs=$DB->get_row("SELECT * FROM auth_config");
$zj=$rs['zj'];
$magic=$rs['magic'];
$tjg1=$rs['tjg1'];
$tjg2=$rs['tjg2'];
$gongg=$rs['ogg'];
$sjtc=$rs['sjtc'];
$yqgg=$rs['yqgg'];
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
          邀请配置
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>';
$zj=$rs['zj'];
$magic=$_POST['magic'];
$tjg1=$_POST['tjg1'];
$tjg2=$_POST['tjg2'];
$ogg=daddslashes($_POST['ogg']);
$sjtc=$_POST['sjtc'];
$yqgg=daddslashes($_POST['yqgg']);
$sql=$DB->query("update `auth_config` set  `ogg`='$ogg',`tjg1`='$tjg1',`tjg2`='$tjg2',`zj`='$zj',`magic`='$magic',`sjtc`='$sjtc',`yqgg`='$yqgg' where 1");
if($sql){echo '保存成功！';}
else{echo '保存失败！';}
echo '<hr/><a href="./yqconfig.php">>>返回邀请注册设置</a></div></div>';
foot();
exit;
}

 ?>
        <div class="panel-body">
          <form action="./yqconfig.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
            	<input type="hidden" name="my" value="config"/>
              <label class="form-label">邀请注册推广页公告</label><br>
			<div class="col-sm-10"><textarea class="form-control" name="ogg" rows="3" cols="50" required><?php echo stripslashes($gongg);?></textarea></div>
            </div>
            <div class="form-group">
            	<input type="hidden" name="my" value="config"/>
              <label class="form-label">邀请注册推广页说明</label><br>
			<div class="col-sm-10"><textarea class="form-control" name="yqgg" rows="3" cols="50" required><?php echo stripslashes($yqgg);?></textarea></div>
            </div>
            <div class="form-group">
              <label class="form-label">开放邀请注册</label><br>
                <div class="col-sm-10"><select name="magic" class="form-control">
                <?php 
					if($regok==1){
						echo '<option value="0">开放邀请注册</option><option value="1" selected="selected">关闭邀请注册</option>';
					}else{echo '<option value="0" selected="selected">开放邀请注册注册</option><option value="1" >关闭邀请注册</option>';}
                ?>
              </select></div>
            </div>
            <div class="form-group">
              <label class="form-label">邀请注册推广页绝对专属链接+广告内容(自带网址,不必再加!)</label><br>
			<div class="col-sm-10"><textarea class="form-control" name="tjg1" rows="3" cols="50" required><?php echo stripslashes($tjg1);?></textarea></div>
            </div>
            <div class="form-group">
              <label class="form-label">邀请注册推广页非绝对专属链接+广告内容(自带网址,不必再加!)</label><br>
			<div class="col-sm-10"><textarea class="form-control" name="tjg2" rows="3" cols="50" required><?php echo stripslashes($tjg2);?></textarea></div>
            </div>
			 <div class="form-group">
             <label class="form-label">邀请成功注册一个下级赠送余额</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="zj" value="<?php echo $zj;?>"/></div>
			 </div> 	
			 <div class="form-group">
             <label class="form-label">下级充值邀请人获得的余额倍数(下级充值的钱 X 设置的)</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="sjtc" value="<?php echo $sjtc;?>"/></div>
			 </div> 	
            <input type="submit" value="保存" class="btn btn-primary"/>
          </form>
      </div>
    </div>
  </div>
 <?php foot(); ?>