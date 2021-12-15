<?php
require_once '../../functions/helpers.php';

middleware('auth');

session_start();
session_destroy();

header('Location: ../../');
exit;