<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
Trang Quan Tri
<br>
<?php
	if(isset($_COOKIE['username']) and isset($_COOKIE['password'])){
			echo "Hello, ".$_COOKIE['username'];
			echo "<br><a href='logout.php'>Logout</a>";
		}
		else{
	if(isset($_SESSION['username']) and isset($_SESSION['password'])){
				echo "Hello, ".$_SESSION['username'];
				echo "<br><a href='logout.php'>Logout</a>";
			}
			else
			echo "<script>alert('You are not logged in'); location.href='dangnhap.php';</script>";
		}	
	?>

<a href="logout.php" >Thoat ra </a>
</body>
</html>
