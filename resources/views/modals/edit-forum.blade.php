<div class="modal fade" id="edit-forum" tabindex="-1" role="dialog" aria-labelledby="create-forum" auto-focus aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header border-0 bg-green">
                <h4 class="modal-title text-white" id="">Edit Topic</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times fa-md"></i>
                    </button>
            </div>

            <div class="modal-body p-0">
                <div class="p-2">
                    <form action="{{action('ForumController@update', $forum->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                        <div class="bg-white shadow-sm rounded-right">
                            <div class="input-group">
                                <span class="p-2 rounded-left  font-weight-bold">Title</span>
                                <input type="text" class="form-control border-0  @error('title') is-invalid @enderror" name="title" value="{{$forum->title}}" required>
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>
                        </div>
                        
                        <div class="bg-white shadow-sm my-1 text-left">
                            <div class="btn-group pt-2">
                                <label class=" p-1 mx-2" for="cover_image">
                                    <img style="width:30px;hieght:25px" class="rounded" src="/storage/forum_cover_images/{{$forum->cover_image}}" alt="">
                                </label>
                                <!-- <span>{{$forum->cover_image}}</span> -->
                                <input class="form-control border-0 @error('cover_image') is-invalid @enderror " type="file" name="cover_image" id="cover_image">
                                @error('cover_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="bg-white shadow-sm">
                            <div class="form-group">
                                <textarea class="form-control border-0 @error('cotent') is-invalid @enderror" name="content"  cols="30" rows="10" placeholder="" required>{{$forum->content}}</textarea>
                                    @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="text-center bg-white shadow-sm p-2 my-1">
                            <button class="btn btn-green-blue text-white font-weight-bold">Update Topic</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>