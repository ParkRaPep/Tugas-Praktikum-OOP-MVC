<?php
    abstract class mahasiswa {
        abstract protected function getTugasAkhir();
        abstract protected function getProgram($postfix);

        public function TugasAkhir() {
            print $this->getTugasAkhir(). "<br>";
        }
    }

    class sarjana extends mahasiswa {
        protected function getTugasAkhir() {
            return "Skripsi";
        }

        public function getProgram($postfix) {
            print "{$postfix} S1";
        }
    }

    class magister extends mahasiswa {
        public function getProgram($postfix) {
            print "{$postfix} S2";
        }
    }
?>