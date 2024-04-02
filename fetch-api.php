<?php
$url = 'https://dummyjson.com/products?limit=9&skip=0&select=title,price,description,images,discountPercentage';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$response = json_decode($response, true);
$products = $response['products'];

return $products;