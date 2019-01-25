<?php
require './basic/basic.php';
inc([
    'backup'
]);
$filename=ROOT.'banco.sql';
export($filename);
