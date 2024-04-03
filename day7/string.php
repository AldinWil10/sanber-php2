<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String PHP</title>
</head>

<body>
    <h1>Berlatih String</h1>
    <?php
    echo "<h3>Soal No 1</h3>";
    echo $string = "PHP is never old <br>";
    $panjang_string = strlen($string);
    $jumlah_kata = str_word_count($string);
    echo "Panjang string : $panjang_string karakter <br>Jumlah kata : $jumlah_kata <br> <hr>";

    echo $first_sentence = "Hello PHP! <br>";
    $panjang_first = strlen($first_sentence);
    $jumlah_first = str_word_count($first_sentence);
    echo "Panjang string : $panjang_first karakter <br>Jumlah kata : $jumlah_first <br> <hr>";

    echo $second_sentence = "I'm ready for the challenges <br>";
    $panjang_second = strlen($second_sentence);
    $jumlah_second = str_word_count($second_sentence);
    echo "Panjang string : $panjang_second karakter <br>Jumlah kata : $jumlah_second <br>";
    ?>
    <hr>
    <?php
    echo "<h3>Soal No 2</h3>";
    /* 
        SOAL NO 2
        Mengambil kata pada string dan karakter-karakter yang ada di dalamnya.        
    */
    $string2 = "I love PHP";
    echo "<label>String: </label> \"$string2\" <br>";
    echo "Kata pertama: " . substr($string2, 0, 1) . "<br>";
    echo "Kata kedua: " . substr($string2, 2, 4) . "<br>";
    echo "Kata ketiga: " . substr($string2, 7, 3) . "<br>";
    ?>
    <hr>
    <?php
    echo "<h3> Soal No 3 </h3>";
    /*
        SOAL NO 3
        Mengubah karakter atau kata yang ada di dalam sebuah string.
    */
    $string3 = "PHP is old but sexy!";
    echo "string sebelum diubah: " . "<br>";
    echo "String: \"$string3\" ";
    echo "<br><br>";
    $ambil = substr($string3, 0, 15);
    $baru = $ambil . "awesome";
    echo "string setelah diubah: " . "<br>";
    echo "String: \"$baru\" ";

    ?>
</body>

</html>