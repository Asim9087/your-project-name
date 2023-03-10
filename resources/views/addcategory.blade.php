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
    <center><h1>Add Category</h1>
        <?php 
                // if(request()->has('id') && request()->id != null){
                // $cat= $single->where('id',$id)->first();
            // $id= $single->id;
        if($single != null)
        {
        ?>        
            <form action="{{ route('update_category',$single->id) }}" method="POST">        
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @csrf

            <div class="row mb-3">
                <label for="category_name" class="col-md-4 col-form-label text-md-end">Category Name</label>
            <div class="col-md-6">
                <input id="category_name" type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" value="{{$single->category_name}}"  required autocomplete="category_name" autofocus>
            </div>
            </div>

            <div class="row mb-3">
                <label for="company" class="col-md-4 col-form-label text-md-end">company</label>
            <div class="col-md-6">
                <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="{{$single->company}}" required autocomplete="company"  autofocus>
            </div>
            </div>
            <button type="submit" class="btn btn-success">update Category</button>
            </form>
        <?php
        }
        else
        {
        ?>
            <form action="{{'insert'}}" method="POST">  
            @if(session()->has('success'))
            <div class="alert alert-success" style="width:300px;">
            {{ session()->get('success') }}
            </div>
            @endif  
            @csrf

            <div class="row mb-3">
                <label for="category_name" class="col-md-4 col-form-label text-md-end">Category Name</label>
            <div class="col-md-6">
                <input id="category_name" type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" value=""  required autocomplete="category_name" autofocus>
            </div>
            </div>

            <div class="row mb-3">
                <label for="company" class="col-md-4 col-form-label text-md-end">company</label>
            <div class="col-md-6">
                <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="" required autocomplete="company"  autofocus>
            </div>
            </div>
            <button type="submit" class="btn btn-success">Add Category</button>
            </form>
        <?php
        } 
        ?>    
    </center>
    <hr />



        <center><h1>Catagroies</h1></center>
        <table class="table table-striped table-hove">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Category Name</th>
            <th scope="col">Company</th>
            <th scope="col">Action</th>
        </tr>
        </thead>

        <tbody>
        @foreach($category as $categorys)
        <tr>
            <td >{{$loop->index+1}}</td>
            <td>{{$categorys->category_name}}</td>
            <td>{{$categorys->company}}</td>
            <td>
                <a href="{{ route('category.list.id',$categorys->id) }}" class="btn btn-sm btn-success">EDIT</a>
                <a href="{{route('category.delete',$categorys->id)}}" class="btn btn-sm btn-danger">Delete</a>
                <a href="{{route('category.view',$categorys->id)}}" class="btn btn-sm btn-primary">View</a>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
</body>
</html>