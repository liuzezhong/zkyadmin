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
                修改赛事信息
                <small>编辑赛事</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 赛事管理</a></li>
                <li class="active">编辑赛事</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- SELECT2 EXAMPLE -->
            <div class="box box-default">
                <div class="box-header">

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>赛事名称</label>
                                <input type="text" class="form-control" name="match_title" placeholder="请输入赛事名称" value="<?php echo ($match["match_title"]); ?>">
                            </div>
                            <div class="form-group">
                                <label>赛事主办方</label>
                                <input type="text" class="form-control" name="sponsor" placeholder="请输入主办方名" value="<?php echo ($match["sponsor"]); ?>">
                            </div>
                            <div class="form-group">
                                <label>赛事负责人</label>
                                <input type="text" class="form-control" name="leader" placeholder="请输入负责人姓名" value="<?php echo ($match["leader"]); ?>">
                            </div>
                            <div class="form-group">
                                <label>最大参赛人数</label>
                                <input type="text" class="form-control" name="headcount" placeholder="请输入最多参赛人数" value="<?php echo ($match["headcount"]); ?>">
                            </div>
                            <div class="form-group">
                                <label>比赛开始截止时间</label>
                                <!--<input type="text" class="form-control pull-right" id="reservationtime">-->
                                <input type="text" class="form-control" name="match_time" id="reservationtime" value="<?php echo ($match["match_time"]); ?>">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>赛事规程</label>
                                <textarea class="form-control" rows="3" placeholder="请输入详细的赛事规程" name="match_detail" ><?php echo ($match["match_detail"]); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>比赛项目-报名费用-报名方式（格式如：男女混双-10-0,输入完回车,报名方式0为个人，1为团队）</label>
                                <input type="text" class="form-control" value="<?php echo ($match["category"]); ?>" data-role="tagsinput" name="category"/>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>赛事类型</label>
                                <select class="form-control select2" style="width: 100%;" id="event_id">
                                    <option value="0" selected="selected">请选择一个类型</option>
                                    <?php if(is_array($events)): $i = 0; $__LIST__ = $events;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$event): $mod = ($i % 2 );++$i; if($event["selected"] == 1): ?><option value="<?php echo ($event["event_id"]); ?>" selected="selected"><?php echo ($event["name"]); ?></option>
                                            <?php else: ?>
                                            <option value="<?php echo ($event["event_id"]); ?>"><?php echo ($event["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>赛事承办方</label>
                                <input type="text" class="form-control" name="undertake" placeholder="请输入承办名" value="<?php echo ($match["undertake"]); ?>">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>负责人手机</label>
                                <input type="text" class="form-control" name="leader_tel" placeholder="请输入负责人手机号码" value="<?php echo ($match["leader_tel"]); ?>">
                            </div>
                            <div class="form-group">
                                <label>每人可报项数(0为无限制)</label>
                                <input type="text" class="form-control" name="register_max" placeholder="请输入每人可报名项目，0为无限制" value="<?php echo ($match["register_max"]); ?>">
                            </div>
                            <div class="form-group">
                                <label>报名开始截止时间</label>
                                <input type="text" class="form-control" name="enrol_time" id="reservationtime2" value="<?php echo ($match["enrol_time"]); ?>">
                            </div>
                            <div class="form-group">
                                <label>比赛地址</label>
                                <textarea class="form-control" rows="3" placeholder="如：无锡市梁溪区运河西路222号" name="address"><?php echo ($match["address"]); ?></textarea>
                            </div>
                            <div class="form-group">
                                <samll class="text-danger">注：赛事图片请前往图片中心编辑</samll>
                            </div>
                            <input type="hidden" name="match_id" value="<?php echo ($match["match_id"]); ?>">
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="button" class="form-control btn btn-primary" id="eidt-match">修改赛事信息</button>
                        </div>
                    </div>
                </div>
            </div>
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