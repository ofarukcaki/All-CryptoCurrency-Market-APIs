All-CryptoCurrency-Market-APIs

Collection of various Bitcoin/Altcoin Markets' APIs

Currently Available Markets:

    BTC-E

Markets will be added soon:

    Poloniex
    Bitstamp
    Bitfinex
    Huobi
    Cex.io
    Paribu
    Coinbase
    Kraken
    OKCoin
    BitBay
    itBit

## USAGE



 - **BTC-E**



include '/markets/btc-e.php'; `// Include BTC-E API`

$btce = new btce;  `//Create new object `

echo $btce->get('Your Currency' , 'Data'); 

Replace `Your Currency` with what you want( btc_usd for example, more can be found at btc-e.com) And replace `Data` with one of the following: 

`high`: maximum price.<br>
 `low:` minimum price.<br>
  `avg:` average price.<br>
`vol_cur:` trade volume in currency.<br>
`last:` the price of the last trade.<br>
`buy:` buy price.<br>
`sell:` sell price.<br>
`updated:` last update of cache.'<br>


