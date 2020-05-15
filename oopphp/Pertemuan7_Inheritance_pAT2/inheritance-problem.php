<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain;


    public function __construct ($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "Harga", $jmlHalaman = 0, $waktuMain = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;

    }

    public function getLabel () {
        return "$this->penulis, $this->penerbit"; 
    }

    public function cetakIsi () {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";       
        return $str;
    }

}

class Komik extends Produk {
    public function cetakIsi () {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    
    }

}

class Game extends Produk {
    public function cetakIsi () {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk {
        public function cetak (Produk $produk) {
            $str = "{$produk->judul} | {$produk->getLabel()} | {Rp. {$produk->harga}}";
            return $str;
        }
}



$produk3 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100, 0);
$produk4 = new Game("Unxharted4", "Donald Bebebk", "Sony Computer", 5000000, 0, 50);

// Komik : Masashi Kisimoto, Shonen Jump
// Game : Donald Bebebk, Sony Computer
// Naruto | Masashi Kisimoto, Shonen Jump | {Rp. 30000}


echo $produk3->cetakIsi();
echo "<br>";
echo $produk4->cetakIsi();

