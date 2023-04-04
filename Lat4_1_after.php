<?php
//class mobil
class mobil
{
    public $name;
    public $merk;
    public $a;

    function getWarna($a)
    {
        return $this->warna = $a;
    }
    function getInfo()
    {
        echo "Nama mobil : " . $this->nama . "<br>";
        echo "Merk : " . $this->merk . "<br>";
        echo "Warna : " . $this->warna . "<br>";
    }
}

//bagian main
$ferari = new mobil();
$ferari->nama = "xxx";
$ferari->merk = "aaa";
$ferari->warna = "merah";

$ferari->getInfo();
?>