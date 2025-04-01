<?php
$mod='blank';
include("../api.inc.php");
$title='库存管理';
$pay = true;
include './head.php';
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          库存管理
        </div>
<?php
if($_GET['do'] == "del"){
	$id = intval($_GET['id']);
	$sql="delete from `auth_shop_data` where `id`='{$id}' limit 1";
    if($DB->query($sql)){echo "<script language='javascript'>alert('删除成功！');history.go(-1);</script>";}
    else{echo "<script language='javascript'>alert('删除失败！');history.go(-1);</script>";}	
}elseif($_GET['do'] == "add"){
	if($_POST['type'] == 'add'){
	  $shopid=empty($_POST['shopid'])?exit('该商品不存在!'):daddslashes($_POST['shopid']);
      $shopid=(int)$shopid;
      $text=empty($_POST['kms'])?'':$_POST['kms'];
	  $text = daddslashes(str_replace(array("\r\n", "\r", "\n"), "[br]", $text));
      $km=explode("[br]",$text);
      $count=0;
	  $errors=0;
      
      foreach ($km as $key => $value)
      {
        //$key=$key+1
        $msg.=($key+1)."    ";
        if(strlen($value)<=1) continue;

          $sql="insert into `auth_shop_data` (`shopid`,`text`,`traing`,`add_time`) values ('{$shopid}','{$value}','0','".time()."')";
          if($DB->query($sql)){++$count;}
          else{++$errors;}

      }
    exit("<script language='javascript'>alert(\"共成功添加 ".$count." 条数据!\");history.go(-1);</script>");
		}
	
?>


        <div class="panel-body">
        <form action="?do=add" class="form-horizontal" method="post">
			<input type="hidden" name="type" value="add">
			<div class="form-group">
			  <label for="input002" class="col-sm-2 control-label form-label">商品名称</label>
              <div class="col-sm-10">
			  <select name="shopid" class="form-control">
				<?php 
					 $ne = $DB->query("select * from auth_shop ");
					 while($shop_type = $DB->fetch($ne)){
					 ?>
					  <option value="<?=$shop_type['id']?>"><?=$shop_type['name']?></option>
					  <?php } ?>
			  </select>
			  </div>
			</div>
			<div class="form-group">
			  <label for="input002" class="col-sm-2 control-label form-label">卡密[一行一个]</label>
              <div class="col-sm-10">
			  <textarea class="form-control" name="kms" rows="5"></textarea>
              </div>
			</div>

			  <div class="col-sm-offset-2 col-sm-10">
				<input type="submit" name="submit" value="添加" class="btn btn-primary"/>
			  </div>
		  </form>
        </div>
        </div>
        </div>
<?php }else{
$numrows=$DB->count("SELECT count(*) from auth_shop_data WHERE 1"); 
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
$result = $DB->query("select * from auth_shop_data order by id asc limit $offset,$pagesize");
?>

        <div class="panel-heading"><h3 class="panel-title">库存管理&nbsp;<a href="?do=add">[添加卡密]</a></h3></div>
        <div class="table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
			  <th>#</th>
			  <th>商品名称</th>
			  <th>卡密</th>
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
				 <td><?php $shop = $DB->get_row("select * from `auth_shop` where `id`='{$shops['shopid']}'"); echo $shop['name']; ?></td>
				 <td><?=$shops['text']?></td>
				 <td><?=date("Y-m-d H:i:s",$shops['add_time'])?></td>
				 <td><a href="?do=del&id=<?=$shops['id']?>"><span class="btn btn-danger btn-xs">删除</span></a></td>
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
echo '<li><a href="kucun.php?page='.$first.$link.'">首页</a></li>';
echo '<li><a href="kucun.php?page='.$prev.$link.'">&laquo;</a></li>';
} else {
echo '<li class="disabled"><a>首页</a></li>';
echo '<li class="disabled"><a>&laquo;</a></li>';
}
for ($i=1;$i<$page;$i++)
echo '<li><a href="kucun.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '<li class="disabled"><a>'.$page.'</a></li>';
for ($i=$page+1;$i<=$pages;$i++)
echo '<li><a href="kucun.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '';
if ($page<$pages)
{
echo '<li><a href="kucun.php?page='.$next.$link.'">&raquo;</a></li>';
echo '<li><a href="kucun.php?page='.$last.$link.'">尾页</a></li>';
} else {
echo '<li class="disabled"><a>&raquo;</a></li>';
echo '<li class="disabled"><a>尾页</a></li>';
}
echo'</ul>';
#分页
}
foot();
?>
