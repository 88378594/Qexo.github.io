<?php
$mod='blank';
include("../api.inc.php");
$title='开通分站管理';
include './head.php';
$rs=$DB->get_row("SELECT * FROM auth_config");
$fzjg1=$rs['fzjg'];
$gongg=$rs['fzgg'];
$vip=$rs['svip'];
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
$fzgg=daddslashes($_POST['fzgg']);
$fzjg=$_POST['fzjg'];
$svip=$_POST['svip'];
$sql=$DB->query("update `auth_config` set  `fzjg`='$fzjg',`fzgg`='$fzgg',`svip`='$svip' where 1");
if($sql){echo '保存成功！';}
else{echo '保存失败！';}
echo '<hr/><a href="./fzconfig.php">>>返回邀请注册设置</a></div></div>';
foot();
exit;
}

 ?>
        <div class="panel-body">
          <form action="./fzconfig.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
            	<input type="hidden" name="my" value="config"/>
              <label class="form-label">开通分站页 公告/说明</label><br>
			<div class="col-sm-10"><textarea class="form-control" name="fzgg" rows="5" cols="50" required><?=$gongg?></textarea></div>
            </div>
			 <div class="form-group">
             <label class="form-label">开通分站的价格(代理的总价格=你设置的价格*他的代理等级价格)</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="fzjg" value="<?=$fzjg1?>"/></div>
			 </div> 	
			 <div class="form-group">
             <label class="form-label">开通代挂后的站长等级（等级超过设置的不会变，低的会升高）</label><br>
             	<div class="col-sm-10"><input type="text" class="form-control" name="svip" value="<?=$vip?>"/></div>
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
  