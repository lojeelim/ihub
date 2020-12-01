<div class="col-12">
                    @if(count($forum) > 0)
                        @foreach($forum as $data)
                            @if($data->category == Auth::user()->evaluation->categories)
                            <div class="shadow bg-white my-2 p-2 rounded bg-wave-ash-1">
                                <a class="text-decoration-none" href="/forum/{{$data->id}}" data-toggle="tooltip"  title="Tap to link {{$data->category}} topic"> 
                                   
                                    <div class="row">
                                        <div class="col-3 col-sm-3 col-md-2 col-lg-2">
                                            <div class="mt-4 text-center">
                                                <img style="width:5.2em;height:5.3em" class="rounded-circle p-1 shadow-sm bg-ash" src="/storage/user_images/{{$data->user->user_image}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-9 col-sm-9 col-md-10 col-lg-10">
                                            
                                            <div class="card border-light shadow-sm bg-transparent ">
                                                <div class="card-header border-0 bg-transparent">
                                                    <h5 class=" font-weight-bold">
                                                        {{$data->title}}
                                                    </h5>
                                                </div>
                                                <div class="card-body ">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="text-green">
                                                                ABOUT
                                                            </h5>
                                                           <span class="text-secondary">{{$data->category}}</span>       
                                                        </div>
                                                       @if($data->created_at == $data->updated_at)
                                                            <div class=" mt-3">
                                                                <i class="fa fa-calendar"></i>
                                                                <small class="font-weight-normal">
                                                                {{date('F D , Y' ,strtotime($data->created_at)) }} at {{date('g:ia' ,strtotime($data->created_at))}}
                                                                </small>
                                                            </div>
                                                        @else
                                                            <div class=" mt-3">
                                                            <span>Edited</span><br>
                                                                <i class="fa fa-calendar"></i>
                                                                <small class="font-weight-normal">
                                                                {{date('F D , Y' ,strtotime($data->updated_at)) }} at {{date('g:ia' ,strtotime($data->updated_at))}}
                                                                </small>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent border-0">
                                                   <div class="text-right text-green input-group">
                                                        <div class="badge">
                                                            <i class="fa fa-eye fa-lg"></i> <span>{{$data->views}}</span>
                                                        </div>
                                                        <div class="badge">
                                                            <i class="fa fa-thumbs-up fa-lg"></i> <span>{{$data->comment->count()}}</span>
                                                        </div>
                                                        <div class="badge">
                                                            <i class="fa fa-comments fa-lg"></i> <span>{{$data->comment->count()}}</span>
                                                        </div>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                </a>
                            </div>
                            @endif
                        @endforeach
                    @else
                        <div class="text-center my-4">
                            <h3 class="">
                                You don't have Topics
                            </h3>
                        </div>       
                    @endif
                </div>

                <div class="col-12">
                    {{$forum->links()}}
                </div>