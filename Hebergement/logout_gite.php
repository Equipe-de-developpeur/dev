<?php 
session_start();
unset($_SESSION['auth']);
$_SESSION['flash']['success'] = 'Vous êtes déconnecté';
header('Location: ' . $_SERVER['HTTP_REFERER']);
