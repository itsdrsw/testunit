<?php
class wordCount{ // digunakan untuk mendefinisikan kelas Wordcount
    public function countWords($sentence){ // digunakan untuk membuat sebuah metode dengan nama countWords yang menerima satu argument yaitu kalimat $Sentence
        return count(explode(" ", $sentence)); // digunakan untuk menghitung jumlah kata dalam kalimat dengan cara memecah kalimat menjadi array menggunakan explode(“ ”, $sentence) dan kemudian menghitung panjang array tersebut menggunakan count()
    }
}?>
