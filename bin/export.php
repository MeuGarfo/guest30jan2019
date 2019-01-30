<?php
require './basic/basic.php';
inc([
    'backup'
]);
$filename=ROOT.'backup.sql';
export($filename);
