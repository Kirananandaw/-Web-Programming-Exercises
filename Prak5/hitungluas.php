<?php
$nama = $_GET ['n'];
$dmtr = $_GET ['d'];
$tgi = $_GET ['t'];

$lling = pi()*(($dmtr/2)**2) ;
$lst = 2*pi()*($dmtr/2)*$tgi ;
$ltbg = round(2*$lling+$lst) ;

echo ("<p>Luas tabung $nama dengan diameter $dmtr dan tinggi $tgi adalah $ltbg satuan luas</p>");

?>