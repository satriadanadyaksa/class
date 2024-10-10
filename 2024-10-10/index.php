<form action="" method="post">
    nama:
    <input type="text" name="nama" placeholder="masukkan nama">
    Alamat:
    <input type="text" name="alamat" placeholder="masukkan nama">
    <input type="submit" value="simpan" name="simpan">
</form>
<?php
$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'sekolah';

$koneksi = mysqli_connect ( $host, $user, $password, $database);

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    echo $nama;
    $sql = "INSERT INTO siswa VALUES ('','$nama', '$alamat')";
    echo $sql;
    mysqli_query($koneksi, $sql);
}

$query = "SELECT * FROM siswa";
// echo $query;
echo "<br>";

$result = mysqli_query($koneksi, $query);
// var_dump(value: $result);

$nama = mysqli_fetch_assoc($result);
//var_dump($nama);
echo "<br>";

echo '<h1>Data siswa</h1>';
echo '<table border=1>';
echo '<thead>
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>alamat</th>
        </tr>
        </thead>
        <tbody>';
while ($row = mysqli_fetch_array($result)){
        echo '<tr>';
        echo '<td>'.$row[0].'</td>';
        echo '<td>'.$row[1].'</td>';
        echo '<td>'.$row[2].'</td>';
        echo '</tr>';
}
    echo "</tbody>";
    echo '</table>';

    echo '<h1>Data kelas</h1>';
    $query = "SELECT * FROM kelas";
    $result = mysqli_query($koneksi, $query);
    echo '<table border=1>';
    echo '<thead>
            <tr>
                <th>id</th>
                <th>Kelas</th>
                <th>Jurusan</th>
            </tr>
            </thead>
            <tbody>';
    while ($row = mysqli_fetch_array($result)){
            echo '<tr>';
            echo '<td>'.$row[0].'</td>';
            echo '<td>'.$row[1].'</td>';
            echo '<td>'.$row[2].'</td>';
            echo '</tr>';
    }
        echo "</tbody>";
        echo '</table>';
    
?>