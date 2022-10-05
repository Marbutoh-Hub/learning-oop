<?php 

class Customers{
    /* mengubah seluruh visibility menjadi private karena kita akan mengakses seluruh property atau melakukan 
    set pada property dengan setter dan getter (accessor method)*/ 
    private $nama, $alamat, $email, $noTlp,$saldoSimpanan;
    /* membuat akses modifier pada property saldo simpanan dengan visibility private agar tidak bisa di akses dan di set secara 
     sembarangan diluar kelas hanya bisa di akses dan di set didalam kelas itu sendiri */
    
    /* membuat akses modifier pada property ppn menjadi protected agar hanya bisa di akses dan di set hanya di kelas bersangkutan
    atau kelas turunannya saja */
    protected   $ppn = 0;
    
    // Membuat construct dari sebuah class 
    // Construct ini akan secara otomatis dipanggil ketika sebuah class di instance
    // pada kasus ini kita akan menggunakan construct untuk mengisi nilai default dari property pada sebuah class
    // construct adalah sebuah method unik yang dimiliki oleh php tandanya adalah diawali dengan __ (double underscore)
    // menambahkan property tf individu untuk extends individu dan tf company untuk extends company 
    public function __construct($nama = 'Default Name',$alamat  = 'Default Alamat',$saldoSimpanan  = 0, $email  = 'Default E-mail', $noTlp  = 'Default No Tlp'){

        $this->nama             = $nama;
        $this->alamat           = $alamat;
        $this->saldoSimpanan    = $saldoSimpanan;
        $this->email            = $email;
        $this->noTlp            = $noTlp;

    }
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }

    public function getAlamat()
    {   
        return $this->alamat;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
      return $this->email;
    }

    public function setSimpanan($saldoSimpanan)
    {
        $this->saldoSimpanan = $saldoSimpanan;
    }

    public function setNotlp($noTlp)
    {
        $this->noTlp = $noTlp;
    }

    public function getNoTlp()
    {                           
        return $this->noTlp;
    }
    public function getSaldo()
    {
       $this->saldoSimpanan -=  $this->ppn;
       return "Saldo simpanan {$this->nama} adalah sebesar : Rp. {$this->saldoSimpanan} setelah di set dengan menggunakan method setSimpanan";
    }
    // Membuat method untuk mengambil seluruh info dari customer
    public function getInfoCust(){
        return "Nama : " .$this->nama ."<br>" ."Alamat : ". $this->alamat ."<br>"."Saldo : ". $this->saldoSimpanan ."<br>"."E-mail : " .$this->email. "<br>"."No tlp : " .$this->noTlp;
    }
}


// Membuat inheritance dari class customer untuk customer undividu
class Individu extends Customers{
    public $tfindividu;

    // membuat construct untuk kelas Company construct ini akan dipanggil otomatis ketika class company diinstance
    public function __construct($nama = 'Default Name', $alamat  = 'Default Alamat', $saldoSimpanan  = 0, $email  = 'Default E-mail', $noTlp  = 'Default No Tlp', $tfindividu = 'Def No Rek'){
         // ketika kita menggunakan keyword parent:: maka secara otomatis method parentnya akan di panggil atau ini disebut denga overiding
        parent::__construct($nama ,$alamat ,$saldoSimpanan, $email, $noTlp);
        $this->tfindividu = $tfindividu;
    }

    // perluasan method dari class parents customer untuk class idividu
    public function getInfoCust()
    {
        $Tmp = "<b>Customer Perorangan</b><br> <br> <br>" .parent::getInfoCust(). "<br> No Rek Transfer: ". $this->tfindividu;
        return $Tmp;
    }


}

class Company extends Customers{
    // untuk menampung array no rek yang sudah digabungkan
    public $tmptfcompany,$tfcompany = array();

    // membuat construct untuk kela Company construct ini akan dipanggil otomatis ketika class company diinstance
    public function __construct($nama = 'Default Name',$alamat  = 'Default Alamat',$saldoSimpanan  = 0, $email  = 'Default E-mail',$noTlp  = 'Default No Tlp',$tfcompany = array())
    {
        //  ketika kita menggunakan keyword parent:: maka secara otomatis method parentnya akan di panggil atau ini disebut denga overiding
        parent::__construct($nama, $alamat, $saldoSimpanan, $email, $noTlp);
        $this->tfcompany = $tfcompany;
    }

    public function setPPN( $ppn){
        // menentukan jumlah potongan ppn untuk setiap no rek terkena 1 potongan
        return $this->ppn = $ppn*count($this->tfcompany);
    }


    // perluasan method dari class parents customer untuk class company
    public function getInfoCust()
    {
        //implode adalah Built-in function yang tardapat pada php untuk menggabungkan seluruh isi array menjadi sebuah string
        $this->tmptfcompany = implode(', ',$this->tfcompany);
        $Tmp                = "<b>Customer Company</b><br> <br> <br>".parent::getInfoCust()."<br> No Rek Transfer: ". $this->tmptfcompany;
        return $Tmp;
    }


}



// Melakukan instance object dari class individu
$customer1 = new Individu('Ahmad','Jl.Sawah Besar',120444,'Ahmadjaelani@gmail.com','08987635527633','37466-654');
// Melakukan instance object dari class company
$customer2 = new Company('Dinda','Jl.Masjid',120323,'Dinda@gmail.com','08243435527633',['232332-4232','6794387-583']);


echo $customer1->getInfoCust();
echo "<br>";
echo "<br>";
echo "<br>";
echo $customer2->getInfoCust();

echo "<hr>";

echo $customer1->setSimpanan(90000);
echo $customer1->getSaldo();
echo "<hr>";
$customer2->setSimpanan(10000);
// melakukan set PPN untuk class company sehingga saldo simpnan akan dikurangi dengan ppn yang sudah ditentukan
$customer2->setPPN(2000);
echo $customer2->getSaldo();

echo "<hr>";
echo "<hr>";
echo "<hr>";

echo $customer1->getNama() ." => nama diakses dengan menggunakan accessor method getNama";


echo "<hr>";
echo "<hr>";
echo "<hr>";
