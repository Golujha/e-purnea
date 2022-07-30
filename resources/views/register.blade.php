
@extends('base')

@section('content')

@include("components/header")

   <div class="container">
    <div class="row">
        <div class="col-5 mx-auto mt-2">
            <div class="card">
                <div class="card-header text-center fw-bold" style="font-size: 24px;">Create an Account</div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">name</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control">
                            @error('name')
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
                            <label for="">contact</label>
                            <input type="text" name="contact" value="{{old('contact')}}" class="form-control">
                            @error('contact')
                            <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">password</label>
                            <input type="password" name="password" value="{{old('password')}}" class="form-control">
                            @error('password')
                            <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <input type="submit" value="Create an account" class="btn btn-danger w-100">
                        </div>
                    </form>
                     <a href="{{route('login')}}" class="small float-end text-decoration-none">Already have an account?</a>

                </div>
            </div>
        </div>
    </div>
   </div>
</body>
</html>
@endsection