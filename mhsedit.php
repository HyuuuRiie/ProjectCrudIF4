<?php
$sqlm = mysqli_query($kon, "select * from mahasiswa where id_mhs='$_GET[id]'");
$rm = mysqli_fetch_array($sqlm);
?>
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <p>FORM UBAH DATA MAHASISWA</p>
  <p>
    <input name="id_mhs" type="hidden" id="id_mhs" value="<?php echo "$rm[id_mhs]"; ?>" />
    No. BP
    <input name="nobp" type="text" id="nobp" value="<?php echo "$rm[nobp]"; ?>">
  </p>
  <p>Nama Lengkap
    <input name="nama" type="text" id="nama" value="<?php echo "$rm[nama]"; ?>">
  </p>
  <p>Kelas
  <?php
  echo "<select name='kelas' id='kelas'>";
  for ($i=1; $i<=7; $i++){
  if ($rm["kelas"] == "IF-$i") {
  
  echo"<option value='IF-$i' selected>IF-$i</option>";
  } else{
  	echo"<option value='IF-$i'>IF-$i</option>";
 		}
  }
  echo "</select>";
  ?>
   
  </p>
  
  
  
  <p>Tempat/ Tanggal Lahir  
    <input name="tmplahir" type="text" id="tmplahir" value="<?php echo "$rm[tmplahir]"; ?>">
    <input name="tgllahir" type="date" id="tgllahir" value="<?php echo "$rm[tgllahir]"; ?>">
  </p>
  
  <?php
  if($rm["jk"] == "L") {
  	$l = "checked"; $p = "";
  
  } else if($rm["jk"] == "P") {
  	$p = "checked"; $l = "";
  }
  ?>
  <p>Jenis Kelamin
    <input type="radio" name="jk" value="L" <?php echo "$l";?> id="RadioGroup1_0">
    Laki-Laki    </label>
    <input type="radio" name="jk" value="P" <?php echo "$p";?> id="RadioGroup2_0">
    Perempuan<br></label>
    <br>
  </p>
  <p>Alamat  
    <textarea name="alamat" id="alamat" cols="45" rows="5"><?php echo "$rm[alamat]"; ?></textarea>
  </p>
  <p>No Hp
    <input name="hp" type="text" id="hp" value="<?php echo "$rm[hp]"; ?>">
  </p>
  <p>Email
    <input name="email" type="text" id="email" value="<?php echo "$rm[email]"; ?>">
  </p>
  <?php 
  echo "<src img= 'foto/$rm[foto]' width='150px'> <br>";
  ?>
  <p>Foto
    <input type="file" name="foto" id="foto" />
</p>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="simpan" id="simpan" value="SIMPAN DATA MAHASISWA">
  </p>
</form>

<?php
if($_POST["simpan"]) {
	include "connector.php";
	$nmfoto  = $_FILES["foto"]["name"];
	$lokfoto = $_FILES["foto"]["tmp_name"];
	if(!empty($lokfoto)){
		move_uploaded_file($lokfoto, "foto/$nmfoto");
		$foto = ", foto = '$nmfoto' ";
	} else {
		$foto = "";
	}
	
	$sqlm = mysqli_query($kon, "update mahasiswa set nobp='$_POST[nobp]', nama ='$_POST[nama]', kelas ='$_POST[kelas]',tmplahir ='$_POST[tmplahir]',tgllahir='$_POST[tgllahir]',jk ='$_POST[jk]',alamat ='$_POST[alamat]',hp ='$_POST[hp]',email ='$_POST[email]', nama ='$_POST[nama]' $foto where id_mhs='$_POST[id_mhs]'");
	
	if($sqlm) {
	echo "Data berhasil Disimpan";
	} else {
	echo "Gagal Menyimpan";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p='mhs'>";
}

?>
