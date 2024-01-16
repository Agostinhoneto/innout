<?php
loadModel('Login');
//session_start();
$exception = null;

if(count($_POST) > 0) {
    $login = new Login($_POST);
    try {
        $login = $login->checkLogin();
        print_r($login);
       // $_SESSION['user'] = $user;
        header("Location: day_records.php");
    } catch(AppException $e) {
        $exception = $e;
    }
}   


loadView('login', $_POST + ['exception' => $exception]);