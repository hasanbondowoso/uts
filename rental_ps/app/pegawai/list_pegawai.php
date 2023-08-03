<?php
require "../../config/config_database.php";
$db = koneksi(hostname, username, database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
</head>
<body>
    <div class="container">
    <div class="card">
    <div class="card-header">
        Data Prodi
        </div>
        <div class="card-body">
        <a class="btn btn-primary btn-sm" href="form_pegawai.php">
    <i class="fa-solid fa-circle-plus"></i> Tambah Data
    </a>
    <?php
    $query = $db->query("SELECT * FROM pegawai rental");
    
    ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Kd pegawai</th>
            <th>Nama Pegawai</th>
            <th>alamat pegawai</th>
            <th>Act</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
                while($row = $query->fetch_array()){
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['kd_pegawai']; ?></td>
                            <td><?php echo $row['nama_pegawai']; ?></td>
                            <td><?php echo $row['alamat_pegawai']; ?></td> 
                            <td><a class="btn btn-outline-success btn-sm" href="form_pegawai.php?act=edit&kd_pegawai=<?php echo $row['kd_pegawai']; ?>"><i class="fa-regular fa-pen-to-square"></i></a> 
                                <a class="btn btn-outline-danger btn-sm"href="controller_pegawai.php?act=hapus&kd_pegawai=<?php echo $row['kd_pegawai'];?>"><i class="fa-solid fa-trash-can"></i></a></td>
                        </tr>
                    <?php 
                }
            ?>
        </tbody>
   
    </table>
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