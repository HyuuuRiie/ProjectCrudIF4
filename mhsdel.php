<?php
$sqlm =mysqli_query ($kon,"delete from mahasiswa where id_mhs='$_GET[id]'");
if($sqlm){
	echo "Success Delete";
	}else{
	echo "Failed Delete";
	}
	echo"<META HTTP-EQUIV='Refresh' Content='1;URL=?p='mhs'>";
?>