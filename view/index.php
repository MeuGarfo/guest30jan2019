<?php
view('inc/header',$data);
?>
<center>
    <h1>Digite sua mensagem e clique em enviar</h1>
    <?php
    view('message/form');
    ?>
    <br>
</center>
<?php
/*
id
message
created_at
updated_at
*/
$count=count($messages);
$i=0;
$limit=$count-1;
if(is_array($messages) && $count>0){
    foreach ($messages as $message) {
        print '<p>';
        print $message['message'];
        print '<br><small>';
        print $message['created_at'];
        print '</small>';
        print '</p>';
        if($i<$limit){
            print '<hr>'.PHP_EOL;
        }
        $i=$i+1;
    }
}
?>
