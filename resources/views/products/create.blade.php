@extends('layouts.dashboard')


@section('content')

<h1>Add New Product</h1>
    <hr>
    <form action="/products"  method="POST">
        {{ csrf_field() }}
    
        <div class="form-group">
            <label for="title">Product Name</label>
            <input type="text" class="form-control" id="productName"  name="name">
        </div>

        <div class="form-group">
            <label for="product_id">Product Id</label>
            <input type="text" class="form-control" id="productId"  name="Product_Id">
        </div>
      
        <div class="form-group">
            <label for="description">Product Price </label>
            <input type="text" class="form-control" id="productPrice" name="ProductPrice"/>
        </div>

        <div class="form-group">
            <label for="description">Product Image </label>
            <input type="file" class="form-control" id="productImage" name="Image"/>
        </div>
        <div class="form-group">
            <label for="description">Product Available</label><br/>
            <label class="radio-inline"><input type="radio" name="available" value="1"> Yes</label>
            <label class="radio-inline"><input type="radio" name="available" value="0"> No</label>
        </div>
        <div class="form-group">
            <label for="description">Product Description</label>
            <textarea type="text" class="form-control" id="productDescription" name="description"></textarea>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection