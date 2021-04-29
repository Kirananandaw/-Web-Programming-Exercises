<?php

$file = "pemain.txt";
$myfile = fopen($file, "r") or die("File error");
$datapemain = array();
while(!feof($myfile)){
    $user = explode(",", fgets($myfile));
    array_push($datapemain, $user);
}
fclose($myfile);

if(isset($_POST['submit'])){
    $uname = $_POST['username'];
    $pss = $_POST['password'];

    foreach($datapemain as $pemainih){
        if ((trim($pemainih[0]) == $uname) && (trim($pemainih[2]) == $pss)){
           
            $_COOKIE['namauser'] = trim($pemainih[1]);
            setcookie("namauser", trim($pemainih[1]), time()+3*30*24*3600,"/");
            setcookie("random", rand(0,100), time()+3*30*24*3600,"/");
        }
        if (isset($_COOKIE["namauser"])){
            header("Location: gametebak.php");
        }
    }
    echo("<h2>Akun tidak ditemukan !!!   Silahkan <a href='form1.html'> Login </a>Lagi!</h2>");

}
?>
