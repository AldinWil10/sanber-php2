<?php
// Tingkatan tertinggi ada pada class
// Dibawah class terdapat Object
// Didalam Object terdapat property dan method


// Misal Class = Mobil
// untuk Object = Merk
// Maka property berupa = fuel, max speed, color, dll.
// untuk method berarti = getFuel(), getMaxspeed(), getColor,dll.
?>

<!-- Contoh -->
<?php
// 
class Mobil // ini class
{
    public $roda = 4; // ini propertuy (roda merupakan bagian dari mobil)
    public function jalan() // ini method
    {
        echo "Mobil berjalan";
    }
    public function jumlah_roda()
    {
        echo $this->roda;
    }
}
$mini = new Mobil;
$mini->jumlah_roda()
?>

<!-- Membuat Object -->
<?php
// Awali dengan inisiasi
// Format = $nama object =  new nama class();
$mini = new Mobil;
// Cara mengambil property dan method adalah menggunakan tanda (->)
$mini->roda; // Untuk mendapatkan nilai properti
$mini->jalan(); // Untuk memanggil methodnya
?>