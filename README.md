<h2>All-CryptoCurrency-Market-APIs</h2>

<h3>Collection of various Bitcoin/Altcoin Markets' APIs</h3>
*Pull requests are welcome*<br>
<br>
Currently Available Markets:

    BTC-E
    Bitfinex

Markets will be added soon:

    Poloniex
    Bitstamp
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


- **BITFINEX**

include '/markets/bitfinex.php'; `// Include BTC-E API`

$bitfinex = new bitfinex;  `//Create new object `

echo $bitfinex->get('symbol' , 'parameter'); <br>
Replace `symbol` with your currency set, ex: `btc_usd`, `zec_usd` , `ltc_btc`,`eth_btc` (All supported transformatins can be found on bitfinex.com)

Define your `parameter` with one of the following:<br>
`mid`<br>
`bid`<br>
`ask`<br>
`last_price`<br>
`low`<br>
`high`<br>
`volume`<br>
`timestamp`<br>
