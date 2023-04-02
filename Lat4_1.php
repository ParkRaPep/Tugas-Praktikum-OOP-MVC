<?php
    //class mobil
    class mobil {
        public $name;
        public $merk;

        function getInfo() {
            echo "Nama mobil : ".$this->nama."<br>";
            echo "Merk : ".$this->merk."<br>";
        }
    }

    //bagian main
    $ferari = new mobil();
    $ferari->nama = "xxx";
    $ferari->merk = "aaa";

    $ferari->getInfo();
?>