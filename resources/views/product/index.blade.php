@extends('layout.main')
@section('content')
<div class="container-fluid mt-2 ms-1">
    <div class="fs-1">List Product</div>
    <div><a href="{{ route('product.create') }}"><button class="btn btn-primary my-2">Create Product</button></a></div>
    <table class="table table-striped table-hover mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Stock</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>Rp{{ $product->price }}</td>
                    <td >
                        <a href="{{ route('product.edit', $product->id) }}"><button class="btn btn-warning ">Update</button></a> 
                        <a href="{{ route('product-mutation.index', ['product_id' => $product->id]) }}"><button class="btn btn-danger "> Mutation</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection