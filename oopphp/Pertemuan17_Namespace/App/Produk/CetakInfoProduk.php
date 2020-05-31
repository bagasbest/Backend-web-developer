<?php namespace App\Produk;

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