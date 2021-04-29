<?php
echo "<h1>Hallo, ".$_COOKIE['namauser'].", nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</h1>";
?>
<form method="get">
Bilangan Tebakan Anda : <input type="text" name="tebakan">
<input type="submit" name="submit" value="Submit">
</form>

<?php
$bilAcak = $_COOKIE['random'];
if(isset($_GET['tebakan'])){
    $nilaiTebak = $_GET['tebakan'];
    if ($nilaiTebak == $bilAcak){
        echo "<p>Tebakan anda benar!!!</p>";
        setcookie("random", "", time()+3*30*24*3600,"/");
        setcookie("random", rand(0,100), time()+3*30*24*3600,"/");

        echo ("<h2><a href='gametebak.php'>Mulai lagi</a></h2>");
    }else if ($nilaiTebak > $bilAcak){
        echo "<p>Tebakan terlalu besar</p>";
    }else if ($nilaiTebak < $bilAcak){
        echo "<p>Tebakan terlalu kecil</p>";
    }
}
echo ("<h2><p><a href=logout.php>Log Out</a></p></h2>");
?>