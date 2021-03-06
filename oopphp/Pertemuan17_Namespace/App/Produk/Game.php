<?php namespace App\Produk;

//overriding
class Game extends Produk implements InfoProduk {
    public $waktuMain;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul , $penulis , $penerbit , $harga );

        $this->waktuMain = $waktuMain;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";       
        return $str;
    }

    // public function getHarga () {
    //     return $this->harga;
    // }

    public function cetakIsi () {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}