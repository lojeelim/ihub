@extends('layouts.app')
    @section('content')
        <section class="">
            <div class="container bg-wave-top shadow ">
                <div class="row">

                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 my-5 ">
                        <div class="text-center ">
                            <i class="fas fa-brain fa-3x text-green mb-3"></i>
                            <h1 class="text-dark font-weight-bold">
                                Are you
                                <div id=flip>
                                    <div><div> Feeling Depressed</div></div>
                                         <div><div>Feeling Anxious</div></div>
                                     <div><div>Feeling Lonely</div></div>
                                </div>
                                right now?
                            </h1>
                        </div>
                        <div class="ml-5 my-4">
                            <span class="">let us help you, by giving you advice and <br>
                                                            guiding you to find your self again.
                            </span><br>
                            <a href="/register" class="btn btn-outline-success btn-green my-3" >Click here</a>
                        </div>
                    </div>

                </div>
            </div>           
        </section>

        <section>
            <div class="container section-green shadow-sm ">
                <div class="row">   

                    <div class="col-12 col-sm-12 col-md-8 col-lg-10 mt-3">
                        <div class="text-left ">
                            <h3 class="text-white font-weight-bold">
                                DID YOU KNOW?
                            </h3>
                            
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-10">
                        <div class="p-4 text-left ">
                            <button class="btn" data-toggle="modal" data-target="#depression">
                                <h4 class="text-white"  >
                                    WHAT IS DEPRESSION?
                                </h4>
                            </button>
                        </div>
                        @include('modals.depression')
                    </div>

                    <div class="col-12 col-sm-12 col-md-8 col-lg-10">
                        <div class="p-4 text-left ">
                            <button class="btn" data-toggle="modal" data-target="#anxious">
                                <h4 class="text-white"  >
                                    WHAT IS ANXIOUS?
                                </h4>
                            </button>
                        </div>
                        @include('modals.anxious')
                    </div>

                    <div class="col-12 col-sm-12 col-md-8 col-lg-10">
                        <div class="p-4 text-left ">
                            <button class="btn" data-toggle="modal" data-target="#loneliness">
                                <h4 class="text-white"  >
                                    WHAT IS LONELINESS?
                                </h4>
                            </button>
                        </div>
                        @include('modals.loneliness')
                    </div>

                </div>  
            </div>
        </section>

        <section>
            <div class="container shadow">
                <div class="row justify-content-center py-5 ">
                    <div class="col-10 col-sm-10 col-md-10 col-lg-10 ">
                        <div class="mb-5 text-center">
                            <h3 class="text-green font-weight-bold">
                                Win against depression, anxious and loneliness <br>
                                 live with a meaningful life
                            </h3>
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-12 col-md-7 col-lg-7 ">
                        <div class="">
                            <div class="bg-white border-green shadow">
                                <!-- Carousel -->
                                <div id="carousel-example" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NHf56w1AmPw" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="carousel-item ">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/a1Y1ocyudjs" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="carousel-item ">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Rv9SwZWVkOs" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- End carousel -->
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-sm-10 col-md-10 col-lg-5 ">
                        <div class="mt-3">
                            <span class="">
                                Life is a gift, you don't owned it but you deserve to live it as your own.
                                be thankful, be proud even in the worriest time in life don't forget what is your porpose <br>
                                release the negative energy. you can make changes you can do it! 
                                we will help you.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container section-green p-5">
                <div class="row justify-content-center">

                    <div class="col-10 col-sm-10  col-md-5 col-lg-3 ">
                        <div class="" >
                            <h3 class="text-white font-weight-bold">
                                You need help?<br>
                                Come to us!                        
                            </h3>
                            <a href="/forum" class="btn btn-light font-weight-bold text-green my-3">Click here</a>
                        </div>
                       
                    </div>

                    <div class="col-10 col-sm-10  col-md-5 col-lg-9 ">
                        <div >
                            
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="">
            <div class="container">
                <div class="row justify-content-center shadow">

                    <div class="col-10 col-sm-10 col-md-10 col-lg-10 ">
                        <div class="my-4">
                            <h1 class="font-weight-bold">
                           What is {{ config('app.name', 'iheal') }}?
                            </h1>
                            <div>
                                <span class="">provides</span>
                            </div>
                        </div>
                    </div> 

                    <div class="col-5 col-sm-5 col-md-5 col-lg-5 ">
                        <div class="mt-5">
                            <div class="ml-5 text-center ">
                                <h2 class="">Mission</h2>
                                <i class="fa fa-paper-plane fa-4x text-green-blue my-4"></i>
                            </div>
                            <span class=" ">
                                our mission is to reach out all the peolple <br>
                                who suffering mental problem <br>
                                to guide and to give positive advice 
                            </span>
                        </div>
                    </div>

                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 ">
                         <!-- blank-->
                    </div>

                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 ">
                         <!-- blank-->
                    </div>

                    <div class="col-5 col-sm-5 col-md-5 col-lg-5 ">
                        <div class="">
                            <div class="mr-5 text-center r">
                                <h2 class="">Vission</h2>
                                <i class="fa fa-eye fa-4x text-green-blue my-4"></i>
                            </div>
                            <div class="text-right">
                            <span class=" ">
                                we are hoping in the near future , peolple can pass <br>
                                mental problems, learn to give value themselves <br>
                                even in the woriest day in there life.
                            </span>
                            </div>
                        </div>
                    </div>


                    <div class="col-5 col-sm-5 col-md-5 col-lg-5 ">
                        <div class="mb-5">
                            <div class="ml-5 text-center">
                                <h2 class="">Goal</h2>
                                <i class="fa fa-bullseye fa-4x text-green-blue my-4"></i>
                            </div>
                            <span class=" ">
                                To minimized death cause by mental problem
                            </span>
                        </div>
                    </div>

                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 ">  
                        <!-- blank-->
                    </div>

                    <!-- <div class="col-10 col-sm-10 col-md-10 col-lg-10 ">          
                        <div class="row my-4 text-center">
                            <div class="col-3">
                                <span class="text-green-blue">facebook</span>
                            </div>
                            <div class="col-3">
                                <span class="text-green-blue">instagram</span>
                            </div>
                            <div class="col-3">
                                <span class="text-green-blue">twitter</span>
                            </div>
                            <div class="col-3">
                                <i class=""></i>
                                <span class="text-green-blue">youtube</span>
                            </div>
                        </div>
                    </div> -->

                </div>   
            </div>
        </section>
        

        <section>
            <div class="container bg-ash shadow">
                <div class="row justify-content-center">

                    <div class="col-10 col-sm-10 col-md-5 col-lg-5">
                        <div class="my-5 ">
                            <div>
                                <h2 class="">
                                    Features
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-10 col-sm-10 col-md-5 col-lg-5">
                        <div class="my-5">
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    
        <section>
            <div class="container section-green ">
                <div class="p-5"></div>
            </div>
        </section>

        <section>
            <div class="container bg-white shadow">
                <div class="p-5"></div>
            </div>
        </section>

       
    @endsection
    