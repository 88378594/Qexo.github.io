<?php
$mod='blank';
include("../api.inc.php");

if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");

$func=daddslashes($_GET['func']);
$date=daddslashes($_GET['date']);
$orderby=($_GET['orderby']==1)?"desc":"asc";

$date=date("Y-m-d");
$data='';
if($_GET['type']=='add'){
	$rs=$DB->query("SELECT * FROM auth_qqlevel3 WHERE {$func}=1 and {$func}new=1 and enddate>='{$date}' and black=0 order by time {$orderby} limit 9000");
	$signdo="`{$func}new`='0'";
}elseif($_GET['type']=='close'){
	$rs=$DB->query("SELECT * FROM auth_qqlevel3 WHERE {$func}=0 and {$func}new=1 and enddate>='{$date}' order by time {$orderby} limit 9000");
	$signdo="`{$func}new`='0'";
}elseif($_GET['type']=='fill'){
	$rs=$DB->query("SELECT * FROM auth_qqlevel3 WHERE {$func}=1 and {$func}fill=1 and enddate>='{$date}' order by time {$orderby} limit 9000");
	$signdo="`{$func}fill`='0'";
}elseif($_GET['type']=='update'){
	$rs=$DB->query("SELECT * FROM auth_qqlevel3 WHERE pwdnew=1 and enddate>='{$date}' and black=0 order by time {$orderby} limit 9000");
	$signdo="`pwdnew`='0'";
}elseif($_GET['type']=='all'){
	$rs=$DB->query("SELECT * FROM auth_qqlevel3 WHERE {$func}=1 and enddate>='{$date}' and isdo=0 and black=0 order by time {$orderby} limit 9000");
	//$signdo="`isdo`='1'";
}
while($row = $DB->fetch($rs))
{
	$data.=$row['qq'].'----'.$row['pwd']."\r\n";
	if($_GET['sign']==1 && $signdo)$DB->query("update `auth_qqlevel3` set {$signdo} where `id`='{$row['id']}'");
}

$file_name='output_'.$func.'_'.$date.'__'.time().'.txt';
$file_size=strlen($data);
header("Content-Description: File Transfer");
header("Content-Type:application/force-download");
header("Content-Length: {$file_size}");
header("Content-Disposition:attachment; filename={$file_name}");
echo $data;
?>