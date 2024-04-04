<!-- Hak Akses property pada PHP -->

<?php
// Private
class Mobil
{
    private $roda = 4;  // Property yang diprivate
    private  function jalan()
    {   // Method yang diprivate
        echo "Mobil berjalan";
    }
}
// contoh pemanggilan diluar lingkup class 
// $avanza = new Mobil;
// echo $avanza->jalan();
// echo PHP_EOL;
// echo $avanza->roda;
// echo PHP_EOL;
/*
        jika dijalankan pasti error
        property dalam class Mobil -> private
        hanya bisa diakses didalam class
    */
?>
<hr>
<?php
// Protected dan public
class car
{
    protected $wheel = 4; //property yang diprotect
    public function getWheel()
    {
        return $this->wheel; //menggunakan $this untuk mendapatkan nilai dari property
    }
}
class Mobilsports extends car //artinya class yang memiliki sifat yang sama dengan car
{
    protected $maxSpeed;
}
$ferrari = new Mobilsports;
echo $ferrari->getWheel()
?>

<?php
/*


class Mobil {
  protected $roda= 4;
  public $merk;
  public function __construct($merk) 
  {
    $this->merk= $merk;
  }
}

?>

$xeniya = new Mobil("Xeniya");

echo $xeniya->merk; // Xeniya
*/
?>