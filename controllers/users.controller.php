<?php
require_once("../config/connect.php");
require_once("../models/users.php");
require_once("../config/cookies.php");
$users = new users();

if (isset($_GET["cookies"])) {
    if (isset($_COOKIE[$cookie_uid])) {
        $username = $_COOKIE[$cookie_uid];
        $pwd= $_COOKIE[$cookie_pwd];
        $login = $users->login($username, $pwd, $cookie_uid, $cookie_pwd);
        if($login){header("location: ../home");}else{
            header("location: ../index?error=true");
        }
        exit;
    }
}

// Data
$json_data = file_get_contents('php://input');
$data = json_decode($json_data, true);

switch ($data["op"]) {
    case 'login':
        $username = $data["user"];
        $pwd = $data["pwd"];
        $login = $users->login($username, $pwd, $cookie_uid, $cookie_pwd);

        if($login){echo json_encode("access_accepted");}
        break;
    case 'signup' :
        $email = htmlspecialchars($data["email"]);
        $pwd = $data["pwd"];
        $signup = $users->signup($email, $pwd);
        if($signup){
            $login = $users->login($email, $pwd, $cookie_uid, $cookie_pwd);
            if($login){echo json_encode("access_accepted");}
        }
        break;
    case 'saveData' :
        $username = htmlspecialchars($data["user_name"]);
        break;
    case 'getUserData' :
        include_once("../config/session.php");
        $user_data = $users->getUserData($userid);
        $response = [
            "id" => $user_data["id"],
            "name" => $user_data["name"],
            "email" => $user_data["email"]
        ];
        echo json_encode($response);
        break;
    case 'modifyUserData' :
        include_once("../config/session.php");
        $name = htmlspecialchars($data["name"]);
        $modify = $users->modifyUserData($name, $userid);
        if($modify){echo json_encode(true);}
        break;
    default:
        # code...
        break;
}
 
