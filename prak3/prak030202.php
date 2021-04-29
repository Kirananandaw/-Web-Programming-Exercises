<?php
 function hitungDenda($tglHarusKembali, $tglKembali) { 
     
    $pecah1 = explode("-", $tglHarusKembali);
    $date1 = $pecah1[2];
    $month1 = $pecah1[1];
    $year1 = $pecah1[0];
     
    $pecah2 = explode("-", $tglKembali);
    $date2 = $pecah2[2];
    $month2 = $pecah2[1];
    $year2 =  $pecah2[0];
     
    $jd1 = GregorianToJD($month1, $date1, $year1);
    $jd2 = GregorianToJD($month2, $date2, $year2);
     
    if ($jd2 - $jd1 >= 0){
        return ($jd2 - $jd1) * 3000;
    } else 
        return (Rp. 0);
 }
 $tglHarusKembali = "2021-01-03";  
 $tglKembali = "2021-01-05"; 
    echo "Besar denda : Rp. ".hitungDenda($tglHarusKembali, $tglKembali);
?>