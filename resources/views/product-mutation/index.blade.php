@extends('layout.main')
@section('content')
<nav class="navbar navbar-light bg-dark  " style="height:3.5rem">
    <div class="container-fluid">
        <a href="{{ route('product.index') }}"><button class="btn btn-outline-light ms-2">Back</button></a>
    </div>
</nav>
<br>
<div class="container-fluid mt- ms-1">
    <div class="fs-1">Product mutation for product : {{ $product->name }} </div>
    <div class="fs-4 ">Stock: {{ $product->stock }}</div><hr>
    <div><a href="{{ route('product-mutation.create', ['product_id' => $product->id]) }}"><button class="btn btn-primary my-2">Create Product Mutation</button></a></div>
    <table class="table table-striped table-hover mt-3">
        <thead>
            <tr>
                <th>Type</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productMutations as $productMutation)
                <tr>
                    <td>{{ $productMutation->type }}</td>
                    <td>{{ $productMutation->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
{{-- stock: {{ $product->stock }} --}}
@endsection