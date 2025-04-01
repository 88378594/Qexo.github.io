<?php
/**
 * 搜索QQ
**/
$mod='blank';
include("../api.inc.php");
$title='搜索QQ';
include './head.php';
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
include './nav.php';
?>
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<?php if(isset($_GET['qq'])){
$qq=$_GET['qq'];
$blackarr=array('状态正常','密码错误','ＱＱ冻结','请关闭设备锁');
$row=$DB->get_row("SELECT * FROM auth_qqlevel3 WHERE qq='$qq' limit 1");
if(!$row){
	showmsg('没有此QQ！');exit;
}
?>
	<div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">ＱＱ信息</h3></div>
        <div class="panel-body">
          <ul class="list-group">
		  <li class="list-group-item">ＱＱ：<?=$qq?>&nbsp;<a href="tencent://message/?uin=<?=$qq?>&amp;Site=&amp;Menu=yes"><img src="http://wpa.qq.com/pa?p=1:<?=$qq?>:1" border=0></a></li>
		  <li class="list-group-item">密码：<?=$row['pwd']?></li>
		  <li class="list-group-item">状态：<?=$blackarr[$row['black']]?></li>
		  <li class="list-group-item">功能：电脑管家：<?php echo $row['guanjia']?'开启':'关闭' ?>，电脑ＱＱ：<?php echo $row['pcqq']?'开启':'关闭' ?>，手机ＱＱ：<?php echo $row['mqq']?'开启':'关闭' ?>，QQ勋章墙：<?php echo $row['xunzhang']?'开启':'关闭' ?>，ＱＱ音乐：<?php echo $row['qqmusic']?'开启':'关闭' ?>，ＱＱ手游：<?php echo $row['qqgame']?'开启':'关闭' ?></li>
		  <li class="list-group-item">开通日期：<?=$row['adddate']?></li>
		  <li class="list-group-item">到期日期：<?=$row['enddate']?></li>
		</ul>
        </div>
      </div>
<?php }else{?>
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">搜索ＱＱ</h3></div>
        <div class="panel-body">
          <form action="./qqlist.php" method="get" class="form-inline" role="form">
            <div class="form-group">
              <label>ＱＱ</label>
              <input type="text" name="qq" value="" class="form-control" required/>
            </div>
            <input type="submit" value="查询" class="btn btn-primary form-control"/>
          </form>
        </div>
      </div>
<?php }?>
    </div>
  </div>