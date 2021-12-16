<?php
session_start();
unset($_SESSION['user']); // или $_SESSION = array() для очистки всех данных сессии
session_destroy();
$values = [
    'status' => '1', // 1 - успех авторизации, 0 - беда
];
echo (json_encode($values));