<?php
require_once('../Model/conect.php');
require_once('./Players.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['senha'];
    $player = new Players('', $email, $password); // Only email and password are needed for login
    $player->login();
}
?>