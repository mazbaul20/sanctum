<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Logic to retrieve and return a list of products
        return response()->json([
            'message' => 'List of products'
        ]);
    }
}
