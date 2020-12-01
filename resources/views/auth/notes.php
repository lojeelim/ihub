<div class=" input-group shadow-sm rounded bg-green-blue">
                            <input class="form-control border-0 bg-ash" type="text" placeholder="Seearch Title..">
                            <button class="btn mx-1" ><i class="fa fa-search fa-lg text-secondary"></i></button>
                        </div>

@extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                 <div class="col-10 col-sm-6 col-md-5 col-lg-7 ">
                 @for($i =0 ; $i < 30; $i++)
                <h1>hello</h1>
              @endfor
                </div>

                <div class="col-12 col-sm-12 col-md-5 col-lg-5 ">

                    <div class="card shadow border-0 my-4 mx-4">
                        <div class="card-header text-center border-0">
                            <h1 class="text-secondary">Get started</h1>
                        </div>
                        
                        <div class=" su-container ">
                            <form  method="POST" action="{{ route('register') }} " enctype="multipart/form-data">
                            @csrf   

                                <div id="feel" class="su-content mb-5">
                                    <!-- <fieldset class="checkboxgroup">
                                        <p>some label</p>
                                        <label><input type="checkbox"> checkbox 1</label>
                                        <label><input type="checkbox"> checkbox 2</label>
                                        <label><input type="checkbox"> checkbox 3</label>
                                        <label><input type="checkbox"> checkbox 4</label>
                                    </fieldset> -->

                                    <div class="su-item row justify-content-center">
                                        <div class="form-group col-10">
                                            <h5 class="text-secondary my-3">How are you?</h5>
                                        </div>
                                        <div class="form-group col-10">
                                            <input type="checkbox" id="feelings" class="mr-2">
                                            <label for="depression" class="text-secondary ">Feeling Depressed</label>
                                        </div>
                                        <div class="form-group col-10">
                                            <input type="checkbox" id="feelings" class="mr-2">
                                            <label for="depression" class="text-secondary">Feeling Anxious</label>
                                        </div>
                                        <div class="form-group col-10 ">
                                            <input type="checkbox" id="feelings" class="mr-2">
                                            <label for="depression" class="text-secondary">Feeling Lonely</label>
                                        </div>
                                        <div class="text-center su-btn">
                                            <a href="#info" class="btn btn-green-blue text-white w-25 font-weight-bold ">Next</a>
                                        </div>
                                    </div>
                                </div>

                                <div id="info" class="su-content my-5">
                                    <div class="su-item row justify-content-center">
                                        <div class="form-group col-10">
                                            <h5 class="text-secondary my-3">Basic Info</h5>
                                        </div>
                                       
                                         <div class="form-group border-bottom col-10">
                                            <input id="name" placeholder="Name" type="text" class=" form-control @error('name') is-invalid @enderror border-0" name="name" value="{{ old('name') }}" required autocomplete="name">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>

                                        <div class="form-group border-bottom col-10">
                                            <input id="email" placeholder="E-mail Address" type="email" class="form-control @error('email') is-invalid @enderror border-0" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>

                                        <div class="form-group col-10 mt-4">
                                            <div class="row justify-content-center su-btn">
                                                <div class="col-6 ">
                                                    <a href="#feel" class="btn btn-light text-dark btn-block font-weight-bold ">Back</a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="#password" class="btn btn-green-blue text-white btn-block font-weight-bold ">Next</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="password" class="su-content my-5">
                                    <div class="su-item row justify-content-center">
                                        <div class="form-group col-10">
                                            <h5 class="text-secondary my-3">Password</h5>
                                        </div>

                        
                                        <div class="form-group border-bottom col-10">
                                            <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror border-0" name="password" required autocomplete="new-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>

                                        <div class="form-group border-bottom col-10">
                                            <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control border-0" name="password_confirmation" required autocomplete="new-password">
                                        </div> 
                                                                            

                                        <div class="form-group col-10 mt-4">
                                            <div class="row justify-content-center su-btn">
                                                <div class="col-6 ">
                                                    <a href="#info" class="btn btn-light text-dark btn-block font-weight-bold ">Back</a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="#image" class="btn btn-green-blue text-white btn-block font-weight-bold ">Next</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div id="image" class="su-content mt-5">
                                    <div class="su-item row justify-content-center">
                                        <div class="form-group col-10">
                                            <h5 class="text-secondary my-3">Upload Photo</h5>
                                        </div>
      
                                        <div class="form-group border-bottom col-11">
                                            <div class="text-left">
                                                <label class="text-green" for="">Optional</label>
                                            </div>
                                            <input id="user_image" data-content="wdaw" type="file" class=" form-control @error('user_image') is-invalid @enderror border-0" name="user_image" >
                                            
                                                @error('user_image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div> 
                                                                            

                                        <div class="form-group col-10 mt-5">
                                            <div class="row justify-content-center su-btn">
                                                <div class="col-6 ">
                                                    <a href="#password" class="btn btn-light text-dark btn-block font-weight-bold ">Back</a>
                                                </div>
                                                <div class="col-6">
                                                        <button type="submit" class="btn btn-green-blue text-white btn-block font-weight-bold ">
                                                        {{ __('Register') }}
                                                        </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                



                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection




    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          1. Headline One
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
            Some text
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          2. Second headline
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
          Some more text
      </div>
    </div>
  </div>

</div>