<?php

class btce{
    function btc_usd($x,$y){
        $btceSource = "https://btc-e.com/api/3/ticker/$x";
        $btceJson = file_get_contents($btceSource);
        $btce = json_decode($btceJson);
        //var_dump($btce);
        return $btce->btc_usd->$y;
    }
}

//$btce = new btce;
//echo $btce->btc_usd('btc_usd','last');
