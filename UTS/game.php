<?php
   session_start();
   include('db.php');
   if(isset($_COOKIE['name'])){
       if($_SESSION['nyawa'] == 0){
           echo"
           <h1 style='color:red'>Game Over</h1>
           <h2>Halo,{$_COOKIE['name']} Coba lain Kali Lagi Ya! Semangat :)</h2>
           <h2>Score Anda : {$_SESSION['skor']}</h2>
           <a href='game.php'style='color:red; text-decoration:none'>Main Lagi</a>
           <br>
           <br>
           <a href='Rangking.php'style='color:red;text-decoration:none'>Lihat Rangking</a>";
           
           $sql = "UPDATE gameku SET poin='{$_SESSION['skor']}' WHERE username = '{$_COOKIE['name']}'";
           if($conn->query($sql) === TRUE){
               echo "<p style='color:white';>Skor Disimpan!</p>";
           }else {
               die ("Error: " . $sql . "<br>" . $conn->error);
           }
           $conn->close();
           $_SESSION['skor'] = 0;
           $_SESSION['nyawa'] = 5;
           $_SESSION['angka1'] = random_int(0, 20);   
           $_SESSION['angka2'] = random_int(0, 20);
       }else{
           $jumlah = $_SESSION['angka1'] + $_SESSION['angka2'];
               echo("<h2>Hello {$_COOKIE['name']}, Selamat Bermain!
               <br>
               Good Luck!</h2>
               <h3 style='color:white; font-size:18px'> Nyawa : {$_SESSION['nyawa']} |  Nilai : {$_SESSION['skor']}</h3>");
               echo("<h3 style='color:red'>Hasil Dari {$_SESSION['angka1']} + {$_SESSION['angka2']} = </h3>");
               echo'<form method="post">
                   <input type="text" name="jawaban" style="padding:8px 80px";"border-radius:4px">
                   <button type="submit" name="submit" style="padding:8px 30px"; "border-radius:4px";>Submit</button>
               </form>';
           if(isset($_POST['submit'])){
               $hasil = $_POST['jawaban'];
               if(intval($hasil) == $jumlah){
                   $_SESSION['skor'] += 10;
                   echo("<h3  style='color:#fed049'>Yeyy! {$_COOKIE['name']} Jawabanmu Benar! </h3>
                   <h3 style='color:white;font-size:18px'>Nyawa: {$_SESSION['nyawa']} | Nilai: {$_SESSION['skor']}</h3>");
               }else{
                   $_SESSION['nyawa'] -= 1;
                   $_SESSION['skor'] -= 2;
                   echo("<h3 style='color:#fed049'>Yahh {$_COOKIE['name']} Jawabanmu Masih Salah :( </h3>
                   <h3 style='color:white;font-size:18px'>Nyawa : {$_SESSION['nyawa']} | Nilai : {$_SESSION['skor']}</h3>");
               }
               $_SESSION['angka1'] = random_int(0, 20);
               $_SESSION['angka2'] = random_int(0, 20);
               echo("<a href='game.php' style='color:red; text-decoration:none';> Lanjut</a>");
           }
       }
   }else{
       header("Location:login.php");
   }
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
<style>
    body{
    font-family: 'Fredericka the Great', cursive;
    background : url('https://image.freepik.com/free-vector/dark-minimal-hexagons-background_79603-1454.jpg');
    background-repeat : no-repeat;
    background-size : cover;
    text-align :center;
    font-size : 20px;
    margin-top : 10%;
    }    
h1{
    font-family: 'Fredericka the Great', cursive;
    }
h2{
    color: #fed049;
    font-family: 'Fredericka the Great', cursive;
    }
h3{
    font-family: 'Fredericka the Great', cursive;
    }
p{
    font-family: 'Fredericka the Great', cursive;
    }
</style>