<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="RichSunfire">
    <link rel="shortcut icon" href="Template/2014/img/favicon.ico">
    <title><?=$title?>|探游代挂后台系统</title>
    <!-- Bootstrap core CSS -->
	<link href="/style/user/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="http://libs.useso.com/js/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Morris -->
    <link href="/style/user/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <!-- Gritter -->
	<link href="/style/user/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/style/user/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link href="/style/user/css/animate.css" rel="stylesheet">
    <link href="/style/user/css/style.css?v=2.2.0" rel="stylesheet">
  </head>

<body id="body">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation" style="position:fixed;top:0;left:0;">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
							<span><img alt="image" class="img-circle" src="http://q1.qlogo.cn/g?b=qq&nk=1833742775&s=160" style="width:60px;" /></span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">超级管理员</strong></span>
							<span class="text-muted text-xs block">ID：Admin<b class="caret"></b></span> </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="index.php">后台首页</a></li>
								<li><a href="dlconfig.php">代理设置</a></li>
                                <li><a href="mail.php">邮箱配置</a></li>
                                <li class="divider"></li>
                                <li><a href="login.php?logout">安全退出</a></li>
                            </ul>
                        </div>
                    </li>
					<div class="logo-element">
<img alt="image" class="img-circle" src="http://q1.qlogo.cn/g?b=qq&nk=1833742775&s=160" style="width:60px;" />
</div>
                    <li <?php if(('pageid')=='user' or ('pageid')=='xiugai' or ('pageid')=='qqlist' or ('pageid')=='add'){ echo'class="active"';}?>>
					<a href="javascript:;"><i class="fa fa-home"></i> <span class="nav-label">代挂管理</span><span class="fa arrow"></span></a>
                       <ul class="nav nav-second-level">
					   <li <?php if(('pageid')=='user'){ echo'class="active"';}?>><a href="./down.php">列表下载</a></li>
					   <li <?php if(('pageid')=='xiugai'){ echo'class="active"';}?>><a href="./black.php">拉黑QQ</a></li>
					   <li <?php if(('pageid')=='qqlist'){ echo'class="active"';}?>><a href="./qqlist.php">qq列表</a></li>
					   <li <?php if(('pageid')=='add'){ echo'class="active"';}?>><a href="./addqq.php">添加QQ</a></li>
                      </ul>
                    </li>
                    <li <?php if(('pageid')=='addqq' or ('pageid')=='qqlist' or ('pageid')=='sjconfig'){ echo'class="active"';}?>>
                        <a href="javascript:;"><i class="fa fa-qq"></i> <span class="nav-label">其他功能</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li <?php if(('pageid')=='qqlist'){ echo'class="active"';}?>><a href="yqconfig.php">邀请注册</a></li>
                            <li <?php if(('pageid')=='addqq'){ echo'class="active"';}?>><a href="mail.php">邮箱配置</a></li>
                            <li <?php if(('pageid')=='sjconfig'){ echo'class="active"';}?>><a href="sjconfig.php">代理升级</a></li>
                            <li <?php if(('pageid')=='hbconfig'){ echo'class="active"';}?>><a href="hbconfig.php">红包设置</a></li>
						</ul>
                    </li>
					<li <?php if(('pageid')=='kmlist' or ('pageid')=='so'){ echo'class="active"';}?>>
                        <a href="#"><i class="fa fa-list"></i> <span class="nav-label">卡密管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li <?php if(('pageid')=='kmlist'){ echo'class="active"';}?>><a href="kmlist.php">卡密列表</a></li>
                            <li <?php if(('pageid')=='so'){ echo'class="active"';}?>><a href="search.php">搜索卡密</a></li>
                        </ul>
                    </li>
					<li <?php if(('pageid')=='dllist' or ('pageid')=='dlrul' or ('pageid')=='dlkm' or ('pageid')=='dsearch'){ echo'class="active"';}?>>
                      <a href="javascript:;" >
                          <i class="fa fa-smile-o"></i>
                          <span>代理管理</span>
						  <span class="fa arrow"></span>
                      </a>
                      <ul class="nav nav-second-level">
                        <li <?php if(('pageid')=='dllist'){ echo'class="active"';}?> ><a href="daili.php">代理用户管理</a></li>
						<li <?php if(('pageid')=='dlrul'){ echo'class="active"';}?> ><a href="dlconfig.php">代理页面管理</a></li>
                        <li <?php if(('pageid')=='dlkm'){ echo'class="active"';}?> ><a href="dlkm.php">代理卡密管理</a></li>
						<li <?php if(('pageid')=='dsearch'){ echo'class="active"';}?> ><a href="dsearch.php">代理卡密搜索</a></li>
                      </ul>
                  </li>

					<li <?php if(('pageid')=='yqurl' or ('pageid')=='shop' or ('pageid')=='kucun' or ('pageid')=='tlist'){ echo'class="active"';}?>>
                      <a href="javascript:;" >
                          <i class="fa fa-cloud"></i>
                          <span>即时到账</span>
						  <span class="fa arrow"></span>
                      </a>
                      <ul class="nav nav-second-level">
                        <li <?php if(('pageid')=='yqurl'){ echo'class="active"';}?> ><a href="payset.php">信息配置</a></li>
                        <li <?php if(('pageid')=='shop'){ echo'class="active"';}?> ><a href="shop.php">商品管理</a></li>
                        <li <?php if(('pageid')=='kucun'){ echo'class="active"';}?> ><a href="kucun.php">库存管理</a></li>
                        <li <?php if(('pageid')=='tlist'){ echo'class="active"';}?> ><a href="tlist.php">交易列表</a></li>
                      </ul>
                  </li>
					<li <?php if(('pageid')=='fenzhan' or ('pageid')=='addfz' or ('pageid')=='fzconfig'){ echo'class="active"';}?>>
                      <a href="javascript:;" >
                          <i class="fa fa-repeat"></i>
                          <span>分站功能</span>
						  <span class="fa arrow"></span>
                      </a>
                      <ul class="nav nav-second-level">
                        <li <?php if(('pageid')=='fenzhan'){ echo'class="active"';}?> ><a href="fenzhan.php">分站列表</a></li>
                        <li <?php if(('pageid')=='addfz'){ echo'class="active"';}?> ><a href="addfz.php">添加分站</a></li>
                        <li <?php if(('pageid')=='fzconfig'){ echo'class="active"';}?> ><a href="fzconfig.php">分站设置</a></li>
                        <li <?php if(('pageid')=='fzconfig'){ echo'class="active"';}?> ><a href="fzurl.php">分站泛解析域名</a></li>
                      </ul>
                  </li>
					<li <?php if(('pageid')=='tiqu' or ('pageid')=='daoqi' or ('pageid')=='lahei'){ echo'class="active"';}?>>
                      <a href="javascript:;" >
                          <i class="fa fa-comment"></i>
                          <span>邮件功能</span>
						  <span class="fa arrow"></span>
                      </a>
                      <ul class="nav nav-second-level">
                        <li <?php if(('pageid')=='tiqu'){ echo'class="active"';}?> ><a href="tiqu.php">QQ状态提取</a></li>
                        <li <?php if(('pageid')=='daoqi'){ echo'class="active"';}?> ><a href="daoqi.php">到期邮件发送</a></li>
                        <li <?php if(('pageid')=='lahei'){ echo'class="active"';}?> ><a href="lahei.php">拉黑邮件发送</a></li>
                      </ul>
                  </li>
					<li>
                        <a href="gongg.php"><i class="fa fa-bell-o"></i> <span class="nav-label">公告编辑</span></a>
                    </li>
					<li>
                        <a href="login.php?logout" onClick="if(!confirm('确认退出登录吗？')){return false;}"><i class="fa fa-power-off"></i> <span class="nav-label">安全退出</span></a>
                    </li>
                </ul>
