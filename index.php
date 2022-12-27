
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Panen</title>
    <link rel="icon" href="http://www.petanikode.com/favicon.ico" />
</head>
<body>
  
<?php
    //koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "pertanian") or die (mysqli_error());
    //fungsi tambah data (create)
    function tambah($koneksi) {
        if (isset($POST['btn_simpan'])) {
            $id = time();
            $nama_tanaman = $_POST['nama_tanaman'];
            $hasil = $_POST['hasil'];
            $lama = $_POST['lama'];
            $tanggal_panen = $_POST['tanggal_panen'];

            if(!empty($nama_tanaman) && !empty($hasil) 
            && !empty($lama) && !empty($tanggal_panen)) {
                $sql = "INSERT INTO tabel_panen (id, nama_tanaman, hasil_panen, lama_tanam, tanggal_panen)
                VALUES (".$id.", '".$nama_tanaman."', '".$hasil."', '".$lama."', '".$tanggal_panen."')";
                $simpan = mysqli_query($koneksi, $sql);
                if($simpan && isset($_GET['aksi'])) {
                    if($_GET['aksi'] == 'create'){
                        header('location: index.php');
                } 
            }
        } else {
            $pesan = "Tidak dapat menyimpan, data belum kengkap";
    }
}
?>


<form action="" method="POST">
    <fieldset>
        <legend><h2>Tambah Data</h2></legend>
        <label>Nama tanaman <input type="text" name="nama_tanaman" /></label><br>
        <label>Hasil Panen<input type="number" name="hasil" /> kg</label><br>
        <label>Lama Tanam<input type="number" name="lama" /> bulan</label><br>
        <label>Tanggal Panen<input type="date" name="tanggal_panen" /></label><br>
        <br>
        <label>
            <input type="submit" name="btn_simpan" value="Simpan" />
            <input type="reset" name="reset" value="Bersihkan" />
        </label>
        <br>
        <p><?php echo isset($pesan) ? $pesan : "" ?></p>
    </fieldset>
</form>

<?php

?>
</body>
</html>