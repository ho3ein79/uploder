<?php
$mm =[3,4,5,6,7,8];

function sd($yy)
{
    $newlist = [];
    foreach ($yy as $key => $item) {
        $newlist[$key] = $item ** 4;
    }
    return $newlist;
}


 var_dump(sd($mm));




?>