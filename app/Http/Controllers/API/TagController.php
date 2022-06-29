<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index() {
        $tags = Tag::with(['tags', 'category'])->orderByDesc('id')->paginate(9);
    
        return $tags;
    }
}
