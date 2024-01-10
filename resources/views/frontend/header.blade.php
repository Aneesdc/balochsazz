   <header class="header">
       <div class="header_content d-flex flex-row align-items-center justify-content-center">
           <div class="logo"><a href="#">Mixtape</a></div>
           <div class="log_reg">
               <ul class="d-flex flex-row align-items-start justify-content-start">

                   @if(Route::has('login'))

                   @auth
                   <li><a href="{{url ('/')}}">Home</a></li>
                   <li> <a href="{{url ('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form-anees').submit();">Logout</a>
                       <form id="logout-form-anees" action="{{ url ('logout') }}" method="POST" style="display: none;">
                           @csrf
                       </form>
                   </li>
                   @else
                   <li><a href=" {{url ('login')}}">Login</a></li>
                   @if(Route::has('register'))
                   <li><a href="{{url ('register')}}">Register</a></li>
                   @endif
                   @endauth
                   @endif

               </ul>
           </div>
           <nav class="main_nav">
               <ul class="d-flex flex-row align-items-start justify-content-start">
                   <li class="active"><a href="{{url ('/')}}">Home</a></li>
                   <li><a href="{{url ('about')}}">About us</a></li>
                   <li><a href="music.html">Music</a></li>
                   <li><a href="{{url ('category')}}">Category</a></li>
                   <li><a href="{{url ('contact')}}">Contact</a></li>
               </ul>
           </nav>
           <div class="hamburger ml-auto">
               <div class="d-flex flex-column align-items-end justify-content-between">
                   <div></div>
                   <div></div>
                   <div></div>
               </div>
           </div>
       </div>
   </header>