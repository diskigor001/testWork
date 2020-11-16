<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    public static function getContinent ($ip)
    {
        $result = file_get_contents('http://api.ipstack.com/'.$ip.'?access_key=d9f000dbc0237078dfb39bf8033d244c');
        return json_decode($result);
    }

    public static function getGeoNames ($zip, $country)
    {
        $result = file_get_contents('http://api.geonames.org/postalCodeLookupJSON?postalcode='.$zip.'&country='.$country.'&username=demo');
        return json_decode($result);
    }
}
