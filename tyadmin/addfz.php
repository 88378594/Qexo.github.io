<?php
$mod='blank';
include("../api.inc.php");
$title='添加分站';
include './head.php';
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
<div class="row" >
<?php
function get_n($len=3){
	$str ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	$strlen = strlen($str);
	$randstr = '';
	for ($i = 0; $i<$len; $i++){
		$randstr .= $str[mt_rand(0, $strlen-1)];
	}
	return $randstr;
}
if(isset($_POST['url'])){
$url = daddslashes($_POST['url']);
$uid = daddslashes($_POST['uid']);
$months = $_POST['enddate']?daddslashes($_POST['enddate']):1;
$enddate = date("Y-m-d",strtotime("+ {$months} months"));
$prefix = get_n();
$sql = $DB->query("SELECT * FROM ".$prefix."configs");
	$mysql = <<<SQL
	DROP TABLE IF EXISTS `cloud_configs`;
CREATE TABLE `cloud_configs` (
  `k` varchar(225) NOT NULL DEFAULT '',
  `v` varchar(900) DEFAULT NULL,
  PRIMARY KEY (`k`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC
SQL;
			$sqls = str_replace("cloud_",$prefix."_",$mysql);
			$explode = explode(";",$sqls);
			$num = count($explode);
if($months<=0){exit("<script language='javascript'>alert('您的开通月数小于1');history.go(-1);</script>");}
if(!$DB->get_row("select * from dlist where url='$url' limit 1")){
			foreach($explode as $sql){
					$DB->query($sql);
			}
			$DB->query("INSERT INTO `".$prefix."_configs` VALUES ('admin_pwd','123456'),('admin_user','admin')");
			$adddate = date("Y-m-d");
			$sql = "insert into dlist (url,fzuid,adddate,enddate,prefix) values('$url','$uid','$adddate','$enddate','$prefix')";
	if($DB->query($sql))
		$msg =  "您成功添加一个分站！";
	else
		$msg =  "添加失败：".$DB->error();
}else{
	echo "<script>alert('该域名已存在！');history.go(-1);</script>";
}
echo "<script>alert('".$msg."');history.go(-1);</script>";
footer();
exit;
}
?>
<div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          添加分站
        </div>

            <div class="panel-body">
              <form  action="?" method="post" role="form">


                <div class="form-group">
                  <label for="input002" >网站域名</label>
                  
                    <input type="text" name="url" value="" class="form-control" required/>

                </div>

                <div class="form-group">
                  <label for="input001" >您的ID</label>
                  
                    <input type="text" name="uid" class="form-control" required>

                </div>

                <div class="form-group">
				<label for="input2" >开通月数</label>
                     <input type="text" class="form-control" name="enddate" placeholder="留空则为1个月"> 
				</div>
                
                    <button type="submit" class="btn btn-blue">添加</button>
              </form> 

            </div>

      </div>
    </div>
</div>
<?php foot() ?>