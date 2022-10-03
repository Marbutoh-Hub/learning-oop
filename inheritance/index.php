<?php


class Customers{
    public $nama, $alamat, $saldoSimpanan, $email, $noTlp, $tfindividu, $tfcompany = array();
    
    // Membuat construct dari sebuah class 
    // Construct ini akan secara otomatis dipanggil ketika sebuah class di instance
    // pada kasusu ini kita akan menggunakan construct untuk mengisi nilai default dari property pada sebuah class
    // construct adalah sebuah method unik yang dimiliki oleh php tandanya adalah diawali dengan __ (double underscore)
    // menambahkan property tf individu untuk extends individu dan tf company untuk extends company 
    public function __construct($nama = 'Default Name',$alamat  = 'Default Alamat',$saldoSimpanan  = 0, $email  = 'Default E-mail',$noTlp  = 'Default No Tlp',$tfindividu = 'Def No Rek', $tfcompany = array() ){

        $this->nama             = $nama;
        $this->alamat           = $alamat;
        $this->saldoSimpanan    = $saldoSimpanan;
        $this->email            = $email;
        $this->noTlp            = $noTlp;
        $this->tfindividu       = $tfindividu;
        $this->tfcompany        = $tfcompany;

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
    public function getInfoCust(){
        return "Nama : " .$this->nama ."<br>" ."Alamat : ". $this->alamat ."<br>"."Saldo : ". $this->saldoSimpanan ."<br>"."E-mail : " .$this->email. "<br>"."No tlp : " .$this->noTlp;
    }
}

// Membuat inheritance dari class customer untuk customer undividu
class Individu extends Customers{

    // perluasan method dari class parents customer untuk class idividu
    public function getInfoCust()
    {
        $Tmp = "<b>Customer Perorangan</b><br> <br> <br>".  "Nama : " .$this->nama ."<br>" ."Alamat : ". $this->alamat ."<br>"."Saldo : ". $this->saldoSimpanan ."<br>"."E-mail : " .$this->email. "<br>"."No tlp : " .$this->noTlp . "<br>" ."No Rek Transfer: ". $this->tfindividu;
        return $Tmp;
    }

}

class Company extends Customers{
    // untuk menampung array no rek yang sudah digabungkan
    public $tmptfcompany;

    // perluasan method dari class parents customer untuk class company
    public function getInfoCust()
    {
        //implode adalah Built-in function yang tardapat pada php untuk menggabungkan seluruh isi array menjadi sebuah string
        $this->tmptfcompany = implode(', ',$this->tfcompany);
        $Tmp                = "<b>Customer Company</b><br> <br> <br>".  "Nama : " .$this->nama ."<br>" ."Alamat : ". $this->alamat ."<br>"."Saldo : ". $this->saldoSimpanan ."<br>"."E-mail : " .$this->email. "<br>"."No tlp : " .$this->noTlp . "<br>" ."No Rek Transfer: ". $this->tmptfcompany;
        return $Tmp;
    }


}

// Melakukan instance object dari class individu
$customer1 = new Individu('Ahmad','Jl.Sawah Besar',120444,'Ahmadjaelani@gmail.com','08987635527633','37466-654',[]);
// Melakukan instance object dari class company
$customer2 = new Company('Dinda','Jl.Masjid',120323,'Dinda@gmail.com','08243435527633','',['232332-4232','6794387-583']);

echo $customer1->getInfoCust();
echo "<br>";
echo "<br>";
echo "<br>";
echo $customer2->getInfoCust();