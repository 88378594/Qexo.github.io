<?php
unset($domain);
session_start();
error_reporting(E_ALL);
date_default_timezone_set("PRC");
header("Content-Type: text/html; charset=UTF-8");
include "../admin/ini.php";
include "../admin/ini1.php";
include "../admin/ini2.php";
include "../admin/ini3.php";
include "../admin/ini4.php";
include "../admin/ini5.php";
?>
<!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:16:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title><?php echo $ini['title']?> </title>
    <meta name="keywords" content="<?php echo $ini['keywords']?>" />
    <meta name="description" content="<?php echo $ini['description']?>" />

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico">
    <link href="/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/css/style.min862f.css?v=4.1.0" rel="stylesheet">
</head>
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeIn">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>活动网站类别专区</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="notifications.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="notifications.html#">选项1</a>
                                </li>
                                <li><a href="notifications.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="alert alert-success alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
							<?php echo $ini3['bymgg']?>
                        </div>
                                </div>
                            </div>
                        </div>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-4">
                <div class="contact-box">
                    <a href="profile.html">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <img alt="image" class="img-circle m-t-xs img-responsive" src="../img/a2.jpg">
								<a class="btn btn-outline btn-info" href="<?php echo $ini3['zdlj1']?>">点击查看</a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h3><strong><?php echo $ini3['zdmc1']?></strong></h3>
                            <p><i class="fa fa-map-marker"></i> 未知</p>
                            <address>
							<?php echo $ini3['zdjs1']?>
                        </address>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-box">
                    <a href="profile.html">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <img alt="image" class="img-circle m-t-xs img-responsive" src="../img/a2.jpg">
								<a class="btn btn-outline btn-info" href="<?php echo $ini3['zdlj2']?>">点击查看</a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h3><strong><?php echo $ini3['zdmc2']?></strong></h3>
                            <p><i class="fa fa-map-marker"></i> 未知</p>
                            <address>
							<?php echo $ini3['zdjs2']?>
                        </address>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>
			<div class="col-sm-4">
                <div class="contact-box">
                    <a href="profile.html">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <img alt="image" class="img-circle m-t-xs img-responsive" src="../img/a2.jpg">
								<a class="btn btn-outline btn-info" href="<?php echo $ini3['zdlj3']?>">点击查看</a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h3><strong><?php echo $ini3['zdmc3']?></strong></h3>
                            <p><i class="fa fa-map-marker"></i> 未知</p>
                            <address>
							<?php echo $ini3['zdjs3']?>
                        </address>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>
		</div>
            </div>
			<div class="col-sm-4">
                <div class="contact-box">
                    <a href="profile.html">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <img alt="image" class="img-circle m-t-xs img-responsive" src="../img/a2.jpg">
								<a class="btn btn-outline btn-info" href="<?php echo $ini3['zdlj4']?>">点击查看</a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h3><strong><?php echo $ini3['zdmc4']?></strong></h3>
                            <p><i class="fa fa-map-marker"></i> 未知</p>
                            <address>
							<?php echo $ini3['zdjs4']?>
                        </address>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>
			<div class="col-sm-4">
                <div class="contact-box">
                    <a href="profile.html">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <img alt="image" class="img-circle m-t-xs img-responsive" src="../img/a2.jpg">
								<a class="btn btn-outline btn-info" href="<?php echo $ini3['zdlj5']?>">点击查看</a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h3><strong><?php echo $ini3['zdmc5']?></strong></h3>
                            <p><i class="fa fa-map-marker"></i> 未知</p>
                            <address>
							<?php echo $ini3['zdjs5']?>
                        </address>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>
			<div class="col-sm-4">
                <div class="contact-box">
                    <a href="profile.html">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <img alt="image" class="img-circle m-t-xs img-responsive" src="../img/a2.jpg">
								<a class="btn btn-outline btn-info" href="<?php echo $ini3['zdlj6']?>">点击查看</a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h3><strong><?php echo $ini3['zdmc6']?></strong></h3>
                            <p><i class="fa fa-map-marker"></i> 未知</p>
                            <address>
							<?php echo $ini3['zdjs6']?>
                        </address>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>