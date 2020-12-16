@extends('layouts.app')
    @section('content')
    @include('inc.sidenav')
    <div class="dashboard-section">
        <div class="container">
            <div class="card border-0 shadow my-2">
                <div class="card-header border-0">
                    <h5 class="text-uppercase">{{$comments->user->name}}</h5>
                </div>
                <div class="card-body">
                    <img style="width:2.2em;height:2.3em" class="rounded-circle p-1 bg-ash  shadow-sm" src="/storage/user_images/{{$comments->user->user_image}}" alt="">
                    <span>{{$comments->comment}}</span>
                </div>
                <div class="card-footer border-0">
                    <form action="{{action('ReplyCommentController@store')}}" method="POST">
                    @csrf
                        <div class="input-group">
                            <input type="hidden" name="id" value="{{$comments->id}}">
                                <textarea class="form-control bg-light  rounded-left @error('reply') is-invalid @enderror" name="reply" id="" cols="30" rows="1" placeholder="Reply.."></textarea>
                                    <button class="btn border ml-1  bg-light btn-hover rounded-right ">
                                        Reply
                                    </button>
                                    @error('reply')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>
                    </form>
                </div>
            </div>
            @foreach($comments->reply as $reply)
            <div class="card border-0 shadow my-1">
                <div class="card-body">
                    <div class="row">
                        <div class="col-10 ">
                                <img style="width:2.2em;height:2.3em" class="rounded-circle p-1 bg-ash  shadow-sm" src="/storage/user_images/{{$reply->user->user_image}}" alt="">
                                    {{$reply->reply}}
                        </div>

                        <div class="col-2 text-right">
                        @if(!Auth::guest())   
                                @if(Auth::user()->id == $reply->user_id) 
                                        <button id="forum-option" class="btn btn-hover bg-ash rounded-circle p-2 pt-1 text-right" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h fa-lg text-secondary"></i></button>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer border-0">
                    <div class="text-right">
                        @if($reply->created_at == $reply->updated_at)
                            <i class="fa fa-calendar"></i>
                                <small class="font-weight-normal">
                                    {{date('F D , Y' ,strtotime($reply->created_at)) }} at {{date('g:ia' ,strtotime($reply->created_at))}}
                                </small>
                                        
                        @else                  
                            <span>Edited</span><br>
                                <i class="fa fa-calendar"></i>
                                    <small class="font-weight-normal">
                                        {{date('F D , Y' ,strtotime($reply->updated_at)) }} at {{date('g:ia' ,strtotime($reply->updated_at))}}
                                    </small>    
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection