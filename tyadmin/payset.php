<?php
$mod='blank';
include("../api.inc.php");
$title='信息配置';
$pay = true;
include './head.php';
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
    <?php
	if($_POST['type']=="payset"){
		foreach($_POST as $k=> $value){
			if($k=='type')continue;
			$DB->query("insert into auth_configs set k='".daddslashes($k)."',v='".daddslashes($value)."' on duplicate key update v='".daddslashes($value)."'");
		}
		exit("<script>alert('更改成功');window.location.href='/';</script>");
		
		}
	
	?>
    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          支付宝配置
        </div>
        <div class="panel-body">
          <form action="" method="post" class="form-horizontal" role="form">
          <input type="hidden" name="type" value="payset" />
          	<div class="form-group">
              <label for="input002" class="col-sm-2 control-label form-label">支付宝token[必填]</label>
               <div class="col-sm-10">
                 <input type="text" name="pay_token" value="<?=$configs['pay_token']?>" class="form-control">
               </div>
            </div>
            <div class="form-group">
              <label for="input002" class="col-sm-2 control-label form-label">收款人账号[支付宝账号]</label>
              <div class="col-sm-10">
			  <input type="text" name="pay_user" value="<?=$configs['pay_user']?>" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="input002" class="col-sm-2 control-label form-label">收款人姓名[支付宝姓名]</label>
              <div class="col-sm-10">
			  <input type="text" name="pay_name" value="<?=$configs['pay_name']?>" class="form-control">
              </div>
            </div>
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" name="submit" value="修改" class="btn btn-primary"/>
            </div>
          </form>
		  <a href="https://openauth.alipay.com/oauth2/authorize.htm?client_id=2015081700218910" target="_blank">点此获取支付宝token</a>
        </div>
      </div>
</div>
<?php foot()?>