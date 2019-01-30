<?php
require './basic/basic.php';
inc([
    'db',
    'migrate'
]);
$cfg=require './config/db.php';
createDB($cfg);
$db=db($cfg);
if(migrate($db)){
    print 'tabelas migradas com sucesso'.PHP_EOL;
}else{
    print 'erro ao migrar as tabelas'.PHP_EOL;
}
?>
