<div class="modal fade" id="create-forum" tabindex="-1" role="dialog" aria-labelledby="create-forum" auto-focus aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">

      <div class="modal-header border-0 bg-green">
        <h4 class="modal-title text-white" id="">Create Topic</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-times fa-md"></i>
          </button>
      </div>

      <div class="modal-body p-0">
        <div class="p-2">
            <form action="{{action('ForumController@store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="bg-white shadow-sm rounded-right">
                  <div class="input-group">
                    <span class="p-2 rounded-left  font-weight-bold">Title</span>
                    <input type="text"  name="title" class="form-control mx-1 border-0" placeholder="Add title" required>
                  </div>
                </div>
                
                  <div class="bg-white shadow-sm my-1">
                    <div class="btn-group pt-2">
                      <label class=" p-1 mx-2" for="cover_image">
                        <i class="fa fa-image fa-2x "></i>
                      </label>
                      <input class=" form-control border-0 @error('cover_image') is-invalid @enderror " type="file" name="cover_image" id="cover_image">
                      @error('cover_image')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  <div class="bg-white shadow-sm">
                    <textarea name="content" id="" cols="30" rows="10" class="form-control border-0 " placeholder="Write something.." required></textarea>
                  </div>
                <div class="text-center bg-white shadow-sm p-2 my-1">
                  <button class="btn btn-green-blue text-white font-weight-bold">Post  Topic</button>
                </div>
            </form>
        </div>
      </div>

    </div>
  </div>
</div>