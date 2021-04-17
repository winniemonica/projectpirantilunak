@extends('layout.main')
@section('content')
<nav class="navbar navbar-light bg-dark  " style="height:3.5rem">
    <div class="container-fluid">
        <a href="{{ route('product.index') }}"><button class="btn btn-outline-light ms-3">Back</button></a>
    </div>
</nav>
<br>
    {{-- {{ $errors }} --}}
<div class="container-fluid">
    <div class="fs-1 ms-3">Create Product</div><hr>
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="row my-3 ms-3 ">
            <label for="" class="col-sm-2 col-form-label fs-5">Name</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="name" id="">
            </div>
        </div>
        <div class="row mb-3 ms-3">
            <label for="" class="col-sm-2 col-form-label fs-5 ">Price</label>
            <div class="col-sm-3">
               <input type="number" class="form-control" name="price" id="">
            </div>
        </div>

        <button type="submit" class=" btn btn-success ms-4 mt-1">Create Product</button>
    </form>
</div>

@endsection