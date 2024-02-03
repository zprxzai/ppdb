<?php include_once ("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aplikasi ppdb by web pro</title>
    <link rel="stylesheet" href="css/menu.css">
    <img src= >
</head>
<body>
    <header>
        <h1>webpro 7</h1>
        <h3>penerimaan peserta siswa didik baru</h3>
    </header>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">pendaftar</a></li>
        </ul>
    </nav>
       
    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);
        $no=1;

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td alig='center'>".$no."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php? id=".$siswa['id']."' onclick='return confirm(\"apakah anda yakin?\")'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
            $no++;
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    <h5><a href="form-daftar.php">DAFTAR BARU</a></h5>

    <foater>
        <i>dibuat dengan semangat @by student day programming web</i>
    </foater>
 
</body>
</html>