<form action="" method="post">
    <input type="number" name="bulan" placeholder="Masukan bulan">
    <input type="number" name="tanggal" placeholder="Masukan tanggal">
    <input type="submit" value="kirim" name="tombol">
</form>

<?php
    if (isset($_POST["tombol"])) {
        $bulan = $_POST["bulan"];
        $tanggal = $_POST["tanggal"];

        //echo $bulan;
       //echo $tanggal;

       $keterangan = "salah";

        if ($bulan > 0 && $bulan <13 && $tanggal >0 && $tanggal <32) {
        
           // $keterangan ="benar";
            if ($bulan == 1) {
                if ($tanggal >0 && $tanggal < 20) {
                    $keterangan = "capicorn";
                
                }
                if ($tanggal >19 && $tanggal <32) {
                    $keterangan = "aquarius";
                    
                }
            }
            if ($bulan == 2) {
                if ($tanggal >0 && $tanggal < 20) {
                    $keterangan = "aquarius";
                
                }
                if ($tanggal >19 && $tanggal <32) {
                    $keterangan = "pisces";
                    
                }
            }
            if ($bulan == 3) {
                if ($tanggal >0 && $tanggal < 20) {
                    $keterangan = "pisces";
                
                }
                if ($tanggal >19 && $tanggal <32) {
                    $keterangan = "pisces";
                    
                }
            }
            if ($bulan == 4) {
                if ($tanggal >0 && $tanggal < 20) {
                    $keterangan = "aries";
                
                }
                if ($tanggal >19 && $tanggal <32) {
                    $keterangan = "aries";
                    
                }
            }
            if ($bulan == 5) {
                if ($tanggal >0 && $tanggal < 20) {
                    $keterangan = "taurus";
                
                }
                if ($tanggal >19 && $tanggal <32) {
                    $keterangan = "taurus";
                    
                }
            }
            if ($bulan == 6) {
                if ($tanggal >0 && $tanggal < 20) {
                    $keterangan = "gemini";
                
                }
                if ($tanggal >19 && $tanggal <32) {
                    $keterangan = "gemini";
                    
                }
            }
            if ($bulan == 7) {
                if ($tanggal >0 && $tanggal < 20) {
                    $keterangan = "cancer";
                
                }
                if ($tanggal >19 && $tanggal <32) {
                    $keterangan = "cancer";
                    
                }
            }
        }
        echo $keterangan;
    }

?>