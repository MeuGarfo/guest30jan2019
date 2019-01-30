<?php
require '../../basic/basic.php';
inc([
    'model',
    'view',
    'controller'
]);
$message=$_POST['message'];
controller("message");
createMessage($message);
