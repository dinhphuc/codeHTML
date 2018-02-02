
<?php
session_start();
include'config.php';
$tonguser = mysql_result(mysql_query("select count(*) from `Account`"),0);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <title>Đình Phúc | Bot Cảm Xúc Chất Nhất Việt Nam</title>
    <meta name="description" content="Đình Phúc, Phúc Binz, Autolike">
	<link rel='shortcut icon' type='image/x-icon' href='/ico.ico' />	
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/c3js/c3.css">
    <link rel="stylesheet" href="lib/switchery/switchery.min.css">
    <link rel="stylesheet" href="lib/weather-icons/css/weather-icons.min.css">
    <link rel="stylesheet" href="lib/calendario/css/calendar.css">
    <link rel="stylesheet" href="lib/offlinejs/themes/offline-theme-dark.css">
    <link rel="stylesheet" href="css/bootstrap-override.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/library.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="lib/jqueryui/js/jquery-ui-1.10.4.custom.min.js"></script>
</head>
<body id="body">
    <!-- Header -->
    <header class="navbar main-header">
        <a class="navbar-brand" href="index.html">
           Đình Phúc
        </a>
        <ul class="nav navbar-nav navbar-left sidebar-toggle-ul">
            <li class="navbar-main hidden-lg hidden-md">
                <a href="javascript:void(0);" id="sidebar-toggle">
                    <span class="meta">
                        <span class="icon"><i class="fa fa-bars"></i></span>
                    </span>
                </a>
            </li>
            <li class="navbar-main hidden-sm hidden-xs">
                <a href="javascript:void(0);" id="sidebar-collapse">
                    <span class="meta">
                        <span class="icon"><i class="fa fa-outdent"></i></span>
                    </span>
                </a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-left">
            <form class="navbar-form navbar-left margintop" role="search">
                <div class="form-group">
                    <input type="text" class="form-control search" placeholder="Search">
                </div>
            </form>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown icons-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i></a>
                <ul class="dropdown-menu list-group">
                    <li class="list-group-item heading"><p>Chức Năng</p></li>
                    <li><a href="https://www.facebook.com/profile.php?id=100004574107394"><i class="fa fa-globe"></i> Thông Tin cá nhân</a></li>
                   <li><a href="https://www.facebook.com/profile.php?id=100004574107394"><i class="fa fa-user"></i> Theo Dõi</a></li>
                   <li><a href="#"><i class="fa fa-share"></i> Logout</a></li>
                 
                </ul>
            </li>

            <li class="dropdown">
                <a href="https://www.facebook.com/profile.php?id=100004574107394">
                            <span class="profile-address">Đình Phúc</span>
                            <img src="https://graph.fb.me/100004574107394/picture" class="img-circle" alt="">
                        </a>
                <ul class="dropdown-menu">
                    <li><a href="https://www.facebook.com/profile.php?id=100004574107394"><i class="fa fa-globe"></i> Thông Tin cá nhân</a></li>
                    <li><a href="https://www.facebook.com/profile.php?id=100004574107394"><i class="fa fa-user"></i> Theo Dõi</a></li>
                    <li><a href="#"><i class="fa fa-share"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>

    <div class="sidebar sidebar-left">
        <div class="content">
            <ul class="nav nav-tabs nav-justified sidetabs">
                <li class="active"><a href="#home" data-toggle="tab"><i class="fa fa-compass"></i> </a></li>
                <li><a href="#users" data-toggle="tab"><i class="fa fa-user"></i> </a></li>
                <li><a href="#email" data-toggle="tab"><i class="fa fa-envelope-o"></i></a></li>
            </ul>
            <div class="tab-content sidetabs">
                <div class="tab-pane active" id="home">
                    <ul class="sidemenu">
                        <li class="sidebar-header">Home</li>
                         <li class="active">
                            <a href="/index.php" >
                                <span class="icon"><i class="fa fa-dashboard"></i></span>
                                <span class="name">Tổng quan</span>
                                <span class="number pull-right"><code><?php echo $tonguser; ?></code></span>
                            </a>
                        </li>
                        <li>
                            <a href="/ListUser.php" target='_blank'>
                                <span class="icon"><i class="fa fa-users"></i></span>
                                <span class="name">Danh Sách Thành Viên</span>
                                <span class="number pull-right"><code><?php echo $tonguser; ?></code></span>
                            </a>
                        </li>
                         <li>
                             <a href="javascript:void(0);">
                               <span class="icon"><i class="fa fa-dashboard"></i></span>
                                <span class="name">Xem nhật kí</span>
                                <span class="arrow"><i class="arrow fa fa-angle-right pull-right"></i></span>
                                </a>
                            <ul class="sidebar-dropdown">
                                <li><a href="/Botcx.php" target='_blank'>Check Token die or live</a></li>   
                            </ul>
                        </li>
						<li>
                            <a href="/tool/index.php" target='_blank'>
                                <span class="icon"><i class="fa fa-cogs"></i></span>
                                <span class="name">Công cụ nâng cao</span>
                                <span class="number pull-right"><code><?php echo $tonguser; ?></code></span>
                            </a>
                        </li>
						 <li>
                            <a href="gettoken/index.php" target='_blank'>
                                <span class="icon"><i class="fa fa-tag"></i></span>
                                <span class="name">Get Token (IOS)</span>
                                <span class="number pull-right"><code><?php echo $tonguser; ?></code></span>
                            </a>
                        </li>
						<li>
                            <a href="/logout.php" target='_blank'>
                                <span class="icon"><i class="fa fa-sign-out"></i></span>
                                <span class="name">Đăng xuất</span>
                                <span class="number pull-right"><code><?php echo $tonguser; ?></code></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="users">
                    <ul class="sidemenu">
                        <li class="sidebar-header">Users</li>
                        <li class="active">
                          <a href="/index.php" target='_blank'>
                                <span class="icon"><i class="fa fa-home"></i></span>
                                <span class="name">Users</span>
                                <span class="number pull-right"><code><?php echo $tonguser; ?></code></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="email">
                    <ul class="sidemenu">
                        <li class="sidebar-header">Email</li>
                        <li>
                            <a href="/404.html">
                                <span class="icon"><i class="fa fa-inbox"></i></span>
                                <span class="name">Inbox</span>
                                <span class="number pull-right"><span class="label label-success">10</span></span>
                            </a>
                        </li>
                        <li>
                            <a href="/404.html">
                                <span class="icon"><i class="fa fa-edit"></i></span>
                                <span class="name">Compose</span>
                            </a>
                        </li>
                        <li>
                            <a href="/404.html">
                                <span class="icon"><i class="fa fa-file-o"></i></span>
                                <span class="name">View</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header -->
    <section id="main-wrapper">
        <h3 class="subtitle">Tổng Quan</h3>
        <hr />
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-filled">
                    <div class="panel-heading">
                        Thống Kê
                    </div>
                    <div class="panel-body">
                        <p>Thông tin người dùng <code>mới nhất</code> được cập nhật tại đây.</p>
                        <p>Số người dùng <code><?php echo $tonguser; ?></code> - Đã Phang <code><?php echo count($file)-2;?> </code> ID.</p>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>CX</th>
                                        <th>Name</th>
                                        <th>ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $infongdung = mysql_query("SELECT * FROM `Account` ORDER BY id DESC LIMIT 4");
                                    while ($getpuaru = mysql_fetch_array($infongdung)){
                                    ?>
                                    <tr>
                                        <td><?php echo $getpuaru[camxuc];?></td>
                                        <td><?php echo $getpuaru[name];?></td>
                                        <td><?php echo $getpuaru[user_id];?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/easypiechart/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="lib/c3js/d3.min.js"></script>
    <script type="text/javascript" src="lib/c3js/c3.min.js"></script>
    <script type="text/javascript" src="lib/switchery/switchery.min.js"></script>
    <script type="text/javascript" src="lib/customscroll/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="lib/jquery-easing/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="lib/calendario/js/jquery.calendario.js"></script>
    <script type="text/javascript" src="lib/offlinejs/offline.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/dashboard.js"></script>
</body>
</html>