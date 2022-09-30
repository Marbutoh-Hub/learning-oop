<?php

use Customers as GlobalCustomers;

class Customers{
    public $nama,$alamat,$saldoSimpanan,$email,$noTlp;
    
    // Membuat construct dari sebuah class 
    // Construct ini akan secara otomatis dipanggil ketika sebuah class di instance
    // pada kasusu ini kita akan menggunakan construct untuk mengisi nilai default dari property pada sebuah class
    // construct adalah sebuah method unik yang dimiliki oleh php tandanya adalah diawali dengan __ (double underscore)
    public function __construct($nama = 'Default Name',$alamat  = 'Default Alamat',$saldoSimpanan  = 0, $email  = 'Default E-mail',$noTlp  = 'Default No Tlp'){

        $this->nama             = $nama;
        $this->alamat           = $alamat;
        $this->saldoSimpanan    = $saldoSimpanan;
        $this->email            = $email;
        $this->noTlp            = $noTlp;

    }

    public function setSimpanan($saldoSimpanan)
    {
        $this->saldoSimpanan = $saldoSimpanan;
    }
    public function getSaldo()
    {
       return "Saldo simpanan anda adalah sebesar : Rp.".$this->saldoSimpanan;
    }
    // Membuat method untuk mengambil seluruh info dari customer
    public function getLabel(){
        return "Nama : " .$this->nama ."<br>" ."Alamat : ". $this->alamat;
    }
}

// Membuat class untuk mengambil info costumer dengan Tipe object Customer
class InfoCustomer{
    public function getInfoCust(Customers $customer)
    {
        return "Nama : " .$customer->nama ."<br>" ."Alamat : ". $customer->alamat ."<br>"."Saldo : ". $customer->saldoSimpanan ."<br>"."E-mail : " .$customer->email. "<br>"."No tlp : " .$customer->noTlp;
    }

}

// Melakukan instance object dari class customers
$customer1 = new Customers('Ahmad','Jl.Sawah Besar',120444,'Ahmadjaelani@gmail.com','08987635527633');
$customer2 = new Customers('Kiki','Jl.Bulungan',1200000,'jaelani@gmail.com','089876343433');

// Melakukan instance object dari class info costumer sebelum class di gunakan untuk mengambil info dari customer dengan parameter tipe object dari method get info cust 
$infoCust = new InfoCustomer();

echo $infoCust->getInfoCust($customer1);
echo "<br>";
echo "<br>";
echo $infoCust->getInfoCust($customer2);