@extends('layouts.app')
    @section('content')
    @include('inc.sidenav')
        <div class="dashboard-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-9 col-lg-9 mt-3">
                        <div class="card border-0 shadow-sm bg-wave-ash-2">
                            <div class="card-header bg-white p-0 border-0">
                                <div class="row p-2">
                                    <div class="col-6">
                                        <div class="text-left">
                                            <img style="width:3.2em;height:3.3em" class="rounded-circle p-1 bg-ash shadow-sm" src="/storage/user_images/{{$forum->user->user_image}}" alt="">
                                        </div>
                                    </div>
                                   
                                    <div class="col-6">
                                        <div class="text-right ">
                                            @if(!Auth::guest())   
                                                @if(Auth::user()->id == $forum->user_id) 
                                                <button id="forum-option" class="btn btn-hover bg-ash rounded-circle p-2 pt-1 " role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h fa-lg text-secondary"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right position-absolute" aria-labelledby="forum-option">
                                                    <button class="dropdown-item" data-toggle="modal" data-target="#edit-forum">
                                                        <i class="fa fa-pen"></i> Edit
                                                    </button>
                                
                                                    <form class="pull-right" action="{{action('ForumController@destroy',$forum->id)}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                            <button class="btn dropdown-item">
                                                                <i class="fa fa-trash"></i>
                                                                Delete
                                                            </button>
                                                    </form>
                                                </div>
                                                @include('modals.edit-forum')
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div  class="card-body px-5 pb-5">
                                <h5 class=" font-weight-bold">{{$forum->title}}</h5>
                                <p class="">
                                    {{$forum->content}}
                                </p>
                                @if($forum->cover_image != "noimage.jpeg")
                                    <div class="card border-0 p-2 shadow-sm text-center">
                                        <img class="rounded w-100 h-100"  src="/storage/forum_cover_images/{{$forum->cover_image}}" alt="">
                                    </div>
                                @endif
                               @if($forum->created_at == $forum->updated_at)
                                    <div class="text-left mt-3">
                                        <i class="fa fa-calendar"></i>
                                        <small class="font-weight-normal">
                                        {{date('F D , Y' ,strtotime($forum->created_at)) }} at {{date('g:ia' ,strtotime($forum->created_at))}}
                                        </small>
                                    </div>
                                @else
                                    <div class="text-left mt-3">
                                    <span>Edited</span><br>
                                        <i class="fa fa-calendar"></i>
                                        <small class="font-weight-normal">
                                        {{date('F D , Y' ,strtotime($forum->updated_at)) }} at {{date('g:ia' ,strtotime($forum->updated_at))}}
                                        </small>
                                    </div>
                               @endif

                            </div>
                            <div class="card-footer bg-transparent border-0 p-3">
                                <div class="row text-center ">
                                    <div class="col">
                                        <i class="fa fa-eye fa-2x"></i>
                                    </div>
                                    <div class="col">
                                        <i class="fa fa-thumbs-up fa-2x"></i>
                                    </div>
                                    <div class="col">
                                        <i class="fa fa-comments fa-2x"></i>
                                       
                                            @if($forum->comment->count() > 0)
                                                <div class="badge badge-secondary">
                                                    {{$forum->comment->count()}}
                                                </div>
                                            @endif
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-11 col-md-9 col-lg-9 mb-2">
                        <div class="p-3 bg-ash shadow-sm rounded">
                            <form action="{{action('CommentController@store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="input-group">
                                    <input type="hidden" name="forum" value="{{$forum->id}}">
                                    <textarea class="form-control bg-light  rounded-left @error('comment') is-invalid @enderror" name="comment" id="" cols="30" rows="2" placeholder="Comment.."></textarea>
                                        <button class="btn border ml-1  bg-light btn-hover rounded-right ">
                                            <i class="fa fa-comment fa-2x m-1"></i>
                                        </button>
                                            @error('comment')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-12 col-sm-11 col-md-9 col-lg-9 mb-5">
                        @foreach($forum->comment as $comments)
                        <div class="mb-2">
                            <div class="card bg-white shadow-sm border-0 p-1">
                               <div class="card-header bg-white border-0 p-0">
                                    <div class="row">
                                        <div class="col-6 text-left">
                                            <div class="text-left">
                                                <img style="width:2.2em;height:2.3em" class="rounded-circle p-1 bg-ash  shadow-sm" src="/storage/user_images/{{$comments->user->user_image}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6 text-right">
                                           <div class="mx-2">
                                                @if(!Auth::guest())   
                                                    @if(Auth::user()->id == $comments->user_id) 
                                                    <button id="comment-option" class="btn rounded-circle p-2 bg-light btn-hover" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h "></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right position-absolute" aria-labelledby="comment-option">
                                                        <button class="dropdown-item" data-toggle="modal" data-target="#edit-comment">
                                                            <i class="fa fa-pen"></i> Edit
                                                        </button>
                                                        
                                                        <form class="pull-right" action="{{action('CommentController@destroy',$comments->id)}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                            <button class="btn dropdown-item">
                                                                <i class="fa fa-trash"></i>
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                    @include('modals.edit-comment')
                                                    @endif
                                                @endif
                                           </div>
                                        </div>
                                    </div>
                               </div>
                               <div class="card-body p-0">
                                    <div class="form-group">
                                        <p>{{$comments->comment}}</p>
                                    </div>
                                    <div class="text-right">
                                        @if($comments->created_at == $comments->updated_at)
                                        
                                            <i class="fa fa-calendar"></i>
                                            <small class="font-weight-normal">
                                            {{date('F D , Y' ,strtotime($comments->created_at)) }} at {{date('g:ia' ,strtotime($comments->created_at))}}
                                            </small>
                                       
                                        @else
                                            
                                            <span>Edited</span><br>
                                                <i class="fa fa-calendar"></i>
                                                <small class="font-weight-normal">
                                                {{date('F D , Y' ,strtotime($comments->updated_at)) }} at {{date('g:ia' ,strtotime($comments->updated_at))}}
                                                </small>
                                           
                                        @endif
                                    </div>
                               </div>
                               <div class="card-footer bg-white border-0 p-0">
                              
                                    <a href="/comment/{{$comments->id}}">reply
                                        @if($comments->reply->count() > 0)
                                            {{$comments->reply->count()}}
                                        @else
                                        @endif
                                    </a>
                               </div>
                           </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
       
    @endsection
   