<?php

define ('NAMA', 'Bagas Pangestu');
echo NAMA;
echo "<hr>";

const UMUR = 21;
echo UMUR;
echo "<hr>";

class Coba {
    const NAMA ="Bagas Pangestu";
}
echo Coba::NAMA;
echo "<hr>";

//magic constant pada oopphp
echo __LINE__; echo "<br>"; //menampilkan line saat ini
echo __FILE__; echo "<br>"; //menampilkan lokasi file
echo "<hr>";

function coba () {
    return __FUNCTION__;
}

echo coba(); // saat ini kita sedang berada di function coba
echo "<hr>";


class Coba2 {
    public $kelas = __CLASS__;

}

$obj = new Coba2;
echo $obj->kelas;

?>