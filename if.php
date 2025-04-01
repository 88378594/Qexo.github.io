<?php
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


<!-- Mirrored from www.zi-han.net/theme/hplus/index_v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:18:46 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $ini['title']?> </title>
    <meta name="keywords" content="<?php echo $ini['keywords']?>" />
    <meta name="description" content="<?php echo $ini['description']?>" />

    <link rel="shortcut icon" href="favicon.ico"> <link href="/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">

    <!-- Morris -->
    <link href="/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/css/style.min862f.css?v=4.1.0" rel="stylesheet">

</head>

            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>首页引导</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="carousel.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">选项1</a>
                                </li>
                                <li><a href="#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content ">
                        <div class="carousel slide" id="carousel2">
                            <ol class="carousel-indicators">
                                <li data-slide-to="0" data-target="#carousel2" class="active"></li>
                                <li data-slide-to="1" data-target="#carousel2"></li>
                                <li data-slide-to="2" data-target="#carousel2" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img alt="image" class="img-responsive" src="<?php echo $ini1['ydt1']?>">
                                    <div class="carousel-caption">
									<a class="btn btn-info btn-rounded" href="<?php echo $ini1['ydl1']?>"><?php echo $ini1['ydw1']?></a>
                                    </div>
                                </div>
                                <div class="item ">
                                    <img alt="image" class="img-responsive" src="<?php echo $ini1['ydt2']?>">
                                    <div class="carousel-caption">
									<a class="btn btn-info btn-rounded" href="<?php echo $ini1['ydl2']?>"><?php echo $ini1['ydw2']?></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="image" class="img-responsive" src="<?php echo $ini1['ydt3']?>">
                                    <div class="carousel-caption">
									<a class="btn btn-info btn-rounded" href="<?php echo $ini1['ydl3']?>"><?php echo $ini1['ydw3']?></a>
                                    </div>
                                </div>
                            </div>
                            <a data-slide="prev" href="carousel.html#carousel2" class="left carousel-control">
                                <span class="icon-prev"></span>
                            </a>
                            <a data-slide="next" href="carousel.html#carousel2" class="right carousel-control">
                                <span class="icon-next"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
           </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>站点信息提示栏</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="notifications.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">选项1</a>
                                </li>
                                <li><a href="#">选项2</a>
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
                            <?php echo $ini1['xxw1']?>.
                        </div>
                        <div class="alert alert-info alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <?php echo $ini1['xxw2']?>.
                        </div>
                        <div class="alert alert-warning alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <?php echo $ini1['xxw3']?>.
                        </div>
                        <div class="alert alert-danger alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <?php echo $ini1['xxw4']?>.
                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>最新收录本站导航展示<small>以下站点发生交易后果自负 本站不担保交易</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">选项1</a>
                            </li>
                            <li><a href="#">选项2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                      </a>
                  </div>
              </div>
                    <div class="ibox-content text-center">
						<br/>
                      <div class="tooltip-demo">
					       <a class="btn btn-w-m btn-primary" href="http://www.12580sky.com">小高教学网</a>
                           <a class="btn btn-w-m btn-primary" href="http://www.12580sky.com">小高教学网</a>
						   <a class="btn btn-w-m btn-primary" href="http://heike.pw">收录中</a>
						   <a class="btn btn-w-m btn-primary" href="http://heike.pw">收录中</a>
						   <a class="btn btn-w-m btn-primary" href="http://heike.pw">收录中</a>
						   <a class="btn btn-w-m btn-primary" href="http://heike.pw">收录中</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
              </div>
          </div>
          </div>
</div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>活动类网站导航展示<small>以下站点发生交易后果自负 本站不担保交易</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">选项1</a>
                            </li>
                            <li><a href="#">选项2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                      </a>
                  </div>
              </div>
			                              </div>
                        </div>
                        <br>
              </div>
          </div>
          </div>
</div>
            </div>
        </div>
                    <div class="ibox-content text-center">
						<br/>
                        <div class="tooltip-demo">
                           <a class="btn btn-w-m btn-primary" href="<?php echo $ini2['zdlj1']?>"><?php echo $ini2['zdmc1']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini2['zdlj2']?>"><?php echo $ini2['zdmc2']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini2['zdlj3']?>"><?php echo $ini2['zdmc3']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini2['zdlj4']?>"><?php echo $ini2['zdmc4']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini2['zdlj5']?>"><?php echo $ini2['zdmc5']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini2['zdlj6']?>"><?php echo $ini2['zdmc6']?></a>
                        </div>
                        <br>
              </div>
			                              </div>
                        </div>
                        <br>
              </div>
          </div>
          </div>
