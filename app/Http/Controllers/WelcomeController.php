<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain;
use App\Category;
use App\Subcategory;
class WelcomeController extends Controller
{
    public function index(){
        $domains = Domain::get();
        $categories = Category::get();
        $subcategories = Subcategory::get();

        return view('welcome')->with('domains', $domains)->with('categories',$categories)->with('subcategories',$subcategories);

    }
}
