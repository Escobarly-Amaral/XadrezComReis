<?php
require_once('../Model/conect.php');
require_once('./Players.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['senha'];
    $player = new Players($name, $email, $password);
    $player->register();
}
?>