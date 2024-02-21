<?php
session_name("foro_lince");
session_start();
// $userid = $_SESSION["id"];
if(isset($_SESSION["id"])){$userid = $_SESSION["id"];}
?>