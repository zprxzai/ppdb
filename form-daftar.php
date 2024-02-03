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
    
    <h4>formulir PPDB</h4>
    <div>
        <form action="proses-pendaftaran.php" method="POST">
        <div>
            <label for="">Nama lengkap</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label for="">Alamat lengkap</label>
            <textarea  name="alamat" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="">jenis kelamin</label>
            <input type="radio" name="jenis_kelamin" value="laki-laki" >laki-laki
            <input type="radio" name="jenis_kelamin" value="perempuan" >perempuan
        </div>
        <div>
        <label for="">Agama</label>
        <select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Khonghuchu">Khonghuchu</option>
        </select>
        </div>
        <div>
            <label for="">Sekolah asal</label>
            <input type="text" name="sekolah_asal">
        </div>
        <div>
            <input type="reset"></label>
            <input type="submit" name="simpan" value="Simpan">
        </div>
    </div>
</form>
    <hr>
    <foater>
        <i>dibuat dengan semangat @by student day programming web</i>
    </foater>
 
</body>
</html>