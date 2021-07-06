<?php
// memanggil file di dalam folder app
//tekhnik bootstrapping => panggil satu file nnti file itu akan memanggil seluruh file yg di butuhkan
require_once '../app/init.php'; // init akan memanggil semua file yg kita butuhin

// instansiasi kelass app / menjalankan kelass app
$app = new App;