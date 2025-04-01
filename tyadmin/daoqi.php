<?php
$mod='blank';
include("../api.inc.php");
$title='发送到期提醒邮件';
include './head.php';
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
if(isset($_POST['qq'])){
$type=daddslashes($_POST['type']);
$qq = str_replace(array("\r\n", "\r", "\n"), "[br]", $_POST['qq']);
$match=explode("[br]",$qq);

$c=0;
foreach($match as $val)
{
	$qq=explode('----',$val);
	$qq=trim($qq[0]);
	$qq1=explode('----',$val.'@qq.com');
	$qq1=trim($qq1[0]);

	if($qq1=='')continue;
	if($_POST['submit']=='添加'){
	$sql= send_mail($qq1,"到期提醒",'<div id="mailContentContainer" style="padding: 0px;height: auto;min-height: auto;font-family: Hiragino Sans GB,Microsoft YaHei,Helvetica Neue;"><div style="background:#ececec;padding:35px;"><table cellpadding="0" align="center" width="600" style="background:#fff;width:600px;margin:0 auto;text-align:left;position:relative;border-radius:5px;font-size:14px;line-height:1.5;box-shadow:0 0 5px #999999;border-collapse:collapse;"><tbody><tr><th valign="middle" style="height:25px;color:#fff; font-size:14px;line-height:25px; font-weight:bold;text-align:left;padding:15px 35px; border-bottom:1px solid #467ec3;background:#518bcb;border-radius:5px 5px 0 0;"><h3>创梦代挂</h3></th></tr><tr><td><div style="padding:35px 35px 40px;"><h2 style="font-weight:normal; font-size:14px;margin:5px 0;"><div><strong>尊敬的用户：</strong></div><p style="color:#313131;line-height:28px;font-size:14px;margin:20px 0 0 0;">请及时续费您在创梦代挂的QQ！</p><br><div style="padding: 3px;background: #F44336;text-align: center;font-size: 16px;"><font style="color: #fff;">账户信息</font></div><div style="height: 100px;font-size:12px;padding:20px 100px;border-left:1px solid #E9E9E9;border-right:1px solid #E9E9E9;"> <img src="http://q.qlogo.cn/headimg_dl?dst_uin='.$qq.'&amp;spec=100" style="float: left;"><div style="float: right;text-align: center;"><p style="font-size: 15px;font-weight: bold;margin: 10px 0;"><span style="border-bottom-width: 1px; border-bottom-style: dashed; border-bottom-color: rgb(204, 204, 204); position: relative; z-index: 1;" t="7" onclick="return false;" data="'.$qq.'" isout="1">'.$qq.'</span></p><p style="background: #F44336;color: #fff;padding: 2px 5px;border-radius: 5px;">账户状态：</p><p style="background: #E91E63;color: #fff;padding: 2px 4px;border-radius: 5px;"><span style="border-bottom-width: 1px; border-bottom-style: dashed; border-bottom-color: rgb(204, 204, 204); position: relative;">您的代挂即将到期。请及时续费！</span></p></div></div><div><a href="http://api.6cmz.com/" target="_blank"><input type="submit" value="立即续费" style="width: 100%; color: #fff; padding: 6px 0px; border: 1px solid transparent; background: #3CBAAE;"></a></div><p style="color:#999; margin:26px 0 0 0; font-size:12px;">创梦代挂：<a href="http://dg.6cmz.com/" target="_blank" style="color:#999;">dg.6cmz.com</a><span style="background:#ddd;height:1px;width:100%;overflow:hidden;display:block;margin:8px 0;"></span>Powered by &nbsp;创梦代挂&nbsp;<br></p></h2></div></td></tr></tbody></table></div></div>',"创梦代挂");
	}
	$c++;
}
if($sql==true){
				$msg= "邮件已发送至{$qq1}请注意查收";
				}
		  else{
				$msg= "邮件发送失败,原因:{$sql}";
				}
echo "<script>alert('".$msg."');history.go(-1);</script>";
}
 ?>
	<div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <form action="./daoqi.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
              <label for="input2" class="col-sm-2 control-label form-label">QQ</label>
              <div class="col-sm-10">
			  <textarea name="qq" class="form-control" rows="6" placeholder="每行一个QQ号" required><?=@$_POST['qq']?></textarea>
              </div>
            </div>
            <div class="form-group" style="float:right">
              <input type="submit" name="submit" value="添加" class="btn btn-primary"/>&nbsp;<input type="submit" name="submit" value="取消" class="btn btn-info"/>
            </div>
          </form>
        </div>
    </div>
  </div>
<?php foot() ?>