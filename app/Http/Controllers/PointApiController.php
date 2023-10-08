<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PointApiController extends Controller
{
    public function getStockBalances()
    {
        $response = Http::get('http://boo.coded.tj/api/points/9a4fc5ca-80a4-4ac0-a5cc-d4bafa40060a/stock-balances');
        $data = json_decode($response->getBody(), true);

        foreach ($data['data'] as &$stock) {
            if (isset($stock['item']['image'])) {
                $stock['item']['image'] = "http://boo.coded.tj/storage/" . $stock['item']['image'];
            }
        }
        return json_encode($data);

    }
}
