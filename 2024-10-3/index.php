selesaikan perhitungan ini 7 % 5 + 8 * 4 - 9 / 3 menggunakan function
<?php 

 echo "<br>";
    $hasil = modulo(7,5);
    $hasil = tambah($hasil,kali (8,4));
    $hasil1 = bagi(9,3);
    $hasil = kurang($hasil,$hasil1);

    // $hasil = tambah(5, kali (3,7)) ;
    // $hasil = bagi($hasil,4);
    // $hasil = kurang($hasil,9);
    // $hasil = modulo($hasil,8);
    echo $hasil;

function kali($a, $b) {
    echo "Belajar Perkalian =";
    $c= $a * $b;
    return $c;
    echo "<br>";
}
    echo "<br>";
    echo kali (3,7)/4 +5 - 9 % 8;
    echo "<br>";

function tambah($a, $b) {
        echo "Belajar Tambah =";
        $c= $a + $b;
        return $c;
        echo "<br>";
    }

    tambah(120,80);

function kurang($a, $b) {
        echo "Belajar Kurang =";
        $c= $a - $b;
        return $c;
        echo "<br>";
    }

    kurang(20,10);

function bagi($a, $b) {
        echo "Belajar Bagi =";
        $c= $a / $b;
        return $c;
        echo "<br>";
    }

    bagi(12,3);

function modulo($a, $b) {
    $c = $a % $b;
    return $c;
}

modulo(255,11);

?>