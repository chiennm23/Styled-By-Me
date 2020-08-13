@extends('admin/home')
@section('content-admin')
    <div class="container" style="font-size: 15px">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $key => $product)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->category_id}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->image}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
