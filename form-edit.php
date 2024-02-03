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
    
    <h4>formulir edit PPDB</h4>
    <?php
    include_once("config.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM calon_siswa WHERE id = '$id'";
    $query = mysqli_query($db, $sql);
    $r = mysqli_fetch_assoc($query);
    ?>
    <div>
        <form action="proses-edit.php" method="POST">
        <div>
            <label for="">Nama lengkap</label>
            <input type="text" name="nama" value="<?= $r['nama']; ?>">
        </div>
        <div>
            <label for="">Alamat lengkap</label>
            <textarea  name="alamat" cols="30" rows="10"><?= $r['alamat']; ?></textarea>
        </div>
        <div>
            <label for="">jenis kelamin</label>
            <input type="radio" name="jenis_kelamin" <?php if($r['jenis_kelamin']  == 'laki-laki') echo ('checked') ?>
             value="laki-laki" >laki-laki
            <input type="radio" name="jenis_kelamin" <?php if($r['jenis_kelamin']  == 'perempuan') echo ('checked') ?>
            value="perempuan" >perempuan
        </div>
        <div>
        <label for="">Agama</label>
        <select name="agama">
            <option value="Islam" <?= $r['agama'] =='Islam' ? 'selected' : ''?>>Islam</option>
            <option value="Kristen" <?= $r['agama'] =='Kristen' ? 'selected' : ''?>>Kristen</option>
            <option value="Hindu" <?= $r['agama'] =='Hindu' ? 'selected' : ''?>>Hindu</option>
            <option value="Budha" <?= $r['agama'] =='Budha' ? 'selected' : ''?>>Budha</option>
            <option value="Khonghuchu"  <?= $r['agama'] =='Konghuchu' ? 'selected' : ''?>>Khonghuchu</option>
        </select>
        </div>
        <div>
            <label for="">Sekolah asal</label>
            <input type="text" name="sekolah_asal" value="<?= $r['sekolah_asal']; ?>">
        </div>
        <div>
            <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
            <input type="reset"></label>
            <input type="submit" name="update" value="Update">
        </div>
    </div>
</form>
    <hr>
    <foater>
        <i>dibuat dengan semangat @by student day programming web</i>
    </foater>
 
</body>
</html>