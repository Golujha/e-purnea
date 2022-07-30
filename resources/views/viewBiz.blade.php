@extends('base')


@section('title')
    {{$biz->title}}
@endsection


@section('content')
    @include('components/header')
    <div class="container">
        <div class="cover" style="background-image: url('{{$biz->image}}'); height:500px;background-size:cover;background-position:center">
           <div class="info p-4 h-100" style="background-color: rgba(0, 0, 0, 0.607)"> 
            <div class="w-100">
                <i class="btn btn-light text-dark" style="margin-left: 1000px;">Write a review</i>
                <i class="text-light" style="margin-left: 10px;font-size:24px;"><i class="bi bi-share"></i></i>
                <i class="text-light" style="margin-left: 10px;font-size:24px;"><i class="bi bi-phone"></i></i>
                <i class="text-light" style="margin-left: 10px;font-size:24px;"><i class="bi bi-heart"></i></i>
            </div>
            <a href="" class="text-decoration-none text-warning"><h1 class="h4">{{$biz->title}}</h1></a>
            
            <div class="w-100">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <a href="" class="small text-white">19 Reviews</a>
            </div>

            <div class="w-100 text-white mt-3">
                <h6>{{$biz->address}}</h6>
                <h6>{{$biz->city}} {{$biz->state}} - {{$biz->pincode}}</h6>

                <h2 class="mt-4">{{$biz->primary_contact}}, {{$biz->secondary_contact}}</h2>
            </div>
            <div class="w-100" style="margin-top: 200px;">
                <i class="text-light" style=""><i class="bi bi-envelope"></i>Email</i>
                <i class="text-light" style="margin-left:30px;"><i class="bi bi-geo-alt"></i>Directions</i>
                <i class="text-light" style="margin-left:30px;"><i class="bi bi-pencil-square"></i>Suggest an edit</i>
            </div>
            
        </div>
        </div>

        <div class="description my-4">
            <div class="row">
                <div class="col-4">
                    <h4 class="text-muted">Overviews</h4>

                    <p class="mb-0"><strong>Email: </strong> {{$biz->email}}</p>
                    <p class="mb-0"><strong>Proprietor: </strong> {{$biz->proprietor}}</p>
                    <p class="mb-0"><strong>Category: </strong> {{$biz->getCategory->cat_title}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h3 class="blockquote">Similar Business</h3>

        <div class="row">
            @foreach ($business as $item)
            <div class="col mb-3" style="width: 15%">
                <div class="card h-100">
                    <!-- <img src="{{('asset/'.$item->image)}}" class="card-img-top w-100" alt=""> -->
                    <img src="{{$item->image}}" class="card-img-top w-100" alt="">
                    <div class="card-body">
                        <a href="{{route('viewBiz',$item->id)}}"><h6  class="text-truncate">{{$item->title}}</h6></a>
                        <div class="w-100 small">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <a href="" class="small">19 Reviews</a>
                        </div>
                        <div class="w-100">
                            <p class=" mb-0 text-danger fw-bolder"><i class="bi bi-list"></i> {{$item->getCategory->cat_title}}</p>
                            <p class="mb-0">{{$item->city}}</p>
                            <h6 class="fw-bolder"><i class="bi bi-phone"></i> {{$item->primary_contact}}</h6>
                        </div>
                    </div>
                </div>
                
            </div>
       @endforeach
        </div>

        <div class="row">
            <div class="col-12 mx-auto">
                    {{$business->links()}}
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: rgb(49, 46, 46)">
        <footer class=" text-dark pt-5 pb-4" style="height: 400px;">
            <div class=" text-center text-md-left">
                <div class="row text-center text-md-left">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto ">
                        <h5 class="text-uppercase mb-4 font-t weight-bold text-warning">Yellowpages</h5>
                        <hr class="mb-1">
                        <p class="text-white">About us</p>
                        <p class="text-white">Contact us</p>
                        <p class="text-white">Feedback</p>
                        <p class="text-white">FAQs</p>
                        <p class="text-white">Careers</p>
                        <p class="text-white">Terms & Conditions</p>
                        <p class="text-white">Privacy Policy</p>
                        <p class="text-white">Mobile & Social</p>
    
                 
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-1">
                        <h5 class="text-uppercase mb-4 font-t weight-bold text-warning">Business</h5>
                        <hr class="mb-3">
                        <p class="text-white">Add your business</p>
                        <p class="text-white">Advertise with us</p>
    
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-2">
                        <p class="text-warning">SOCIAL NETWORKS</p>
                        <hr class="mb-2">
                        <div class="btn text-light"><i class="bi bi-twitter"></i></div>
                        <div class="btn text-light"><i class="bi bi-facebook"></i></div>
                        <div class="btn text-light"><i class="bi bi-instagram"></i></div>
    
                    </div>
                 
                </div>
            </div>
        </footer>
    
        
    </div>
    <div class="container-fluid" style="background-color: rgb(58, 55, 55)">
        <p class="text-white  text-center " style="height: 55px;">FacebookTwitterGoogle PlusYou Tube</p>
    </div>
@endsection
