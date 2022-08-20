<h2><center>Data Karyawan</center></h2> 

<?
include "koneksikry.php"; 
?>

<input type="button" value="Input Karyawan" style="width: 150px;" onclick="window.open('kry_input.php','_self');">
<br><br>
<table border="1" cellpadding="5" cellspacing="0">
  <tr>
    <td>Foto</td> 
    <td>Nip</td> 
    <td>Nama</td> 
    <td>Alamat</td> 
    <td>Kota</td> 
    <td>Tgl Lahir</td>
    <td>Telp</td>
    <td>Bagian</td>
    <td>Edit/Hapus</td>
  </tr>

  <? 
     $sql="select * from tbl_karyawan_02898 order by Nip"; 
     $hasil=mysqli_query($conn,$sql);
     while($data=mysqli_fetch_array($hasil))
     { 
  ?>

  <tr>
    <td><? echo $data['Foto_Profile']; ?></td>
    <td><? echo $data['Nip']; ?></td> 
    <td><? echo $data['Nama']; ?></td> 
    <td><? echo $data['Alamat']; ?></td> 
    <td><? echo $data['Kota']; ?></td> 
    <td><? echo $data['Tgl_Lahir']; ?></td>
    <td><? echo $data['Telpon']; ?></td>  
    <td><? echo $data['Bagian']; ?></td>
      
    <td> 
      <a href=<? echo "kry_update.php?Nip=$data[Nip]"; ?>>
      <img src="assets/foto/edit.png" width="15" height="15"></a> / 
      <a href=<? echo "kry_delete.php?Nip=$data[Nip]"; ?>> 
      <img src="assets/foto/delete.png" width="15" height="15"></a> 
      </td> 
  </tr> 
  <? 
    }
  ?> 
</table>