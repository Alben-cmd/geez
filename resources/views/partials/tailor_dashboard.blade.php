<div class="col-sm-12 col-md-3 col-lg-3">
    <!-- Nav tabs -->
    <div class="dashboard_tab_button" data-aos="fade-up">
        <ul role="tablist" class="nav flex-column dashboard-list">
            <li><a href="{{ route('designer.dashboard') }}" class="nav-link {{ (Request()->is('designer/dashboard')) ? 'active': '' }}">Dashboard</a></li>
            <li> <a href="{{ route('designer.clothes') }}"  class="nav-link {{ (Request()->is('designer/clothes')) ? 'active': '' }}">My Designes</a></li>
            <li><a href="{{ route('designer.clothes.create') }}" class="nav-link {{ (Request()->is('designer/add_clothes')) ? 'active': '' }}">Add a Design</a></li>
            {{-- <li><a href="#items" data-bs-toggle="tab" class="nav-link">Saved Items</a></li> --}}
            <li><a href="{{ route('designer.messaging') }}"  class="nav-link {{ (Request()->is('designer/messaging')) ? 'active': '' }}">Messaging</a></li>
            <li><a href="{{ route('designer.profile') }}" class="nav-link {{ (Request()->is('designer/profile')) ? 'active': '' }}">My profile</a>
            </li>
            <li><a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            {{-- <li><a href="login.html" class="nav-link">logout</a></li> --}}
        </ul>
    </div>
</div>