<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a href="" class="navbar-brand">E-purnea</a>
        </div>
    </nav>

   <div class="container">
    <div class="row">
        <div class="col-5 mx-auto mt-2">
            <div class="card">
                <div class="card-header">Business login</div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">title</label>
                            <input type="text" name="title" value="{{old('title')}}" class="form-control">
                            @error('title')
                                <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">proprietor</label>
                            <input type="text" name="proprietor" value="{{old('proprietor')}}" class="form-control">
                            @error('proprietor')
                            <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">primary_contact</label>
                            <input type="text" name="primary_contact" value="{{old('primary_contact')}}" class="form-control">
                            @error('primary_contact')
                            <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">secondary_contact</label>
                            <input type="text" name="secondary_contact" value="{{old('secondary_contact')}}" class="form-control">
                            @error('secondary_contact')
                            <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">description</label>
                            <input type="text" name="description" value="{{old('description')}}" class="form-control">
                            @error('description')
                            <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">email</label>
                            <input type="text" name="email" value="{{old('email')}}" class="form-control">
                            @error('email')
                            <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">website</label>
                            <input type="text" name="website" value="{{old('website')}}" class="form-control">
                            @error('website')
                            <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">address</label>
                            <input type="text" name="address" value="{{old('address')}}" class="form-control">
                            @error('address')
                            <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">city</label>
                            <input type="text" name="city" value="{{old('city')}}" class="form-control">
                            @error('city')
                            <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">state</label>
                            <input type="text" name="state" value="{{old('state')}}" class="form-control">
                            @error('state')
                            <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">user_id</label>
                            <input type="text" name="user_id" value="{{old('user_id')}}" class="form-control">
                            @error('user_id')
                            <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">status</label>
                            <input type="text" name="status" value="{{old('status')}}" class="form-control">
                            @error('status')
                            <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">category_id</label>
                            <input type="text" name="category_id" value="{{old('category_id')}}" class="form-control">
                            @error('category_id')
                            <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">image</label>
                            <input type="text" name="image" value="{{old('image')}}" class="form-control">
                            @error('image')
                            <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">pin_code</label>
                            <input type="text" name="pin_code" value="{{old('pin_code')}}" class="form-control">
                            @error('pin_code')
                            <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Business Login" class="btn btn-danger w-100">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>
</body>
</html>