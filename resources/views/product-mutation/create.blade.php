@extends('layout.main')
@section('content')
<nav class="navbar navbar-light bg-dark  " style="height:3.5rem">
    <div class="container-fluid">
        <a href="{{ route('product-mutation.index', ['product_id' => $product->id]) }}"><button class="btn btn-outline-light ms-3">Back</button></a>
    </div>
</nav>
<br>
    {{-- {{ $errors }} --}}
<div class="container-fluid">
    <div class="fs-1 ms-3">Create Product Mutation for : {{ $product->name }}</div>
    <div class="fs-4 ms-3">Stock: {{ $product->stock }}</div><hr>
    <form action="{{ route('product-mutation.store') }}" method="POST">
        @csrf
        <div class="row my-3 ms-3 ">
            <label for="" class="col-sm-2 col-form-label fs-5">Type</label>
            <div class="col-sm-1">
                <select name="type"class="form-select">
                    <option value="in">In</option>
                    <option value="out">Out</option>
                </select>
            </div>
        </div>
        <div class="row mb-3 ms-3">
            <label for="" class="col-sm-2 col-form-label fs-5 ">Quantity</label>
            <div class="col-sm-3">
               <input type="number" class="form-control" name="quantity" id="">
            </div>
        </div>
        <input type="hidden" name="product_id" value="{{ $product->id }}">

        <button type="submit" class=" btn btn-success ms-4 mt-1">Create Product Mutation</button>
    </form>
</div>
@endsection