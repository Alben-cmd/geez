<div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
    <ul role="tablist" class="nav flex-column dashboard-list">
        <li><a href="{{ route('user.dashboard') }}" class="nav-link {{ (Request()->is('user/dashboard')) ? 'active': '' }}">Dashboard</a></li>
        <li> <a href="{{ route('user.my_clothes') }}" class="nav-link {{ (Request()->is('user/my_designes')) ? 'active': '' }} ">My Wishlist</a></li>
        <li><a href="{{ route('user.subscribed') }}"  class="nav-link {{ (Request()->is('user/subscribed')) ? 'active': '' }}">My designers</a></li>
         <li><a href="{{ route('user.messaging') }}"  class="nav-link {{ (Request()->is('user/messaging')) ? 'active': '' }}">Messaging</a></li>
         <li><a href="{{ route('user.payment_history') }}"class="nav-link {{ (Request()->is('user/payment_history')) ? 'active': '' }}">Payment History</a></li>
        <li><a href="{{ route('user.profile') }}"class="nav-link {{ (Request()->is('user/profile')) ? 'active': '' }}">My profile</a></li>
        <li><a href="{{ route('user.wallet') }}" class="nav-link {{ (Request()->is('user/wallet')) ? 'active': '' }}">Virtual Wallet</a></li>
        <li><a href="{{ route('user.become_tailor', ['id' => Auth::id()]) }}" class="nav-link {{ (Request()->is('user/become_designer')) ? 'active': '' }}">Become a Tailor</a></li>
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

<!-- Login Modal End -->
