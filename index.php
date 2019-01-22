<?php
//requires
require 'basic/getbasic/root/root.php';
root();
require 'basic/getbasic/inc/inc.php';
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
