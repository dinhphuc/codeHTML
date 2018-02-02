<?php
session_start();
include'config.php';
$user_check = $_SESSION['login_user'];
$query  = "SELECT * FROM `admin` WHERE username='$user_check' ";
	  $result = mysql_query($query);
      if( mysql_num_rows($result) == 1 ) 
      {   
          
      }
      else
      {
        header("location: Login.php");
       }
?>
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
    <meta name="description" content="Flatter - Flat Admin Theme">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="image/touch/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="image/touch/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="image/touch/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="image/touch/apple-touch-icon-57x57-precomposed.png">
    <link rel="shortcut icon" href="image/touch/apple-touch-icon.png">
   <link rel="stylesheet" href="lib/datatables/bootstrap/3/dataTables.bootstrap.css">
<link rel="stylesheet" href="lib/datatables/TableTools/css/TableTools.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
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
                                <li><a href="/Botcx1_20.php" target='_blank'>token từ 1-20</a></li>
                                <li><a href="/Botcx21_40.php" target='_blank'>token từ 21-40</a></li>
                                <li><a href="/Botcx41_60.php" target='_blank'>token từ 41-60</a></li>
                                <li><a href="/Botcx61_80.php" target='_blank'>token từ 61-80</a></li>
                                 <li><a href="/404.html" target='_blank'>token từ  80-100</a></li>
                            </ul>
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
        <h3 class="subtitle">Danh Sách user</h3>
        <hr />
        <div class="row">
			  <div class="col-md-12">
				  	<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">Bảng thành viên</h3>
					    			<div class="panel-options pull-right">
                                           <i class="fa fa-chevron-down"></i>
                                           <i class="fa fa-times"></i>
                                      </div>
					  </div>
					  <div class="panel-body">
					 		<p><a id="new" class="btn btn-success" href="/ThemToken.php" target='_blank' ><i class="fa fa-plus"></i>Thêm user</a></p><br>
					  		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline" role="grid">
					  		    <div class="btn-group pull-right tabletools-btn"><a class="btn btn-primary DTTT_button_collection" id="ToolTables_DataTables_Table_0_0">
					  		        <span>Tools <span class="caret"></span></span></a></div><div class="clear">
					  		        </div>
					  		        <div id="DataTables_Table_0_length" class="dataTables_length"><label>
					  		            <select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control">
					  		                <option value="100">100</option>
					  		           </select> records per page</label>
					  		           </div>
					  		       <div class="dataTables_filter" id="DataTables_Table_0_filter">
					  		           <label>Search: <input type="text" aria-controls="DataTables_Table_0" class="form-control">
					  		           </label>
					  		       </div><table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered editable-datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
									<thead>
									<tr role="row"><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 107px;">ID</th>
									<th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 210px;" aria-sort="descending" aria-label="Email: activate to sort column ascending">Name</th>
									<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 162px;" aria-label="Domain: activate to sort column ascending">Cảm Xúc</th>
									<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 81px;" aria-label="Status: activate to sort column ascending">Status</th>
									<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 68px;" aria-label="Price: activate to sort column ascending">Comments</th>
									<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 58px;" aria-label="Edit: activate to sort column ascending">Edit</th>
									<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 84px;" aria-label="Delete: activate to sort column ascending">Delete</th></tr>
								</thead>
								<tbody role="alert" aria-live="polite" aria-relevant="all">
                                   <?php
                                    $infongdung = mysql_query("SELECT * FROM `Account` ORDER BY id DESC");
                                    while ($getpuaru = mysql_fetch_array($infongdung)){
  
                                    ?>
                                     <tr class="4 odd">
                                        <td class=""><?php echo $getpuaru[id]; ?></td>
                                       
                                        <td class="" ><?php echo $getpuaru[name];?></td>
                                         <td class=""><?php echo $getpuaru[camxuc];?></td>
                                        <td class="center"> Not Active</td>
										<td class="center "> <?php echo $getpuaru[comments]; ?></td>
										<td class=" "><a class="edit" href="Update.php?id=<?php echo $getpuaru[id]; ?>">Edit</a></td>
										<td class=" "><a class="delete" href="Delete.php?id=<?php echo $getpuaru[id]; ?>">Delete</a></td>
                                    </tr>
                                    <?php } ?>
                           
									</tbody>
								</table><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 100 of <code><?php echo $tonguser; ?></code> user</div><div class="dataTables_paginate paging_bootstrap"><ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li class="next disabled"><a href="#">Next → </a></li></ul></div></div>

					  </div>
				  	</div>
 </div>
         
        </div>    
    </section>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="lib/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="lib/datatables/TableTools/js/TableTools.min.js"></script>
<script type="text/javascript" src="lib/datatables/bootstrap/3/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="lib/customscroll/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="lib/jquery-easing/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="lib/offlinejs/offline.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>