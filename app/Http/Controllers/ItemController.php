<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Inertia\Inertia;
use Inertia\Response;

class ItemController extends Controller
{
    public function show(string $itemId): Response
    {
        $item = Http::get("http://boo.coded.tj/api/item/$itemId");

        return Inertia::render('Perfume/SingleItem', [
            'item' => $item
        ]);
    }
}
