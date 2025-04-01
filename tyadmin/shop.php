<?php
$mod='blank';
include("../api.inc.php");
$title='商品管理';
$pay = true;
include './head.php';
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
    <div class="col-md-12">
      <div class="panel panel-default">
<?php
if($_GET['do'] == "del"){
	$id = intval($_GET['id']);
	$sql="delete from `auth_shop` where `id`='{$id}' limit 1";
    if($DB->query($sql)){echo "<script language='javascript'>alert('删除成功！');history.go(-1);</script>";}
    else{echo "<script language='javascript'>alert('删除失败！');history.go(-1);</script>";}	
}elseif($_GET['do'] =="edit"){ 
	$shopid=empty($_GET['id'])?exit('该商品不存在!'):daddslashes($_GET['id']);
	  $shop = $DB->get_row("select * from auth_shop where id='{$shopid}' limit 1");
	  if($_POST['type']=='edit'){
      $name=empty($_POST['shop_name'])?exit("名称不能为空!"):daddslashes($_POST['shop_name']);
      $money=empty($_POST['shop_money'])?exit("金额不能为0元!"):daddslashes($_POST['shop_money']);
      if($money*100<1){exit('金额不能小于0.01元！');}
      $text=empty($_POST['shop_text'])?'':daddslashes($_POST['shop_text']);
      $sql="update `auth_shop` set `name`='{$name}',`money`='{$money}',`text`='{$text}' where `id`='{$shopid}'";
      if($DB->query($sql)){echo "<script language='javascript'>alert('修改成功！');window.location.href='./shop.php';</script>";}
      else{echo "<script language='javascript'>alert('修改失败！');history.go(-1);</script>";} 
	  }else{
?>
        <div class="panel-body">
        <form action="?do=edit&id=<?=$_GET['id']?>" class="form-horizontal" method="post">
			<input type="hidden" name="type" value="edit">
			<div class="form-group">
			  <label for="input002" class="col-sm-2 control-label form-label">商品名称</label>
              <div class="col-sm-10">
			  <input type="text" name="shop_name" value="<?=$shop['name']?>" class="form-control">
			  </div>
			</div>
			<div class="form-group">
			  <label for="input002" class="col-sm-2 control-label form-label">商品价格</label>
              <div class="col-sm-10">
			  <input type="text" name="shop_money" value="<?=$shop['money']?>" class="form-control">
              </div>
			</div>
			<div class="form-group">
			  <label for="input002" class="col-sm-2 control-label form-label">商品介绍</label>
              <div class="col-sm-10">
			  <textarea class="form-control" name="shop_text" rows="5"><?=$shop['text']?></textarea>
              </div>
			</div>

			  <div class="col-sm-offset-2 col-sm-10">
				<input type="submit" name="submit" value="修改" class="btn btn-primary"/>
			  </div>
		  </form>
        </div>
        </div>
        </div>
<?php }}elseif($_GET['do'] == "add"){ 
	if($_POST['type']=='add'){
      $name=empty($_POST['shop_name'])?exit("名称不能为空!"):daddslashes($_POST['shop_name']);
      $money=empty($_POST['shop_money'])?exit("金额不能为0元!"):daddslashes($_POST['shop_money']);
      if($money*100<1){exit('金额不能小于0.01元！');}
      $text=empty($_POST['shop_text'])?'':daddslashes($_POST['shop_text']);
      $sql="insert into `auth_shop` (`name`,`money`,`text`,`end_time`,`add_time`) values ('{$name}','{$money}','{$text}','".time()."','".time()."')";
      if($DB->query($sql)){echo "<script language='javascript'>alert('添加成功！');window.location.href='./shop.php';</script>";}
      else{echo "<script language='javascript'>alert('添加失败！');history.go(-1);</script>";} 
	}else{

?>

        <div class="panel-body">
        <form action="?do=add" class="form-horizontal" method="post">
			<input type="hidden" name="type" value="add">
			<div class="form-group">
			  <label for="input002" class="col-sm-2 control-label form-label">商品名称</label>
              <div class="col-sm-10">
			  <input type="text" name="shop_name" value="" class="form-control">
			  </div>
			</div>
			<div class="form-group">
			  <label for="input002" class="col-sm-2 control-label form-label">商品价格</label>
              <div class="col-sm-10">
			  <input type="text" name="shop_money" value="" class="form-control">
              </div>
			</div>
			<div class="form-group">
			  <label for="input002" class="col-sm-2 control-label form-label">商品介绍</label>
              <div class="col-sm-10">
			  <textarea class="form-control" name="shop_text" rows="5"></textarea>
			</div>
            </div>

			  <div class="col-sm-offset-2 col-sm-10">
				<input type="submit" name="submit" value="添加" class="btn btn-primary"/>
			  </div>
		  </form>
        </div>
        </div>
        </div>

<?php

	}}else{ 
$numrows=$DB->count("SELECT count(*) from auth_shop WHERE 1");	
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
$result = $DB->query("select * from auth_shop order by id asc limit $offset,$pagesize");
?>
        <div class="panel-heading"><h3 class="panel-title">商品管理&nbsp;<a href="?do=add">[添加商品]</a></h3></div>
        <div class="table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
          <th>ID</th>
          <th>商品名称</th>
          <th>价格</th>
          <th>库存</th>
          <th>添加时间</th>
          <th>操作</th>
          </tr>
          </thead>
          <tbody>
          <?php
			 while($shops = $DB->fetch($result)){
				 ?>
				 <tr>
				 <td><?=$shops['id']?></td>
				 <td><?=$shops['name']?></td>
				 <td><?=$shops['money']?></td>
				 <td><?=$DB->count("select count(*) from auth_shop_data where shopid=".$shops['id']." and traing=0") ? $DB->count("select count(*) from auth_shop_data where shopid=".$shops['id']." and traing=0") : 0 ?></td>
				 <td><?=date("Y-m-d H:i:s",$shops['add_time'])?></td>
				 <td><a href="?do=edit&id=<?=$shops['id']?>"><span class="btn btn-primary btn-xs">修改</span></a>&nbsp;&nbsp;&nbsp;<a href="?do=del&id=<?=$shops['id']?>"><span class="btn btn-danger btn-xs">删除</span></a></td>
				 </tr>
				 <?php } ?>
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
echo '<li><a href="shop.php?page='.$first.$link.'">首页</a></li>';
echo '<li><a href="shop.php?page='.$prev.$link.'">&laquo;</a></li>';
} else {
echo '<li class="disabled"><a>首页</a></li>';
echo '<li class="disabled"><a>&laquo;</a></li>';
}
for ($i=1;$i<$page;$i++)
echo '<li><a href="shop.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '<li class="disabled"><a>'.$page.'</a></li>';
for ($i=$page+1;$i<=$pages;$i++)
echo '<li><a href="shop.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '';
if ($page<$pages)
{
echo '<li><a href="shop.php?page='.$next.$link.'">&raquo;</a></li>';
echo '<li><a href="shop.php?page='.$last.$link.'">尾页</a></li>';
} else {
echo '<li class="disabled"><a>&raquo;</a></li>';
echo '<li class="disabled"><a>尾页</a></li>';
}
echo'</ul>';
#分页

}
foot();
?>
