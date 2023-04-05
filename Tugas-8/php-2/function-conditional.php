<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    // Code function di sini 
    function greetings($nama)
    {
        echo " Halo " . $nama . ", Selamat Datang di Sanbercode!";
        echo "<br>";
    }

    // Hapus komentar untuk menjalankan code!
    greetings("Bagas");
    greetings("Wahyu");
    greetings("nama peserta");

    echo "<br>";

    echo "<h3>Soal No 2 Reverse String</h3>";
    /*
    Soal No 2
    Reverse string
    Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
    Function reverseString menerima satu parameter berupa string.
    NB: Dilarang menggunakan built-in function PHP seperti strrev(), hanya menggunakan LOOPING!

    reverseString ("abdul");
    Output :ludba
    */

    //Code function disini
    function reverse($kata1)
    {
        $panjangkata = strlen($kata1);
        $tampung = "";
        for ($i = ($panjangkata - 1); $i >= 0; $i--) {
            $tampung  .= $kata1[$i];
        }
        return $tampung;
    }

    function reverseString($kata2)
    {
        $string = reverse($kata2);
        echo $string . "<br>";
    }


    //Hapus komentar ini untuk menjalankan code
    reverseString("nama peserta");
    reverseString("Sanbercode");
    reverseString("We Are Sanbers Develovers");
    echo "<br>";

    echo "<h3>Soal No 3 Polindrome</h3>";

    /*
    Soal No 3 
    Palindrome 
    Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
    Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic. 
    Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false. 
    NB: 
    Contoh: 
    palindrome("katak") => output : "true" 
    palindrome("jambu") => output : "false" 
    NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2! 
    */

    // Code function di sini 
    function palindrome($kata3)
    {
        $balikkata = reverse($kata3);
        if ($kata3 == $balikkata) {
            echo $kata3 . " => True <br>";
        } else {
            echo $kata3 . " => False <br>";
        }
    }


    // Hapus komentar di bawah ini untuk jalankan code
    palindrome("civic"); // true
    palindrome("nababan"); // true
    palindrome("jambaban"); // false
    palindrome("racecar"); // true

    echo "<h3>Soal No 4 Tentukan Nilai </h3>";
    /*
    Soal 4 
    buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter 
    berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” 
    Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar
    sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
    */

    // Code function di sini 
    function tentukan_nilai($angka)
    {

        if ($angka >= 85 && $angka <= 100) {
            return $angka . " Sangat Baik <br>";
        } else if ($angka >= 70 && $angka < 85) {
            return  $angka . " Baik <br>";
        } else if ($angka >= 60 && $angka < 70) {
            return  $angka . " Cukup <br>";
        } else {
            return  $angka . " kurang";
        }
    }

    // Hapus komentar di bawah ini untuk jalankan code
    echo tentukan_nilai(98); //Sangat Baik
    echo tentukan_nilai(76); //Baik
    echo tentukan_nilai(67); //Cukup
    echo tentukan_nilai(43); //Kurang

    ?>


</body>

</html>