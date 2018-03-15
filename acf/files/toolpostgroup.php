			<div class="row">
					<form method="POST" action="">
					<div class="col-lg-6">
						<section class="panel">
							<header class="panel-heading">
							<i class="fa fa-gg-circle"></i> AUTO ĐĂNG NHÓM
							<span class="tools pull-right">
								<a class="fa fa-chevron-down"></a>
								<a class="fa fa-times"></a>
							</span>
							</header>
							<div class="panel-body">
								<div class="box box-solid box-primary">
									<p align="left">
									<i class="fa fa-lightbulb-o"></i> <b>Auto Đăng Nhóm</b> Là Gì?<br>
									+ <b>Auto Đăng Nhóm</b> Là Công Cụ Giúp Bạn Tự Động Đăng Nội Dung Lên Các Nhóm Bạn Đã Tham Gia.<br>
									<i class="fa fa-lightbulb-o"></i> Vậy Tôi Phải Làm Như Thế Nào Để Sử Dụng Nó?<br>
									Bước 1: Sử Dụng Mục Bên <b>"Danh Sách Nhóm"</b> Để Chọn ID Nhóm.<br>
									Bước 2: Chọn Nhóm Bạn Muốn Đăng Nội Dung Lên Và Ấn Nút Kế Bên Mục Tên Để Chọn. (Ấn Nút Chọn Tất Cả Để Chọn Tất Cả Nhóm)<br>
									Bước 3: Nhập Nội Dung Bạn Muốn Đăng.<br>
									Bước 4: Ấn Nút <b>"Đăng Nhóm"</b> Để Bắt Đầu.
									</p>
								</div><br>
								<label for="exampleInputContent">Nội Dung Bài Viết</label>
								<textarea name="message" class="form-control" placeholder="Nhập Nội Dung Bạn Muốn Đăng..."><?php echo @$_POST['message']; ?></textarea><br>
								<div id="hidetool">
									<center><span class="input-group-btn">
										<button type="submit" class="btn btn-primary" onclick="display();">Đăng Nhóm</button>
									</span></center>
								</div>
								<div id="showtool" style="display: none;">
									<center><span class="input-group-btn">
										<button type="submit" class="btn btn-primary"><i class="fa fa-spinner fa-spin"></i> Đang Đăng Nhóm</button>
									</span></center>
								</div><br>
<?php
$content = @$_POST['message'];
$array_id = @$_POST['id'];
$success = 0;
if(isset($array_id) AND is_array($array_id)){
	foreach($array_id as $id){
		$curl = json_decode($work->cURL('https://graph.facebook.com/'.$id.'/feed?method=post&message='.urlencode($content).'&access_token='.$_SESSION['access_token']), true);
		if(isset($curl['id'])) $success++;
	}
?>
								<div class="alert alert-block alert-info fade in"><p align="left"><i class="fa fa-lightbulb-o"></i> Thông Báo Đăng Nhóm<br>+ Đăng Nhóm Thành Công.<br>+ Đã Đăng <?php echo $success; ?> Nhóm.</p></div>
<?php
}
?>
							</div>
						</section>
					</div>
					<div class="col-lg-6">
						<section class="panel">
							<header class="panel-heading">
							Danh Sách Nhóm
							<span class="tools pull-right">
								<a class="fa fa-chevron-down"></a>
								<a class="fa fa-times"></a>
							</span>
							</header>
							<div class="panel-body">
								<div class="checkbox">
									<label><input type="checkbox" onclick="$('input:checkbox').not(this).prop('checked', this.checked);"> Chọn Tất Cả</label>
								</div>
<?php
$data_group = json_decode($work->cURL('https://graph.facebook.com/me/groups?fields=id,name&method=GET&limit=500&access_token='.$_SESSION['access_token']), true);
$count_data_group = count($data_group['data']);
for($i=0;$i<$count_data_group;$i++){
?>
								<div class="checkbox">
									<label><input type="checkbox" value="<?php echo $data_group['data'][$i]['id']; ?>" name="id[]"><a href="https://www.facebook.com/<?php echo $data_group['data'][$i]['id']; ?>" target="_blank"><?php echo $data_group['data'][$i]['name']; ?></a></label>
								</div>
<?php
}
?>
							</div>
						</section>
					</div>
					</form>
				</div>