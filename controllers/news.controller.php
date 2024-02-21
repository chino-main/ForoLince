<?php
require_once("../config/connect.php");
require_once("../models/users.php");
require_once("../config/cookies.php");
$users = new users();

// Data
$json_data = file_get_contents('php://input');
$data = json_decode($json_data, true);

switch ($data["op"]) {
    
}