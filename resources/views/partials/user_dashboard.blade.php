<div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
    <ul role="tablist" class="nav flex-column dashboard-list">
        <li><a href="{{ route('user.dashboard') }}" class="nav-link {{ (Request()->is('user/dashboard')) ? 'active': '' }}">Dashboard</a></li>
        <li> <a href="{{ route('user.my_clothes') }}" class="nav-link {{ (Request()->is('user/my_clothes')) ? 'active': '' }} ">My Saved Clothes</a></li>
        <li><a href="{{ route('user.subscribed') }}"  class="nav-link {{ (Request()->is('user/subscribed')) ? 'active': '' }}">My Tailors</a></li>
         <li><a href="{{ route('user.messaging') }}"  class="nav-link {{ (Request()->is('user/messaging')) ? 'active': '' }}">Messaging</a></li>
        <li><a href="{{ route('user.profile') }}"class="nav-link {{ (Request()->is('user/profile')) ? 'active': '' }}">My profile</a></li>
        <li><a href="{{ route('user.become_tailor') }}" class="nav-link {{ (Request()->is('user/become_tailor')) ? 'active': '' }}">Become a Tailor</a></li>
        <li>
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>

          
    </ul>
</div>
