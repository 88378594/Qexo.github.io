<?php
/**
 * 添加QQ
**/
$mod='blank';
include("../api.inc.php");
$title='添加QQ';
include './head.php';
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
if(isset($_POST['pwd'])){
echo '<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title">添加QQ结果</h3></div>
<div class="panel-body">';
$qq = daddslashes($_POST['qq']);
$pwd = daddslashes($_POST['pwd']);
$pcqq = daddslashes($_POST['pcqq']);
$mqq = daddslashes($_POST['mqq']);
$xunzhang = daddslashes($_POST['xunzhang']);
$qqmusic = daddslashes($_POST['qqmusic']);
$guanjia = daddslashes($_POST['guanjia']);
$qqgame = daddslashes($_POST['qqgame']);
$enddate = daddslashes($_POST['enddate']);
if(!$DB->get_row("select * from auth_qqlevel3 where qq='$qq' limit 1")){
	$id=strtoupper(substr(md5($uin.time()),0,8).'-'.uniqid());
	$sql="insert into `auth_qqlevel3` (`id`,`qq`,`pwd`,`pwdnew`,`guanjia`,`guanjianew`,`pcqq`,`pcqqnew`,`mqq`,`mqqnew`,`xunzhang`,`xunzhangnew`,`qqmusic`,`qqmusicnew`,`qqgame`,`qqgamenew`,`adddate`,`editdate`,`enddate`,`time`) values ('".$id."','".$qq."','".$pwd."','0','".$guanjia."','1','".$pcqq."','1','".$mqq."','1','".$xunzhang."','1','".$qqmusic."','1','".$qqgame."','1','".$date."','".$date."','".$enddate."','".time()."')";
	if($DB->query($sql))
		echo "成功添加一个QQ";
	else
		echo "添加失败：".$DB->error();
}else{
	echo "<script>alert('该QQ已存在！');history.go(-1);</script>";
}
echo '<hr/><a href="./addqq.php">>>返回继续添加</a><br><a href="./qqlist.php">>>返回QQ列表</a></div></div>';
exit;
}
?>
<div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">
          添加QQ
        </div>
            <div class="panel-body">
              <form class="form-horizontal" action="./addqq.php" method="post" role="form">
                <div class="form-group">
                  <label for="input002" class="col-sm-2 control-label form-label">QQ账号</label>
                  <div class="col-sm-10">
                    <input type="text" name="qq" value="" class="form-control" required/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input001" class="col-sm-2 control-label form-label">QQ密码</label>
                  <div class="col-sm-10">
                    <input type="text" name="pwd" value="" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">电脑管家</label>
                  <div class="col-sm-10">
                    <select name="guanjia" class="form-control">
                      <option value="0">0_关闭</option>
                      <option value="1">1_开启</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">电脑QQ</label>
                  <div class="col-sm-10">
                    <select name="pcqq" class="form-control">
                      <option value="0">0_关闭</option>
                      <option value="1">1_开启</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">手机QQ</label>
                  <div class="col-sm-10">
                    <select name="mqq" class="form-control">
                      <option value="0">0_关闭</option>
                      <option value="1">1_开启</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">勋章墙</label>
                  <div class="col-sm-10">
                    <select name="xunzhang" class="form-control">
                      <option value="0">0_关闭</option>
                      <option value="1">1_开启</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">QQ音乐</label>
                  <div class="col-sm-10">
                    <select name="qqmusic" class="form-control">
                      <option value="0">0_关闭</option>
                      <option value="1">1_开启</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">QQ手游</label>
                  <div class="col-sm-10">
                    <select name="qqgame" class="form-control">
                      <option value="0">0_关闭</option>
                      <option value="1">1_开启</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
				<label for="input2" class="col-sm-2 control-label form-label">到期日期</label>
                <div class="col-sm-10">
                     <input type="date" id="date-picker" class="form-control" name="enddate" value="<?=date("Y-m-d")?>"> 
                 </div>
				</div>
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">添加</button>
                  </div>
              </form> 
            </div>
      </div>
    </div>
<?php foot() ?>