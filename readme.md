[![Songshenzong](https://cdn.songshenzong.com/images/logo.png)](https://songshenzong.com)

[![Total Downloads](https://poser.pugx.org/songshenzong/support/d/total.svg)](https://packagist.org/packages/songshenzong/support)
[![Latest Stable Version](https://poser.pugx.org/songshenzong/support/v/stable.svg)](https://packagist.org/packages/songshenzong/support)
[![License](https://poser.pugx.org/songshenzong/support/license.svg)](https://packagist.org/packages/songshenzong/support)
[![PHP Version](https://img.shields.io/packagist/php-v/songshenzong/support.svg)](https://packagist.org/packages/songshenzong/support)


```php
 
$uri = HttpClient::uri('https://packagist.org/search.json', ['q' => 'songshenzong']);
// https://packagist.org/search.json?q=songshenzong
 
$response = HttpClient::request('GET', $uri);
// $response = HttpClient::get($uri);
// $response = HttpClient::post($uri);
// $response = HttpClient::put($uri);
// $response = HttpClient::delete($uri);
 
print_r($response->toArray());
// Array
// (
// [results] => Array
// )
 
echo $response['total'];
// 12
 
echo $response->total;
// 12
 
var_dump($response->isJson());
// bool(true)
 
var_dump($response->isXml());
// bool(false)

var_dump($response->isSerialized());
// bool(false)

print_r($response->serialize());
// s:2732:"{"results":[{"name":"songshenzong...
 
var_dump($response->unserialize());
// false | object | array
 
echo $response->getStatusCode();
// 200
 
echo $response->getHeaderLine('content-type');
// application/json
 
echo $response->getBody();
// {"results":[{"name":"songshenzong...}
 
// Send an asynchronous request.
$promise = HttpClient::requestAsync('GET', $uri)->then(function ($response) {
    $response = new \Songshenzong\HttpClient\Response($response);
    echo $response['total'];
});
 
$promise->wait();
  
```


## Installation

Require this package with composer:

```shell
composer require songshenzong/support
```


## Documentation

Please refer to our extensive [Wiki documentation](https://github.com/songshenzong/support/wiki) for more information.


## Support

For answers you may not find in the Wiki, avoid posting issues. Feel free to ask for support on Songshenzong.com


## License

This package is licensed under the [BSD 3-Clause license](http://opensource.org/licenses/BSD-3-Clause).
