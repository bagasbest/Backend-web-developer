<?php

interface InfoProduk {
     public function cetakIsi();
}

 Abstract class Produk {
    protected   $judul,
               $penulis,
               $penerbit,
                $harga,
                $diskon = 0;



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


    abstract public function getInfo();
    

}

//overriding
class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0) {
            parent::__construct($judul , $penulis, $penerbit, $harga );

            $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";       
        return $str;
    }

    public function cetakIsi () {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    
    }

}

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

class CetakInfoProduk {
    public $daftarProduk = [];

    public function tambahProduk( Produk $produk)  {
            $this->daftarProduk[] = $produk;
    }

    public function cetak () {
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $df) {
            $str .= "- {$df->cetakIsi()} <br>";
        }

        return $str;
      
    }
}


//instansiasi isi
$produk3 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100);
$produk4 = new Game("Unxharted4", "Donald Bebebk", "Sony Computer", 5000000,50);


$cetakProduk  = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk3);
$cetakProduk->tambahProduk($produk4);
//output

echo $cetakProduk->cetak();
