<?php
class Customers{
    // Mendelarasikan sebuah property pada sebuah kelas dengan visibillity public
    // dan memberikan nilai default pada sebuah properrty 
    public $nama            = "isi dengan nama";
    public $alamat          = "isi dengan alamat customer"; 
    public $saldoSimpanan   = 0;
    public $email           = "isi dengan email customer";
    public $noTlp           = "isi denga no tlp customer";  

    // Membuat method setter pada sebuah kelas dengan visibillity public 
    // Jika kita tidak mendeklarasikan visibillity pada sebuah method di dalam sebuah kelas
    // Maka secara otomatis visibillity yang dibuat akan memiliki tipe visibillity default yaitu public
    public function setSimpanan($saldoSimpanan)
    {
        $this->saldoSimpanan = $saldoSimpanan;
    }
    // Membuat method getter pada sebuah kelas dengan visibillity public 
    public function getSaldo()
    {
       return "Saldo simpanan anda adalah sebesar : Rp.".$this->saldoSimpanan;
    }
}

// membuat instance object dari sebuah class
$customer1 = new Customers();
$customer2 = new Customers();

// menampilkan object yang sudah diinstance
var_dump($customer1);
var_dump($customer2);

// mengisi property nama
$customer1->nama = "Nurjaman";

// menampilkan property nama dari sebuah object
echo $customer1->nama. " => ini adalah object pertama yang sudah di ganti value dari property nama nya";
echo "<br>";
echo "<br>";
echo $customer2->nama. " => ini adalah object kedua yang masih menggunakan value default dari property nama";

echo "<br>";
echo "<br>";
// memberikan value pada properti saldoSimpanan dengan menggunakan method yang terdapat dalam sebuah class
$customer1->setSimpanan(1000000);

// menampilkan info saldo yang sudah di set dengan menggunak method pada class
echo $customer1->getSaldo();
echo "<br>";
echo "<br>";
echo $customer2->getSaldo() ." => ini adalah object ke-2 dari class customer yang belum di set saldonya dengan menggunakan method";
