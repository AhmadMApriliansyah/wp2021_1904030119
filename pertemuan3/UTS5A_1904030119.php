<!DOCTYPE html>
<?php
?>   
<h1>Map dengan array</h1>
<p>1. Perbedaan antara variabel dan array adalah:
    <br>array -dapat mempunyai sebuah nilai,misal ada 4 data, maka cukup hanya menggunakan 1 nama variabel x[3]
    <br>variabel -Hanya di hubungkan dengan sebuah nilai saja, misal ada 4 data maka menggunakan nama varibelnya satu persatu;x1,x2,x3,x4
    <p>
     
    <?php
        $ahmad = array(
                    "id" => "codel",
                    "nama" =>"Ahmad M Apriliansyah",
                    "age" => "19",
                    "alamat" => "PANDEGLANG,BANTEN",
                    "hoby" => "Badminton",
                    "no" => "0838-7428-6324",
                    "email" => "ahmad.apriliansyh11@gmail.com",
                    );
        var_dump($ahmad);

        echo("<br>");
        echo("nama panggilan :" . $ahmad["id"]);
        echo("<br>");
        echo("nama lengkap :" . $ahmad["nama"]);
        echo("<br>");
        echo("Umur :" . $ahmad["age"]);
        echo("<br>");
        echo("Alamat :" . $ahmad["alamat"]);
        echo("<br>");
        echo("Hoby :" . $ahmad["hoby"]);
        echo("<br>");
        echo("No.Telp :" . $ahmad["no"]);
        echo("<br>");
        echo("E-mail :" . $ahmad["email"]);
?>
<h1> array multidimensi<h1>
    <?php
        $keluarga = array(
            array ("nama" =>
            array("ayah","ibu","saya")
        ),
        array("nama"=>
        array("ayah","ibu","saya")
         ),
        );
         echo $keluarga[0]["nama"][0];
    ?>
<h1>kondisi else if<h1>
    <?php
    $paket="301";

    if($paket=="301")
    {
        echo "Nama Paket Microsoft office & Biaya 350000 ";
    }
    else if($paket=="302")
    {
        echo "Nama Paket Visual Basic & Biaya 450000";
    }
    else if($paket=="303")
    {
        echo "Nama Paket Visual Foxpro & Biaya 400000";
    }
    else{
        echo "Tidak ada paket yang Lain";
    }
    ?>
</html>