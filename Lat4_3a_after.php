<?php
    class mahasiswa {
        private $nama;
        private $nim;

        function __construct($nama, $nim) {
            $this->nama = $nama;
            $this->nim = $nim;
        }
        function getData() {
            return "$this->nama $this->nim";
        }
        function __destruct() {}
    }
?>