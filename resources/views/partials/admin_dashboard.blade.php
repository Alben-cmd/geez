 <div class="col-sm-12 col-md-3 col-lg-3">
    <!-- Nav tabs -->
    <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
        <ul role="tablist" class="nav flex-column dashboard-list">
            <li><a href="{{ route('admin.dashboard') }}#dashboard" data-bs-toggle="tab" class="nav-link active">Dashboard</a></li>
            <li> <a href="{{ route('admin.dashboard') }}#clothes" data-bs-toggle="tab" class="nav-link">My Clothes</a></li>
            <li><a href="{{ route('admin.dashboard') }}#add_cloth" data-bs-toggle="tab" class="nav-link">Add Cloth</a></li>
            <li> <a href="{{ route('admin.dashboard') }}#tailors" data-bs-toggle="tab" class="nav-link">Tailors</a></li>
            <li> <a href="{{ route('admin.dashboard') }}#approved_comments" data-bs-toggle="tab" class="nav-link">Approved Comments</a></li>
            <li> <a href="{{ route('admin.dashboard') }}#unapproved_comments" data-bs-toggle="tab" class="nav-link">Unapproved Comments</a></li>
            {{-- <li><a href="{{ route('admin.dashboard') }}#items" data-bs-toggle="tab" class="nav-link">Saved Items</a></li> --}}
            <li><a href="{{ route('admin.dashboard') }}#profile" data-bs-toggle="tab" class="nav-link">My profile</a>
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

