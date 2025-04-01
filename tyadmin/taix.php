<?php
$mod='blank';
include("../api.inc.php");

if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");

$func=daddslashes($_GET['func']);
$orderby=($_GET['orderby']==1)?"desc":"asc";

$date=date("Y-m-d");
$data='';
if($_GET['type']=='black'){
	$rs=$DB->query("SELECT * FROM auth_qqlevel3 WHERE enddate>='{$date}' and isdo=0 and black=1 order by time {$orderby} limit 9000");
}elseif($_GET['type']=='add'){
	$rs=$DB->query("SELECT * FROM auth_qqlevel3 WHERE enddate>='{$date}' and isdo=0 and black=2 order by time {$orderby} limit 9000");
}elseif($_GET['type']=='close'){
	$rs=$DB->query("SELECT * FROM auth_qqlevel3 WHERE enddate>='{$date}' and isdo=0 and black=3 order by time {$orderby} limit 9000");
}elseif($_GET['type']=='time'){
	$rs=$DB->query("SELECT * FROM auth_qqlevel3 WHERE enddate<'{$date}' order by time {$orderby} limit 9000");
}elseif($_GET['type']=='tomorrow'){
	$rs=$DB->query("SELECT * FROM auth_qqlevel3 WHERE enddate='{$date}' order by time {$orderby} limit 9000");
}
while($row = $DB->fetch($rs))
{
	$data.=$row['qq']."\r\n";
	if($_GET['sign']==1 && $signdo)$DB->query("update `auth_qqlevel3` set {$signdo} where `id`='{$row['id']}'");
}

$file_name='ZhuangTai'.time().'.txt';
$file_size=strlen($data);
header("Content-Description: File Transfer");
header("Content-Type:application/force-download");
header("Content-Length: {$file_size}");
header("Content-Disposition:attachment; filename={$file_name}");
echo $data;
?>