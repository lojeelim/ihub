@extends('layouts.app')
    @section('content')
    @include('inc.sidenav')
        <section class="dashboard-section">
          
            <div class="container">
                <div class="row">
                    <div class="col-5 my-5">
                        <div class="text-center">
                            <h1 class="text-green font-weight-bold">
                                {{config('app.name')}} Forum
                            </h1>
                            <span class="">Forum has three categories <br>
                                blah blah blahhhh...
                            </span>

                            <div class="my-4">
                                <button class="btn btn-green-blue text-white" data-toggle="modal" data-target="#forum-evaluation">
                                   Get Started
                                </button>
                            </div>
                            @include('modals.forum-evaluation')
                        </div>
                    </div>
                    <div class="col-7 my-5 ">
                    </div>
                </div>
            </div>
           
        </section>
    @endsection