<?php
function allMessages(){
    inc([
        'db'
    ]);
    $cfg=require ROOT.'config/db.php';
    $db=db($cfg);
    $where=[
        'id[>]'=>0,
        'ORDER'=>['id'=>'DESC']
    ];
    return $db->select('messages','*',$where);
}

function createMessage($message){
    inc([
        'db'
    ]);
    $cfg=require ROOT.'config/db.php';
    $db=db($cfg);
    $data=[
        'message'=>$message
    ];
    $result=$db->insert('messages',$data);
    if($result){
        $url='/';
        header('Location: '.$url);
    }else{
        die('erro ao salvar mensagem');
    }
}
