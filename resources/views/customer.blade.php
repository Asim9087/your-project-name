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
    <center><h1>Customer</h1>
    <form action="{{'customerprofile'}}" method="POST">
        {{-- <form action="edit/{{$student->student_id}}" method="POST"> --}}
        @csrf
        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">Customer Name</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name"  autofocus>
        </div>
        </div>

        <div class="row mb-3">
            <label for="lastname" class="col-md-4 col-form-label text-md-end">city</label>
        <div class="col-md-6">
            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city"  required autocomplete="city"  autofocus>
        </div>
        </div>

        <div class="row mb-3">
            <label for="phone" class="col-md-4 col-form-label text-md-end">phone</label>
        <div class="col-md-6">
            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"   required autocomplete="phone" autofocus>
        </div>
        </div>

        <button type="submit" class="btn btn-success">
                                   Add
                                </button>
    </form>
    </center>
</body>
</html>