@extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-10 col-md-5 col-lg-7 ">

                </div>

                <div class="col-12 col-sm-12 col-md-5 col-lg-4 my-5">
                    <form  method="POST" action="{{ route('register') }} " enctype="multipart/form-data">
                    @csrf
                        <div id="info" >
                            <div class="card border-0 shadow ">
                                <div class="card-header border-0 bg-white">
                                    <h3 class="text-secondar font-weight-bold text-center text-green mt-4">
                                        Create Account
                                    </h3>
                                </div>
                                <div class="card-body my-2">
                                    <div class="mb-2">
                                        <h5 class=" font-weight-bold ">
                                            Information
                                        </h5>
                                    </div>
                                <div class="form-group border-bottom">
                                    <input id="name" placeholder="Name" type="text" class=" form-control @error('name') is-invalid @enderror border-0" name="name" value="{{ old('name') }}" required autocomplete="name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div class="form-group border-bottom">
                                    <input id="email" placeholder="E-mail Address" type="email" class="form-control @error('email') is-invalid @enderror border-0" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div class="form-group border-bottom ">
                                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror border-0" name="password" required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div class="form-group border-bottom ">
                                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control border-0" name="password_confirmation" required autocomplete="new-password">
                                </div> 
                            </div>
                            <div class="card-footer border-0 text-center">
                                <button id="register " type="submit" class="btn btn-green-blue text-white w-50" >
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection