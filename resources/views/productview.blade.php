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
<center><h1>Product Data</h1></center>
<table class="table table-striped table-hove">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Description</th>
      <th scope="col">Product Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($product as $products)
     <tr>
      <td >{{$loop->index+1}}</td>
      <td>{{$products->productname}}</td>
      <td>{{$products->product_description}}</td>
      <td>{{$products->category_name}}</td>
      <td>
        <a href="{{url('edit_product',$products->id)}}" class="btn btn-sm btn-success">EDIT</a>
         <a href="{{url('delete',$products->id)}}" class="btn btn-sm btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    
</body>
</html>