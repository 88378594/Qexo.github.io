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
          <form action="download.php" method="get" role="form">
		  <input type="hidden" name="my" value="signer"/>
            <div class="form-group">
              <label>类别：</label>
              <select name="func" class="form-control">
				<option value="guanjia">电脑管家代挂</option>
				<option value="pcqq">电脑ＱＱ代挂</option>
				<option value="mqq">手机ＱＱ代挂</option>
				<option value="xunzhang">QQ勋章墙代挂</option>
				<option value="qqmusic">ＱＱ音乐代挂</option>
				<option value="qqgame">ＱＱ手游代挂</option>
              </select>
            </div>
			<div class="form-group">
			<label>导出类型：</label>
              <select name="type" class="form-control">
				<option value="all">本类别所有QQ</option>
			    <option value="add">新增加的QQ</option>
				<option value="close">已删除的QQ</option>
				<option value="fill">补挂的QQ</option>
                <option value="update">修改密码的QQ(所有的,不分类别)</option>
              </select>
            </div>
			<div class="form-group">
			  <label>是否标记已导出的QQ：</label>
              <select name="sign" class="form-control">
                <option value="0">否</option>
                <option value="1">是</option>
              </select>
            </div>
            <p><input type="submit" value="生成TXT" class="btn btn-primary form-control"/></p>
          </form>
        </div>
		<div class="panel-footer">
          <span class="glyphicon glyphicon-info-sign"></span> 生成txt的格式：QQ号----QQ密码  每次导出最多9000条<br/>
		  已标记的QQ下次导出时就不会导出了。
        </div>
      </div>
      </div>

<?php foot()?>