@extends('layouts.app')
    @section('content')
    @include('inc.sidenav')
        <div class="dashboard-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4">
                        <div class="card border-0 shadow">
                                <img class="card-img-top" src="storage/user_images/{{Auth::user()->user_image}}">
                            <div class="card-body">
                                <i class="fa fa-heart"></i>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-8">
                        <div class="my-4">
                            <h2 class="text-uppercase">{{Auth::user()->name}}</h2>
                            <h4>{{Auth::user()->email}}</h4>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection