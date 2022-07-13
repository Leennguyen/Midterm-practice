<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FoodCollection;
use App\Http\Resources\FoodResource;
use App\Models\Category;
use App\Models\Food;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;


class ApiCategoryController extends Controller
{
    public function statistics() {
        $categories = Category::get();
        $result = [];

        foreach ($categories as $category) {
            array_push($result, ["id" => $category->id, "name" => $category->name, "foodCount" => count($category->foods), "foodList" => $category->foods]);
        }
        return $result;
    }
}