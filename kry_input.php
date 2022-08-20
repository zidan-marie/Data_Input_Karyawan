<html>
<head>
    <title>Input Karyawan</title>
</head>
<body>
    <h1>Pendataan Karyawan</h1>
    <hr>
    <form method="post" action="kry_simpan.php" enctype="multipart/form-data">
    <table border="0" width="600">
        <tr>
            <td width="120">NIP</td>
            <td><input type="text" name="txtnip" size="20"></td>
        </tr>
        <tr>
            <td width="120">Nama</td>
            <td><input type="text" name="txtnama" size="30"></td>
        </tr>
        <tr>
            <td width="120">Alamat</td>
            <td><input type="text" name="txtalamat" size="60"></td>
        </tr>
        <tr>
            <td width="120">Kota</td>
            <td><input type="text" name="txtkota" size="20"></td>
        </tr>
        <tr>
            <td width="120">Tgl Lahir</td>
            <td><input type="date" name="dttgl" size="17"></td>
        </tr>
        <tr>
        	<td width="120">Telpon</td>
        	<td><input type="text" name="txttelp" size="15"></td>
        </tr>
        <tr>
        	<td width="120">Bagian</td>
        	<td>
                <select name="txtbgn">
                    <option selected disabled>--Pilih Bagian--</option>
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
            <td><input type="file" name="Foto_Profile"></td>
        </tr>
        <tr><td height="15"></td></tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" style="width: 100px;">
                <input type="reset" value="Batal" style="width: 100px;">
                <input type="button" value="Daftar Karyawan" style="width: 200px;" onclick="window.open('kry_display.php','_self');">
            </td>
        </tr>
    </table>  
    </form>
</body>
</html>