<?php 

/*

Buatlah Abstract Class Bentuk2D sebagai induk kelas dengan member class:
- method abstract: 
  fungsi luasBidang()
  fungsi kelilingBidang()
Buatlah class2 turunan:
- Lingkaran 
	variabel: jari2
	method: namaBidang(), luasBidang(), kelilingBidang()
- PersegiPanjang 
	variabel: panjang, lebar
	method: namaBidang(), luasBidang(), kelilingBidang()
- Segitiga
	variabel: alas, tinggi
	method: namaBidang(), luasBidang(), kelilingBidang()
Buatlah file kumpulan_bidang.php untuk membuat object:
Cetak dalam bentuk tabel:
	- Thead: cetak judul kolom dengan (array scalar :No, Nama Bidang, Keterangan, Luas Bidang, Keliling Bidang) 
	- Tbody: cetak data-data bidang

*/

abstract class Bentuk2D {
    abstract public function luasBidang();
    abstract public function kelilingBidang();
}


?>