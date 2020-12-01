<div class="modal fade" id="forum-evaluation" tabindex="-1" role="dialog" aria-labelledby="forum-evaluation" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

        <div class="modal-header border-0 bg-green">
            <h4 class="modal-title text-white" id="">Evaluation</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-times fa-md"></i>
            </button>
        </div>

        <div class="modal-body">
            <form action="{{action('EvaluateController@store')}}" method="POST">
            @csrf
                <div class="shadow-sm text-left  p-4">
                <label class="" for="">what are you in society?</label>
                    <div class="form-group  row justify-content-center">
                       
                       
                        <div class="col-5 form-check my-1">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="Mother" name="status">Mother
                            </label>
                        </div>
                        <div class="col-5 form-check my-1">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="Father" name="status">Father
                            </label>
                        </div>
                        <div class="col-5 form-check my-1">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="Son" name="status">Son
                            </label>
                        </div>
                        <div class="col-5 form-check my-">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="daughter" name="status">daughter
                            </label>
                        </div>
                    </div>
                 <div class="row ">
                     <div class="col">Interesting Topics</div>
                     <div class="col">Birthday</div>
                 </div>   
                 <label for=""></label>
                    <div class="input-group form-group">
                        <select id="categories" name="categories" class="custom-select  checkfeel" required>
                            <option>Choose</option>
                            <option value="depression">Depression Topics</option>
                            <option value="anxious">Anxious Topics</option>
                            <option value="loneliness">Loneliness Topics</option>
                        </select>
                    <input class="form-control" type="date" disabled="disabled">
                        
                    </div>
                    <div class="form-group">
                        <label class="" for="keywords">What do you want to read<span class="font-weight-bold text-green" id="keywords"></span>?</label>
                        <input type="text" class="form-control" name="keywords"  placeholder="Write something as a keyword"> 
                    </div>

                    

                </div>
                <div class="mt-3">
                    <button class="btn btn-green-blue text-white w-50">Continue </button>
                </div>
            </form>
        </div>
       
    </div>
  </div>
</div>