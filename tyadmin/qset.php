<?php
/**
 * QQ列表
**/
$mod='blank';
include("../api.inc.php");
$title='QQ列表';
include './head.php';
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
<?php
$qq = daddslashes($_GET['qq']);
if(!$qq || !$qqrow = $DB->get_row("select * from auth_qqlevel3 where qq='$qq' limit 1")){ exit("<script language='javascript'>alert('QQ不存在！');history.go(-1);</script>");}
if($_POST['type']=="update"){
echo '<div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          修改QQ结果
        </div>';
	$pcqq = daddslashes($_POST['pcqq']);
	$mqq = daddslashes($_POST['mqq']);
	$xunzhang = daddslashes($_POST['xunzhang']);
	$qqmusic = daddslashes($_POST['qqmusic']);
	$guanjia = daddslashes($_POST['guanjia']);
	$qqgame = daddslashes($_POST['qqgame']);
	$black = daddslashes($_POST['black']);
	$pwd = daddslashes($_POST['pwd']);
	$enddate = isset($_POST['enddate'])?daddslashes($_POST['enddate']):$qqrow['enddate'];
	$date=date("Y-m-d");
	if($DB->query("update auth_qqlevel3 set pwd='$pwd',pcqq='$pcqq',mqq='$mqq',xunzhang='$xunzhang',qqmusic='$qqmusic',guanjia='$guanjia',qqgame='$qqgame',black='$black',editdate='$date',enddate='$enddate',chengedate='$date',fasong='0',fasong1='0' where qq='$qq'")){
		echo '修改成功！';
	}else{
		echo '修改失败！'.$DB->error();
	}
echo '<hr/><a href="./qqlist.php">>>返回QQ列表</a></div></div>';
foot();
exit;
}
?>
<div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          QQ:<?=$qq?> 功能配置
        </div>

            <div class="panel-body">
              <form class="form-horizontal" action="./qset.php?qq=<?=$qq?>" method="post" role="form">

				<input type="hidden" name="type" value="update" />

                <div class="form-group">
                  <label for="input001" class="col-sm-2 control-label form-label">QQ密码</label>
                  <div class="col-sm-10">
                    <input type="text" name="pwd" value="<?=$qqrow['pwd']?>" class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">电脑管家</label>
                  <div class="col-sm-10">
                    <select name="guanjia" class="form-control">
                      <option value="0">0_关闭</option>
                      <option value="1" <?=$qqrow['guanjia']?"selected":''?>>1_开启</option>
                    </select>
                  </div>
                </div>
				
                <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">电脑QQ</label>
                  <div class="col-sm-10">
                    <select name="pcqq" class="form-control">
                      <option value="0">0_关闭</option>
                      <option value="1" <?=$qqrow['pcqq']?"selected":''?>>1_开启</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">手机QQ</label>
                  <div class="col-sm-10">
                    <select name="mqq" class="form-control">
                      <option value="0">0_关闭</option>
                      <option value="1" <?=$qqrow['mqq']?"selected":''?>>1_开启</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">勋章墙</label>
                  <div class="col-sm-10">
                    <select name="xunzhang" class="form-control">
                      <option value="0">0_关闭</option>
                      <option value="1" <?=$qqrow['xunzhang']?"selected":''?>>1_开启</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">QQ音乐</label>
                  <div class="col-sm-10">
                    <select name="qqmusic" class="form-control">
                      <option value="0">0_关闭</option>
                      <option value="1" <?=$qqrow['qqmusic']?"selected":''?>>1_开启</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">QQ手游</label>
                  <div class="col-sm-10">
                    <select name="qqgame" class="form-control">
                      <option value="0">0_关闭</option>
                      <option value="1" <?=$qqrow['qqgame']?"selected":''?>>1_开启</option>
                    </select>
                  </div>
                </div>
				
                <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">状态</label>
                  <div class="col-sm-10">
                    <select name="black" class="form-control">
						<option value="0">正常</option>
						<option value="1" <?=$qqrow['black']==1?"selected":''?>>密码错误</option>
						<option value="2" <?=$qqrow['black']==2?"selected":''?>>ＱＱ冻结</option>
						<option value="3" <?=$qqrow['black']==3?"selected":''?>>请关闭设备锁</option>
					</select>
                  </div>
                </div>
				
                <div class="form-group">
				<label for="input2" class="col-sm-2 control-label form-label">到期日期</label>
                <div class="col-sm-10">
                     <input type="date" id="date-picker" class="form-control" name="enddate" value="<?=$qqrow['enddate']?>"> 
                 </div>
				</div>
                
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">修改</button>
                  </div>
              </form> 

            </div>

      </div>
    </div>
<?php foot() ?>
