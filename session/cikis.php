<?php
session_start();

session_destroy();

header("Location: session02.php");
?>