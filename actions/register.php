<?php
include "../classes/User.php";

$user = new User();
$user->register($_POST);
//var_dump($_POST);

?>