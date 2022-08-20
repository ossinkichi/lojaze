<?php
include('conexao.php');

if(isset($_SESSION)){
    session_destroy();
}

header("location: login.php");
?>