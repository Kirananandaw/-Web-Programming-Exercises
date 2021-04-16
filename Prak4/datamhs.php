<?php
$data = "datamhs.dat";
$myfile = fopen($data, "r") or die ("Tidak bisa buka file!");

echo "<h2>DATA MAHASISWA</h2>";

echo "Jumlah Data :  ".count(file($data));

$umur = explode("-", date ("Y-m-d"));
$hari = $umur[2];
$bulan = $umur[1];
$tahun = $umur[0];

$jd2 = GregorianToJD($bulan, $hari, $tahun);

function Usia(String $TglLahir, $jd2){
    $umur1 = explode("-", $TglLahir);
    $hari1 = $umur1[2];
    $bulan1 = $umur1[1];
    $tahun1 = $umur1[0];
        
    $jd1 = GregorianToJD($bulan1, $hari1, $tahun1);

    $umrq = intval (($jd2-$jd1) / 365);

    return $umrq;
}

echo "<br>";
echo "<table border='1'>";
echo ("<tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama Mhs</th>
        <th>Tanggal Lahir</th>
        <th>Tempat Lahir</th>
        <th>Usia (Tahun)</th>
        <tr>");

$nmr = 1;

while (!feof($myfile)){
    echo("<tr>");
    $datamhs = explode("|", fgets($myfile));

    if ($datamhs[0] != ''){
        $usia = Usia($datamhs[2], $jd2);
        echo("
            <td>$nmr</td>
            <td>$datamhs[0]</td>
            <td>$datamhs[1]</td>
            <td>$datamhs[2]</td>
            <td>$datamhs[3]</td>
            <td>$usia</td>");
        $nmr++;
    }
    echo("</tr>");
}
echo "</table>";

fclose($myfile);


?>