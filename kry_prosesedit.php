<? 
    include "koneksikry.php";
    $sql="select * from tbl_karyawan_02898 where Nip= " .$nip ;
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
$foto=$_POST['upload']; 

$sql="update tbl_karyawan_02898 set Nama='$nama', Alamat='$alamat', 
      Kota='$kota', Tgl_Lahir='$tgl', Telpon='$telp', Bagian='$bgn', Foto_Profile='$foto' where Nip='$nip'";
 
$hasil=mysqli_query($conn,$sql); 
if($hasil){ 
    header('location:kry_display.php');
} else{
    echo "<center>Data gagal diubah, error".mysqli_error($conn);
    echo "<hr><a href='kry_display.php'>kembali</a></center>"; 
} 
?>