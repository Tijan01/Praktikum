<?php



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
        $this->nama = $nama;
    }

    function getberatKg(){
        $this->beratKG = $beratKG;
    }

}





?> 