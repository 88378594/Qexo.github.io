<?php
$mod='blank';
include("../api.inc.php");
$title='搜索卡密';
include './head.php';
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
<div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          搜索卡密
        </div>
        <div class="panel-body">
          <form action="./kmlist.php" method="get" class="form-horizontal" role="form">
            <div class="form-group">
              <label>类别</label>
              <select name="type" class="form-control">
                <option value="1">卡密</option>
                <option value="2">ＱＱ</option>
              </select>
            </div>
            <div class="form-group">
              <label>内容</label>
              <input type="text" name="kw" value="" class="form-control" required/>
            </div>
            <input type="submit" value="查询" class="btn btn-primary"/>
          </form>
        </div>
    </div>
  </div>
<?php foot() ?>