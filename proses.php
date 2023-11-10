<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['ids'];
    $F_Name = $_POST['namaDepan'];
    $L_Name = $_POST['namaBelakang'];
    $email = $_POST['mail'];
    $email2 = $_POST['mail2'];
    $profesi = $_POST['job'];

    $file = 'datapribadi.csv';
    $data = "$id, $F_Name, $L_Name, $email, $email2, $profesi\n";

    // Simpan data ke dalam file CSV
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX) 
}
?>