<?php
class cex{
    function get($symbol,$parameter){
        $jsnsrc = 'https://cex.io/api/ticker/'.strtoupper(str_replace('_','/',$symbol));
        $json = file_get_contents($jsnsrc);

        $cex = json_decode($json);
        //var_dump($cex);

        return $cex->$parameter;

    }
}

//$cex = new cex;
//echo $cex->get('btc_usd','high');
