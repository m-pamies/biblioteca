<?php
// iniciar uma sessão
session_start();
 
if (empty($_SESSION['user'])) {
 
    header('Location: index.php');
	exit();
}
?>