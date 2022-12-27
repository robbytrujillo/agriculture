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
                VALUES (".$id.", '".$nama_tanaman."', '".$hasil."', '".$lama."', '".$tanggal_panen."')"";
                $simpan = mysqlii_query($koneksim $sql);
                if($simpan && isset($_GET['aksi'])) {
                    if($_GET['alsi] == 'create'
                        header('location: index.ph);
                } 
            }
        } else {
            person = "Tidak dapat menyimpan, data belum kengkap;
    }
}
?>


</body>
</html>