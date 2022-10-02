<?php
class Bank{
    //member1 variabel
    protected $norek;
    public $nama;
    private $saldo;
    //variabel konstanta & static di dlm class
    static $jml = 0;
    const BANK = 'Bank Syariah Nurul Fikri';
    
    //member2 konstruktor
    public function __construct($no, $nasabah, $saldo){
        $this->norek = $no;
        $this->nama = $nasabah;
        $this->saldo = $saldo;
        self::$jml++;
    }
    //member3 method2
    public function menabung($uang){
        $this->saldo += $uang;
    }
    public function menarik($uang){
        $this->saldo -= $uang;
    }
    public function mencetak(){
        echo '<b><u>'.self::BANK.'</u></b>'; 
        echo '<br/>No. Rekening: '.$this->norek;
        echo '<br/>Nama Nasabah: '.$this->nama;
        echo '<br/>Saldo: Rp. '.number_format($this->saldo, 0, ',', '.');
        echo '<hr/>';
    }
}