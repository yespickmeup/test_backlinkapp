<?php

namespace App\Http\Controllers;

use App\Subcateogory;
use Illuminate\Http\Request;
use App\Category;
class SubcateogoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('subcategory.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcateogory  $subcateogory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcateogory $subcateogory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcateogory  $subcateogory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcateogory $subcateogory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcateogory  $subcateogory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcateogory $subcateogory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcateogory  $subcateogory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcateogory $subcateogory)
    {
        //
    }
}
