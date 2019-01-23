<?php
require './basic/basic.php';
inc([
    'db',
    'migrate'
]);
$db=require './config/db.php';
if(createDB($db)){
    echo 'db criado'.PHP_EOL;
}else{
    echo 'erro ao criar db'.PHP_EOL;
}
var_dump($db->info());
//createDB($db);
?>
