@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="inline-block">
                        All categories
                    </div>
                    <div>
                    <a class="btn btn-warning" href="{{ route('home')}}">Back</a>
                    </div>
                </div>

                <div class="card-body">
                    @foreach ($categories as $category)
                        <h5>{{$category->categoryname}}</h5>
                        <ul>
                            @foreach ($category->subcategories as $subcat)
                                <li>{{$subcat->subcategoryname}}</li>
                            @endforeach
                        </ul>
                    @endforeach
                    <show-category-component :categories="{{$categories}}" ></show-category-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
