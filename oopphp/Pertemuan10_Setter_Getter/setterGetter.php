<?php

class Produk {
    private    $judul,
               $penulis,
               $penerbit;
    private     $harga;

    private $diskon = 0;



    public function __construct ($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;


    }

    public function setJudul ($judul) {
        $this->judul = $judul;
    }

    public function getJudul () {
        return $this->judul;
    }

    public function setPenulis ($penulis) {
        $this->penulis= $penulis;
    }

    public function getPenulis () {
        return $this->penulis;
    }

    public function setPenerbit ($penerbit) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit () {
        return $this->penerbit;
    }

    public function setHarga ($harga) {
        $this->harga = $harga;
    }

    public function setDiskon ($diskon) {
        $this->diskon = $diskon;
    }

    public function getDiskon () {
        return $this->diskon;
    }

    public function getHarga () {
        return $this->harga * ($this->diskon / 100);
    }



    public function getLabel () {
        return "$this->penulis, $this->penerbit"; 
    }

    public function cetakIsi () {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";       
        return $str;
    }

}

//overriding
class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0) {
            parent::__construct($judul , $penulis, $penerbit, $harga );

            $this->jmlHalaman = $jmlHalaman;
    }

    public function cetakIsi () {
        $str = "Komik : " . parent::cetakIsi() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    
    }

}

//overriding
class Game extends Produk {
    public $waktuMain;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul , $penulis , $penerbit , $harga );

        $this->waktuMain = $waktuMain;
    }

    // public function getHarga () {
    //     return $this->harga;
    // }

   


    public function cetakIsi () {
        $str = "Game : " . parent::cetakIsi() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}



//instansiasi isi
$produk3 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100);
$produk4 = new Game("Unxharted4", "Donald Bebebk", "Sony Computer", 5000000,50);


//output
echo $produk3->cetakIsi();
echo "<br>";
echo $produk4->cetakIsi();
echo "<hr>";

$produk4->setDiskon(50);
echo $produk4->getHarga();


echo "<hr>";

$produk3->setPenulis("Bagas Pangestu");
echo $produk3->getPenulis();