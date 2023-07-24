<?php namespace App\Services;
use Illuminate\Support\Facades\Http;

class Entities {
    public static function obtenerEntities(){
        $baseUrl = env('API_ENDPOINT');
        $response = Http::get('https://api.publicapis.org/entries')->json();
        return $response;
    }
}