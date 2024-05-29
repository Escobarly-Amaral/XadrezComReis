<?php
require_once('../Model/conect.php');
require_once('./Players.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email_LOGIN'];
    $password = $_POST['senha_LOGIN'];
    $player = new Players('', $email, $password);
    $player->login();
}
?>