<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        //
        $cate = Category::all();
        if ($cate) {
            return response()->json($cate, Response::HTTP_OK);
        } else {
            return response()->json([]);
        }
    }
}
