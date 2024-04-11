<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function search(Request $request)
    {
        Product::search(sprintf('name:%s', $request->q))->take(20)->get();
        return view('welcome');
    }
}
