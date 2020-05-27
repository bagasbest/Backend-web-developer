<?php

// contoh Static
class ContohStatic {
    public static $angka = 1;

    public static function halo () {
        return "Halo" . self::$angka . " kali.";
    }
}

// cara akses static keyword cuma panggil class nya
echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();

// static membuat nilai menjadi tetap meskipun nilai kita instansiasi berkali2


?>