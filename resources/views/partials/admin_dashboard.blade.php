 <div class="col-sm-12 col-md-3 col-lg-3">
    <!-- Nav tabs -->
    <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
        <ul role="tablist" class="nav flex-column dashboard-list">
            <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link active">Dashboard</a></li>
            <li> <a href="#cloths" data-bs-toggle="tab" class="nav-link">My Cloths</a></li>
            <li><a href="#tailor" data-bs-toggle="tab" class="nav-link">My Tailors</a></li>
            <li><a href="#items" data-bs-toggle="tab" class="nav-link">Saved Items</a></li>
            <li><a href="#profile" data-bs-toggle="tab" class="nav-link">My profile</a>
            </li>
            <li><a class="dropdown-item" href="{{ route('logout') }}"
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

