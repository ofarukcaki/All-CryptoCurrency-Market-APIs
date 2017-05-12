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

`high`: maximum price.
 `low:` minimum price.
  `avg:` average price.
`vol_cur:` trade volume in currency.
`last:` the price of the last trade.
`buy:` buy price.
`sell:` sell price.
`updated:` last update of cache.'


