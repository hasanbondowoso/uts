<?php
require "../../config/config_database.php";
$db = koneksi(hostname, username, database);

$act = isset($_GET['act']) ? $_GET['act'] : false;
$kode = isset($_GET['kd_pegawai']) ? $_GET['kd_pegawai'] : false;

if ($act =='edit') {
    $url = "controller_prodi.php?act=edit";
    if ($kode) {
        $query = $db->query("SELECT * FROM pegawai rental WHERE kd_pegawai ='$kode'");
        $row = $query->fetch_array();
    } else {
        echo "<script>
            alert('parameter kode pegawai tidak valid');
            window.location.href='list_pegawai.php';
        </script>";
    }
}
else{
    $url = "controller_pegawai.php?act=input";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Prodi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
</head>
<body>
    <div class="container">
    <div class="card">
    <div class="card-header">
        Input Data Prodi
        </div>
        <div class="card-body">
        <form action="<?php echo $url; ?>" method="post">
    <input type="hidden" name="kd_pegawai_old"id="kd_pegawai_old"value="<?php echo isset($row) ? $row['kd_pegawai'] : '';?>">
    <div class="mb-3">
        <label for="kd_prodi">kd Prodi</label>
        <input type="text" class="form-control" name="kd_pegawai" id="kd_pegawai" value="<?php echo isset($row) ? $row['kd_pegawai'] : '';?>">
    </div>
    <div class="mb-3">
        <label for="nama_prodi">Nama Prodi</label>
        <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai"value="<?php echo isset($row) ? $row['nama_pegawai'] : '';?>">
    </div>
    <div class="mb-3">
        <label for="kd_fakultas">Kd Fakultas</label>
        <input type="text" class="form-control" name="alamat_pegawai" id="alamat_pegawai"value="<?php echo isset($row) ? $row['alamat_pegawai'] : '';?>">
    </div>
    
    <div class="mb-3">
   
    <a class="btn btn-danger btn-sm float-start" href="list_pegawai.php">
    <i class="fa-solid fa-chevron-left"></i>
        Kembali
    </a>
    <button class="btn btn-primary btn-sm float-end" type="submit">
        <i class="fa-regular fa-floppy-disk"></i>
        Simpan Data
    
    </button>
    </div>
   </form> 
        </div>
    </div>
    </div>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <!-- fontawesome -->
    <script src="../../assets/fontawesome/js/all.min.js"></script>
</body>
</html>