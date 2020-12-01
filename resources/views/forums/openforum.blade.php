@extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-10 col-md-6 col-lg-5 rounded position-sticky">
                <div class="mt-5">
                    <h2 class="text-green mb-2">...</h2>
                    <span class="text-secondary">
                        Share your problem Anonymously,
                        sharing your problem without showing your identity <br>
                        you can just send a message under the the text field <br> <br>
                        continue your journey, making changes to yourself. <br><br>
                    </span>
                     <a href="" class="btn btn-green text-white mb-4">Get Started</a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-5 rounded position-sticky">
                <div class="shadow p-2 my-2 rounded">   
                    <div class="">
                        <textarea name="" id="" cols="30" rows=12 class="text-secondary form-control pre-scroll text-right border-0  p-4" disabled="disabled">under constra</textarea>
                    </div>
                    <div class="my-2 pb-5">
                        <form action="">
                            <div class="input-group border-bottom shadow-sm ">
                            <textarea name="" id="" cols="2" rows="1" class="form-control border-0 fucos" placeholder="Share your problem to us" autofocus></textarea>
                               <div class="border-left">
                                <button class="btn btn-green m-2">
                                    <i class="fa fa-share fa-2x text-white"></i>
                                </button>
                               </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection