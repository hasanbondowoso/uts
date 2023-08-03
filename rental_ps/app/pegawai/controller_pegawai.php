<?php
require "../../config/config_database.php";
$db = koneksi(hostname, username, database);

$act = $_GET['act'];

if ($act == 'input'){
    
$kd_pegawai = $_POST['kd_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$alamat_pegawai = $_POST['alamat_pegawai'];


$query = $db->query("INSERT INTO pegawai rental (kd_pegawai, nama_pegawai, alamat_pegawai)
                VALUES ('$kd_pegawai', '$nama_pegawai', '$alamat_pegawai')");
if  ($query) {
    echo "<script>
        alert('Data sukses disimpan');
        window.location.href='list_pegawai.php';
    </script>";
} else {
    echo "<script>
    alert('Data gagal disimpan');
    window.location.href='form_pegawai.php';
</script>";

}           
}else if ($act =='edit'){
    $kd_pegawai_old = $_POST['kd_pegawai_old'];
    $kd_pegawai = $_POST['kd_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $alamat_pegawai = $_POST['alamat_pegawai'];


    if(!empty($alamat_pegawai)){
        $password_fix = sha1($alamat_pegawai);
        $query = $db->query("UPDATE prodi SET kd_pegawai = '$kd_pegawai',
                                            nama_pegawai = '$nama_pegawai',
                                            kd_fakultas ='$alamat_pegawai',
                                            
                                            WHERE kd_pegawai= '$kd_pegawai'");
    }else{
        $query = $db->query("UPDATE prodi SET kd_prodi = '$kd_pegawai',
                                            nama_prodi = '$nama_pegawai',
                                            kd_fakultas ='$alamat_pegawai'
                                            WHERE kd_pegawai= '$kd_pegawai'");
    }
    if  ($query) {
        echo "<script>
            alert('Data sukses diubah');
            window.location.href='list_pegawai.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal diubah');
        window.location.href='list_pegawai.php';
    </script>";
    
    }           

}else if ($act == 'hapus'){
    $kd_prodi = $_GET['kd_pegawai'];
    $query = $db->query("DELETE FROM pegawai WHERE kd_pegawai ='$kd_pegawai'");
    if  ($query) {
        echo "<script>
            alert('Data sukses dihapus');
            window.location.href='list_pegawai.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal dihapus');
        window.location.href='list_pegawai.php';
    </script>";
    
    }
}else {
    echo "<script>
    alert('Maaf, parameter Anda tidak valid');
    window.location.href='list_pegawai.php';
</script>";
}
