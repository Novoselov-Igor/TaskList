<?php
$cookieName = trim($_POST['cookie']);

if ($cookieName === '') {
    foreach ($_COOKIE as $key => $value) {
        if ($value === 'false') {
            setcookie($key, 'true', time() + 43200, '/');
        } else {
            setcookie($key, 'false', time() + 43200, '/');
        }
    }
} else {
    if ($_COOKIE[$cookieName] === 'false') {
        setcookie($cookieName, 'true', time() + 43200, '/');
    } else {
        setcookie($cookieName, 'false', time() + 43200, '/');
    }
}

header('Location: ../index.php');