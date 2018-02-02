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
$id= mysql_real_escape_string($_GET["id"]);
$id = (int)$id;
if($id!=0){}else
{
     header("location: 404.html");
}
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
        <ol class="breadcrumb subtitle pull-right">
            <li><a href="index.html">Home</a></li>
            <li class="active">Chỉnh sửa user</li>
        </ol>
        <h3 class="subtitle">Chỉnh sửa user</h3>
        <hr />
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Chỉnh sửa user</h3>
                        <div class="panel-options pull-right">
                            <i class="fa fa-chevron-down"></i>
                            <i class="fa fa-times"></i>
                        </div>
                    </div>
                    <div class="panel-body">
                        <!-- Horizontal Form -->
                        <?php
                         	$laytoken = mysql_query("SELECT * FROM `Account` WHERE ID=$id");
	                        $getpu = mysql_fetch_array($laytoken);
	                        $result = mysql_query("SELECT * FROM `Account` WHERE ID=$id");
                        	if( $result && mysql_num_rows($result) == 1 ) 
                            {}
                        	 else 
                             {
                                echo '<center>Không tồn tại ID này</centet>';
                                return ;
                             }
    	                        $tk= $getpu['Token'];
                            	$camxuc= $getpu['camxuc'];
                        	
                        ?>
                        <form class="form-horizontal" role="form" action="" method="POST" >
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">ID </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txtID" name="txtID" value="<?php echo $id; ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">user id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txtUserID"  name="txtUserID" placeholder="user id" value="<?php echo $getpu['user_id'];?>">
                                </div>
                                <span class="col-sm-12 control-label" id="err_txtUserID" style="display:none;color: red;"></span>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Tên người dùng</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Tên người dùng"  value="<?php echo $getpu['name'];?>">
                                </div>
                                <span class="col-sm-12 control-label" id="err_txtName" style="display:none;color: red;"></span>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Token (*)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txtToken"  name="txtToken" placeholder="Token"  value="<?php echo $getpu['Token'];?>">
                                </div>
                                <span class="col-sm-12 control-label" id="err_txtToken" style="display:none;color: red;"></span>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Cảm Xúc</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txtCamXuc" name="txtCamXuc" placeholder="(LOVE ,HAHA ,ANGRY, SAD, LIKE)"  value="<?php echo $getpu['camxuc'];?>">
                                </div>
                                <span class="col-sm-12 control-label" id="err_txtCamXuc" style="display:none;color: red;"></span>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Nội dung comments</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txtComments" name="txtComments" placeholder="comments"  value="<?php echo $getpu['comments'];?>">
                                </div>
                                <span class="col-sm-12 control-label" id="err_txtComments" style="display:none;color: red;"></span>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" name="btnLogin" class="btn btn-success" id="btnCheck"> Update người dùng</button>
                                </div>

                            </div>
                            <div style="display:none">
                                <button type="submit" id="btnSubmit"></button>
                            </div>
                        </form>
                        <!-- Horizontal form ends -->
                    </div>
                </div>
            </div>

            <!-- col-6 -->
        </div>
        <!-- row -->
    </section>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/customscroll/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="lib/jquery-easing/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="lib/offlinejs/offline.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/validate.js"></script>
    <script>
        var ListThanhphanGoc = function () {
            this.danhsach = new Array();
            this.ThemThanhphan = function (thanhphan) {
                this.danhsach.push(thanhphan);
            }
            this.Kiemtratoanbo = function () {
                for (var i = 0; i < this.danhsach.length; i++) {
                    if(!this.danhsach[i].Kiemtra())
                    {
                        return false;
                    }
                }
                return true;
            }
        }
        var lstTp = new ListThanhphanGoc();
       
        //txtUserID
        var txtUserID = new ThanhphanGoc();
        txtUserID.id = "txtUserID";
        txtUserID.ThemHamiemTra("IsEmpty", "Không được để trống UserID", "");
        lstTp.ThemThanhphan(txtUserID);

        //txtName
        var txtName = new ThanhphanGoc();
        txtName.id = "txtName";
        txtName.ThemHamiemTra("IsEmpty", "Không Được để trống Name", "");
        lstTp.ThemThanhphan(txtName);

        //Token (*)
        var Token = new ThanhphanGoc();
        Token.id = "txtToken";
        Token.ThemHamiemTra("IsEmpty", "Không Được để trống Token", "");
        lstTp.ThemThanhphan(Token);

        //txtCamXuc 
        var CamXuc = new ThanhphanGoc();
        CamXuc.id = "txtCamXuc";
        CamXuc.ThemHamiemTra("IsEmpty", "Không Được để trống Cam Xuc", "");
        lstTp.ThemThanhphan(CamXuc);

        //txtComment
        var Comments = new ThanhphanGoc();
        Comments.id = "txtComments";
        Comments.ThemHamiemTra("IsEmpty", "Không Được để trống Comments", "");
        lstTp.ThemThanhphan(Comments);



        $("#btnCheck").click(function () {
           if(lstTp.Kiemtratoanbo());
           {
                  $("#btnSubmit").click();
           }
        });
    </script>
</body>
</html>

<?php
session_start();
include'config.php';
$id=$id;
$user_id=$_POST[txtUserID];
$name=$_POST[txtName];
$Token=$_POST[txtToken];
$camxuc=$_POST[txtCamXuc];
$comments=$_POST[txtComments];

echo '<center>Thành Công Token $name</center>';

if($id==null||$user_id==null||$name==null||$Token==null||$camxuc==null||$comments==null)
{return;}
       mysql_query(
          "UPDATE
            `Account`
        SET
            `id` = '" .$id . "'  ,
            `user_id` = '" .$user_id . "' ,
            `name` = '" .$name . "' ,
            `Token` = '" .$Token . "' ,
            `camxuc` = '" .$camxuc . "' ,
            `comments` = '" .$comments . "' 
        WHERE
              `id`=$id
      ");
      echo '<script type="text/javascript">alert("Thành Công!");</script>';
 
?>		


