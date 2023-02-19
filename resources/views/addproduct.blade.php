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
    <center><h1>Student Form</h1>
    <form action="{{'studentprofile'}}" method="POST">
        {{-- <form action="edit/{{$student->student_id}}" method="POST"> --}}
        @csrf
        <div class="row mb-3">
            <label for="productname" class="col-md-4 col-form-label text-md-end">Product Name</label>
        <div class="col-md-6">
            <input id="productname" type="text" class="form-control @error('productname') is-invalid @enderror" name="productname"  required autocomplete="productname"  autofocus>
        </div>
        </div>

        <div class="row mb-3">
            <label for="product_description" class="col-md-4 col-form-label text-md-end">Description</label>
        <div class="col-md-6">
            <input id="product_description" type="text" class="form-control @error('product_description') is-invalid @enderror" name="product_description"  required autocomplete="product_description"  autofocus>
        </div>
        </div>

        <button type="submit" class="btn btn-success">
                                   Add Product
                                </button>
    </form>
    </center>
</body>
</html>