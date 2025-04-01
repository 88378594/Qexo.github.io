<?php
/**
 * 交易记录
**/
$mod='blank';
include("../api.inc.php");
$title='交易记录';
$pay = true;
include './head.php';
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
    <div class="col-md-12">
      <div class="panel panel-default">
<?php
$numrows=$DB->count("SELECT count(*) from auth_record WHERE 1");
$pagesize=10;
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
$result = $DB->query("select * from auth_record where 1 order by id desc limit $offset,$pagesize");
?>
        <div class="table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
                                  <th>#</th>
                                  <th>交易时间</th>
                                  <th>付款备注</th>
                                  <th>流水账号</th>
                                  <th>对方名称</th>
                                  <th>收入金额</th>
                                  <th>交易状态</th>
                                  <th>入库时间</th>
                              </tr>
          </thead>
          <tbody>
          <?php 
								while($record = $DB->fetch($result)){
									$n++;
								?>
                              <tr>
                                  <td><?=$n?></td>
                                  <td><?=$record['date']?></td>
                                  <td><?=$record['name']?></td>
                                  <td><?=$record['traing']?></td>
                                  <td><?=$record['toname']?></td>
                                  <td><?=$record['money']?></td>
                                  <td><?=$record['state']?></td>
                                  <td><?=date("Y-m-d H:i:s",$record['add_time'])?></td>
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
echo '<li><a href="tlist.php?page='.$first.$link.'">首页</a></li>';
echo '<li><a href="tlist.php?page='.$prev.$link.'">&laquo;</a></li>';
} else {
echo '<li class="disabled"><a>首页</a></li>';
echo '<li class="disabled"><a>&laquo;</a></li>';
}
for ($i=1;$i<$page;$i++)
echo '<li><a href="tlist.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '<li class="disabled"><a>'.$page.'</a></li>';
for ($i=$page+1;$i<=$pages;$i++)
echo '<li><a href="tlist.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '';
if ($page<$pages)
{
echo '<li><a href="tlist.php?page='.$next.$link.'">&raquo;</a></li>';
echo '<li><a href="tlist.php?page='.$last.$link.'">尾页</a></li>';
} else {
echo '<li class="disabled"><a>&raquo;</a></li>';
echo '<li class="disabled"><a>尾页</a></li>';
}
echo'</ul>';
?>
 <?php foot();