<div class="sidebar-plan">
  正常QQ数量
  <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
  </div>
</div>
<span class="space"><?php echo $count2?> / <?php echo $count?></span>
</div>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
</div>
<ul class="nav navbar-top-links navbar-right">
<li>
<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
<i class="fa fa-user"></i>管理
</a>
<ul class="dropdown-menu">
<li><a href="./" title="返回后台中心">后台中心</a></li>
<li><a href="addqqq.php" title="添加QQ进行QQ代挂">添加QQ</a></li>
<li><a href="qqlist.php" title="QQ列表">QQ管理</a></li>
<li><a href="kmlist.php">卡密列表</a></li>
</ul>
</li>
<li>
<li>
<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
<i class="fa fa-tasks"></i>功能列表
</a>
<ul class="dropdown-menu">
<li><a href="yqconfig.php">邀请注册</a></li>
<li><a href="mail.php">邮箱配置</a></li>
<li><a href="fzconfig.php">分站设置</a></li>
</ul>
</li>
<li class="dropdown hidden-xs">
<a href="./login.php?logout" onClick="if(!confirm('确认退出登录吗？')){return false;}">
<i class="fa fa-sign-out"></i> 退出
</a>
</li>
</ul>
</nav>
</div>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
      <h2><?=$title?></h2>
      <ol class="breadcrumb">
        <li> <a href="./">后台中心</a>
        </li>
        <li> <strong><?=$title?></strong>
        </li>
      </ol>
    </div>
    <div class="col-lg-2"></div>
  </div>