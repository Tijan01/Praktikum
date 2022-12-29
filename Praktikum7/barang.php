<?php

$nama =$_POST['nama'];
$beratKG=$_POST['beratKg'];
$stok=$_POST['stok'];

class barang {
    private $nama;
    private $beratKG;
    private $beratG;
    private $beratMG;
    private $stok;

    function __construct($nama, $beratKG, $stok){
        $this->nama = $nama;
        $this->beratKG = $beratKG;
        $this->stok = $stok;
    }

    function convertBeratG($beratKG){
       return $this->beratKG = $beratKG*1000;
    }

    function convertBeratMG($beratKG){
        $this->beratKG = $beratKG*1000000;

    }

    function getnama(){
        return $this->nama;
    }

    function getberatKg(){
       return  $this->beratKG;
    }

    function getstok(){
        return  $this->stok;
     }

}

include 'index.php';

$barang1 = new $barang($nama, $beratKG, $stok);




?> 