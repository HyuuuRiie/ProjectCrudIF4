
<link rel="stylesheet" type="text/css" href="style.css">
<div id="signin">
<fieldset>
<img src="foto/Chrysanthemum.jpg" width="120px">
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
  <h3> Administrator</h3>
  <p>Silahkan Login</p>
    <input type="text" name="username" id="username" placeholder="username" />
    <input type="password" name="password" id="password" placeholder="password"/>
    <input type="submit" name="login" id="login" value="Login Admin" />
</form>
<?php
if($_POST["login"]){
	$sqla = mysqli_query ($kon, "select * from admin where username='$_POST[username]' and password='$_POST[password]'");
	$ra = mysqli_fetch_array($sqla);
	$row = mysqli_num_rows($sqla);
	if($row > 0){
		session_start();
		$_SESSION["useradm"]= $ra["username"];
		$_SESSION["passadm"]= $ra["password"];
		echo "Success Login";
	}else{
		echo "Login Failed";
	}
	echo"<META HTTP-EQUIV='Refresh' Content='1; URL=?p='mhs'>";
}
?>
</fieldset>
</div>

