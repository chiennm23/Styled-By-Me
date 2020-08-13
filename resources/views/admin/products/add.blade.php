@extends('admin/home')
@section('content-admin')
    <div class="container" style="font-size: 15px">
        <div class="card">
            <div class="card-header">
                Add New Product
            </div>
            <div class="card-body">
                <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category</label>
                        <select name="category">
                            <option value="1">Quần bò</option>
                            <option value="2">Áo sơ mi</option>
                            <option value="3">Áo phông</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" name="description"  class="form-control" id="exampleInputPassword1" placeholder="Enter Description">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Enter Price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Quantity</label>
                        <input type="text" name="quantity" class="form-control" id="exampleInputPassword1" placeholder="Enter Quantity">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Image</label>
                        <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="Enter Image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>

@endsection
