<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return response()->json([
            "message" => "Ok",
            "result" => Category::all()
        ],
            201, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
    }

    public function store(Request $request)
    {
        $category = Category::create($request->all());
        return response()->json([
            "message" => "Ok",
            "result" => $category
        ],
            201, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
    }
}
