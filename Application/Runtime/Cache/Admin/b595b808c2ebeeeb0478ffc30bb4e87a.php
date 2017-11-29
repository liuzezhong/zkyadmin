<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>中铠云 | 管理系统</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="Public/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="Public/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Tagsinput -->
    <link rel="stylesheet" href="Public/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="Public/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.css">


    <link rel="stylesheet" href="Public/plugins/bootstrap-fileinput/css/fileinput.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="Public/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="Public/AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="Public/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="Public/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="Public/AdminLTE/plugins/iCheck/all.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="Public/AdminLTE/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="Public/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="Public/AdminLTE/bower_components/select2/dist/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="Public/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="Public/AdminLTE/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="Public/AdminLTE/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="Public/AdminLTE/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="Public/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="Public/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="Public/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="Public/css/admin/common.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo U('admin/index/index');?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>中铠</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>中铠云文化有限公司</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo $_SESSION['adminUser']['avatarurl']?>" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo $_SESSION['adminUser']['username']?></span>

                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo $_SESSION['adminUser']['avatarurl']?>" class="img-circle" alt="User Image">

                            <p>
                                <?php echo $_SESSION['adminUser']['username']?>
                                <small><?php echo $_SESSION['adminUser']['department']?>&nbsp;&nbsp;<?php echo $_SESSION['adminUser']['position']?></small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">个人信息</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo U('admin/login/loginOut');?>" class="btn btn-default btn-flat">退出登陆</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo $_SESSION['adminUser']['avatarurl']?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $_SESSION['adminUser']['username']?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $_SESSION['adminUser']['position']?></a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="查找...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->

        <?php
 $action_name = $Think.ACTION_NAME; $controller_name = $Think.CONTROLLER_NAME; ?>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">主菜单</li>
            <li <?php if(($action_name == 'index') AND ($controller_name == 'Index')): ?>class="active"<?php endif; ?>>
                <a href="<?php echo U('admin/index/index');?>">
                    <i class="fa fa-pie-chart"></i> <span>数据概览</span>
                    <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
            </span>
                </a>
            </li>

            <li <?php if($controller_name == 'Match'): ?>class=" treeview active"<?php else: ?>class="treeview"<?php endif; ?>>
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>赛事管理 </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li <?php if(($controller_name == 'Match') AND ($action_name == 'index')): ?>class="active"<?php endif; ?>><a href="<?php echo U('admin/match/index');?>"><i class="fa fa-circle-o"></i> 赛事列表</a></li>
                    <li <?php if(($controller_name == 'Match') AND ($action_name == 'create')): ?>class="active"<?php endif; ?>><a href="<?php echo U('admin/match/create');?>"><i class="fa fa-circle-o"></i> 赛事发布</a></li>
                </ul>
            </li>
            <li <?php if(($controller_name == 'Enrol') AND ($action_name == 'index')): ?>class="active"<?php endif; ?>>
                <a href="<?php echo U('admin/enrol/index');?>">
                    <i class="fa fa-edit"></i> <span>报名信息</span>
                </a>
            </li>
            <li <?php if(($controller_name == 'Payrecord') AND ($action_name == 'index')): ?>class="active"<?php endif; ?>>
                <a href="<?php echo U('admin/payrecord/index');?>">
                    <i class="fa fa-edit"></i> <span>支付记录</span>
                </a>
            </li>
            <li <?php if($controller_name == 'Team'): ?>class=" treeview active"<?php else: ?>class="treeview"<?php endif; ?>>
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>团队管理</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li <?php if(($controller_name == 'Team') AND ($action_name == 'index')): ?>class="active"<?php endif; ?>><a href="<?php echo U('admin/team/index');?>"><i class="fa fa-circle-o"></i> 团队列表</a></li>
                    <li <?php if(($controller_name == 'Team') AND ($action_name == 'create')): ?>class="active"<?php endif; ?>><a href="<?php echo U('admin/team/create');?>"><i class="fa fa-circle-o"></i> 新增团队</a></li>
                </ul>
            </li>
            <li <?php if($controller_name == 'User'): ?>class=" treeview active"<?php else: ?>class="treeview"<?php endif; ?>>
                <a href="#">
                    <i class="fa fa-user"></i> <span>用户管理</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li <?php if(($controller_name == 'User') AND ($action_name == 'wxuser')): ?>class="active"<?php endif; ?>><a href="<?php echo U('admin/user/wxuser');?>"><i class="fa fa-circle-o"></i> 微信用户</a></li>
                    <li <?php if(($controller_name == 'User') AND ($action_name == 'scanuser')): ?>class="active"<?php endif; ?>><a href="<?php echo U('admin/user/scanuser');?>"><i class="fa fa-circle-o"></i> 签到权限</a></li>
                    <li <?php if(($controller_name == 'User') AND ($action_name == 'adminuser')): ?>class="active"<?php endif; ?>><a href="<?php echo U('admin/user/adminuser');?>"><i class="fa fa-circle-o"></i> 后台用户</a></li>
                </ul>
            </li>
            <li <?php if($controller_name == 'Other'): ?>class=" treeview active"<?php else: ?>class="treeview"<?php endif; ?>>
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>其它工具</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li <?php if(($controller_name == 'Other') AND ($action_name == 'event')): ?>class="active"<?php endif; ?>><a href="<?php echo U('admin/other/event');?>"><i class="fa fa-circle-o"></i> 比赛类目</a></li>
                    <li <?php if(($controller_name == 'Other') AND ($action_name == 'category')): ?>class="active"<?php endif; ?>><a href="<?php echo U('admin/other/category');?>"><i class="fa fa-circle-o"></i> 赛事类别</a></li>
                    <li <?php if(($controller_name == 'Other') AND ($action_name == 'image')): ?>class="active"<?php endif; ?>><a href="<?php echo U('admin/other/image');?>"><i class="fa fa-circle-o"></i> 赛事图片</a></li>
                </ul>
            </li>

            <li class="header">系统提示</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>重要信息</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>警告信息</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>普通信息</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                数据概览
                <small>主控中心</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
                <li class="active">数据概览</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><?php echo ($matchCount); ?></h3>

                            <p>进行中的赛事</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">查看更多 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?php echo ($registerCount); ?></h3>

                            <p>今日报名人数</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">查看更多 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3><?php echo ($wxuserCount); ?></h3>

                            <p>平台用户总数</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">查看更多 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3><?php echo ($moneyCount); ?></h3>

                            <p>今日报名费用</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">查看更多 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <div class="row">
                <!--<div class="col-md-6">-->
                    <!--&lt;!&ndash; LINE CHART &ndash;&gt;-->
                    <!--<div class="box box-info">-->
                        <!--<div class="box-header with-border">-->
                            <!--<h3 class="box-title">每日新增用户数</h3>-->

                            <!--<div class="box-tools pull-right">-->
                                <!--<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>-->
                                <!--</button>-->
                                <!--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="box-body chart-responsive">-->
                            <!--<div class="chart" id="line-chart" style="height: 300px;"></div>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; /.box-body &ndash;&gt;-->
                    <!--</div>-->
                    <!--&lt;!&ndash; /.box &ndash;&gt;-->
                <!--</div>-->

                <div class="col-md-6">
                    <!-- Map box -->
                    <div class="box box-solid bg-light-blue-gradient">
                        <div class="box-header">
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                                        data-toggle="tooltip" title="缩小" style="margin-right: 5px;">
                                    <i class="fa fa-minus"></i></button>
                            </div>
                            <!-- /. tools -->

                            <i class="fa fa-map-marker"></i>

                            <h3 class="box-title">
                                小程序访问分布
                            </h3>
                        </div>
                        <div class="box-body">
                            <div id="world-map" style="height: 250px; width: 100%;"></div>
                        </div>
                        <!-- /.box-body-->
                        <div class="box-footer no-border">
                            <div class="row">
                                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                    <div id="sparkline-1"></div>
                                    <div class="knob-label">新用户访问</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                    <div id="sparkline-2"></div>
                                    <div class="knob-label">在线用户</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-xs-4 text-center">
                                    <div id="sparkline-3"></div>
                                    <div class="knob-label">已存在用户</div>
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.box -->
                </div>

                <div class="col-md-6">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="nav-tabs-custom">
                        <!-- Tabs within a box -->
                        <ul class="nav nav-tabs pull-right">
                            <li class="active"><a href="#revenue-chart" data-toggle="tab">年龄</a></li>
                            <li><a href="#sales-chart" data-toggle="tab">性别</a></li>
                            <li class="pull-left header"><i class="fa fa-inbox"></i> 性别及年龄分布</li>
                        </ul>
                        <div class="tab-content no-padding">
                            <!-- Morris chart - Sales -->
                            <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                            <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                        </div>
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!--<div class="col-md-5">-->
                    <!--&lt;!&ndash; solid sales graph &ndash;&gt;-->
                    <!--<div class="box box-solid bg-teal-gradient">-->
                        <!--<div class="box-header">-->
                            <!--<i class="fa fa-th"></i>-->

                            <!--<h3 class="box-title">报名费用支付记录</h3>-->

                            <!--<div class="box-tools pull-right">-->
                                <!--<button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>-->
                                <!--</button>-->
                                <!--<button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>-->
                                <!--</button>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="box-body border-radius-none">-->
                            <!--<div class="chart" id="line-chart" style="height: 250px;"></div>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; /.box-body &ndash;&gt;-->
                        <!--<div class="box-footer no-border">-->
                            <!--<div class="row">-->
                                <!--<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">-->
                                    <!--<input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"-->
                                           <!--data-fgColor="#39CCCC">-->

                                    <!--<div class="knob-label">个人报名</div>-->
                                <!--</div>-->
                                <!--&lt;!&ndash; ./col &ndash;&gt;-->
                                <!--<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">-->
                                    <!--<input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"-->
                                           <!--data-fgColor="#39CCCC">-->

                                    <!--<div class="knob-label">团队报名</div>-->
                                <!--</div>-->
                                <!--&lt;!&ndash; ./col &ndash;&gt;-->
                                <!--<div class="col-xs-4 text-center">-->
                                    <!--<input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"-->
                                           <!--data-fgColor="#39CCCC">-->

                                    <!--<div class="knob-label">其它</div>-->
                                <!--</div>-->
                                <!--&lt;!&ndash; ./col &ndash;&gt;-->
                            <!--</div>-->
                            <!--&lt;!&ndash; /.row &ndash;&gt;-->
                        <!--</div>-->
                        <!--&lt;!&ndash; /.box-footer &ndash;&gt;-->
                    <!--</div>-->
                    <!--&lt;!&ndash; /.box &ndash;&gt;-->
                <!--</div>-->
            </div>
            <!-- /.row -->
            <!-- Main row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2014-2017 <a href="https://www.zhongkaiyun.com">中铠云文化创意有限公司</a>.</strong> 保留所有权利
