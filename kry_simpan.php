<?
include "koneksikry.php";

$ekstensi_diperbolehkan = array('png','jpg','jpeg');
    $nama_gambar = $_FILES['Foto_Profile']['name'];
    $x = explode('.', $nama_gambar);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['Foto_Profile']['size'];
    $file_tmp = $_FILES['Foto_Profile']['tmp_name'];

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 5000000){
            $Simpan = move_uploaded_file($file_tmp, 'assets-foto/'. basename($nama_gambar));
            if($Simpan){
                echo "<script>alert('Gambar Berhasil di Upload');</script>";
            }else{
                echo "<script>alert('Gagal Mengupload Gambar');</script>";
            }
        }else{
            echo "<script>alert('Ukuran File Terlalu Besar');</script>";
        }
    }else{
        echo "<script>alert('Eksistensi Gambar yang di Upload Tidak di Perbolehkan');</script>";
    }
 
$nip=$_POST['txtnip']; 
$nama=$_POST['txtnama'];
$alamat=$_POST['txtalamat'];
$kota=$_POST['txtkota']; 
$tgl=$_POST['dttgl']; 
$telp=$_POST['txttelp']; 
$bgn=$_POST['txtbgn'];  

$sql="insert into tbl_karyawan_02898 (Nip,Nama,Alamat,Kota,Tgl_Lahir,Telpon,Bagian,Foto_Profile) 
values ('$nip','$nama','$alamat','$kota','$tgl','$telp','$bgn','". basename($nama_gambar) . "')";

$hasil=mysqli_query($conn,$sql);
if($hasil){
    header('location:kry_input.php'); 
}else{ 
    echo "<center>Data gagal disimpan, error".mysqli_error($conn); 
    echo "<hr><a href='kry_input.php'>kembali</a></center>";
} 
?>