@props(['active' => ''])

<!-- Header / Navbar Component -->
<header class="navbar">
    <div class="navbar-container">
        <a href="{{ route('home') }}" class="navbar-brand">
            <span>Belajar Laravel</span>
        </a>
        <ul class="navbar-nav">
            <li>
                <a href="{{ route('home') }}" 
                   class="nav-link {{ $active === 'home' || request()->routeIs('home') ? 'active' : '' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('profil') }}" 
                   class="nav-link {{ $active === 'profil' || request()->routeIs('profil') ? 'active' : '' }}">
                    Profil
                </a>
            </li>
            <li>
                <a href="{{ url('/api/products') }}" target="_blank" class="nav-link">
                    API Produk
                </a>
            </li>
        </ul>
    </div>
</header>
