<div class="col-xl-10 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="{{ url('/') }} ">Geez<span>.</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="#header">Home</a></li>
              <li><a href="#clothes">Clothes</a></li>
              <li><a href="#tailors">Tailors</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#faq">FAQ</a></li>
              
              
             {{--  <li class="drop-down"><a href="">Drop Down</a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="drop-down"><a href="#">Deep Drop Down</a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li> --}}
              <li><a href="#contact">Contact</a></li>
              @guest
              <li>
                  <a href="{{ route('login') }}">Login</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a href="{{ route('register') }}">Register</a>
                  </li>
              @endif
          @else
            <li><a href="#">Dashboard</a></li>
            <li class="drop-down"><a href="">{{ Auth::user()->name }}</a>
              <ul>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}</a>
                </li>
              </ul>
            </li>
             
                  

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest

            </ul>
          </nav><!-- .nav-menu -->
          
          {{-- <a href="{{ route('register') }}" class="get-started-btn scrollto">Get Started</a> --}}
        </div>