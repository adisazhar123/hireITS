
<nav class="main navbar navbar-expand-lg navbar-light" >
    <div class="container">
       <a class="navbar-brand" href="{{url('/')}}">hire<strong>ITS</strong></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               HIRE FREELANCERS
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
               <h6 class=""><strong>FIND A FREELANCER</strong></h6>
               <a class="dropdown-item" href="#">Post a Project</a>
               <div class="dropdown-divider"></div>

               <h6 class="" ><strong>DISCOVER</strong></h6>
               <a class="dropdown-item" href="{{route('browse.showcase')}}">Showcase</a>
             </div>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               FIND WORK
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <h6 class=""><strong>FIND WORK</strong></h6>
               <a class="dropdown-item" href="{{route('browse.jobs')}}">Browse Projects</a>
               <a class="dropdown-item" href="#">Browse Categories</a>
             </div>
           </li>
         </ul>

         <ul class="navbar-nav ml-auto">
           @if(Auth::check())
             <li class="nav-item">
               <a href="{{ route('logout') }}" class="nav-link"
                  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                   Logout
               </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST"
                     style="display: none;">
                   {{ csrf_field() }}
               </form>
             </li>
           @else
             <li class="nav-item">
                <button type="button" id="login-btn" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
             Login
             </button>
              </li>
           @endif

         </ul>

       </div>
      </div>
   </nav>
