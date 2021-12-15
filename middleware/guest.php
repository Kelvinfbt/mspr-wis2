<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/users.php';

if(getAuth()){
    header('Location: /');
    exit;
}