</div>
            </div>
        </div>
			  <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>教程类网站导航展示<small>以下站点发生交易后果自负 本站不担保交易</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">选项1</a>
                            </li>
                            <li><a href="#">选项2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                      </a>
                  </div>
              </div>
                    <div class="ibox-content text-center">
						<br/>
                        <div class="tooltip-demo">
                           <a class="btn btn-w-m btn-primary" href="<?php echo $ini3['zdlj1']?>"><?php echo $ini3['zdmc1']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini3['zdlj2']?>"><?php echo $ini3['zdmc2']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini3['zdlj3']?>"><?php echo $ini3['zdmc3']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini3['zdlj4']?>"><?php echo $ini3['zdmc4']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini3['zdlj5']?>"><?php echo $ini3['zdmc5']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini3['zdlj6']?>"><?php echo $ini3['zdmc6']?></a>
                        </div>
                        <br>
              </div>
			                              </div>
                        </div>
                        <br>
              </div>
          </div>
          </div>
</div>
            </div>
        </div>
			  <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>卡盟类网站导航展示<small>以下站点发生交易后果自负 本站不担保交易</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">选项1</a>
                            </li>
                            <li><a href="#">选项2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                      </a>
                  </div>
              </div>
                    <div class="ibox-content text-center">
						<br/>
                        <div class="tooltip-demo">
                           <a class="btn btn-w-m btn-primary" href="<?php echo $ini4['zdlj1']?>"><?php echo $ini4['zdmc1']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini4['zdlj2']?>"><?php echo $ini4['zdmc2']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini4['zdlj3']?>"><?php echo $ini4['zdmc3']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini4['zdlj4']?>"><?php echo $ini4['zdmc4']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini4['zdlj5']?>"><?php echo $ini4['zdmc5']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini4['zdlj6']?>"><?php echo $ini4['zdmc6']?></a>
                        </div>
                        <br>
              </div>
			                              </div>
                        </div>
                        <br>
              </div>
          </div>
          </div>
</div>
            </div>
        </div>
			  <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>图片类网站导航展示<small>以下站点发生交易后果自负 本站不担保交易</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">选项1</a>
                            </li>
                            <li><a href="#">选项2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                      </a>
                  </div>
              </div>
                    <div class="ibox-content text-center">
						<br/>
                        <div class="tooltip-demo">
                           <a class="btn btn-w-m btn-primary" href="<?php echo $ini5['zdlj1']?>"><?php echo $ini5['zdmc1']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini5['zdlj2']?>"><?php echo $ini5['zdmc2']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini5['zdlj3']?>"><?php echo $ini5['zdmc3']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini5['zdlj4']?>"><?php echo $ini5['zdmc4']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini5['zdlj5']?>"><?php echo $ini5['zdmc5']?></a>
						   <a class="btn btn-w-m btn-primary" href="<?php echo $ini5['zdlj6']?>"><?php echo $ini5['zdmc6']?></a>
                        </div>
                        <br>
              </div>
			                              </div>
                        </div>
                        <br>
              </div>
          </div>
          </div>
</div>
            </div>
        </div>
