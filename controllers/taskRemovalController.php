<?php
$cookieName = trim($_POST['cookie']);

if ($cookieName === '') {
    foreach ($_COOKIE as $key => $value) {
        unset($_COOKIE[$key]);
        setcookie($key, '', -1, '/');
    }
}
else{
    unset($_COOKIE[$cookieName]);
    setcookie($cookieName, '', -1, '/');
}

header('Location: ../index.php');