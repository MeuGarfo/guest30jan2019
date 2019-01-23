<?php
require './basic/basic.php';
inc([
    'db',
    'migrate'
]);
$cfg=require './config/db.php';
createDB($cfg);
$db=db($cfg);
var_dump($db->info());
?>
