<?php
/**
 * 邮箱信息配置
**/
$mod='blank';
include("../api.inc.php");
$title='邮箱配置';
$pay = true;
include './head.php';
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
    <?php
	if($_POST['type']=="mailset"){
		foreach($_POST as $k=> $value){
			if($k=='type')continue;
			$DB->query("insert into auth_configs set k='".daddslashes($k)."',v='".daddslashes($value)."' on duplicate key update v='".daddslashes($value)."'");
		}
		exit("<script>alert('更改成功');history.go(-1);</script>");
		
		}
	
	?>
    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          邮箱配置
        </div>
        <div class="panel-body">
          <form action="" method="post" class="form-horizontal" role="form">
          <input type="hidden" name="type" value="mailset" />
          	<div class="form-group">
              <label for="input002" class="col-sm-2 control-label form-label">邮箱账号</label>
               <div class="col-sm-10">
                 <input type="text" name="mail_name" value="<?=$configs['mail_name']?>" class="form-control">
               </div>
            </div>
            <div class="form-group">
              <label for="input002" class="col-sm-2 control-label form-label">SMTP服务器</label>
              <div class="col-sm-10">
			  <input type="text" name="mail_stmp" value="<?=$configs['mail_stmp']?>" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="input002" class="col-sm-2 control-label form-label">端口</label>
              <div class="col-sm-10">
			  <input type="text" name="mail_port" value="<?=$configs['mail_port']?>" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="input002" class="col-sm-2 control-label form-label">密码</label>
              <div class="col-sm-10">
			  <input type="text" name="mail_pwd" value="<?=$configs['mail_pwd']?>" class="form-control">
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