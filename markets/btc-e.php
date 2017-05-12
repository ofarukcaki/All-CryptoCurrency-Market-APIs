<?php

class btce{
    function get($x,$y){
        $btceSource = "https://btc-e.com/api/3/ticker/$x";
        $btceJson = file_get_contents($btceSource);
        $btce = json_decode($btceJson);
        //var_dump($btce);
        return $btce->get->$y;
    }
}

//$btce = new btce;
//echo $btce->get('btc_usd','last');
