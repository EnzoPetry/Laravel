<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DestinyController extends Controller
{
    public function getProfileData()
    {
        $client = new Client();
        $headers =
            [
                'x-api-key' => '6333a911b0ad4e94b1d5ae24bef59068',
                'Cookie' => 'Q6dA7j3mn3WPBQVV61rt5CrQXv0q+I9ddZfGro+PognXQwjWM8PS+VE_=v1Ct5Rgw__15f;__cflb=04dToX7HjFoF4QAzoaHehFaMj5fkjPQyQGpXYC2DKZ;bungleanon=sv=BAAAAAAacwAAAAAAAKHgUgEAAAAAAAAAAAAAAADkyLNFyjDcCEAAAACakUGY/Gv8J/oLwfGccV3OcUiKqD08pcgLcS81sjNqRI4ESCzIFlhYDHS59+pvMamlzwLac1WF/cpO3tGcMdyo&cl=MC4yOTQ2Ni4yMjIwODY3Mw==;bungled=7154586433285762558; bungledid=B5/1YPhJS9ZKvYErx8NOaTDkyLNFyjDcCAAA'
            ];
        $request = $client->request('GET', 'https://www.bungie.net/Platform/Destiny2/3/Profile/4611686018499923099/LinkedProfiles/', $headers);
        $responseBody = json_decode($request->getBody(), true);
        // print_r($responseBody);
        return view('profile', ['profileInfo' => $responseBody]);
    }

    public function getProfileCharacters()
    {
        $client = new Client();
        $headers =
            [
                'x-api-key' => '6333a911b0ad4e94b1d5ae24bef59068',
                'Cookie' => 'Q6dA7j3mn3WPBQVV61rt5CrQXv0q+I9ddZfGro+PognXQwjWM8PS+VE_=v1Ct5Rgw__15f;__cflb=04dToX7HjFoF4QAzoaHehFaMj5fkjPQyQGpXYC2DKZ;bungleanon=sv=BAAAAAAacwAAAAAAAKHgUgEAAAAAAAAAAAAAAADkyLNFyjDcCEAAAACakUGY/Gv8J/oLwfGccV3OcUiKqD08pcgLcS81sjNqRI4ESCzIFlhYDHS59+pvMamlzwLac1WF/cpO3tGcMdyo&cl=MC4yOTQ2Ni4yMjIwODY3Mw==;bungled=7154586433285762558; bungledid=B5/1YPhJS9ZKvYErx8NOaTDkyLNFyjDcCAAA'
            ];
        $request = $client->request('GET', 'https://www.bungie.net/Platform/Destiny2/3/Profile/4611686018499923099?components=200', $headers);
        $responseBody = json_decode($request->getBody(), true);
        //print_r($responseBody);
        return view('characters', ['charactersInfo' => $responseBody]);
    }

    public function getCharacterItens() {}
}