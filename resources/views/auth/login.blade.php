@extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-10 col-md-6 col-lg-7">
                    <!-- put something here -->
                </div>

                <div class="col-12 col-sm-12 col-md-5 col-lg-4 my-4">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="card border-0 shadow">
                                <div class="card-header border-0 bg-white">
                                    <h2 class="text-secondar font-weight-bold text-center text-green mt-4">
                                        Sign In
                                    </h2>
                                </div>
                            <div class="card-body my-5">

                            <div class="form-group border-bottom rounded">
                                <div class="input-group">
                                <i class="fa fa-user fa-lg m-2 pt-2 "></i>
                                <input id="email" placeholder="E-mail Address" type="email" class=" form-control @error('email') is-invalid @enderror border-0 " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group border-bottom rounded">
                                <div class="input-group">
                                <i class="fa fa-lock fa-lg m-2 pt-2 "></i>
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror border-0" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                            </div>

                            </div>
                            <div class="card-footer text-center border-0">
                                <button type="submit" class="btn btn-green-blue text-light w-50" data-loading-text="">
                                <!-- <i class='spinner-border spinner-border-sm'></i> -->
                                    {{ __('Login') }}
                                </button> <br> <br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-green-blue" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                    </form>

                
                   
                </div>
            </div>
        </div>
    @endsection
