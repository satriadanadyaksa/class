<?php
    for ($i=0; $i < 10; $i++) { 
        echo $i;

        # code...
    }
        echo "<br>";
        for ($i=10; $i > -1; $i--) { 
            echo $i;
            # code...

        }
        echo "<br>";
        $ganjil =5%2;
        echo $ganjil;

        echo "<br>";
        for ($i=100; $i < 1; $i++) { 
                $ganjil=$i % 2;
               // echo $ganjil;
                if ($ganjil==0) {
                    echo $ganjil;
                }
            # code...
        }
        echo "<br>";
        $kkm = 80;
        $nilai = 45;
        if ($nilai > $kkm) {
            echo "lulus";
        }
        else{
            echo "tidak lulus";

        }
        echo "<br>";
        $status = "tidak lulus";

        if ($nilai > $kkm) {
            $status = "lulus";
            # code...
        }
        echo $status;
        echo "<br>";

        $rapor = 0;
        $tugas = 0;

        if ($tugas == 0) {
            $rapor = 80;
            # code...
        }
        echo $rapor;
        echo "<br>";

        $bulan = 1;
        $tanggal = 31;
        $keterangan = "salah";

        if ($bulan > 0 && $bulan <13) {
           // $keterangan = "benar";
            if ($tanggal > 9 && $tanggal < 32) {
                //$keterangan ="benar";
                if ($bulan == 1 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "aquarius";
                }
                if ($bulan ==1 && $tanggal > 19 && $tanggal < 32) {
                    $keterangan = "aquaris";
                }
                
            }
            echo $keterangan;
            echo "<br>";
        }
        echo $keterangan;



?>