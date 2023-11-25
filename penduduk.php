<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data Penduduk</title>
</head>
<body>
    <h1>Input Data Penduduk</h1>
    
    <form method="post" action="">
        <label for="Nama">Nama:</label>
        <input type="text" name="Nama" id="Nama">
        <br>
        <label for="longitude">Longitude:</label>
        <input type="text" name="longitude" id="longitude">
        <br>
        <label for="latitude">Latitude:</label>
        <input type="text" name="latitude" id="latitude">
        <br>
        <label for="luas">Nama_Ibu_Kandung:</label>
        <input type="text" name="luas" id="luas">
        <br>
        <label for="jumlah_penduduk">Jumlah Penduduk:</label>
        <input type="text" name="jumlah_penduduk" id="jumlah_penduduk">
        <br>
        <input type="submit" name="submit" value="Simpan Data">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $kecamatan = $_POST['kecamatan'];
        $longitude = $_POST['longitude'];
        $latitude = $_POST['latitude'];
        $luas = $_POST['luas'];
        $jumlah_penduduk = $_POST['jumlah_penduduk'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "responsi";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO penduduk (kecamatan, longitude, latitude, luas, jumlah_penduduk) VALUES ('$kecamatan', '$longitude', '$latitude', $luas, $jumlah_penduduk)";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
</body>
</html>