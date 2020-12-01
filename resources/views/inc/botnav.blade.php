@if(Auth::guest())

<nav class="navbar  botnav shadow-lg bg-light">
    <div class="container">
        <ul class="nav mr-auto ml-auto flex-row">
            @if(Auth::guest())
                <li class="nav-item">
                    <a class="nav-link" href="/"><i class="fa fa-home fa-lg text-green-blue bot-icon"></i></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href=""><i class="fa fa-user-tie fa-lg text-green-blue bot-icon"></i></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href=""><i id="forum-icon" class="fa fa-envelope-open-text text-green-blue"></i></a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href=""><i class="fa fa-user-friends fa-lg text-green-blue bot-icon"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""><i class="fa fa-info-circle  fa-lg text-green-blue bot-icon"></i></a>
                </li>
            @endif     
       </ul>
    </div>
</nav>
@endif
