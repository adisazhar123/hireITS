<nav class="main navbar navbar-expand-lg navbar-light">
     <div class="container">
       <a style="font-weight: bold" class="navbar-brand" href="{{url('/')}}">hire<strong>ITS</strong></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Hire Freelancers
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
               <h6 class="" style="padding-left: 18px"><strong>Find A FREELANCER</strong></h6>
               <a class="dropdown-item" href="#">Post a Project</a>
               <div class="dropdown-divider"></div>

               <h6 class="" style="padding-left: 18px"><strong>DISCOVER</strong></h6>
               <a class="dropdown-item" href="#">Showcase</a>
             </div>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Find Work
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <h6 class="" style="padding-left: 18px"><strong>FIND WORK</strong></h6>
               <a class="dropdown-item" href="{{route('browse-jobs')}}">Browse Projects</a>
               <a class="dropdown-item" href="#">Browse Categories</a>
             </div>
           </li>
         </ul>

         <ul class="navbar-nav ml-auto">
           <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Sign Up</a>
             </li>
             <li class="nav-item">
                <button class="nav-link btn btn-primary" style="font-weight:bold; color:white">Post a project</button>
              </li>
         </ul>

       </div>
     </div>
   </nav>
