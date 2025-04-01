<?php
$mod='blank';
include("../api.inc.php");
$title='分站列表';
include './head.php';
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
<?php
$my=isset($_GET['my'])?$_GET['my']:null;
if($my=='del'){
echo '<div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          删除分站
        </div>';
$id=$_GET['id'];
$sql=$DB->query("DELETE FROM dlist WHERE id='$id'");
if($sql){echo '删除成功！';}
else{echo '删除失败！';}
echo '<hr/><a href="./fenzhan.php">>>返回分站列表</a></div></div>';
foot();
}
else
{
?>
<div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          分站列表
        </div>

      <div class="table-responsive">
        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>域名</th>
                                <th>代理Uid</th>
								<th>状态</th>
								<th>添加时间</th>
								<th>到期时间</th>
								<th>操作</th>
                            </tr>
                        </thead>
          <tbody>
<?php
$zt = array('0'=>'<font color=red>关闭</font>','1'=>'<font color=green>开启</font>');
				$sql = $DB->query("select * from dlist");
				while($res = $DB->fetch($sql))
{
				$sql = $DB->query("select * from dlist");
				while($res = $DB->fetch($sql))
echo '<tr><td><b>'.$res['id'].'</b></td><td>'.$res['url'].'</td><td>'.$res['fzuid'].'</td><td>'.$zt[$res['active']].'</td><td>'.$res['adddate'].'</td><td>'.$res['enddate'].'</td><td><a href="dedit.php?id='.$res['id'].'&type=edit" class="label label-success" >修改</a>&nbsp;<a href="?my=del&id='.$res['id'].'" class="label label-danger" >删除</a></td></tr>';
}
?>
          </tbody>
        </table>
      </div>
      </div>
      </div>
<?php

}
foot();
?>
