<?
ob_start();
session_start();
include'inc/config.php';
include'inc/head.php';
?>
<?
if ($_GET['i']) 
{
 	echo '<script>alert("'.$_GET['i'].'");</script>';
 }

if($_SESSION['user_id']) {
include'pages/menu.php';
} else {
include'login.php';
}
?>
</body>
</html>