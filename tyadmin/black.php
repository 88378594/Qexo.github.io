<?php
$mod='blank';
include("../api.inc.php");
$title='加黑ＱＱ';
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
	if($qq=='')continue;
	if($_POST['submit']=='添加'){
	$sql=$DB->query("update `auth_qqlevel3` set `black`='{$type}' where `qq`='{$qq}'");
	$isdo='添加到黑名单';
	}
	elseif($_POST['submit']=='取消'){
	$sql=$DB->query("update `auth_qqlevel3` set `black`='0' where `qq`='{$qq}'");
	$isdo='取消黑名单';
	}
	$c++;
}
if($sql){
exit("<script language='javascript'>alert('成功将{$c}个QQ{$isdo}！');history.go(-1);</script>");
}else
exit("<script language='javascript'>alert('添加失败！');history.go(-1);</script>");
} ?>
	<div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <form action="./black.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
              <label for="input2" class="col-sm-2 control-label form-label">QQ</label>
              <div class="col-sm-10">
			  <textarea name="qq" class="form-control" rows="6" placeholder="每行一个QQ号" required><?=@$_POST['qq']?></textarea>
              </div>
            </div>
			<div class="form-group">
			  <label for="input2" class="col-sm-2 control-label form-label">原因</label>
              <div class="col-sm-10">
              <select name="type" class="form-control">
				<option value="1">密码错误</option>
			    <option value="2">ＱＱ冻结</option>
				<option value="3">请关闭设备锁</option>
              </select>
              </div>
            </div>
            <div class="form-group" style="float:right">
              <input type="submit" name="submit" value="添加" class="btn btn-primary"/>&nbsp;<input type="submit" name="submit" value="取消" class="btn btn-info"/>
            </div>
          </form>
        </div>
		<div class="panel-footer">
          <span class="glyphicon glyphicon-info-sign"></span> 开启设备锁或者一直不改密码的QQ，可以添加到黑名单，导出时就不会导出了。用户更新QQ密码后可自动解除黑名单。
        </div>
    </div>
  </div>
<?php foot() ?>