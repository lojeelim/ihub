<div class="modal fade" id="edit-comment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">

        <div class="modal-header border-0">
            <h4 class="modal-title text-green-blue" id="">Edit Comment</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-times fa-md"></i>
            </button>
        </div>

        <div class="modal-body">
            <div class="shadow-sm  p-2">
                <form action="{{action('CommentController@update', $comments->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                    <div class="form-group">
                        <textarea class="form-control  @error('edit-comment') is-invalid @enderror" name="edit-comment" id="" cols="30" rows="4" placeholder="" required>{{$comments->comment}}</textarea>
                            @error('edit-comment')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group text-center">
                        <button class="btn w-50 btn-green-blue text-white mt-3">Edit</button>
                    </div>
               </form>
            </div>
        </div>

    </div>
  </div>
</div>