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
             <center><h1 style="text-align:center;">Order Product</h1>

                <form action="{{route('order.insert')}}" method="POST">
                    @csrf
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="row mb-3">
                    <label for="ordercode" class="col-md-4 col-form-label text-md-end">Order code</label>
                <div class="col-md-6">
                    <input id="ordercode" type="text" class="form-control @error('ordercode') is-invalid @enderror" name="ordercode"  required autocomplete="ordercode" value=""  autofocus>
                </div>
                </div>
    
                {{-- <div class="row mb-3">
                    <label for="price" class="col-md-4 col-form-label text-md-end">Price</label>
                <div class="col-md-6">
                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value=""  required autocomplete="price"  autofocus>
                </div>
                </div> --}}

                
                <div class="row mb-3">
                    <label for="address" class="col-md-4 col-form-label text-md-end">Address</label>
                <div class="col-md-6">
                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value=""  required autocomplete="address"  autofocus>
                </div>
                </div>

                {{-- <div class="row mb-3">
                    <label for="quantity" class="col-md-4 col-form-label text-md-end">Quantity</label>
                <div class="col-md-6">
                    <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value=""  required autocomplete="quantity"  autofocus>
                </div>
                </div> --}}

                <div class="row mb-3">
                    <label for="product_description" class="col-md-4 col-form-label text-md-end">Product</label>
                    <div class="col-md-6" style="">
                        <table class="table table-striped table-hove">
                            @for ($i = 1; $i <=5; $i++)
                            <tr>
                                <td><select class="form-select form-select-md" name="data[{{$i}}][product]">
                                    <option selected>Select Product</option>
                                    @foreach ($product as $products)
                                    <option value="{{$products->id}}">{{$products->productname}}</option>
                                    @endforeach</select></td>
                                <td><input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" name="data[{{$i}}][quantity]" value=""  required autocomplete="quantity"  autofocus></td>
                                <td>     <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="data[{{$i}}][price]" value=""  required autocomplete="price"  autofocus></td>
                            </tr>
                            @endfor 
                        </table>
                       
                        <td>
                            
                        </td>
                    
                    <tr>
                </div>
                    
                    {{-- <select class="form-select form-select-md" name="product_id">
                        <option selected>Select Product</option>
                        @foreach ($product as $products)
                        <option value="{{$products->id}}">{{$products->productname}}</option>
                        @endforeach
                    </select> --}}
                {{-- </div> --}}
                </div>
                <button type="submit" class="btn btn-success">Order</button>
            </form>
        </center>
        </div>
    </div>
    
    <hr />

    <?php
//  foreach($order as $area)
//  {
//     $doc = json_decode($area->item);
//     foreach($doc as $document){
//         dd($document->price);
//     }
//  }
    ?>
    <center><h1>Order Details</h1></center>
        <table class="table table-striped table-hove">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Order Code</th>
            <th scope="col">Product Adress</th>
            <th scope="col">Items</th>
            <th scope="col">Total</th>

        </tr>
        </thead>
        <tbody>
            @foreach($order as $area)
            @php
            $sum = 0;
            @endphp
        <tr>
            <td >{{$loop->index+1}}</td>
            <td>{{$area->ordercode}}</td>
            <td>{{$area->address}}</td>
            <td>
            
              <?php
                    $doc = json_decode($area->item);
                    foreach($doc as $document){
                    $sum += $document->quantity * $document->price;
                    ?>

                    <div class="ro">
                         <span>product:{{$document->product}}</span>   
                            <span>price:{{$document->price}}</span>
                                <span>Quantity:{{$document->quantity}}</span>
                    </div>
                      <?php  }
                    ?>            
            </td>
                    <td>
                        {{$sum}}
                    </td>
         
        </tr>
        @endforeach
        </tbody>
        </table>


</body>
</html>