<?php
##############################
# update mới                 #
#version_2.0                 #
#nhận diện họ và tên         #
#thả tim cho bài viết        #
#CODE EDIT BY PHONG          #
##############################
header('Content-Type: text/html; charset=utf-8');
set_time_limit(0);/* CODE BY DUY PHONG*/
error_reporting(0);
$token = 'EAAAAUaZA8jlABAMQTG675X2qZB24L08JxWLKo1h7mj2PraMSJLZCaJgMlBQCj2qdeYyGYCjrhKvvYjFD12lcLRIFS5iYwvsoFLExBHaFXSSrK6MLDWoZAsWQ33mbyIk5qa0P157JF9IiQvJZA9faAAikIcBMJhX0ZD'; /*̉Bỏ Token Full Quyền Vào*/
$camsuc = 'LOVE';  /* icon cần thả nếu bạn muốn cảm súc là haha thì sửa lại lại : vd> $camsuc = 'LIKE'; thành $camsuc = 'HAHA' ( các cảm xúc cần chọn 'LIKE','WOW','LOVE','ANGRY','HAHA','SAD','PRIDE'*/
$limit = '10';  /* sô bài cần like & CMT*/
$post = json_decode(request('https://graph.facebook.com/me/home?fields=id,message,created_time,from&limit=' . $limit . '&access_token=' . $token), true); /* Get Data Post*/
$timelocpost = date('Y-m-d');
$logpost     = file_get_contents("log.txt");
//đây là like bài viết
for ($i = 0; $i < 100; $i++) {
    $idpost      = $post['data'][$i]['id'];
    $time        = $post['data'][$i]['created_time'];
  /* Đề Phòng Boss */
  if (!strpos($idpost,'364997627165697')){
	/* Check time Post */
    if (strpos($time, $timelocpost) !== false) {
		/* Check hashtag */
			/* Check trùng  */
            if (strpos($logpost, $idpost) === FALSE) {
				/* Send Comment  */
				request('https://graph.facebook.com/' . urlencode($idpost) . '/reactions?type=' . $camsuc . '&method=post&access_token=' . $token);
                $luulog = fopen("log.txt", "a");
                fwrite($luulog, $idpost . "\n");
                fclose($luulog);
            } else {
                echo 'like thành công';
            }
    }
  }
}
exec("php test.php"); /* Chạy lại file  */
function request($url)
{
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        return FALSE;
    }
    
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HEADER => FALSE,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_ENCODING => '',
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.87 Safari/537.36',
        CURLOPT_AUTOREFERER => TRUE,
        CURLOPT_CONNECTTIMEOUT => 15,
        CURLOPT_TIMEOUT => 15,
        CURLOPT_MAXREDIRS => 5,
        CURLOPT_SSL_VERIFYHOST => 2,
        CURLOPT_SSL_VERIFYPEER => 0
    );
    
    $ch = curl_init();
    curl_setopt_array($ch, $options);
    $response  = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    unset($options);
    return $http_code === 200 ? $response : FALSE;
}
?>