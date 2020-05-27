<?php

// ABSTRACT CLASS
// abstrak kelas adalah kelas yang tidak dapat kita instansiasi
// kita dapat menginstansiasi di kelas turunannya
// kelas abstrak ini mendefinisikan interface untuk kelas turunannya
//kelas turunan akan bekerja sesuai dengan kerangka pada abstrak kelas nya
// memiliki minimal 1 method

abstract class Buah {
    private $warna;

    abstract public function makan();

    public function setWarna ($warna) {
        $this->warna = $warna;
    }
}