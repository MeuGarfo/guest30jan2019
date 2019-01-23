<?php
require '../basic/basic.php';
inc([
    'error',
    'view'
]);

//code
error(true);
$data=[
    'title'=>'Guest'
];
view('index',$data);
