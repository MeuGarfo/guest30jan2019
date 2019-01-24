<?php
require '../basic/basic.php';
inc([
    'error',
    'model',
    'view',
    'controller'
]);

//code
error(true);
controller('index');
