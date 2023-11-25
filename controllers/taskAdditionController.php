<?php
$task = trim($_POST['task']);

if ($task === '') {
    die('Введите название задачи');
}

setcookie($task, 'false', time() + 86400, '/');

header('Location: ../index.php');