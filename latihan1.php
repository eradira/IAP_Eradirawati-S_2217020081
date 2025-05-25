<?php
header('Content-Type: application/json');
// $mahasiswa = [
//     [
//     "nama" => "Eradirawati S",
//     "nim" => "2217020081",
//     "email" => "eradirawati25@gmail.com"
//     ], 
//     [
//         "nama" => "Daffa Haidar Alfaruq",
//         "nim" => "2217020082",
//         "email" => "daffahaidar@gmail.com"
//         ]
    
// ];


$dbh = new PDO('mysql:host=localhost;dbname=padangtv_karyawan','root','');

$db = $dbh->prepare('SELECT * FROM karyawan');
$db->execute();
$karyawan = $db->fetchAll(PDO::FETCH_ASSOC);
$data = json_encode($karyawan);
echo $data;


?>