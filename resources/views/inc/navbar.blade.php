<style>
nav.main {
  min-height: 65px;
  z-index: 1;
  background: #85b8cb;
}

.nav-item a {
  color: #EA9B25 !important;
}

.nav-link {
  text-transform: uppercase;
}

.btn-primary {
  background-color: #D66C44;
  border: none;
  color: #FFFFFF !important;
  font-weight: bold;
}

.btn-primary:hover {
  background-color: #c95b30;
}

a.nav-link:hover {
  border-top: 2px solid #2D3D19;
  border-bottom: 2px solid #2D3D19;
}

.navbar-brand {
  transform: scale(1.5);
<<<<<<< Updated upstream
  margin-left: 25px;
  margin-right: 2em;
  color: #6da768 !important;
=======
  margin-left : 25px;
  margin-right : 2em;
>>>>>>> Stashed changes
}

nav form .btn-search:hover {
  background-color: #E99A24;
}

.dropdown:hover .dropdown-menu {
  display: block;
}

.dropdown-menu {
  background-color: #EA9B25;
  padding: 10px;
  text-align: center;
  align-content: right;
}

.dropdown-menu a {
  color: #FFFFFF !important;
}

.dropdown-menu a:hover {
  background-color: #ECB021 !important;
}

@media only screen and (max-width: 990px) {
  a.nav-link:hover {
    transform: scale(1);
  }
  nav input {
    width: 100% !important;
    margin-bottom: 10px;
  }
  nav form button {
    width: 100% !important;
  }
}

nav.navbar {
  background-color: #1d2326;
  padding-bottom: 0;
  padding-top: 0;
}

<<<<<<< Updated upstream
a.navbar-brand {
  color: #6da768 !important;
=======
a.navbar-brand{
  color: #FFFFFF !important;
>>>>>>> Stashed changes
  font-size: 1.75em;
}

.dropdown:hover .dropdown-menu {
  display: block;
}

.dropdown-header {
  font-size: 1em;
}

button.navbar-toggler {
  background-color: #FF983C !important;
  border-color: white;
}

@media only screen and (max-width: 990px) {
  a.nav-link:hover {
    transform: scale(1);
  }
  .navbar-brand {
    padding-left: 20px;
  }
  nav input {
    width: 100% !important;
    margin-bottom: 10px;
  }
  nav form button {
    width: 100% !important;
  }
  nav .btn {
    margin-bottom: 10px;
  }
  #login-btn {
    width: 100%;
  }
}

.modal-backdrop.show {
  opacity: 0 !important;
}
</style>
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
               <a class="dropdown-item" href="{{route('post.project.page')}}">Post a Project</a>
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
