<?php
// Mendefiniskan variabel constant di luar class
define('BANK_NAME','Bank Nasional');

echo BANK_NAME;


class infoBank{

    const BANK_NAME = 'Bank Nasional Berniaga';

    public function getNamaBank(){
        return "Nama bank : ". self::BANK_NAME;
    }

}


$obj1 = new infoBank();

echo "<br>";
echo "<br>";
echo "VAR constant dipanggil melalui function";
echo "<br>";

echo $obj1->getNamaBank();

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";

echo "VAR constant dipanggil tanpa function dan tanpa instance class terlebih dahulu";
echo "<br>";
echo "<br>";
echo infoBank::BANK_NAME;



echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";

echo "VAR constant __FILE__ adalah VAR constant yang dimiliki php yang menghasilkan output seperti berikut :";
echo "<br>";
echo "<br>";
echo __FILE__;



echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";


echo "VAR constant __LINE__ adalah VAR constant yang dimiliki php yang menghasilkan output seperti berikut :";
echo "<br>";
echo "<br>";
echo __LINE__;