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

// melakukan instance class pada sebuah object dan mengisi parameter yang akan digunakan oleh construct
// tapi hanya satu parameter yang di isi
$costumer1 = new Customers("Dadan");
// melakukan instance class pada sebuah object dan mengisi parameter yang akan digunakan oleh construct
// mengisi seluruh parameter pada construct
$customer2 = new Customers("Dinda","Jl. Nuansa Agung",20000,"Dinda@gmail.com","0897364736223");

// menampilkan hasil dari instance class dengan secara otomatis value 
echo "Hanya mengganti value property nama sisanya menggunakan nilai value default dari parameter construct => ";
var_dump($costumer1); 
echo '<br> <br>';
echo "Mengganti seluruh value property karena seluruh parameter yang dibutuhkan oleh construct terisi atau terpenuhi => <br> <br>";
echo $customer2->getLabel();
