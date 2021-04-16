<?php
$data = "datamhs.dat";
$myfile = fopen($data, "a") or die ("Tidak bisa buka file!");
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tgllhr = $_POST['tgllhr'];
$tmptlhr = $_POST['tmptlhr'];
$Tambahkan = $_POST['Tambahkan'];

fwrite ($myfile, "\n" .$nim "|" $nama "|" $tgllhr "|" $tmptlhr "|" $Tambahkan );
fclose ($myfile);
echo "Selamat ye!";
?>
