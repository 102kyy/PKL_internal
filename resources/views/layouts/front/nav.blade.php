<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <a href="{{ url('/') }}" class="navbar-brand">
                <h2 class="text-white">DailyHabits</h2>
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ url('about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ url('feedbacks') }}" class="nav-item nav-link">Feedback</a>
                </div>
                @if(auth()->check())
                    <a href="{{ route('logout') }}" 
                       class="btn btn-dark py-2 px-4 d-none d-lg-inline-block ms-2" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                @else
                    <a href="{{ url('login') }}" class="btn btn-dark py-2 px-4 d-none d-lg-inline-block ms-2">Sign in</a>
                @endif
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </nav>
    </div>
</div>
