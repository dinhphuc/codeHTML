<?php defined('kBz') or die('Access Deny!'); ?>
<!DOCTYPE html>
<html lang="vi-VN">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="<?php echo $upcase_domain; ?> - Hệ Thống Auto Like, Bot Like, Boom Like, Sim Simi Hiện Đại Nhất Hiện Nay. Với Các Công Nghệ Hiện Đại, Đảm Bảo Bạn Sẽ Thấy Thú Vị Khi Sử Dụng Auto - Bot Tại Đây." />
	<meta name="keywords" content="tang like, hack like facebook, buff like, auto cam xuc , bot cam xuc , bot like , bot ex like , hack like viet nam, <?php echo $domain; ?>, trang web hack like facebook, auto like viet nam, buff like viet nam,cách tăng like stt facebook, hack like ảnh facebook, auto cam xuc , bot cam xuc , bot like , bot ex like  hack like comment facebook, tăng like ảnh facebook, cách hack tăng like,share code auto like, xin code auto like, web auto like, auto sub , auto share , hack share , hack comments , hack bình luận, auto like sub , đọc trộm tin nhắn facebook , xem tin nhắn facebook không cần mật khẩu " />
	<meta name="author" content="<?php echo $admin_name; ?>" />
	<meta name="copyright" content="Copyright © 2018 by Phuc Binz <?php echo $admin_name; ?>" />
	<meta name="robots" content="index, follow" />
	<title><?php echo $upcase_domain; ?> | AUTOLIKE | BOTLIKE | BOOMLIKE | SIMSIMI | VIPLIKE</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="content-type" content="text/html; UTF-8" />
	<meta http-equiv="cache-control" content="cache" />
	<meta http-equiv="content-language" content="vi" />
	<meta http-equiv="revisit-after" content="1 days" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="geo.region" content="VN" />
	<meta name="geo.placename" content="TP.Hồ Chí Minh" />
	<meta name="google-site-verification" content="X7RXHrHGGl2pUhGKQTNqPxHluEpYGhShLDUX7lCyr2k" />
	<meta name="google-translate-customization" content="cf71270cf62d50cb-4e3fbed6dada40a9-gc44146233a047483-b" />
	<meta name="detectify-verification" content="a2d8cdb86af5352ff7f7da736642689d" />
	<meta property="og:url" content="<?php echo $domain; ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="<?php echo $upcase_domain; ?>|AUTOLIKE|BOTLIKE|BOOMLIKE|SIMSIMI|VIPLIKE - Còn Rât Nhiều Chức Năng Mà Bạn Chưa Ngờ Đến, Hãy Truy Cập Ngay Hôm Nay Để Nhận Nhiều Niềm Vui Nào" />
	<meta property="og:image" content="https://i.imgur.com/TXL5T8U.jpg" />
	<meta property="og:locale" content="vi_VN" />
	<meta property="article:author" content="<?php echo $admin_name; ?>" />
	<meta property="article:publisher" content="https://www.facebook.com/<?php echo $admin_id; ?>" />
	<link href="images/favicon.ico" rel="shortcut icon" />
	<link href="styles/css/ken.css" rel="stylesheet" />

    <!--[if lt IE 9]>
	<script src="styles/js/html5shiv.js"></script>
	<script src="styles/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!--<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-90935031-2', 'auto');
		ga('send', 'pageview');
	</script>-->
<?php
if(!isset($_SESSION['token_default'])){
?>
	<div id="background-loading"><div id="loading"></div></div>
<?php
}
?>
	<section id="container">
		<header class="header white-bg">
			<div class="sidebar-toggle-box">
				<div class="fa fa-bars tooltips" data-placement="right" data-original-title="Thanh Công Cụ"></div>
			</div>
			<a href="./" class="logo" target="_blank"><?php echo $upcase_domain; ?></a>
			<div class="nav notify-row" id="top_menu">
				<ul class="nav top-menu">
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<i class="fa fa-tasks"></i>
							<span class="badge bg-success"><?php if(!IS_WIN) echo '5'; else echo '3'; ?></span>
						</a>
						<ul class="dropdown-menu extended tasks-bar">
							<div class="notify-arrow notify-arrow-green"></div>
							<li>
								<p class="green">You have 5 pending tasks</p>
							</li>
							<li>
								<a href="#">
									<div class="task-info">
										<div class="desc"><?php echo $upcase_domain; ?> V<?php echo $version; ?></div>
										<div class="percent">95%</div>
                                    </div>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="task-info">
										<div class="desc">Database Update</div>
										<div class="percent"><?php echo $number_rand; ?>%</div>
									</div>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo $number_rand; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $number_rand; ?>%">
										</div>
									</div>
								</a>
                            </li>
							<li>
								<a href="#">
									<div class="task-info">
										<div class="desc">Disk Used</div>
										<div class="percent"><?php echo $number_disk; ?>%</div>
									</div>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $number_disk; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $number_disk; ?>%">
										</div>
									</div>
								</a>
							</li>
