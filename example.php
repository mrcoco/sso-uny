<?php
include 'vendor/autoload.php';
SSO\SSO::authenticate();

$user = SSO\SSO::getUser();

print_r($user);