</footer>

<!-- Control Sidebar -->
<!--<aside class="control-sidebar control-sidebar-dark">-->
    <!--&lt;!&ndash; Create the tabs &ndash;&gt;-->
    <!--<ul class="nav nav-tabs nav-justified control-sidebar-tabs">-->
        <!--<li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>-->
        <!--<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>-->
    <!--</ul>-->
    <!--&lt;!&ndash; Tab panes &ndash;&gt;-->
    <!--<div class="tab-content">-->
        <!--&lt;!&ndash; Home tab content &ndash;&gt;-->
        <!--<div class="tab-pane" id="control-sidebar-home-tab">-->
            <!--<h3 class="control-sidebar-heading">Recent Activity</h3>-->
            <!--<ul class="control-sidebar-menu">-->
                <!--<li>-->
                    <!--<a href="javascript:void(0)">-->
                        <!--<i class="menu-icon fa fa-birthday-cake bg-red"></i>-->

                        <!--<div class="menu-info">-->
                            <!--<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>-->

                            <!--<p>Will be 23 on April 24th</p>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a href="javascript:void(0)">-->
                        <!--<i class="menu-icon fa fa-user bg-yellow"></i>-->

                        <!--<div class="menu-info">-->
                            <!--<h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>-->

                            <!--<p>New phone +1(800)555-1234</p>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a href="javascript:void(0)">-->
                        <!--<i class="menu-icon fa fa-envelope-o bg-light-blue"></i>-->

                        <!--<div class="menu-info">-->
                            <!--<h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>-->

                            <!--<p>nora@example.com</p>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a href="javascript:void(0)">-->
                        <!--<i class="menu-icon fa fa-file-code-o bg-green"></i>-->

                        <!--<div class="menu-info">-->
                            <!--<h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>-->

                            <!--<p>Execution time 5 seconds</p>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
            <!--</ul>-->
            <!--&lt;!&ndash; /.control-sidebar-menu &ndash;&gt;-->

            <!--<h3 class="control-sidebar-heading">Tasks Progress</h3>-->
            <!--<ul class="control-sidebar-menu">-->
                <!--<li>-->
                    <!--<a href="javascript:void(0)">-->
                        <!--<h4 class="control-sidebar-subheading">-->
                            <!--Custom Template Design-->
                            <!--<span class="label label-danger pull-right">70%</span>-->
                        <!--</h4>-->

                        <!--<div class="progress progress-xxs">-->
                            <!--<div class="progress-bar progress-bar-danger" style="width: 70%"></div>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a href="javascript:void(0)">-->
                        <!--<h4 class="control-sidebar-subheading">-->
                            <!--Update Resume-->
                            <!--<span class="label label-success pull-right">95%</span>-->
                        <!--</h4>-->

                        <!--<div class="progress progress-xxs">-->
                            <!--<div class="progress-bar progress-bar-success" style="width: 95%"></div>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a href="javascript:void(0)">-->
                        <!--<h4 class="control-sidebar-subheading">-->
                            <!--Laravel Integration-->
                            <!--<span class="label label-warning pull-right">50%</span>-->
                        <!--</h4>-->

                        <!--<div class="progress progress-xxs">-->
                            <!--<div class="progress-bar progress-bar-warning" style="width: 50%"></div>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a href="javascript:void(0)">-->
                        <!--<h4 class="control-sidebar-subheading">-->
                            <!--Back End Framework-->
                            <!--<span class="label label-primary pull-right">68%</span>-->
                        <!--</h4>-->

                        <!--<div class="progress progress-xxs">-->
                            <!--<div class="progress-bar progress-bar-primary" style="width: 68%"></div>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
            <!--</ul>-->
            <!--&lt;!&ndash; /.control-sidebar-menu &ndash;&gt;-->

        <!--</div>-->
        <!--&lt;!&ndash; /.tab-pane &ndash;&gt;-->
        <!--&lt;!&ndash; Stats tab content &ndash;&gt;-->
        <!--<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>-->
        <!--&lt;!&ndash; /.tab-pane &ndash;&gt;-->
        <!--&lt;!&ndash; Settings tab content &ndash;&gt;-->
        <!--<div class="tab-pane" id="control-sidebar-settings-tab">-->
            <!--<form method="post">-->
                <!--<h3 class="control-sidebar-heading">General Settings</h3>-->

                <!--<div class="form-group">-->
                    <!--<label class="control-sidebar-subheading">-->
                        <!--Report panel usage-->
                        <!--<input type="checkbox" class="pull-right" checked>-->
                    <!--</label>-->

                    <!--<p>-->
                        <!--Some information about this general settings option-->
                    <!--</p>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.form-group &ndash;&gt;-->

                <!--<div class="form-group">-->
                    <!--<label class="control-sidebar-subheading">-->
                        <!--Allow mail redirect-->
                        <!--<input type="checkbox" class="pull-right" checked>-->
                    <!--</label>-->

                    <!--<p>-->
                        <!--Other sets of options are available-->
                    <!--</p>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.form-group &ndash;&gt;-->

                <!--<div class="form-group">-->
                    <!--<label class="control-sidebar-subheading">-->
                        <!--Expose author name in posts-->
                        <!--<input type="checkbox" class="pull-right" checked>-->
                    <!--</label>-->

                    <!--<p>-->
                        <!--Allow the user to show his name in blog posts-->
                    <!--</p>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.form-group &ndash;&gt;-->

                <!--<h3 class="control-sidebar-heading">Chat Settings</h3>-->

                <!--<div class="form-group">-->
                    <!--<label class="control-sidebar-subheading">-->
                        <!--Show me as online-->
                        <!--<input type="checkbox" class="pull-right" checked>-->
                    <!--</label>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.form-group &ndash;&gt;-->

                <!--<div class="form-group">-->
                    <!--<label class="control-sidebar-subheading">-->
                        <!--Turn off notifications-->
                        <!--<input type="checkbox" class="pull-right">-->
                    <!--</label>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.form-group &ndash;&gt;-->

                <!--<div class="form-group">-->
                    <!--<label class="control-sidebar-subheading">-->
                        <!--Delete chat history-->
                        <!--<a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>-->
                    <!--</label>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.form-group &ndash;&gt;-->
            <!--</form>-->
        <!--</div>-->
        <!--&lt;!&ndash; /.tab-pane &ndash;&gt;-->
    <!--</div>-->