<?php
if(!IS_WIN){
?>
							<li>
								<a href="#">
									<div class="task-info">
										<div class="desc">Ram Used</div>
										<div class="percent"><?php echo $sysinfo['memPercent']; ?>%</div>
									</div>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $sysinfo['memPercent']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $sysinfo['memPercent']; ?>%">
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="task-info">
										<div class="desc">Swap Used</div>
										<div class="percent"><?php echo $sysinfo['swapPercent']; ?>%</div>
									</div>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="<?php echo $sysinfo['swapPercent']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $sysinfo['swapPercent']; ?>%">
										</div>
									</div>
								</a>
							</li>
<?php
}
?>
							<li class="external">
								<a href="#">See All Tasks</a>
							</li>
						</ul>
					</li>
					<li id="header_inbox_bar" class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle">
							<i class="fa fa-envelope-o"></i>
							<span class="badge bg-important"><?php if($number_inbox==0) echo '1'; else echo $number_inbox; ?></span>
						</a>
						<ul class="dropdown-menu extended inbox">
							<div class="notify-arrow notify-arrow-red"></div>
							<li>
								<p class="red">You have <?php if($number_inbox==0) echo '1'; else echo $number_inbox; ?> new messages</p>
							</li>
<?php
if($number_inbox==0){
?>
							<li>
								<a style="white-space:normal;">
									<span class="photo"><img alt="Avatar BOT" src="images/profile_bot.png" style="width:39px;hight:39px;"></span>
									<span class="subject">
										<span class="from"><font class="bot">BOT</font></span>
										<span class="time">Vừa Xong</span>
									</span>
									<span class="message">Chúc Bạn Online Vui Vẻ.</span>
								</a>
							</li>
<?php
}
else{
	foreach($shoutbox as $data){
?>
							<li>
								<a style="white-space:normal;">
<?php
        if($data['id_user']==$admin_id)
            $data['name'] = '<font class="admin">'.$data['name'].'</font>';
?>
									<?php echo $data['name'] . ' : ' . $data['message'] . "\n"; ?>
									<time><?php echo $work->time_before($data['time']); ?></time>
								</a>
							</li>
<?php
	}
}
?>
							<li>
								<a href="#">See all messages</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="top-nav ">
				<ul class="nav pull-right top-menu">
					<li>
						<input type="text" class="form-control search" placeholder="Search">
					</li>
<?php
if(isset($_SESSION['id_user'])){
?>
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<img alt="Image User" src="https://graph.facebook.com/<?php echo $_SESSION['id_user']; ?>/picture?width=100&height=100" style="width: 29px; hight: 29px;">
							<span class="bot" style="font-size: 12px;"><?php echo $_SESSION['name']; ?></span>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu extended logout">
							<div class="log-arrow-up"></div>
							<li><a href="profile.kBz"><i class="fa fa-suitcase"></i> Trang Cá Nhân</a></li>
							<li><a href="setting.kBz"><i class="fa fa-cog fa-spin"></i> Cài Đặt</a></li>
							<li><a href="notice.kBz"><i class="fa fa-bell-o"></i> Thông Báo</a></li>
							<li><a href="logout.kBz"><i class="fa fa-key"></i> Đăng Xuất</a></li>
						</ul>
					</li>
<?php
}
else{
?>
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<img alt="Image User" src="images/profile.png" style="width:29px;hight:29px;">
							<span class="bot" style="font-size: 12px;">Guest</span>
						</a>
					</li>
<?php
}
?>
				</ul>
			</div>
		</header>
		<aside>
			<div id="sidebar"  class="nav-collapse ">
				<ul class="sidebar-menu" id="nav-accordion">
<?php
if(!isset($_SESSION['id_user'])){
?>
					<p class="centered"><img alt="Image User" class="img-circle" src="images/profile.png" style="width:55px;hight:55px;"></p>
					<h5 class="centered">Chào Khách</h5>
					<h6 style="color: #c9ea65; text-align: center;">Bạn Chưa Đăng Nhập</h6>
<?php
}
else{
?>
					<p class="centered"><a href="profile.kBz"><img alt="Image User" class="img-circle" src="https://graph.facebook.com/<?php echo $_SESSION['id_user']; ?>/picture?width=100&height=100" style="width:55px;hight:55px;"></a></p>
					<h5 class="centered"><?php echo $_SESSION['name']; ?></h5>
					<h6 style="color: #c9ea65; text-align: center;"><i class="fa fa-cc-visa"></i> <?php echo number_format($money); ?> Xu</h6>
<?php
}
?>
					<li>
						<a class="active" target="_blank" href="<?php echo $domain; ?>">
							<i class="fa fa-dashboard"></i>
							<span>TRANG CHỦ</span>
						</a>
					</li>
					<li>
						<a href="about.kBz">
							<i class="fa fa-info-circle"></i>
							<span>GIỚI THIỆU</span>
						</a>
					</li>
