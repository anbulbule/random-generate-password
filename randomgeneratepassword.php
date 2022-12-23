<?php
function randomPassword($length=10){
    $charecter = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $chrecterlength= strlen($charecter);
    $randomcharecter = '';

    for ($i=0; $i<$length; $i++){
        $randomcharecter.= $charecter[rand(0, $chrecterlength-1)];
    }
    return $randomcharecter;

}
echo randomPassword(15);

?>