@extends('layouts.app')
    @section('content')
    @include('inc.sidenav')
    <section class="dashboard-section">
        <div class="container">
            <div class="shadow-sm rounded">
                <div class="row px-3 py-3">
                    <div class="col-9">
                    </div>
                    <div class="col-3">
                        <button class="btn btn-hover nav-link  rounded-circle bg-ash p-2 "  data-toggle="modal" data-target="#create-forum"  data-toggle="tooltip"  title="Create Topic" v-pre>
                            <i class="fa fa-pen fa-lg "></i> 
                        </button>
                    </div>
                    @include('modals.create-forum')
                </div>
            </div>
           
            @if(count($forum) > 0)
                @foreach($forum as $data)
                <div id="topic" class="shadow-sm rounded bg-white mt-2 p-2">
                    <div class="row ">
                        <div class="col-7">
                            <div class="mx-auto  card  mx-4  text-center border-0">
                                <div class="card-body p-0 font-weight-bold">
                                    {{$data->title}}
                                </div>
                                <div class="text-left my-1">
                                    <small class=""><i class="fa fa-calendar"></i>
                                    {{date('F D , Y' ,strtotime($data->created_at)) }} at {{date('g:ia' ,strtotime($data->created_at))}}
                                     </small>
                                </div>
                                <div class="card-footer text-left border-0 p-0 bg-white ">   
                                    <span class="badge"><i class="fa fa-comments"></i> {{$data->comment->count()}}</span>
                                        <span class="badge"><i class="fa fa-eye"></i> 23</span>
                                    <span class="badge"><i class="fa fa-thumbs-up"></i> 23</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 text-center ">
                            <div class="btn-group">
                                <button  class="btn btn-hover nav-link rounded-circle bg-ash p-2 mx-2" type="button" data-toggle="collapse" data-target="#edit{{$data->id}}" aria-expanded="false" aria-controls="{{$data->id}}" >
                                    <i class="fa fa-edit   p-1"></i>
                                </button>
                               
                                <button id="delete-topic" class="btn btn-hover nav-link rounded-circle bg-ash p-2 mx-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <i class="fa fa-trash-alt   p-1"></i>
                                </button>
                                    <div class="dropdown-menu dropdown-menu-right position-absolute  mx-0" aria-labelledby="delete-topic">
                                        <div class="p-0">
                                            <button class="btn  mx-1 bntdropdown-item">
                                                <i class="fa fa-stop-circle"></i> Not now
                                            </button>
                                        </div>
                                        <div class="">
                                            <form class="pull-right" action="{{action('ForumController@destroy',$data->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                                <button class="btn text-danger mx-1 bntdropdown-item">
                                                   <i class="fa fa-trash-alt"></i> Delete now
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse shadow" id="edit{{$data->id}}">
                    <div class="bg-ash p-2">
                        <form action="{{action('ForumController@update', $data->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                            <div class="row justify-content-center">
                                <div class="col-8 col-sm-8 col-md-5 col-lg-5">
                                    <div class="text-center">
                                        <h5 class=" font-weight-bold">
                                            Cover
                                        </h5>
                                    </div>
                                    <div class="card border-0 shadow-sm  bg-white p-3">
                                        <img class="rounded-top"  style="height:18em;" src="/storage/forum_cover_images/{{$data->cover_image}}"  alt="">
                                        <div class="bg-white shadow-sm rounded-bottom">
                                            <div class="btn-group pt-2">
                                                <label class=" p-1 mx-2" for="e-cover_image">
                                                    <i class="fa fa-image fa-2x "></i>
                                                </label>
                                                <input class="form-control mr-2 border-0 @error('cover_image') is-invalid @enderror" type="file" name="cover_image" id="e-cover_image">
                                                @error('cover_image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                                    <div class="form-group">
                                        <label class="font-weight-bold " for="title">Title</label>
                                        <input type="text" class="form-control  @error('title') is-invalid @enderror border-0" name="title" value="{{$data->title}}" required>
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold " for="content">Content</label>
                                        <textarea class="form-control  @error('cotent') is-invalid @enderror border-0" name="content"  cols="30" rows="7" placeholder="" required>{{$data->content}}</textarea>
                                            @error('content')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-green my-1 w-25 font-weight-bold text-white">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @endforeach
                <div class="mt-2">
                    {{$forum->links()}}
                </div>
                @else
                    <div class="text-center my-4">
                        <h3 class="">
                            you dont have topic     
                        </h3>
                    </div>
            @endif    
           
        </div>
    </section>
    @endsection 

 <!--  <div class="row justify-content-center">
               <div class="col-12 shadow-sm ">
                    <div class="p-2">
                        <button class="btn rounded shadow-sm text-green-blue"   data-toggle="modal" data-target="#create-forum">
                            <i class="fa fa-pencil-alt mr-2 text-green-blue"></i>
                                Create
                        </button>
                    </div>
                      @include('modals.create-forum')
                </div>

                <div class="col-12">
                   <div class="container">
                        <div class="scrollable">
                            <table class="table table-hover my-0 ">
                                <tr class="bg-light  text-uppercase">
                                    <th>Title</th>
                                    <th>Date and Time</th>
                                    <th ><i class="fa fa-envelope-open fa-lg" data-toggle="tooltip"  title="Total Answers"></i></th>
                                    <th>Action</th>
                                </tr>
                                @if(count($forum) > 0)
                                @foreach($forum as $f)
                                    <tr>
                                        <td>{{$f->title}}</td>
                                        <td>{{$f->created_at}}</td>
                                        <td>{{$f->id}}</td>
                                        <td>
                                            <divv class="input-group">
                                                <a class="btn btn-green text-white mx-1" href="\forum\{{$f->id}}"> <i class="fa fa-pencil-alt fa-lg"></i></a>
                                                <form class="pull-right" action="{{action('ForumController@destroy',$f->id)}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger mx-1 bntdropdown-item">
                                                        <i class="fa fa-trash fa-lg"></i>
                                                    </button>
                                                </form>
                                            </divv>
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td colspan="4 ">
                                            <div class="text-center">
                                                <h2 class="">You don't have forum </h2>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            </table>
                            
                        </div>
                        <div class="">
                           links here
                          </div>
                   </div>
               </div>
           </div> --->