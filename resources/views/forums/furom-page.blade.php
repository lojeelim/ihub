@extends('layouts.app')
    @section('content')
    @include('inc.sidenav')
    <section class="dashboard-section">
        <div class="shadow-sm bg-white">
            <div class="p-3">
                <div class="input-group shadow-sm rounded bg-white">
                    <input class="form-control border-0 bg-ash" type="text" placeholder="Search...">
                    <button class="btn mx-1" ><i class="fa fa-search fa-lg text-secondary"></i></button>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-11 col-lg-10">
                    @if(count($forum) > 0)
                        @foreach($forum as $data)
                            <a class="text-decoration-none" href="">
                                <div id="forum-content" class=" card my-2 border-0 bg-white shadow-sm rounded ">
                                    <!-- Header -->
                                    <div class="card-header bg-success  border-0">
                                       <div class="row">
                                            <div class="col-3">
                                                <img style="width:39.5px;height:41px" class="rounded-circle" src="/storage/user_images/{{$data->user->user_image}}" alt="">
                                            </div>
                                            <div class="col-9">
                                                <h5 class="ml-3 font-weight-bold text-secondary">{{$data->title}}</h5>
                                            </div>
                                       </div>
                                    </div>
                                    <!--Body -->
                                    <div class="card-body">
                                        <textarea style="overflow:hidden" class="form-control border-0 bg-white text-secondary"  cols="30" rows="2" disabled="disabled">{{$data->content}}</textarea>
                                    </div>
                                    <!-- footer -->
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col border text-center text-green">
                                                <i class="fa fa-check-circle fa-lg"></i>
                                                    <div class="badge badge-success">
                                                        1
                                                    </div>
                                                answers
                                            </div>
                                            <div class="col border text-primary">
                                                <i class="fa fa-eye fa-lg"></i> 
                                                    <div class="badge badge-primary">
                                                        112
                                                    </div>
                                                views
                                            </div>
                                            <div class="col-5 border text-right text-secondary">
                                                <i class="fa fa-calendar"></i><small> {{$data->created_at}}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <div class="p-4 my-4 bg-white shadow-sm rounded text-center">
                            <h2 class="text-green font-weight-bold">NO FORUM POSTED</h2>
                        </div>
                    @endif
                </div>
                <div class="col-12 col-sm-12 col-md-11 col-lg-10">
                    <div class=" shadow-sm  rounded-top">
                        {{$forum->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection 
