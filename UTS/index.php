<?php
    session_start();
    if(isset($_COOKIE['name'])){
        echo "Halo, {$_COOKIE['name']} , Selamat Datang di Game Penjumlahan ini!";
        echo"
        <br>
        <br>
        <button><a href='game.php' ;>Start Game</a></button>
        <br>
        <br>
        Login Kembali 
        <br>
        <br>
        <button><a href='login.php?del=y' ;>Login</a></button>";
    }else{
        header("Location:login.php");
    }
?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <style>
        body{
            background: url('https://image.freepik.com/free-photo/white-hexagon-pattern-background-3d-rendering_41470-446.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Fredericka the Great', cursive;
            text-align: center;
            font-size:35px;
            margin-top:12%;
        }
        button{
            padding :20px 60px;
            background : black;
            border-radius: 6px;
        }
        button a {
            text-decoration : none;
            font-size : 20px;
            color : white;
            font-family: 'Fredericka the Great', cursive;
        }
        button:hover{
            background-color: red;
            color: white;
        }
    </style>