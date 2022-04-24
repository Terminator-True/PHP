<?php
namespace App\Helpers;

use DateTime;

class FormatTime {
 public static function LongTimeFilter($date){
    $datetime = new DateTime($date);
    $now = new DateTime();
    $res = $datetime->diff($now);
    if ($res->i<60) {
        $final=$res->format("Fa %i minuts");
    }elseif($res->h<24){
        $final=$res->format("Fa %H hores");

    }else{
        $final=$res->format("Fa %d dies");
    }
    return $final;
 }
}
?>
