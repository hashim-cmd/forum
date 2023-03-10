<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category) {
    	$questions = $category->questions;
    	return view("index", [
    		"questions" => $questions
    	]);
    }
}
