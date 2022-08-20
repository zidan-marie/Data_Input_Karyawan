<html> 
<head>
 
<title>Ubah Data</title> 
</head> 
<body> 
<?
include "koneksikry.php"; 
$nip=$_REQUEST['Nip']; 
$sql="select * from tbl_karyawan_02898 where Nip='$nip'"; 
$hasil=mysqli_query($conn,$sql); 
$data=mysqli_fetch_array($hasil); 

  $nip="";
  $nama=""; 
  $alamat=""; 
  $kota="";
  $tgl=""; 
  $telp="";
  $bgn="";
  $foto="";

  if($data) { 
  $nip=$data['Nip'];
  $nama=$data['Nama']; 
  $alamat=$data['Alamat']; 
  $kota=$data['Kota'];
  $tgl=$data['Tgl_Lahir']; 
  $telp=$data['Telpon'];
  $bgn=$data['Bagian'];
  $foto=$data['Foto_Profile'];
  }
?>

<h1>Edit Data Karyawan</h1> 
<hr> 
<form method="post" action="kry_prosesedit.php">
  <table border="0" width="600"> 
  <tr> 
    <td width="120">Nip</td> 
    <td><input type="text" name="txtnip" size="20" value="<? echo $nip; ?>" readonly></td>
  </tr>
  <tr> 
    <td width="120">Nama</td>
    <td><input type="text" name="txtnama" size="30" value="<? echo $nama; ?>"></td> 
  </tr>
  <tr>
    <td width="120">Alamat</td>
    <td><input type="text" name="txtalamat" size="60" value="<? echo $alamat; ?>"></td>
  </tr>
  <tr>
    <td width="120">Kota</td>
    <td><input type="text" name="txtkota" size="20" value="<? echo $kota; ?>"></td>
  </tr>
  <tr>
    <td width="120">Tgl Lahir</td>
    <td><input type="date" name="dttgl" size="17" value="<? echo $tgl; ?>"></td>
  </tr>
  <tr>
    <td width="120">Telpon</td>
    <td><input type="text" name="txttelp" size="15" value="<? echo $telp; ?>"></td>
  </tr>
  <tr> 
    <td width="120">Bagian</td>
    <td>
      <select name="txtbgn">
        <option value="Produksi">Produksi</option>
        <option value="Pemasaran">Pemasaran</option>
        <option value="HRD">HRD</option>
        <option value="Keuangan">Keuangan</option>
        <option value="Driver">Driver</option>
        <option value="Keamanan">Keamanan</option>
      </select>
    </td> 
  </tr>
  <tr>  
    <td width="120">Foto Profile</td>
    <td><input type="file" name="upload" value="<? echo $foto; ?>"></td>  
  </tr>
  <tr>
    <td></td> 
    <td><input type="submit" value="Ubah" style="width:100px;">
    <input type="button" value="Kembali" style="width:100px;" onclick="window.open('kry_display.php','_self');"></td> 
  </tr>
  </table> 
</form> 
</body>
</html>