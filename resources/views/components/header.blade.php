
<div class="navbar navbar-expand-lg navbar-dark bg-warning">
    <div class="container">
        <a href="{{ route('homepage') }}" class="navbar-brand"><img src="http://yellowpages.in/images/yellow-pages-logo.png" alt="" style="margin-left: 40px;"></a>

        <form action="{{route('search')}}" class="d-flex">
            <div class="input-group">
                <input type="search" placeholder="Search Local Business in Purnea" name="search" class="form-control" size="80" style="height: 50px;" >
                <button type="submit" class="btn btn-dark">
                    <i class="bi bi-search lead fw-bold text-light"></i>
                </button>
            </div>
           
        </form>
        <div class="navbar-nav">
            <div class="col">
                <a href="{{ route('add.biz') }}" class="btn btn-success float-end fw-bold text-light" style="margin-right: 30px;">Add a Business</a>
            </div>
                
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