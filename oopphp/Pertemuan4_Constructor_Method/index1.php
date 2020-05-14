<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct ($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "Harga") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel () {
        return "$this->penulis, $this->penerbit"; 
    }

}



$produk3 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000);
$produk4 = new Produk("Unxharted4", "Donald Bebebk", "Sony Computer", 5000000);


echo "Komik :  " . $produk3->getLabel(); 
echo "<br>";
echo "Game : " . $produk4->getLabel();

// var_dump($produk4)
?>