<?php

class Daftar_model
{
    private $list = [
        [
            "nama" => 'Dani Maulana',
            "umur" => 22,
            "email" => 'danimaulana@gmail.com'
        ], [
            "nama" => 'Dewi Renata Maulida',
            "umur" => 21,
            "email" => 'dewi@gmail.com'
        ], [
            "nama" => 'Antin Yuliana',
            "umur" => 14,
            "email" => 'antin@gmail.com'
        ]
    ];
    //data base handler
    private $dbh;
    private $stmt;
    //jalankan koneksi ke database
    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';
        //cek keberhasilan koneksi
        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function getAllData()
    {
        return $this->list;
    }
    public function getDatabase()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM daftar');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
