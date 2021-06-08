<?php
	session_start();
	include "koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Mahasiswa</title>
</head>

<body><h2>hello world</h2>
<?php
if(!empty($_SESSION["useradm"]) and !empty($_SESSION["passadm"])){
	$sqla = mysqli_query($kon, "select * from admin where username='$_SESSION[useradm]' and password='$_SESSION[passadm]'");
	$ra= mysqli_fetch_array($sqla);
?>
<div>  <a href=" <?php echo "?p=logout"; ?>">Logout</a></div>
<div class="grid">
	<div class="dh12">
    	<div class="container2">
        


<?php

if($_GET["p"]== "mhsadd"){
	include"mhsadd.php";
}else if($_GET["p"]== "mhsedit"){
	include"mhsedit.php";
}else if($_GET["p"]== "mhsdel"){
	include"mhsdel.php";
}else if($_GET["p"]== "logout"){
	include"logout.php";
}else{
	include"mhs.php";
}
?> 	
</div>
</div>
</div>
<?php
}else{
	include "login.php";
}
	
?>
</body>
</html>
