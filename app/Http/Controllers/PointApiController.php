<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PointApiController extends Controller
{
    public function getStockBalances()
    {
        $response = Http::get('http://point.coded.tj/api/points/9a2ee530-815a-4a53-8809-c3e11daacab5/stock-balances');
        $data = json_decode($response->getBody(), true);

        foreach ($data['data'] as &$stock) {
            if (isset($stock['item']['image'])) {
                $stock['item']['image'] = "http://point.coded.tj/storage/" . $stock['item']['image'];
            }
        }
        return json_encode($data);

    }
}
