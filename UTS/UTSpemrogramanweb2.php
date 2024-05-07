<!DOCTYPE html>
<html>
<head>
    <title>Data Klasemen Group B</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Klasemen Group B Piala Asia U-23 Qatar</h2>
    <form method="post" action="">
        <label>Nama Negara:</label>
        <select name="negara">
            <option value="Korea Selatan U-23">Korea Selatan U-23</option>
            <option value="Jepang U-23">Jepang U-23</option>
            <option value="Tiongkok U-23">Tiongkok U-23</option>
            <option value="Uni Emirat Arab U-23">Uni Emirat Arab U-23</option>
        </select><br><br>
        <label>Jumlah Pertandingan:</label>
        <input type="number" name="pertandingan"><br><br>
        <label>Jumlah Menang:</label>
        <input type="number" name="menang"><br><br>
        <label>Jumlah Seri:</label>
        <input type="number" name="seri"><br><br>
        <label>Jumlah Kalah:</label>
        <input type="number" name="kalah"><br><br>
        <label>Jumlah Poin:</label>
        <input type="number" name="poin"><br><br>
        <label>Nama Operator:</label>
        <input type="text" name="operator"><br><br>
        <label>NIM Mahasiswa:</label>
        <input type="text" name="nim"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $negara = $_POST['negara'];
        $pertandingan = $_POST['pertandingan'];
        $menang = $_POST['menang'];
        $seri = $_POST['seri'];
        $kalah = $_POST['kalah'];
        $poin = $_POST['poin'];
        $operator = $_POST['operator'];
        $nim = $_POST['nim'];

        // Format data untuk ditambahkan ke dalam tabel
        $data = "<tr><td>$negara</td><td>$pertandingan</td><td>$menang</td><td>$seri</td><td>$kalah</td><td>$poin</td></tr>\n";

        // Menulis data ke dalam file db.html
        $file = fopen("db.html", "a");
        fwrite($file, $data);
        fclose($file);

        // Menampilkan judul output
        echo "<h3>Data Group B Piala Asia U-23 Qatar</h3>";
        echo "<p>Per " . date("d M Y H:i:s") . " (Waktu dan Jam Sekarang)</p>";
        echo "<p>Nama Operator/NIM: $operator / $nim</p>";

        // Menampilkan tabel dengan data yang telah dimasukkan
        echo "<h3>Data yang berhasil dimasukkan:</h3>";
        echo "<table>";
        echo "<tr><th>Nama Negara</th><th>Pertandingan</th><th>Menang</th><th>Seri</th><th>Kalah</th><th>Poin</th></tr>";
        echo $data;
        echo "</table>";
    }
    ?>
</body>
</html>
