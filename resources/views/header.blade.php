
<nav class="navbar navbar-expand-lg bg-dark navbar-dark nav-text ">
    <div class="container-fluid ">
        
            <ul class="navbar-nav  mx-auto mb-2 mb-lg-0">
                
            @if (Session::has('user'))
                    <li class="nav-item dropdown drop">
                        <a class="nav-link dropdown-toggle text-primary fw-bold" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Session::get('user')['name'] }}
                        </a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>

                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link active  " aria-current="page" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  " aria-current="page" href="/register">Register</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
