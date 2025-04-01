<?php
//网站导航系统首页面
//作者QQ：1833742775
//官方演示站：www.heike.pw
//官方QQ交流群：458130353
unset($domain);
session_start();
error_reporting(E_ALL);
date_default_timezone_set("PRC");
header("Content-Type: text/html; charset=UTF-8");
include "admin/ini.php";
include "admin/ini1.php";
include "admin/ini2.php";
include "admin/ini3.php";
include "admin/ini4.php";
include "admin/ini5.php";
?>
<!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:16:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title><?php echo $ini['title']?></title>
    <meta name="keywords" content="<?php echo $ini['keywords']?>" />
    <meta name="description" content="<?php echo $ini['description']?>" />

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico">
    <link href="css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/style.min862f.css?v=4.1.0" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span><img alt="image" class="img-circle" src="img/profile_small.jpg" /></span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold"><?php echo $ini['title']?></strong></span>
                               <span class="block m-t-xs"><strong class="font-bold">欢迎回家~</strong></span>
                                </span>
                            </a>
                        </div>
                        <div class="logo-element">IF
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-star"></i>
                            <span class="nav-label">站点分类</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="if.php">首页</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="/lei/jiaocheng.php">教程类</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="/lei/huodong.php">活动类</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="/lei/kameng.php">卡盟类</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="/lei/tupian.php">图片类</a>
                            </li>
                            <li>
                        </ul>
                    <li>
                        <a href="mailbox.html"><i class="glyphicon glyphicon-gift"></i> <span class="nav-label">在线工具</span><span class="label label-primary pull-right">3</span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="/lei/laquanquan.php">QQ拉圈圈</a>
                            </li>
                            <li><a class="J_menuItem" href="/lei/bangbangtang.php">秒领棒棒糖</a>
                            </li>
                            <li><a class="J_menuItem" href="/lei/mianvip.php">免VIP观看</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">装逼图片生成</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="/lei/zb.php">功能待加</a>
                            </li>
                            <li><a class="J_menuItem" href="/lei/zb.php">功能待加</a>
                            </li>
                            <li><a class="J_menuItem" href="/lei/zb.php">功能待加</a>
                            </li>
                            <li><a class="J_menuItem" href="/lei/zb.php">功能待加</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">站长实用工具</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="/lei/zz.php">功能待加</a>
                            </li>
                            <li><a class="J_menuItem" href="/lei/zz.php">功能待加</a>
                            </li>
                            <li><a class="J_menuItem" href="/lei/zz.php">功能待加</a>
                            </li>
                            <li><a class="J_menuItem" href="/lei/zz.php">功能待加</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="J_menuItem" href="/lei/pinglun.php"><i class="glyphicon glyphicon-edit"></i> <span class="nav-label">网站评论</span></a>
                    </li>
					<li>
                        <a class="J_menuItem" href="/lei/gy.php"><i class="glyphicon glyphicon-thumbs-up"></i> <span class="nav-label">关于我们</span></a>
                    </li>
                    <li>
                    <a class="J_menuItem" href="/lei/gx.php"><i class="glyphicon glyphicon-cog"></i> <span class="nav-label">程序更新</span></a>
                    </li>
                    <li>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="http://www.baidu.com/">
                            <div class="form-group">
                                <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-envelope"></i> <span class="label label-warning">1</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li class="m-t-xs">
                                    <div class="dropdown-messages-box">
                                        <div class="media-body ">
                                            <strong>对网站的建议可以在这里提交</strong>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <!--WAP版-->