<!--</aside>-->
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="Public/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="Public/AdminLTE/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="Public/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Morris.js charts -->
<script src="Public/AdminLTE/bower_components/raphael/raphael.min.js"></script>
<script src="Public/AdminLTE/bower_components/morris.js/morris.min.js"></script>

<script src="Public/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script src="Public/plugins/bootstrap-tagsinput/typeahead.bundle.js"></script>

<script src="Public/plugins/bootstrap-fileinput/js/fileinput.js"></script>
<script src="Public/plugins/bootstrap-fileinput/js/locales/zh.js"></script>


<!-- DataTables -->
<script src="Public/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="Public/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- Select2 -->
<script src="Public/AdminLTE/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="Public/AdminLTE/bower_components/select2/dist/js/i18n/zh-CN.js"></script>
<!-- InputMask -->
<script src="Public/AdminLTE/plugins/input-mask/jquery.inputmask.js"></script>
<script src="Public/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="Public/AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="Public/AdminLTE/bower_components/moment/min/moment.min.js"></script>
<script src="Public/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="Public/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="Public/AdminLTE/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="Public/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js"></script>

<!-- Sparkline -->
<script src="Public/AdminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="Public/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="Public/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="Public/AdminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="Public/AdminLTE/bower_components/moment/min/moment.min.js"></script>
<script src="Public/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="Public/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="Public/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="Public/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="Public/AdminLTE/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="Public/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="Public/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="Public/AdminLTE/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Public/AdminLTE/dist/js/demo.js"></script>

<script src="Public/Dialog/layer/layer.js"></script>

<script src="Public/Dialog/dialog.js"></script>

<script src="Public/js/admin/common.js"></script>
</body>
</html>