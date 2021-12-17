<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/helpers.php';

middleware('auth');

session_start();
session_destroy();

header('Location: ../../');
exit;