<div id="SOHUCS" ></div>
<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" 
src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=<?php echo $ini['appid']?>&conf=prod_<?php echo $ini['appkey']?>">
</script>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden-xs">
                            <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $ini['kfqq']?>&site=qq&menu=yes" class="J_menuItem" data-index="0"><i class="fa fa-cart-arrow-down"></i> 联系作者</a>
                        </li>
                        <li class="hidden-xs">
                            <a href="https://www.12580sky.com" class="J_menuItem" data-index="0"><i class="glyphicon glyphicon-save"></i>下载源码</a>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a class="right-sidebar-toggle" aria-expanded="false">
                                <i class="fa fa-tasks"></i> 主题
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row content-tabs">
                <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
                </button>
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        <a href="javascript:;" class="active J_menuTab" data-id="if.php">首页</a>
                    </div>
                </nav>
                <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
                </button>
                <div class="btn-group roll-nav roll-right">
                    <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                    </button>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                        <li class="J_tabShowActive"><a>定位当前选项卡</a>
                        </li>
                        <li class="divider"></li>
                        <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                        </li>
                        <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                        </li>
                    </ul>
                </div>
                <a href="login.html" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i>退出</a>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="if.php" frameborder="0" data-id="if.php" seamless></iframe>
            </div>
            <div class="footer">
                <div class="pull-right">本网站源码由<a  href="http://www.12580sky.com" target="_blank">IF导航</a>提供 <?php echo $ini['dibu']?></div>
                </div>
            </div>
        </div>
        <!--右侧部分结束-->
        <!--右侧边栏开始-->
        <div id="right-sidebar">
            <div class="sidebar-container">

                <ul class="nav nav-tabs navs-3">

                    <li class="active">
                        <a data-toggle="tab" href="#tab-1">
                            <i class="fa fa-gear"></i> 主题
                        </a>
                    </li>
                    <li><a data-toggle="tab" href="#tab-3">
                        项目进度
                    </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="sidebar-title">
                            <h3> <i class="fa fa-comments-o"></i> 主题设置</h3>
                            <small><i class="fa fa-tim"></i> 你可以从这里选择和预览主题的布局和样式，这些设置会被保存在本地，下次打开的时候会直接应用这些设置。</small>
                        </div>
                        <div class="skin-setttings">
                            <div class="title">主题设置</div>
                            <div class="setings-item">
                                <span>收起左侧菜单</span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="collapsemenu">
                                        <label class="onoffswitch-label" for="collapsemenu">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>固定顶部</span>

                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="fixednavbar" class="onoffswitch-checkbox" id="fixednavbar">
                                        <label class="onoffswitch-label" for="fixednavbar">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>
                        固定宽度
                    </span>

                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="boxedlayout" class="onoffswitch-checkbox" id="boxedlayout">
                                        <label class="onoffswitch-label" for="boxedlayout">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="title">皮肤选择</div>
                            <div class="setings-item default-skin nb">
                                <span class="skin-name ">
                         <a href="#" class="s-skin-0">
                             默认皮肤
                         </a>
                    </span>
                            </div>
                            <div class="setings-item blue-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-1">
                            蓝色主题
                        </a>
                    </span>
                            </div>
                            <div class="setings-item yellow-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-3">
                            黄色/紫色主题
                        </a>
                    </span>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-cube"></i> 最新任务</h3>
                            <small><i class="fa fa-tim"></i> 您当前有8个任务，0个已完成</small>
                        </div>

                        <ul class="sidebar-list">
                            <li>
                                <a href="#">
								<span class="label label-primary pull-right">NEW</span>
                                    <div class="small pull-right m-t-xs">17/07/29</div>
                                    <h4>前端完善</h4> 按要求进行修改；

                                    <div class="small">已完成： 30%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 30%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">项目截止： 4:00 - 2017/12/29</div>
                                </a>
                            </li>
<li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">17/07/29</div>
                                    <h4>后台建设</h4> 按要求进行修改：

                                    <div class="small">已完成： 10%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 10%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">项目截止： 4:00 - 2017/12/29</div>
                                </a>
                            </li>
<li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">17/07/29</div>
                                    <h4>QQ：1833742775</h4> 按要求进行修改；

                                    <div class="small">已完成： 1%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 1%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">项目截止： 4:00 - 2017/05/29</div>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>

            </div>
        </div>
        <!--右侧边栏结束-->
        <!--客服聊天窗口开始-->
<script type='text/javascript'>
    (function(m, ei, q, i, a, j, s) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        j = ei.createElement(q),
            s = ei.getElementsByTagName(q)[0];
        j.async = true;
        j.charset = 'UTF-8';
        j.src = '//static.meiqia.com/dist/meiqia.js?_=t';
        s.parentNode.insertBefore(j, s);
    })(window, document, 'script', '_MEIQIA');
    _MEIQIA('entId', 26309);
</script>

            </a>
        </div>
    </div>
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/layer/layer.min.js"></script>
    <script src="js/hplus.min.js?v=4.1.0"></script>
    <script type="text/javascript" src="js/contabs.min.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
</body>


<!-- Mirrored from www.zi-han.net/theme/hplus/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:17:11 GMT -->
</html>

