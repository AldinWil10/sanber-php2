<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array PHP</title>
</head>

<body>
    <h1>Berlatih Array</h1>
    <?php
    echo "<h3>Soal no 1</h3>";
    /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
    */
    $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven");
    echo "ini adalah array kids: ";
    print_r($kids);
    $adults = array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray");
    echo "<br>ini adalah array adults: ";
    print_r($adults);
    ?>
    <hr>
    <?php
    echo "<h3> Soal no 2</h3>";
    /* 
             SOAL NO 2
             Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
    */
    echo "Cast Stranger Things: ";
    echo "<br>";
    // kids
    echo "Total Kids: ";
    echo count($kids);
    echo "<br>";
    echo "<ol>";
    echo "<li> $kids[0] </li>";
    echo "<li> $kids[1] </li>";
    echo "<li> $kids[2] </li>";
    echo "<li> $kids[3] </li>";
    echo "<li> $kids[4] </li>";
    echo "<li> $kids[5] </li>";
    echo "</ol>";

    // adults
    echo "Total Adults: ";
    echo count($adults);
    echo "<br>";
    echo "<ol>";
    echo "<li> $adults[0] </li>";
    echo "<li> $adults[1] </li>";
    echo "<li> $adults[2] </li>";
    echo "<li> $adults[3] </li>";
    echo "<li> $adults[4] </li>";
    echo "</ol>";
    ?>
    <hr>
    <?php
    echo "<h3>Soal No 3</h3>";
    /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
    */
    $people = array(
        array(
            "name" => "Will Byers",
            "age" => 12,
            "aliases" => "Will the Wise",
            "status" => "Alive"
        ),
        array(
            "name" => "Mike Wheeler",
            "age" => 12,
            "aliases" => "Dungeon Master",
            "status" => "Alive"
        ),
        array(
            "name" => "Jim Hopper",
            "age" => 43,
            "aliases" => "Chief Hopper",
            "status" => "Deceased"
        ),
        array(
            "name" => "Eleven",
            "age" => 12,
            "aliases" => "El",
            "status" => "Alive"
        ),
    );
    echo "<pre>";
    print_r($people);
    echo "</pre>";
    ?>
</body>

</html>