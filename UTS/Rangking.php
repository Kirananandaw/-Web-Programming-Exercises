<?php
    include('db.php');
    $no = 1;

    $sql = "SELECT * FROM gameku ORDER BY poin DESC LIMIT 10";
    $res = $conn->query($sql);
    echo("<center>");
    echo("<table border=1 style='margin-top:8%; width:45%;'>
        <tr>
            <th style='width:5%';>No</th>
            <th>Nama</th>
            <th>Skor</th>
        </tr>
        </center>");
    if ($res->num_rows >0){
        while($row = $res->fetch_assoc()){
            echo("<center>
            <tr>
                <td>{$no}</td>
                <td>{$row['username']}</td>
                <td>{$row['poin']}</td>
            </tr>
            </center>");
            $no++;
        }
    }
    echo("</table>");
    echo("</center>");
    echo("<br>");
    echo("<center><a href='game.php' style='color:black; font-size:16px'>Kembali</a><center>");
?>
