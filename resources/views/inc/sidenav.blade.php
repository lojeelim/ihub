<input type="checkbox" name="sidenav" id="sidenav" ><!--sidenav  trigger--->
<!-- loading spinner -->
<div class="loading">
<div class="lds-ring"><div></div><div></div><div></div><div></div></div>
</div>
<div class="bg-sidenav sidenav  navbar-light bg-white shadow-sm font-weight-bold">
    <div class="float-right mr-4 pr-2">
        <label  for="sidenav">
            <i class="fa fa-times-circle text-white fa-2x mt-3" id="close"></i>
        </label>  
    </div>
    <div class="text-center p-5 bg-wave-white  bg-green">
        <a class="navbar-brand" href="{{ url('/') }}">
                <!-- <i class="fa fa-heartbeat text-green-blue fa-4x"></i> -->
        </a>
    </div>
        <div class="text-uppercase mt-2">
            <ul class="navbar-nav   position-relative">
                    <!-- USER -->
                    @if(Auth::user()->type == 'user')
                    <li class="nav-item">
                        <div class="input-group p-2 sidenav-item">
                            <a class="nav-link ml-4 " href="/dashboard"><i class="fa fa-hand-holding-heart  mr-3 fa-lg text-green"></i>
                                I NEED HELP
                            </a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="input-group p-2 sidenav-item">
                            <a class="nav-link ml-4" href="/user"><i class="fa fa-home mr-3 fa-lg text-green"></i>
                                HOME
                            </a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="input-group p-2 sidenav-item">
                            <a class="nav-link ml-4 sidenav-link" href="/forum">
                                <i class="fa fa-envelope-open-text mr-3 fa-lg text-green"></i>
                                FORUMS 
                            </a>
                        </div>

                        @if(!empty(Auth::user()->evaluation))
                            <div class="input-group p-2 sidenav-item">
                                <a class="nav-link sidenav-link ml-5" href="/forum/create"><i class="fa fa-envelope-square fa-lg  pr-2"></i>MY FORUM 
                                </a>
                            </div>
                            <!-- <button class="btn btn-hover ml-1 bg-ash rounded-circle" type="button" data-toggle="collapse" data-target="#forum-sub-menu" aria-expanded="false" aria-controls="forum-sub-menu">
                                <i class="fa fa-caret-square-down text-secondary"></i>
                            </button> -->
                        @endif
                        <!-- <div class="collapse" id="forum-sub-menu">
                            <div class="input-group">
                                <a class="nav-link ml-5" href="/forum/create"><i class="fa fa-envelope-square fa-lg  pr-2"></i>MY FORUM 
                                </a>
                            </div>
                        </div> -->
                    </li>

                    <li class="nav-item">
                        <div class="input-group p-2 sidenav-item">
                            <a class="nav-link ml-4 " href="*"  data-toggle="modal" data-target="#CreatePost"><i class="fa fa-pencil-alt pr-3 fa-lg text-green" ></i>
                                FEELINGS
                            </a>
                        </div>
                    </li>
                @endif
            <!-- ADMIN -->
                @if(Auth::user()->type == 'admin')
                    <li class="nav-item">
                        <div class="input-group">
                            <a class="nav-link  text-green-blue" href="/dashboard"><i class="fa fa-hand-holding-heart  text-green-blue pr-3"></i>
                                DASHBOARD
                            </a>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <div class="input-group">
                            <a class="nav-link" href="/dashboard"><i class="fa fa-home mr-3 "></i>
                                PEOPLE
                            </a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="input-group">
                            <a class="nav-link " href="/dashboard"><i class="fa fa-envelope-open-text mr-3"></i>
                            REPORTED
                            </a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="input-group">
                            <a class="nav-link " href="*"  data-toggle="modal" data-target="#CreatePost"><i class="fa fa-pen mr-3" ></i>
                                HELP POST
                            </a>
                        </div>
                    </li>
                @endif

                <!-- Volunteer -->
                @if(Auth::user()->type == 'volunteer')
    
                    <li class="nav-item">
                        <div class="input-group p-2 sidenav-item">
                            <a class="nav-link ml-4" href="/user"><i class="fa fa-home mr-3 fa-lg text-green"></i>
                                dashboard
                            </a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="input-group p-2 sidenav-item">
                            <a class="nav-link ml-4 sidenav-link" href="forum">
                                <i class="fa fa-envelope-open-text mr-3 fa-lg text-green"></i>
                                FORUMS 
                            </a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="input-group p-2 sidenav-item">
                            <a class="nav-link ml-4 " href="*"  data-toggle="modal" data-target="#CreatePost"><i class="fa fa-pencil-alt pr-3 fa-lg text-green" ></i>
                                FEELINGS
                            </a>
                        </div>
                    </li>
                @endif

            </ul>
        </div>
    </div>
    