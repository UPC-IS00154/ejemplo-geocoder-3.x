<?php

require_once "./vendor/autoload.php";

// "willdurand/geocoder": "^3.2"
$geocoderAdapter  = new \Ivory\HttpAdapter\CurlHttpAdapter();
$geocoder = new \Geocoder\ProviderAggregator();
$geocoder->registerProvider(new \Geocoder\Provider\GoogleMaps($geocoderAdapter));

// geocode() retorna un AddressCollection
$obj = $geocoder->geocode('Kokoriko, Bogotá, Colombia');

// se puede ver el estado del objeto usando print_r
// print_r( $obj );

// se pueden obtener los datos recorriendo la colección
foreach ($obj as $address) {
  echo "Longitud " . $address->getLongitude() . "\n";
  echo "Latitud  " . $address->getLatitude() . "\n\n";
}

