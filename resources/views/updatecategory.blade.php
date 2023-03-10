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
    <center><h1>Update Category </h1>
    <form action="{{env('APP_URL')}}update_category/{{$category->id}}" method="POST">
        @csrf
        <div class="row mb-3">
            <label for="category_name" class="col-md-4 col-form-label text-md-end">Category Name</label>
        <div class="col-md-6">
            <input id="category_name" type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name"  required autocomplete="category_name" value="{{$category->category_name}}" autofocus>
        </div>
        </div>

        <div class="row mb-3">
            <label for="company" class="col-md-4 col-form-label text-md-end">company</label>
        <div class="col-md-6">
            <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company"  required autocomplete="company" value="{{$category->company}}" autofocus>
        </div>
        </div>

         <button type="submit" class="btn btn-success">
                                   Update Category
                                </button>
    </form>
    </center>
</body>
</html>