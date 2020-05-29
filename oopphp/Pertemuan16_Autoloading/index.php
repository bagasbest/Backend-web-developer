<?php

require 'App/init.php';

//instansiasi isi
$produk3 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100);
$produk4 = new Game("Unxharted4", "Donald Bebebk", "Sony Computer", 5000000,50);


$cetakProduk  = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk3);
$cetakProduk->tambahProduk($produk4);
//output

echo $cetakProduk->cetak();
echo "<hr>";

new Coba();