<?php

namespace database;

class koneksi
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "dbbukutamu";
    private $koneksi;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }

    public function close()
    {
        mysqli_close($this->koneksi);
    }

    public function prepare($sql)
    {
        return $this->koneksi->prepare($sql);
    }

    public function query($sql)
    {
        return $this->koneksi->query($sql);
    }
}
