<?php

class Produk {
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function getLabel () {
        return "$this->penulis, $this->penerbit"; 
    }

}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";


// $produk2 = new Produk();
// $produk2 -> judul = "Boruto";



// //tambah proprerti baru
// $produk2 -> newProperty = "JJAJAJJA"; 
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penerbit = "Massashi Kisimoto";
$produk3->penulis = "Shonen Jump";
$produk3->harga = 10000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penerbit = "Neil Druckman";
$produk4->penulis = "Sony Computer";
$produk4->harga = 500000;

echo "Komik :  " . $produk3->getLabel(); 
echo "<br>";
echo "Game : " . $produk4->getLabel();

// var_dump($produk4)
?>