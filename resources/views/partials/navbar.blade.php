<nav class="navbar navbar-expand-lg gamestore-navbar mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
        <i class="fas fa-gamepad me-2"></i> <!-- Icono de Gamepad -->
        GameStore
    </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('products.index') ? 'active' : '' }}" href="{{ route('products.index') }}"><i class="fas fa-shopping-bag me-1"></i> Productos</a>
                </li>
                <li class="nav-item">
                    {{-- Add link to categories index when available --}}
                    <a class="nav-link" href="#"><i class="fas fa-tags me-1"></i> Categorías</a> 
                </li>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt me-1"></i> {{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus me-1"></i> {{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fas fa-user me-1"></i> {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end bg-dark-2 gamestore-dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item gamestore-dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt me-1"></i> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

@push('styles')
<style>
.gamestore-navbar .dropdown-menu-end {
    background-color: #16213e; /* bg-dark-2 */
    border: 1px solid #0f3460;
}
.gamestore-navbar .dropdown-item {
    color: #e0e0e0;
}
.gamestore-navbar .dropdown-item:hover {
    background-color: #0f3460;
    color: #e94560;
}
</style>
@endpush 
                </li>
            </ul>
        </div>
    </div>
</nav>