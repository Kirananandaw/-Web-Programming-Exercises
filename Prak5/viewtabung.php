<?php
$data = "datatabung.dat";
$myfile = fopen($data, "r") or die ("Tidak bisa buka file!");

echo "<h2>DATA UKURAN TABUNG</h2>";
echo "<br>";
echo "<table border='1'>";
echo ("<tr>
        <th>Nama Tabung</th>
        <th>Diameter</th>
        <th>Tinggi</th>
        <th>Luas</th>
    <tr>");

    while (!feof($myfile)){
        echo("<tr>");
        $tbg = explode(",", fgets($myfile));
        $link = "http://localhost/A/Prak5/hitungluas.php?n=$tbg[0]&d=$tbg[1]&t=$tbg[2]";
            echo("
                <td>$tbg[0]</td>
                <td>$tbg[1]</td>
                <td>$tbg[2]</td>
                <td><a href = $link>view</a> </td>
            ");
        echo("</tr>");
    }
    echo "</table>";

    fclose($myfile);
?>
