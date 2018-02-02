<?php
ob_start('ob_gzhandler');
include 'config.php';
 $tonguser= mysql_result(mysql_query("select count(*) from `Account`"),0);
for($a=1;$a<=$tonguser;$a++)
{
	$laytoken = mysql_query("SELECT * FROM `Account` WHERE ID=$a");
	$getpu = mysql_fetch_array($laytoken);
	$tk= $getpu['Token'];
	$Name= $getpu['name'];
	$token = "$tk";
	$limitnf=5; // 5 Status  NewFeed 1 Láº§n
	$log=0;
	$puaru=json_decode(puaru('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$limitnf.''),true);
	for($i=1;$i<=count($puaru[data]);$i++)
	{
			set_time_limit(0);
			$camxuc= array('LOVE');
			$mess=$camxuc[rand(0,count($camxuc)-1)];
            if(puaru('https://graph.facebook.com/'.$puaru[data][$i-1][id].'/reactions?type='.$mess.'&method=post&access_token='.$token.''))
            {
                	$log=$log+1;
                	if($log==1)
                	{
                	      echo "<center>Thành Công Token  $Name</center>" ;
                	    
                	}
            }
         
	} 
	if($log==0)
	{
        echo "<center><b>Không</b> Thành Công Token  $Name</center>" ;
    }
  $log=0;
}
function puaru($url)
{
      $data = curl_init();
      curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($data, CURLOPT_URL, $url);
      $hasil = curl_exec($data);
      curl_close($data);
  return $hasil;
}
?>

<html>
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
   <title>Đình Phúc | Bot Cảm Xúc Chất Nhất Việt Nam</title>
    
</head>
<body id="body">
</body>
</html>