<?php
if(isset($_SESSION['id_user'])){
?>
					<li class="sub-menu">
						<a>
							<i class="fa fa-thumbs-o-up"></i>
							<span>MENU AUTO</span>
						</a>
						<ul class="sub">
							<li><a href="/auto-like.kBz"><i class="fa fa-thumbs-o-up"></i> AUTO LIKE</a></li>
							<li><a href="/auto-reaction.kBz"><i class="fa fa-thumbs-o-up"></i> AUTO CẢM XÚC</a></li>
							<li><a href="/auto-comment.kBz"><i class="fa fa-thumbs-o-up"></i> AUTO BÌNH LUẬN</a></li>
							<li><a href="/auto-share.kBz"><i class="fa fa-thumbs-o-up"></i> AUTO CHIA SẺ</a></li>
							<li><a href="/auto-follow.kBz"><i class="fa fa-thumbs-o-up"></i> AUTO THEO DÕI</a></li>
							<li><a href="/auto-friend.kBz"><i class="fa fa-thumbs-o-up"></i> AUTO KẾT BẠN</a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a>
							<i class="fa fa-rocket"></i>
							<span>MENU BOT</span>
						</a>
						<ul class="sub">
							<li><a href="/bot-like.kBz"><i class="fa fa-rocket"></i> BOT LIKE</a></li>
							<li><a href="/bot-exlike.kBz"><i class="fa fa-rocket"></i> BOT EX LIKE</a></li>
							<li><a href="/bot-reaction.kBz"><i class="fa fa-rocket"></i> BOT CẢM XÚC</a></li>
							<li><a href="/bot-exreaction.kBz"><i class="fa fa-rocket"></i> BOT EX CẢM XÚC</a></li>
							<li><a href="/bot-interact.kBz"><i class="fa fa-rocket"></i> BOT TƯƠNG TÁC</a></li>
							<li><a href="/bot-comment.kBz"><i class="fa fa-rocket"></i> BOT BÌNH LUẬN</a></li>
							<li><a href="/bot-relike.kBz"><i class="fa fa-rocket"></i> BOT TRẢ LIKE</a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a>
							<i class="fa fa-send-o"></i>
							<span>MENU BÃO</span>
						</a>
						<ul class="sub">
							<li><a href="/boom-like.kBz"><i class="fa fa-send-o"></i> BÃO LIKE</a></li>
							<li><a href="/boom-reaction.kBz"><i class="fa fa-send-o"></i> BÃO CẢM XÚC</a></li>
							<li><a href="/boom-comment.kBz"><i class="fa fa-send-o"></i> BÃO BÌNH LUẬN</a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a>
							<i class="fa fa-cc-visa"></i>
							<span>MENU VIP</span>
						</a>
						<ul class="sub">
							<li><a href="/vip-buy.kBz"><i class="fa fa-cc-mastercard"></i> MUA VIP</a></li>
							<li><a href="/vip-recharge.kBz"><i class="fa fa-cc-paypal"></i> NẠP TIỀN</a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a>
							<i class="fa fa-gg-circle"></i>
							<span>MENU TOOL</span>
						</a>
						<ul class="sub">
							<li><a href="/tool-postgroup.kBz"><i class="fa fa-gg-circle"></i> AUTO ĐĂNG NHÓM</a></li>
							<li><a href="/tool-postfriend.kBz"><i class="fa fa-gg-circle"></i> AUTO ĐĂNG TƯỜNG</a></li>
							<li><a href="/tool-postfanpage.kBz"><i class="fa fa-gg-circle"></i> AUTO ĐĂNG TRANG</a></li>
							<li><a href="/tool-addfriend.kBz"><i class="fa fa-gg-circle"></i> AUTO ĐỒNG Ý KB</a></li>
							<li><a href="/tool-poke.kBz"><i class="fa fa-gg-circle"></i> AUTO CHỌC BẠN</a></li>
							<li><a href="/tool-rate.kBz"><i class="fa fa-gg-circle"></i> AUTO RATE TRANG</a></li>
							<li><a href="/tool-delstatus.kBz"><i class="fa fa-gg-circle"></i> AUTO XOÁ STATUS</a></li>
							<li><a href="/tool-delfriend.kBz"><i class="fa fa-gg-circle"></i> AUTO XOÁ BẠN</a></li>
							<li><a href="/tool-unlikefanpage.kBz"><i class="fa fa-gg-circle"></i> AUTO UNLIKE TRANG</a></li>
						</ul>
					</li>
<?php
}
?>
					<li>
						<a href="guide.kBz">
							<i class="fa fa-futbol-o"></i>
							<span>HƯỚNG DẪN</span>
						</a>
					</li>
					<li>
						<a href="faild.kBz">
							<i class="fa fa-warning"></i>
							<span>LỖI THƯỜNG GẶP</span>
						</a>
					</li>
					<li>
						<a href="condition.kBz">
							<i class="fa fa-lightbulb-o"></i>
							<span>ĐIỀU KHOẢN</span>
						</a>
					</li>
<?php
if(isset($_SESSION['id_user'])){
?>
					<li>
						<a href="logout.kBz">
							<i class="fa fa-power-off"></i>
							<span>ĐĂNG XUẤT</span>
						</a>
					</li>
<?php
}
?>
				</ul>
			</div>
		</aside>
		<section id="main-content">
			<section class="wrapper">
			<!-- BEGIN CODE --><?php echo "\n"; ?>