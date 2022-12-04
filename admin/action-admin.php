<?php 
include "controllers/c_user.php";
$admin = new c_user();
$admin->checkLoginAdmin();