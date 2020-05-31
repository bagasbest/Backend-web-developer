<?php

// require 'Produk/InfoProduk.php';
// require 'Produk/Produk.php';
// require 'Produk/Komik.php';
// require 'Produk/Game.php';
// require 'Produk/CetakInfoProduk.php';
// require 'Produk/User.php';

// require 'Service/User.php';


spl_autoload_register(function( $class ){
    // App/Produk/User = ["App", "Produk", "User"];
    $class = explode('\\', $class);
    $class = end($class);
    require __DIR__  . '/Produk/' . $class . '.php';
});

spl_autoload_register(function( $class ){
    $class = explode('\\', $class);
    $class = end($class);
    require __DIR__  . '/Service/' . $class . '.php';
});