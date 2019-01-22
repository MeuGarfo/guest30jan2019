<?php
//Criado por Anderson Ismael
//21 de janeiro de 2019

function root($up=false){
    if($up){
        $str=getcwd();
        $arr=explode('/',$str);
        end($arr);
        $key=key($arr);
        unset($arr[$key]);
        $str=implode('/',$arr).'/';
    }else{
        $str=getcwd().'/';
    }
    define("ROOT",$str);
}
function rootUp(){
    root('up');
}

