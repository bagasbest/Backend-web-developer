<?php

require 'App/init.php';

//instansiasi isi
$produk3 = new App\Produk\Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100);
$produk4 = new App\Produk\Game("Unxharted4", "Donald Bebebk", "Sony Computer", 5000000,50);


$cetakProduk  = new App\Produk\CetakInfoProduk();
$cetakProduk->tambahProduk($produk3);
$cetakProduk->tambahProduk($produk4);
//output

echo $cetakProduk->cetak();

echo "<hr>";

use App\Service\User as ServiceUser;
new ServiceUser();