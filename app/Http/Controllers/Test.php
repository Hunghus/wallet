<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 23/06/2018
 * Time: 13:21
 */

namespace App\Http\Controllers;


use GuzzleHttp\Client;

class Test extends Controller
{
    public function test(){
        $client = new Client(['base_url' => env('BASE_URL').":".env('PORT_HTTP_RPC')]);//        dd($client);
        $res = $client->request('GET', 'http://localhost:10332?jsonrpc=2.0&method=getaccountstate&params=["AJBENSwajTzQtwyJFkiJSv7MAaaMc7DsRz"]&id=1');

        return $res->getBody()->getContents();
    }
}