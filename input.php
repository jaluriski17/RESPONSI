<?php
$konesi=mysqli_connect("localhost","root","","tpi")
if(isset($_POST['simpan'])) {
    $Toko=mysqli_real_escpe_string($konesi,$_POST['Toko']);
    $Kebutuhan=mysqli_real_escpe_string($konesi,$_POST['Kebutuhan']);
    $No_tlp=mysqli_real_escpe_string($konesi,$_POST['No_tlp']);
    $Logitude=mysqli_real_escpe_string($konesi,$_POST['Longitude']);
    $Latitude=mysqli_real_escpe_string($konesi,$_POST['Latitude']);
    $Simpan=mysqli_query($konesi,"INSET INTO ikan VALUE(
        '$Toko','Kebutuhan','No_tlp','Logitude','Laitude')");

        if($Simpan){
            echo "<scrip>window.alert('Data di simpan')
            window.loaction='input.php'</scrip>";
        }else{
            cho "<scrip>window.alert('Data gagal di simpan ')
            window.loaction='input.php'</scrip>";
        }

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Input Toko</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input data TOKO</title>   
</head>
<body>
    <h4></h4>
    <tabel>
        <tr>
<td>
TOKO
<td>
<td>
<input type ="text" placeholeder = "nama toko"
name="nama toko" required>

</tr>

</tabel>

<tabel>
<tr>
<td>
Kebutuha
<td>
<td>
<input type ="text" placeholeder = "Kebutuhan"
name="Kebutuhan" required>

</tr>

</tabel>

<tabel>
<tr>
<td>
No_tlp
<td>
<td>
<input type ="text" placeholeder = "No_tlp"
name="No_tlp" required>

</tr>

</tabel>

<tabel>
<tr>
<td>
Longitude
<td>
<td>
<input type ="text" placeholeder = "Longitude"
name="Logitude" required>

</tr>

</tabel>

<tabel>
<tr>
<td>
Latitude
<td>
<td>
<input type ="text" placeholeder = "Latitude"
name="Latitude" required>

</tr>

</tabel>

<tabel>
<tr>
<td>
Simpan
<td>
<td>
<input type ="submit" name="Simpan" value="Simpan Data">

</tr>

</tabel>
</body>
</html>