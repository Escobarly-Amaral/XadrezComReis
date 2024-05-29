<?php
require_once('../Model/conect.php');
require_once('./Players.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['nome_REG'];
    $email = $_POST['email_REG'];
    $password = $_POST['senha_REG'];
    $player = new Players($name, $email, $password);
    $player->register();
}
?>