<?php
include('koneksi.php');
if (isset($_POST['save'])) {
    
    $id               = $_POST['id_petugas'];
    $nama               = $_POST['nama'];
    $jabatan            = $_POST['jabatan'];
    $tlp      = $_POST['tlp'];
    $alamat             = $_POST['alamat'];
    $username           = $_POST['username'];
    $password           = $_POST['password'];

    // proses enskripsi password
    $options = [
        'cost' => 12,
    ];
    $password_enkript = password_hash($password, PASSWORD_BCRYPT, $options);
    // 

    $query_update = mysqli_query($konek,"UPDATE petugas 
    SET
        nama                = '$nama',     
        jabatan             = '$jabatan',    
        tlp       = '$tlp',  
        alamat              = '$alamat',
        username            = '$username',
        password            = '$password_enkript'
    
    WHERE id_petugas = '$id'");

    if ($query_update) {
        ?>
        <script>
            alert('Data Berhasil Diupdate')
            window.location.href='?page=petugas';
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('Data Berhasil Diupdate')
            window.location.href='?page=petugas';
        </script>
        <?php
    }
}
?>