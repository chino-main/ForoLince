<?php
$cookie_uid = "foro_lince-uid";
$cookie_pwd = "foro_lince-pwd";

function cookiesRedirect($cookie_uid){
  if (isset($_COOKIE[$cookie_uid])) {
    header("location: controllers/users.controller.php?cookies");
  }
}

function deleteCookies($cookie_uid, $cookie_pwd) {
  if (isset($_COOKIE[$cookie_uid])) {
    unset($_COOKIE[$cookie_uid]);
    unset($_COOKIE[$cookie_pwd]);
    setcookie($cookie_uid, null, -1, '/');
    setcookie($cookie_pwd, null, -1, '/');
  }
}


?>