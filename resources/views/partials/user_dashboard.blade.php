<div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
    <ul role="tablist" class="nav flex-column dashboard-list">
        <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link active">Dashboard</a></li>
        <li> <a href="#cloths" data-bs-toggle="tab" class="nav-link">My Saved Clothes</a></li>
        <li><a href="#tailor" data-bs-toggle="tab" class="nav-link">My Tailors</a></li>
         <li><a href="#messaging" data-bs-toggle="tab" class="nav-link">Messaging</a></li>
        <li><a href="#profile" data-bs-toggle="tab" class="nav-link">My profile</a></li>
        <li><a href="#become_tailor" data-bs-toggle="tab" class="nav-link">Become a Tailor</a></li>
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
