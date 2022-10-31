<?php 

// Mendefiniskan class cekPassword
class cekPassword{
    // Membuat property dengan tipe static
    public static $inputPercobaan = 1;

    // Membuat method jumlah percobaan dengan tipe static
    public static function JumlahPercobaan(){

        return "percobaan login ke- ". self::$inputPercobaan++ ."<br>";
 
    }

}

// Mengeksekusi method static dari class cek password

echo "<hr>"; 
echo "<br>";
echo "<br>";
echo "<br>";


echo cekPassword::JumlahPercobaan();
echo cekPassword::JumlahPercobaan();
echo cekPassword::JumlahPercobaan();

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";

// echo "class dengan property static nilai propertinya akan selalu tetap ketika dipanggil berkali kali atau di instansiasi berkali kali karna property tersebut menempel pada class bukan pada object";

class cekUsername{

    public $inputUname = 1;

    public function JmlPercobaan(){
        return "percobaan login ke- ". $this->inputUname++ ."<br><br>";

    }

}

$obj1 = new cekUsername();
$obj2 = new cekUsername();

echo "<hr>"; 
echo "<br>";
echo "<br>";
echo "<br>";

echo $obj1->JmlPercobaan();
echo $obj1->JmlPercobaan();
echo $obj1->JmlPercobaan();

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";

echo "<hr>"; 
echo "<br>";
echo "<br>";
echo "<br>";

echo $obj2->JmlPercobaan();
echo $obj2->JmlPercobaan();
echo $obj2->JmlPercobaan();

echo "Class dengan property tanpa static nilai propertinya akan diset kembali ke nilai awal ketika class tersebut  diinstansiasi kembali hal ini karena  property tersebut menempel pada object bukan pada class";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";

class CekLogin{

    public static $jmlTesting = 1;

    public function testLogin(){

        return "percobaan login ke- ". self::$jmlTesting++ ."<br>";

    }
}

$obj3 = new CekLogin();
$obj4 = new CekLogin();

echo "<hr>"; 
echo "<br>";
echo "<br>";
echo "<br>";

echo $obj3->testLogin();
echo $obj3->testLogin();
echo $obj3->testLogin();

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";


echo "<hr>"; 
echo "<br>";
echo "<br>";
echo "<br>";

echo $obj4->testLogin();
echo $obj4->testLogin();
echo $obj4->testLogin();

echo "Class dengan property static nilai propertinya akan selalu tetap ketika dipanggil berkali kali atau di instansiasi berkali kali karna property tersebut menempel pada class bukan pada object";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";








