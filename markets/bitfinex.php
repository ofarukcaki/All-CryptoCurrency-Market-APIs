<?php

class bitfinex{
    function get($symbol,$parameter){
        $finexsrc = 'https://api.bitfinex.com/v1/pubticker/'.str_replace('_','',$symbol);
        $finexJson = file_get_contents($finexsrc);
        $bitfinex = json_decode($finexJson);
        //var_dump($bitfinex);

        return $bitfinex->$parameter;

    }
}

/*
$bitfinex = new bitfinex;
echo $bitfinex->get('btc_usd','mid');
*/
