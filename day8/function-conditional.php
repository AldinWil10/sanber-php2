<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function dan Conditional</title>
</head>

<body>
    <h1>Berlatih Function PHP</h1>
    <?php
    echo "<h3> Soal No 1 Greetings </h3>";
    /* 
        Soal No 1
        Greetings
        Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 

        contoh: greetings("abduh");
        Output: "Halo Abduh, Selamat Datang di Sanbercode!"
    */
    function greetings($nama)
    {
        echo "Halo $nama, Selamat Data di Sanbercode!";
    }
    greetings("Bagas");
    // greetings("Wahyu");
    // greetings("nama peserta");
    ?>
    <hr>
    <?php
    echo "<h3>Soal No 2 Reverse String</h3>";
    /* 
        Soal No 2
        Reverse String
        Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
        Function reverseString menerima satu parameter berupa string.
        NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!

        reverseString("abdul");
        Output: ludba

    */
    function pembalik($str)
    {
        $tampung = "";
        $panjangKata = strlen($str);

        for ($i = $panjangKata - 1; $i >= 0; $i--) {
            $tampung .=  $str[$i];
        }
        return $tampung;
    }
    function reverseString($kata)
    {
        $reverse = pembalik($kata);
        echo "$reverse <br>";
    }
    reverseString("wildan");
    reverseString("Sanbercode");
    // reverseString("We Are Sanbers Developers");
    ?>
</body>

</html>