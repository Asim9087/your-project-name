<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <div class="row">
    <div class="container" style="border:2px solid rgba(255, 255, 255, 0.205); margin-top:20px;">
        <center><h1>Add Product</h1>
        <form action="{{env('APP_URL')}}update_product/{{$product->id}}" method="POST">
            @csrf

            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
            <div class="row mb-3">
                <label for="productname" class="col-md-4 col-form-label text-md-end">Product Name</label>
            <div class="col-md-6">
                <input id="productname" type="text" class="form-control @error('productname') is-invalid @enderror" name="productname"  required autocomplete="productname" value="{{$product->productname}}"  autofocus>
            </div>
            </div>

            <div class="row mb-3">
                <label for="product_description" class="col-md-4 col-form-label text-md-end">Description</label>
            <div class="col-md-6">
                <input id="product_description" type="text" class="form-control @error('product_description') is-invalid @enderror" name="product_description"  required autocomplete="product_description" value="{{$product->product_description}}" autofocus>
            </div>
            </div>

            <div class="row mb-3">
                <label for="product_description" class="col-md-4 col-form-label text-md-end">Select Category</label>
            <div class="col-md-6"style="margin-top:20px;margin-bottom:30px; ">       
                <select class="form-select form-select-md" name="category_id">
                    <option selected>Select Category</option>
                    @foreach ($category as $category)
                    <option value="{{$category->id}}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{$category->category_name}}</option>
                    @endforeach
                </select>
            </div>
            </div>
            <button type="submit" class="btn btn-success">Add Product</button>
        </form>
        </center>
    </div>
    </div>
</body>
</html>