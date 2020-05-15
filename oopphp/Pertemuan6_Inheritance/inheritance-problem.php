<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    public function __construct ($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "Harga", $jmlHalaman = 0, $waktuMain = 0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel () {
        return "$this->penulis, $this->penerbit"; 
    }

    public function cetakIsi () {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if($this->tipe == "Komik" ) {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else {
            $str .= " - {$this->waktuMain} Jam.";
        }
        return $str;
    }

}

class CetakInfoProduk {
        public function cetak (Produk $produk) {
            $str = "{$produk->judul} | {$produk->getLabel()} | {Rp. {$produk->harga}}";
            return $str;
        }
}



$produk3 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk4 = new Produk("Unxharted4", "Donald Bebebk", "Sony Computer", 5000000, 0, 50, "Game");

// Komik : Masashi Kisimoto, Shonen Jump
// Game : Donald Bebebk, Sony Computer
// Naruto | Masashi Kisimoto, Shonen Jump | {Rp. 30000}


echo $produk3->cetakIsi();
echo "<br>";
echo $produk4->cetakIsi();

