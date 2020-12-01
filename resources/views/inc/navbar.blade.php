<nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        @if(!Auth::guest())
            <label for="sidenav">
                <i class="fa fa-bars fa-2x text-green-blue rounded " id="open"></i>
            </label>    
        @else
            <a class="navbar-brand " id="brand" href="{{ url('/') }}">
                {{ config('app.name', 'iheal') }}
            </a>
        @endif

        <ul class="navbar-nav mr-auto ml-auto flex-row top-item">
            @if(Auth::guest())
                <li class="nav-item mx-2">
                    <a class="nav-link active" href="/"><i class="fa fa-home fa-lg"></i><span> Home</span></a>
                </li>   
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#volunteer"><i class="fa fa-hand-holding-medical fa-lg"></i><span> Volunteers</span></a>
                </li>

                <li class="nav-item dropdown mx-2">
                    <a id="services" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fa fa-user-cog fa-lg"></i><span> Help&nbspand&nbspServices</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right position-absolute mt-2" aria-labelledby="services">
                        <a class="dropdown-item" href="">
                           <i class="fa fa-envelope-open-text"></i> Open Forum
                        </a>
                        <a class="dropdown-item" href="">
                           <i class="fa fa-user-friends"></i> Help a Friend
                        </a>
                    </div>
                </li>
                
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#about"><i class="fa fa-info-circle fa-lg"></i><span> About</span></a>
                </li>
            @endif     
        </ul>
<!-- messaging and notifications -->
        <ul class="navbar-nav mr-auto ml-auto flex-row">
            @guest
               
            @else
                @if(Auth::user()->type == 'user')
                <li class="nav-item dropdown mx-3">
                    <button id="messages" class="btn  btn-hover nav-link rounded-circle bg-ash p-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fa fa-envelope fa-lg text-secondary"></i>
                        <span class="badge badge-danger position-absolute">1</span>
                    </button>
    
                    <div class="dropdown-menu dropdown-menu-left position-absolute mt-2 p-0" aria-labelledby="messages">
                        <div class="dropdown-header bg-green text-white">Messages</div>
                            <a class="dropdown-item" href="#">
                                dropdown message
                            </a>
                        
                            <a class="dropdown-item" href="#">
                                See all messages    
                            </a>
                    </div>
                </li>

                <li class="nav-item dropdown mx-3">
                    <button id="notifications" class="btn-hover btn nav-link rounded-circle bg-ash p-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fa fa-bell fa-lg text-secondary"></i>
                        <span class="badge badge-danger position-absolute">231</span>
                    </button>
                   

                    <div class="dropdown-menu dropdown-menu-right position-absolute mt-2 p-0" aria-labelledby="notifications">
                        <div class="dropdown-header bg-green text-white">Notications</div>
                        <a class="dropdown-item" href="#">
                            notifications
                        </a>
                    </div>
                </li>
                @endif

                @if(Auth::user()->type == 'admin')
                <li class="nav-item dropdown">
                    <!-- <a id="Messages" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fa fa-envelope"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg-right position-absolute mt-3" aria-labelledby="Messages">
                        <a class="dropdown-item" href="#">
                            dropdown message
                        </a>
                    </div> -->
                </li>
                @endif
                
                @if(Auth::user()->type == 'volunteer')
                <li class="nav-item dropdown">
                    <!-- <a id="Messages" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fa fa-envelope"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg-right position-absolute mt-3" aria-labelledby="Messages">
                        <a class="dropdown-item" href="#">
                            dropdown message
                        </a>
                    </div> -->
                </li>
                @endif

            @endguest
        </ul>

<!-- user -->
        <ul class="navbar-nav flex-row">
            @guest
                @if (Route::has('register'))
                    <li class="nav-item" >
                    <div id="signin" class="btn-group">
                        <i class="fa fa-sign-in-alt text-green-blue p-1"></i><span id="ligin">
                        <a  class="nav-link text-green-blue" href="{{ route('login') }}">Login</span></a>
                    </div>
                       
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link btn rounded" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img style="width:32px;height:32px;border-radius:24px" src="/storage/user_images/{{Auth::user()->user_image}}" alt=""><i class="ml-1 fa fa-chevron-circle-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right position-absolute mt-2 p-0" aria-labelledby="navbarDropdown">
                        <div class="dropdown-header bg-green text-white text-uppercase font-weight-bold">
                            <span class="">
                            {{Auth::user()->name}}
                            </span>
                        </div>
                            <a class="dropdown-item" href="/profile">
                                <i class="fa fa-user-circle"></i> 
                                    Profile
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out-alt"></i>
                                    {{ __('Logout') }}
                            </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
@include('modals.about')
@include('modals.volunteers')