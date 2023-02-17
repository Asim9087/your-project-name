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
    <form action="{{env('APP_URL')}}dataupdate/{{$student->id}}" method="POST">
        @csrf
        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('email') is-invalid @enderror" name="name"  required autocomplete="name" value="{{$student->name}}" autofocus>
        </div>
        </div>

        <div class="row mb-3">
            <label for="lastname" class="col-md-4 col-form-label text-md-end">LastName</label>
        <div class="col-md-6">
            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname"  required autocomplete="lastname" value="{{$student->lastname}}" autofocus>
        </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
        <div class="col-md-6">
            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$student->email}}"  required autocomplete="email" autofocus>
        </div>
        </div>

        <div class="row mb-3">
            <label for="surname" class="col-md-4 col-form-label text-md-end">Surname</label>
        <div class="col-md-6">
            <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{$student->surname}}" required autocomplete="surname" autofocus>
        </div>
        </div>

        <div class="row mb-3">
            <label for="country" class="col-md-4 col-form-label text-md-end">Country</label>
        <div class="col-md-6">
            <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{$student->country}}"  required autocomplete="country" autofocus>
        </div>
        </div>
        <button type="submit" class="btn btn-success">
                                   Add
                                </button>
    </form>
    </center>
</body>
</html>