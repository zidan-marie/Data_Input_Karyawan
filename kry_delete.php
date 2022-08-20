<?     
include "koneksikry.php"; 
$nip=$_REQUEST['Nip']; 
    echo $nip;
$sql="delete from tbl_karyawan_02898 where Nip='$nip'"; 
$hasil=mysqli_query($conn,$sql);
if($hasil){ 
    header('location:kry_display.php'); 
} else{ 
echo "Hapus data karyawan gagal, error : 
".mysqli_error($conn); 
} 
?>