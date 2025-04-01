<?php
$mod='blank';
include("../api.inc.php");
$title='QQ代挂列表下载';
include './head.php';
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
<div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <form action="taix.php" method="get" role="form">
		  <input type="hidden" name="my" value="signer"/>
			<div class="form-group">
			<label>到期导出：</label>
              <select name="type" class="form-control">
                <option value="time">已经到期的QQ</option>
                <option value="tomorrow">明天到期的QQ</option>
              </select>
            </div>
            <p><input type="submit" value="生成TXT" class="btn btn-primary form-control"/></p>
          </form>
        </div>
        <div class="panel-body">
          <form action="taix.php" method="get" role="form">
		  <input type="hidden" name="my" value="signer"/>
			<div class="form-group">
			<label>状态导出：</label>
              <select name="type" class="form-control">
				<option value="black">密码错误的QQ</option>
			    <option value="add">已经冻结的QQ</option>
				<option value="close">开启设备锁的QQ</option>
              </select>
            </div>
            <p><input type="submit" value="生成TXT" class="btn btn-primary form-control"/></p>
          </form>
        </div>
		<div class="panel-footer">
          <span class="glyphicon glyphicon-info-sign"></span> 生成txt的格式：QQ号  每次导出最多9000条<br/>
		  已标记的QQ下次导出时就不会导出了。
        </div>
      </div>
      </div>

<?php foot()?>