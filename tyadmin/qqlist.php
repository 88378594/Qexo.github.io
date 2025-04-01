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
<div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          QQ列表
        </div>
<?php 
$my=isset($_GET['my'])?$_GET['my']:null;

if($my=='del'){
echo '<div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          删除QQ
        </div>';
$qq=$_GET['qq'];
$sql=$DB->query("DELETE FROM auth_qqlevel3 WHERE qq='$qq'");
if($sql){echo '删除成功！';}
else{echo '删除失败！';}
echo '<hr/><a href="./qqlist.php">>>返回QQ列表</a></div></div>';
}

else
{

echo '<form action="qqlist.php" method="get" class="form-inline">
  <div class="form-group">
    <label>搜索QQ</label>
    <input type="text" class="form-control" name="kw" placeholder="QQ号码">
  </div>
  <button type="submit" class="btn btn-primary">搜索</button>
  <a href="addqq.php" class="btn btn-success">添加QQ</a>
</form>';


if(!empty($_GET['kw'])) {
	$sql=" `qq`='{$_GET['kw']}'";
	$numrows=$DB->count("SELECT count(*) from auth_qqlevel3 WHERE{$sql}");
	$con='包含 '.$_GET['kw'].' 的共有 <b>'.$numrows.'</b> 个QQ';
}else{
	$numrows=$DB->count("SELECT count(*) from auth_qqlevel3 WHERE 1");
	$sql=" 1";
	$con='代挂平台共有 <b>'.$numrows.'</b> 个QQ';
}

echo $con;
?>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead><tr><th>QQ号</th><th>QQ密码</th><th>添加时间</th><th>到期时间</th><th>状态</th><th>操作</th></tr></thead>
          <tbody>
<?php
$pagesize=30;
$pages=intval($numrows/$pagesize);
if ($numrows%$pagesize)
{
 $pages++;
 }
if (isset($_GET['page'])){
$page=intval($_GET['page']);
}
else{
$page=1;
}
$offset=$pagesize*($page - 1);
$zt = array('0'=>'<font color=green>正常</font>','1'=>'<font color=red>密码错误</font>','2'=>'<font color=red>QQ冻结</font>','3'=>'<font color=red>开启设备锁</font>');
$rs=$DB->query("SELECT * FROM auth_qqlevel3 WHERE{$sql} order by id desc limit $offset,$pagesize");
while($res = $DB->fetch($rs))
{ ?>
<tr>
<td><?=$res['qq']?></td>
<td><?=$res['pwd']?></td>
<td><?=$res['adddate']?></td>
<td><?=$res['enddate']?></td>
<td><?=$zt[$res['black']]?></td>
<td><a class="btn btn-xs btn-success" href="./qset.php?qq=<?=$res['qq']?>">配置</a>&nbsp;<a href="./qqlist.php?my=del&qq=<?=$res['qq']?>" class="btn btn-xs btn-danger" onclick="if(!confirm('你确实要删除此记录吗？')){return false;}">删除</a></td>
</tr>

<?php }
?>
          </tbody>
        </table>
      </div>
      </div>
      </div>
<?php
echo'<ul class="pagination">';
$first=1;
$prev=$page-1;
$next=$page+1;
$last=$pages;
if ($page>1)
{
echo '<li><a href="qqlist.php?page='.$first.$link.'">首页</a></li>';
echo '<li><a href="qqlist.php?page='.$prev.$link.'">&laquo;</a></li>';
} else {
echo '<li class="disabled"><a>首页</a></li>';
echo '<li class="disabled"><a>&laquo;</a></li>';
}
for ($i=1;$i<$page;$i++)
echo '<li><a href="qqlist.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '<li class="disabled"><a>'.$page.'</a></li>';
for ($i=$page+1;$i<=$pages;$i++)
echo '<li><a href="qqlist.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '';
if ($page<$pages)
{
echo '<li><a href="qqlist.php?page='.$next.$link.'">&raquo;</a></li>';
echo '<li><a href="qqlist.php?page='.$last.$link.'">尾页</a></li>';
} else {
echo '<li class="disabled"><a>&raquo;</a></li>';
echo '<li class="disabled"><a>尾页</a></li>';
}
echo'</ul>';
#分页
}
foot();
?>
