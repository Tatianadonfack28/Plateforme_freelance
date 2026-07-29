<?php
require_once "../config/session.php";

session_unset();
session_destroy();

header("location: connexion.php");
exit();

?>