</div>
<script src="js/jquery.min.js?v=2.1.4"></script>
<script src="js/bootstrap.min.js?v=3.3.6"></script>
<script src="js/plugins/flot/jquery.flot.js"></script>
<script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="js/plugins/flot/jquery.flot.spline.js"></script>
<script src="js/plugins/flot/jquery.flot.resize.js"></script>
<script src="js/plugins/flot/jquery.flot.pie.js"></script>
<script src="js/plugins/flot/jquery.flot.symbol.js"></script>
<script src="js/plugins/peity/jquery.peity.min.js"></script>
<script src="js/demo/peity-demo.min.js"></script>
<script src="js/content.min.js?v=1.0.0"></script>
<script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="js/plugins/easypiechart/jquery.easypiechart.js"></script>
<script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="js/demo/sparkline-demo.min.js"></script>
<script>
        $(document).ready(function(){$(".chart").easyPieChart({barColor:"#f8ac59",scaleLength:5,lineWidth:4,size:80});$(".chart2").easyPieChart({barColor:"#1c84c6",scaleLength:5,lineWidth:4,size:80});var data2=[[gd(2012,1,1),7],[gd(2012,1,2),6],[gd(2012,1,3),4],[gd(2012,1,4),8],[gd(2012,1,5),9],[gd(2012,1,6),7],[gd(2012,1,7),5],[gd(2012,1,8),4],[gd(2012,1,9),7],[gd(2012,1,10),8],[gd(2012,1,11),9],[gd(2012,1,12),6],[gd(2012,1,13),4],[gd(2012,1,14),5],[gd(2012,1,15),11],[gd(2012,1,16),8],[gd(2012,1,17),8],[gd(2012,1,18),11],[gd(2012,1,19),11],[gd(2012,1,20),6],[gd(2012,1,21),6],[gd(2012,1,22),8],[gd(2012,1,23),11],[gd(2012,1,24),13],[gd(2012,1,25),7],[gd(2012,1,26),9],[gd(2012,1,27),9],[gd(2012,1,28),8],[gd(2012,1,29),5],[gd(2012,1,30),8],[gd(2012,1,31),25]];var data3=[[gd(2012,1,1),800],[gd(2012,1,2),500],[gd(2012,1,3),600],[gd(2012,1,4),700],[gd(2012,1,5),500],[gd(2012,1,6),456],[gd(2012,1,7),800],[gd(2012,1,8),589],[gd(2012,1,9),467],[gd(2012,1,10),876],[gd(2012,1,11),689],[gd(2012,1,12),700],[gd(2012,1,13),500],[gd(2012,1,14),600],[gd(2012,1,15),700],[gd(2012,1,16),786],[gd(2012,1,17),345],[gd(2012,1,18),888],[gd(2012,1,19),888],[gd(2012,1,20),888],[gd(2012,1,21),987],[gd(2012,1,22),444],[gd(2012,1,23),999],[gd(2012,1,24),567],[gd(2012,1,25),786],[gd(2012,1,26),666],[gd(2012,1,27),888],[gd(2012,1,28),900],[gd(2012,1,29),178],[gd(2012,1,30),555],[gd(2012,1,31),993]];var dataset=[{label:"订单数",data:data3,color:"#1ab394",bars:{show:true,align:"center",barWidth:24*60*60*600,lineWidth:0}},{label:"付款数",data:data2,yaxis:2,color:"#464f88",lines:{lineWidth:1,show:true,fill:true,fillColor:{colors:[{opacity:0.2},{opacity:0.2}]}},splines:{show:false,tension:0.6,lineWidth:1,fill:0.1},}];var options={xaxis:{mode:"time",tickSize:[3,"day"],tickLength:0,axisLabel:"Date",axisLabelUseCanvas:true,axisLabelFontSizePixels:12,axisLabelFontFamily:"Arial",axisLabelPadding:10,color:"#838383"},yaxes:[{position:"left",max:1070,color:"#838383",axisLabelUseCanvas:true,axisLabelFontSizePixels:12,axisLabelFontFamily:"Arial",axisLabelPadding:3},{position:"right",clolor:"#838383",axisLabelUseCanvas:true,axisLabelFontSizePixels:12,axisLabelFontFamily:" Arial",axisLabelPadding:67}],legend:{noColumns:1,labelBoxBorderColor:"#000000",position:"nw"},grid:{hoverable:false,borderWidth:0,color:"#838383"}};function gd(year,month,day){return new Date(year,month-1,day).getTime()}var previousPoint=null,previousLabel=null;$.plot($("#flot-dashboard-chart"),dataset,options);var mapData={"US":298,"SA":200,"DE":220,"FR":540,"CN":120,"AU":760,"BR":550,"IN":200,"GB":120,};$("#world-map").vectorMap({map:"world_mill_en",backgroundColor:"transparent",regionStyle:{initial:{fill:"#e4e4e4","fill-opacity":0.9,stroke:"none","stroke-width":0,"stroke-opacity":0}},series:{regions:[{values:mapData,scale:["#1ab394","#22d6b1"],normalizeFunction:"polynomial"}]},})});
    </script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>


<!-- Mirrored from www.zi-han.net/theme/hplus/index_v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:18:49 GMT -->
</html>

