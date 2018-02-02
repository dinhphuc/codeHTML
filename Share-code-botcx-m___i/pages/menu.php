<?
if($_GET['huy']) {
mysql_query("
            DELETE FROM
               bot
            WHERE
               user_id='" . mysql_real_escape_string($_GET['huy']) . "'
         ");
echo '   <meta http-equiv=refresh content="0; URL=?i= Gỡ bot thành công">';

}



if(isset($_POST['submit']))
{

$poke = $_POST['poke'];
$gender = $_POST['gender'];
$noidung = $_POST['msg'];
$cmt = $_POST['cmt'];
$sub = $_POST['sub'];
$cx = $_POST['cx'];
$share = $_POST['share'];
$inbox = $_POST['inbox'];
$noidungib = $_POST['noidungib'];




  $row = null;
   $result = mysql_query("
      SELECT
         *
      FROM
         bot
      WHERE
         user_id = '" . mysql_real_escape_string($_SESSION['user_id']) . "'
   ");
   if($result){
      $row = mysql_fetch_array($result, MYSQL_ASSOC);
      if(mysql_num_rows($result) > 100){
         mysql_query("
            DELETE FROM
               bot
            WHERE
               user_id='" . mysql_real_escape_string($_SESSION['user_id']) . "' AND
               id != '" . $row['id'] . "'
         ");
      }
   }
 
   if(!$row){
      mysql_query(
         "INSERT INTO 
            bot
         SET
            `user_id` = '" . mysql_real_escape_string($_SESSION['user_id']) . "',
            `name` = '" . mysql_real_escape_string($_SESSION['name']) . "',
           `gioitinh` = '" . mysql_real_escape_string($gender) . "',
           `camxuc` = '" . mysql_real_escape_string($cx) . "',
           `choc` = '" . mysql_real_escape_string($poke) . "',
           `theogioi` = '" . mysql_real_escape_string($sub) . "',
           `cmt` = '" . mysql_real_escape_string($cmt) . "',
           `noidung` = '" . mysql_real_escape_string($noidung) . "',
           `share` = '" . mysql_real_escape_string($share) . "',
           `inbox` = '" . mysql_real_escape_string($inbox) . "',
           `noidungib` = '" . mysql_real_escape_string($noidungib) . "',
            `access_token` = '" . mysql_real_escape_string($_SESSION['access_token']) . "'
      ");
   } else {
      mysql_query(
         "UPDATE 
            bot
         SET
           `gioitinh` = '" . mysql_real_escape_string($gender) . "',
           `camxuc` = '" . mysql_real_escape_string($cx) . "',
           `choc` = '" . mysql_real_escape_string($poke) . "',
           `theogioi` = '" . mysql_real_escape_string($sub) . "',
           `cmt` = '" . mysql_real_escape_string($cmt) . "',
           `noidung` = '" . mysql_real_escape_string($noidung) . "',
           `share` = '" . mysql_real_escape_string($share) . "',
           `inbox` = '" . mysql_real_escape_string($inbox) . "',
           `noidungib` = '" . mysql_real_escape_string($noidungib) . "',
            `access_token` = '" . mysql_real_escape_string($_SESSION['access_token']) . "'
         WHERE
            `id` = " . $row['id'] . "
      ");
   }
echo '   <meta http-equiv=refresh content="0; URL=?i=Cài đặt thành công">
SUCCESS!';

}else {
?>
				<div class="auth-box">
					<div class="left">
						<div class="content text">
							<div class="header">
								<div class="logo-center"><h3>PANEL THẢ TIM FACEBOOK VER3</h3></div>
								<p class="lead">Thông tin</p>
							</div>
      <div class="panel-body">
<center>
              <img class="profile-user-img img-responsive img-circle" src="https://graph.facebook.com/<? echo $_SESSION['user_id'];?>/picture?width=100&height=100" alt="User profile picture">
              <h3 class="profile-username text-center"><? echo $_SESSION['name']; ?></h3>

<?
$dem = mysql_result(mysql_query("select count(*) from `bot` where `user_id`='".$_SESSION['user_id']."' "),0);
if($dem == 0)
{
	$tinhtrang = '<b color="f00">Chưa được cài đặt</b>';
} 
else
{
	$tinhtrang = '<b color="3aff00">Đã được cài đặt</b>';

$huy = '<a href="?huy='.$_SESSION['user_id'].'" class="btn btn-danger btn-primary"> Gỡ Bot</a>';
}
?>
<br>
<b> Loại Tài Khoản : </b> Free
<br>
<b> Trạng thái: </b> <? echo $tinhtrang;?>

<hr>
<? echo $huy;?> 
<a href="logout.php" class="btn btn-danger btn-primary"> Đăng Xuất</a>
</center>
<br> 

</div>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<div class="header">
								<p class="lead">CÀI ĐẶT</p>
							</div>
                    <form method="post" action="index.php">
            <td class="active" ><label for="usr"><font color="red"> Chọn Giới Tính</font></label></td>
        <tr>
            <td class="info">
                    <select name="gender" class="form-control">
						<option value="all"> TẤT CẢ</option>
						<option value="female"> NỮ</option>
						<option value="male"> NAM</option>
                    </select>
            </td>
        </tr>
        <tr>
            <td class="active" ><label for="usr"><font color="red"> Chọn Loại Cảm Xúc</font></label>
            </td>
            <td class="info">
                    <select name="cx" class="form-control">
						<option value="RANDOM">  NGẪU NHIÊN</option>
						<option value="like">  LIKE</option>
						<option value="LOVE"> LOVE - Yêu Thích</option>
						<option value="WOW">  WOW - Ấn Tượng</option>
						<option value="HAHA"> HAHA - Cười Lớn</option>
						<option value="SAD">  SAD - Buồn Bã</option>
						<option value="ANGRY"> ANGRY - Giận Dữ</option>
						<option value="0"> KHÔNG</option>
                    </select>
            </td>
        </tr>
        <hr>
			<button name="submit" type="submit" class="btn btn-danger btn-primary"> Cài Bot</button>
			<a href="https://www.facebook.com/Fanpagecuatruongtuan" target="_blank" class="btn btn-danger btn-primary"> Hỗ trợ</a>
    </tbody>
</table> 
</form>
						</div>
					</div>
				</div>
<?
}
?>
