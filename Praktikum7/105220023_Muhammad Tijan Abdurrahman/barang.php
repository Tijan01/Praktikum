<?php
class Barang{
    private $nama;
    private $beratKG;
    private $beratG;
    private $beratMG;
    private $stok;

    public $hargappn;

    function __construct($nama, $beratKG, $stok){
        $this->nama = $nama;
        $this->beratKG = $beratKG;
        $this->stok = $stok;
    }

    function convertBeratG($beratKG){
       return $this->beratG = $beratKG*1000;
        
    }

    function convertBeratMG($beratKG){
        return $this->beratMG = $beratKG*1000000;
        
    }

    function getNama(){
        return $this->nama;
    }

    function getBerat(){
        return $this->beratKG;
    }

    function getStok(){
        return $this->stok;
    }

    function getppn(){
        
    }
}
