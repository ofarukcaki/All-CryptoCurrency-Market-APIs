
<h2>All-CryptoCurrency-Market-APIs</h2>

<h3>Collection of various Bitcoin/Altcoin Markets' APIs</h3>
___
# PROJECT MOVED [HERE](https://github.com/OFarukCaki/All-in-One-Crypto-Market-API)
___
**<h3>This project is no longer developed.</h3>
<h4>New ASP.NET Core Web API will be available soon. You can able to deploy and use it on your own server</h4>**


*Pull requests are welcome*<br>
<br>
Currently Available Markets:

    BTC-E
    Bitfinex
    Bitstamp
    Cex.io

Markets will be added soon:

    Poloniex
    Huobi
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

<br>

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

<br>

- **BITSTAMP**

include '/markets/bitstamp.php'; `// Include Bitstamp API into project`

$bitstamp = new bitstamp; `//Create new object `

echo $bitstamp->get('btc_usd','last'); `// Example result for last BTC price as US dollars`<br>
$var = $bitstamp->get('xrp_btc','volume'); `// or assign XRP/BTC Volume to a variable instead of print `
`// More paramaters can be found on bitstamp.net as same as other market examples above`

Define your `parameter` with one of the following:<br>
`last: `	    Last BTC price.<br>
`high: `  	Last 24 hours price high.<br>
`low: `	    Last 24 hours price low.<br>
`vwap: `	    Last 24 hours volume weighted average price.<br>
`volume: `	Last 24 hours volume.<br>
`bid: `	    Highest buy order.<br>
`ask: `	    Lowest sell order.<br>
`timestamp: `	Unix timestamp date and time.<br>
`open: `	    First price of the day.<br>


<br>

- **CEX.IO**

include '/markets/cex.php'; `// Include CEX.IO API into project`

$cex = new cex; `//Create new object `

echo $cex->get('btc_usd','last'); `// Example result for last BTC price as US dollars`<br>
`// More paramaters can be found on ce.io as same as other market examples above`

Define your `parameter` with one of the following:<br>
<br>
`bid: `  highest buy order<br>
`ask: `  lowest sell order<br>
`low: `  last 24 hours price low<br>
`high: `  last 24 hours price high<br>
`last: `  last BTC price<br>
`volume: `  last 24 hours volume<br>
`volume30d: `  last 30 days volume<br>


