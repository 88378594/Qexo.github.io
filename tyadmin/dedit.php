<?php
$mod='blank';
include("../api.inc.php");
$title='分站修改';
include './head.php';
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
<?php
$id = daddslashes($_GET['id']);
if(!$id || !$qqrow = $DB->get_row("select * from dlist where id='$id' limit 1")){ exit("<script language='javascript'>alert('分站不存在！');history.go(-1);</script>");}
if($_POST['type']=="update"){
echo '<div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          修改分站结果
        </div>';
						$url = daddslashes($_POST['url']);
						if($DB->get_row("select * from dlist where url='$url' and id<>'$id' limit 1")) exit("<script>alert('该域名已存在');window.location.href='dlist.php';</script>");
						$uid = daddslashes($_POST['uid']);
						$active = daddslashes($_POST['active']);
	$enddate = isset($_POST['enddate'])?daddslashes($_POST['enddate']):$qqrow['enddate'];
	$date=date("Y-m-d");
	if($DB->query("update dlist set url='$url',fzuid='$uid',active='$active' where id='$id'")){
		echo '修改成功！';
	}else{
		echo '修改失败！'.$DB->error();
	}
echo '<hr/><a href="./fenzhan.php">>>返回分站列表</a></div></div>';
foot();
exit;
}
?>
<div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          分站:<?=$id?> 修改
        </div>

            <div class="panel-body">
              <form class="form-horizontal" action="./dedit.php?id=<?=$id?>" method="post" role="form">

				<input type="hidden" name="type" value="update" />

                <div class="form-group">
                  <label for="input001" class="col-sm-2 control-label form-label">分站代理ID</label>
                  <div class="col-sm-10">
                    <input type="text" name="uid" value="<?=$qqrow['fzuid']?>" class="form-control" required>
                  </div>
                </div>
				                <div class="form-group">
                  <label for="input001" class="col-sm-2 control-label form-label">分站域名</label>
                  <div class="col-sm-10">
                    <input type="text" name="url" value="<?=$qqrow['url']?>" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">状态</label>
                  <div class="col-sm-10">
                    <select name="active" class="form-control">
						<option value="0">关闭</option>
						<option value="1" <?=$qqrow['active']==1?"selected":''?>>开启</option>
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
