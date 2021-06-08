<form name="form1" method="post" action="" enctype="multipart/form-data">
  <p>Form tambah data mahasiswa</p>
  <p>No BP
    <input type="text" name="nobp" id="nobp">
    
  </p>
  <p>Nama Lengkap
    <input type="text" name="nama" id="nama">
    
  </p>
  <p>Kelas
    <select name="kelas" id="kelas">
      <option value="IF1">IF1</option>
      <option value="IF2">IF2</option>
      <option value="IF3">IF3</option>
      <option value="IF4">IF4</option>
    </select>
    
  </p>
  <p>Tempat Tanggal Lahir
    <input type="text" name="tmplahir" id="tmplahir">
    
    <input type="date" name="tgllahir" id="tgllahir">
    
  </p>
  <p>Jenis Kelamin
    <input type="radio" name="jk" id="radio" value="P">
    Pria
    
    <input type="radio" name="jk" id="radio2" value="W">
    Wanita
    
  </p>
  <p>Alamat
    <textarea name="alamat" id="alamat" cols="45" rows="5"></textarea>
    
  </p>
  <p>No Hp
    <input type="text" name="hp" id="hp">
    
  </p>
  <p>Email
    <input type="text" name="email" id="email">
    
  </p>
  <p>Foto
    <input type="file" name="foto" id="foto">
    
  </p>
  <p>
    <input type="submit" name="simpan" id="simpan" value="Register">
    
  </p>
</form>

<?php
if($_POST["simpan"]){
	include "koneksi.php";
	$nmfoto = $_FILES["foto"]["name"];
	$lokfoto = $_FILES["foto"]["tmp_name"];
	if(!empty($lokfoto)){
	move_uploaded_file ($lokfoto, "foto/$nmfoto"); 
	}
	
	$sqlm = mysqli_query($kon, "insert into mahasiswa(nobp, nama, kelas, tmplahir, tgllahir, jk, alamat, hp, email, foto, tglreg ) values ('$_POST[nobp]','$_POST[nama]','$_POST[kelas]','$_POST[tmplahir]','$_POST[tgllahir]','$_POST[jk]','$_POST[alamat]','$_POST[hp]','$_POST[email]','$nmfoto',NOW())");
	
	if($sqlm){
	echo "Berhasil Simpan ";
	}else{
	echo "Gagal Simpan";
	}
	echo"<META HTTP-EQUIV='Refresh' Content='1; URL=?p='mhs'>";
}
?>
