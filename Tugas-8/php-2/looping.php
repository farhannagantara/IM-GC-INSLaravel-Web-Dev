<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>

<body>
    <h1>Berlatih Looping</h1>

    <?php
    echo "<h3>Soal No 1 Looping I Love PHP</h3>";
    /*
        Soal No 1
        Looping I Love PHP
        Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat)
        dan Looping yang ke dua menurun (Descending). 
            
        Output: 
        LOOPING PERTAMA
        2 - I Love PHP
        4 - I Love PHP
        6 - I Love PHP
        8 - I Love PHP
        10 - I Love PHP
        12 - I Love PHP
        14 - I Love PHP
        16 - I Love PHP
        18 - I Love PHP
        20- I Love PHP
        LOOPING KEDUA
        20 - I Love PHP
        18 - I Love PHP
        16 - I Love PHP
        14 - I Love PHP
        12 - I Love PHP
        10 - I Love PHP
        8 - I Love PHP
        6 - I Love PHP
        4 - I Love PHP
        2 - I Love PHP
    */
    //Lakukan looping disini
    echo "<h3>Looping 1</h3>";
    for ($i = 2; $i <= 20; $i += 2) {
        echo $i . " - I LOVE PHP <br>";
    }

    echo "<h3>Looping 2</h3>";
    for ($a = 20; $a >= 2; $a -= 2) {
        echo $a . " - I LOVE PHP <br>";
    }

    echo "<h3>Soal No 2 Looping Array Modulo</h3>";
    /*
        Soal No 2
        Looping Array Module
        Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.
        Tampung ke dalam array bernama $rest
    */

    $numbers = [18, 45, 29, 61, 47, 34];
    echo "array numbers:";
    print_r($numbers);
    //Lakukan looping disini

    echo "<br>";
    echo "Sisa baginya adalah:";
    foreach ($numbers as $value) {
        $rest[] = $value %= 5;
    }
    print_r($rest);

    echo "<br>";

    echo "<h3>Soal No 3 Looping Asociative Array";
    /*
        Soal No 3
        Loop Associative Array
        Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif. 
        Setiap item memiliki key yaitu : id, name, price, description, source. 
            
        Output: 
        Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpeg )
        Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpeg )
        Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pinter [source] => genius.jpeg )
        Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpeg )

        Jangan ubah variabel $items 
    */

    $items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
    ];
    echo "<br>";

    // Output: 

    foreach ($items as $key => $value) {
        $biodata = array(
            "id" => $value[0],
            "name" => $value[1],
            "price" => $value[2],
            "description" => $value[3],
            "source" => $value[4]
        );
        print_r($biodata);
        echo "<br>";
    }


    echo "<h3>Soal No 4 Asterix </h3>";
    /*
        Soal No 4
        Asterix 5x5
        Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 
        Output: 
        *
        * *
        * * *
        * * * *
        * * * * *
    */
    echo "Asterix: ";
    echo "<br>";
    for ($j = 1; $j <= 5; $j++) {
        for ($b = 1; $b <= $j; $b++) {
            echo "*";
        }
        echo "<br>";
    }


    ?>


</body>

</html>