 <div class="col-sm-12 col-md-3 col-lg-3">
    <!-- Nav tabs -->
    <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
        <ul role="tablist" class="nav flex-column dashboard-list">
            <li><a href="{{ route('admin.dashboard') }}" class="nav-link {{ (Request()->is('admin/dashboard')) ? 'active': '' }}">Dashboard</a></li>
            <li> <a href="{{ route('admin.clothes') }}" class="nav-link {{ (Request()->is('admin/clothes')) ? 'active': '' }}">My Clothes</a></li>
            <li><a href="{{ route('admin.add_cloth') }}" class="nav-link {{ (Request()->is('admin/add_cloth' )) ? 'active': '' }}">Add Cloth</a></li>
            <li><a href="{{ route('admin.category') }}" class="nav-link {{ (Request()->is('admin/category')) ? 'active': '' }}">Category</a></li>
            <li><a href="{{ route('admin.add_category') }}" class="nav-link {{ (Request()->is('admin/add_category')) ? 'active': '' }}">Add Category</a></li>
            <li> <a href="{{ route('admin.tailor') }}" class="nav-link {{ (Request()->is('admin/designer')) ? 'active': '' }}">Designers</a></li>
            <li> <a href="{{ route('admin.approved_comments') }}"  class="nav-link {{ (Request()->is('admin/approved_comments')) ? 'active': '' }}">Approved Comments</a></li>
            <li> <a href="{{ route('admin.unapproved_comments') }}" class="nav-link {{ (Request()->is('admin/unapproved_comments')) ? 'active': '' }}">Unapproved Comments</a></li>
            <li><a href="{{ route('admin.payments') }}" class="nav-link {{ (Request()->is('admin/payments')) ? 'active': '' }}">Payments</a>
            </li>
            <li><a href="{{ route('admin.profile') }}" class="nav-link {{ (Request()->is('admin/profile')) ? 'active': '' }}">My profile</a>
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

