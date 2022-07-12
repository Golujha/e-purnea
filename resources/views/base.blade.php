<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-purnea</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .main{
            flex:1;
            height: auto;
            background-image: url('{{asset('image/home-banner (1).jpg')}}');
            background-size:cover;
        }
        .circle{
            height: 80px;
            width:80px;
            border:2px solid #ffc107;
            text-align: center
        }
        .circle:hover{
            background-color: #ffc107
        }
        .circle>img{
            margin-top: 8px;
        }
        .text-center>p{
            color:white;
        }
        a{
            text-decoration: none!important;
        }
        a:hover{
            text-decoration: underline!important;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container">
                <a href="" class="navbar-brand">E-purnea</a>

                <div class="navbar-nav">
                    <div class="col">
                        <a href="{{ route('businessLogin') }}" class="btn btn-success float-end fw-bold">Add a Business</a>
                    </div>
                    <a href="" class="nav-item nav-link">Category</a>
                    <a href="" class="nav-item nav-link">My Account</a>
                </div>
            </div>
        </div>
        <div class="container" >
            <div class="row justify-content-center align-items-center" style="height: 500px">
                <div class="col-6">
                    <p  style="font-size: 24px  " class="text-white text-uppercase">#1 INDIAN WEBSITE FOR LISTING LOCAL BUSINESS</p>
                    <form action="" class="d-flex">
                        <div class="input-group">
                            <input type="search" placeholder="Search Local Business in Purnea" class="form-control py-3">
                            <button type="submit" class="btn btn-warning">
                                <i class="bi bi-search lead"></i>
                            </button>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-3" style="background: rgba(0,0,0,0.6)">
            <div class="container row">
                <div class="col offset-1">
                    <div class="rounded-circle circle">
                        <img src="https://img.icons8.com/ios/50/ffffff/clothes.png"/>
                    </div>
                    <div class="text-center">
                        <p>Apparels & Accessories</p>
                    </div>
                </div>
                <div class="col">
                    <div class="rounded-circle circle">
                        <img src="https://img.icons8.com/ios/50/ffffff/clothes.png"/>
                    </div>
                    <div class="text-center">
                        <p>Apparels & Accessories</p>
                    </div>
                </div>
                <div class="col">
                    <div class="rounded-circle circle">
                        <img src="https://img.icons8.com/ios/50/ffffff/clothes.png"/>
                    </div>
                    <div class="text-center">
                        <p>Apparels & Accessories</p>
                    </div>
                </div>
                <div class="col">
                    <div class="rounded-circle circle">
                        <img src="https://img.icons8.com/ios/50/ffffff/clothes.png"/>
                    </div>
                    <div class="text-center">
                        <p>Apparels & Accessories</p>
                    </div>
                </div>
                <div class="col">
                    <div class="rounded-circle circle">
                        <img src="https://img.icons8.com/ios/50/ffffff/clothes.png"/>
                    </div>
                    <div class="text-center">
                        <p>Apparels & Accessories</p>
                    </div>
                </div>
                <div class="col">
                    <div class="rounded-circle circle">
                        <img src="https://img.icons8.com/ios/50/ffffff/clothes.png"/>
                    </div>
                    <div class="text-center">
                        <p>Apparels & Accessories</p>
                    </div>
                </div>
                <div class="col">
                    <div class="rounded-circle circle">
                        <img src="https://img.icons8.com/ios/50/ffffff/clothes.png"/>
                    </div>
                    <div class="text-center">
                        <p>Apparels & Accessories</p>
                    </div>
                </div>
                <div class="col">
                    <div class="rounded-circle circle">
                        <img src="https://img.icons8.com/ios/50/ffffff/clothes.png"/>
                    </div>
                    <div class="text-center">
                        <p>Apparels & Accessories</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @section('content')
        
    @show
    
</body>
</html>