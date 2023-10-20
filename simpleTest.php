<?php
use PHPUnit\Framework\TestCase; // digunakan untuk mengimpor kelas “TestCase” dari Framework PHP Unit

require_once "wordCount.php"; // digunakan untuk mengimpor kode php dari file Wordcount.php

class simpleTest extends TestCase{ // digunakan untuk mendefinisikan kelas simpleTest yang merupakan turunan dari kelas TestCase
    public function testCountWords(){ // digunakan untuk membuat sebuah fungsi dengan nama testCountWords
        $Wc = new wordCount(); // digunakan untuk pembuatan objek baru dengan nama Wordcount yang akan diletakkan didalam variable dengan nama $wc

        $TestSentence = "Halo bang, apa kabar?"; // digunakan untuk menyimpan kalimat kedalam variabel $TestSentence
        $WordCount = $Wc->countWords($TestSentence); // digunakan untuk memanggil objek $wc dan hasilnya akan disimpan dalam variabel $wordcount

        $this->assertEquals(4, $WordCount); // digunakan untuk menguji apakah isi dari variabel $wordcount adalah terdiri dari 4 kata atau tidak
    }
}