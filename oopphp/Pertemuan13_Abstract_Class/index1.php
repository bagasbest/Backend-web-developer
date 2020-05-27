<?php

// ABSTRACT CLASS
// abstrak kelas adalah kelas yang tidak dapat kita instansiasi
// kita dapat menginstansiasi di kelas turunannya
// kelas abstrak ini mendefinisikan interface untuk kelas turunannya
//kelas turunan akan bekerja sesuai dengan kerangka pada abstrak kelas nya
// memiliki minimal 1 method


class Buah {
    private $warna;

    public function makan () {
        //kunyah
        //telan
    }

    public function setWarna ($warna) {
        $this->warna = $warna;
    }
}

class Apel extends Buah {
    public function makan () {
        //kunyah 
        //telan
    }
}

class Jeruk extends Buah {
    public function makan () {
        //kupas
        //telan
    }
}
 
?>