<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function index()
    {
        // 例: 一覧画面のビュー（products.index）を返す場合
        $products = DB::table('products')->get();

        return view('products.index', compact('products'));
        //
    }
}

