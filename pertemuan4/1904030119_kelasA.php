<!DOCTYPE html>
<html>

<head>
    <title>pertemuan4</title>
</head>

<body>
    <h1>Membuat array</h1>
    <?php
    $values = array(1, 2, 3, 4, 8.4);
    var_dump($values);
    echo ("<br>");
    $warna = array("biru", "hitam", "putih", "hijau");
    var_dump($warna);

    echo ("<br>");
    // mengganti isi value
    $warna[0] = "Merah";
    var_dump($warna);


    echo ("<br>");
    // menambahkan isi value
    $warna[] = "kuning";
    var_dump($warna);


    echo ("<br>");
    // menghapus isi value
    unset($warna[0]);
    var_dump($warna);

    echo ("<br>");
    // mengambil total data array
    var_dump(count($warna));
    ?>
    <hr>
    <h1>Map dengan array</h1>
    <?php
    $ahmad = array(
        "id" => "codel",
        "nama" => "Ahmad M Apriliansyah",
        "age" => "19",
    );
    var_dump($ahmad);

    echo ("<br>");
    echo ("nama panggilan :" . $ahmad["id"]);
    echo ("<br>");
    echo ("nama lengkap :" . $ahmad["nama"]);

    ?>
    <hr>
    <h1>Operator matematika</h1>
    <?php
    $tambah = 10 + 5;
    $kurang = 90 - 20;
    $kali   = 6 * 5;
    $bagi = 40 / 5;
    $modular = 100 % 6;


    echo "tambah : " . $tambah . "<br>";
    echo "kurang : " . $kurang . "<br>";
    echo "kali : " . $kali . "<br>";
    echo "bagi : " . $bagi . "<br>";
    echo "modular : " . $modular . "<br>";

    ?>
    <hr>
    <h1>Increment</h1>
    <?php
    $a = 10;
    $a++;
    $a++;
    echo ($a);
    ?>
</body>

</html>