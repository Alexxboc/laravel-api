<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::with(['tags', 'category'])->orderByDesc('id')->paginate(9);
    
        return $categories;
    }
}