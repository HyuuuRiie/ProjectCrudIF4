
<?php
echo "<a href='?p=mhsadd'>Tambah Data</a>" ;/*karena dalam echo pakai kutip 1  ?=where p=parameter, bisa diganti*/
echo"<table width='100%' border='1' cellspacing='5' cellpadding='5'>
  <tr>
    <th>NO</th>
    <th>Foto</th>
    <th>Mahasiswa</th>
    <th>Personal </th>
    <th>Kontak</th>
    <th>Aksi</th>
  </tr>";
 $sqlm = mysqli_query($kon, "select * from mahasiswa order by tglreg desc");
 $no = 1;
 while ($rm = mysqli_fetch_array($sqlm)){ ////rm digunakan untuk menampung array
 echo "<tr>
    <td>$no</td>
    <td><img src='foto/$rm[foto]' width='100px'></td>
    <td>
	No BP :<b>$rm[nobp]</b>
	<br>Nama :<b>$rm[nama]</b>
	<br>Kelas :<b>$rm[kelas]</b>
	<br>Terdaftar Sejak:<b>$rm[tglreg]</b>
	</td>
    <td>
	Tempat / Tanggal Lahir:
	<br><b>$rm[tmplahir] / $rm[tgllahir]</b>
	<br>Jenis Kelamin : <b>$rm[jk]</b>
	 </td>
    <td>
	Alamat:<b>$rm[alamat]</b>
	<br>NO Handphone<b>$rm[hp]</b>
	<br>Email : <b>$rm[email]</b>
	</td>
    <td>
	<a href='?p=mhsedit&id=$rm[id_mhs]'>Ubah</a>
	<a href='?p=mhsdel&id=$rm[id_mhs]'>Hapus</a>
	</td>
  </tr>"; 
  $no++;
 }  
echo "</table>";
?>