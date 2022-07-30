<div class="main">
    <div class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
            <a href="{{ route('homepage') }}" class="navbar-brand"><img src="http://yellowpages.in/images/yellow-pages-logo.png" alt=""></a>

            <div class="navbar-nav">
                <div class="col">
                    <a href="{{ route('add.biz') }}" class="btn btn-success float-end fw-bold text-light" style="margin-right: 30px;">Add a Business</a>
                </div>
                <a href="{{ route('category') }}" class="nav-item nav-link text-light" style="margin-right: 30px;">Category</a>

                @guest
                <a href="{{route('login')}}" class="nav-item nav-link text-light" style="margin-right: 30px;">My Account</a>
                @endguest

                @auth
                <a href="" class="nav-item nav-link text-light" style="margin-right: 30px;">{{Auth::user()->name}} s'Account</a>
                <a href="{{route('logout')}}" class="btn btn-danger">Logout</a>
                @endauth


            </div>
        </div>
    </div>
    <div class="container" >
        <div class="row justify-content-center align-items-center" style="height: 500px">
            <div class="col-6">
                <p  style="font-size: 24px  " class="text-white text-uppercase">#1 INDIAN WEBSITE FOR LISTING LOCAL BUSINESS</p>
                <form action="{{route('search')}}" class="d-flex">
                    <div class="input-group">
                        <input type="search" placeholder="Search Local Business in Purnea" name="search" class="form-control py-3">
                        <button type="submit" class="btn btn-warning">
                            <i class="bi bi-search lead"></i>
                        </button>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-3" style="background: rgba(0,0,0,0.6)">
        <div class="container row justify-content-center">
            
            @foreach ($category as $cat)
            <div class="col text-center">
               {{-- <div class="rounded-circle">
                    <img src="https://img.icons8.com/ios/50/ffffff/clothes.png"/>
                </div>--}}
                <div class="text-right text-white">
                    <a href="{{route('category',$cat->id)}}" class="text-white text-decoration-none">{{$cat->cat_title}}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>