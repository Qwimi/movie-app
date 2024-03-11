<nav class="navbar navbar-expand-lg navbar-dark p-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('movies.index') }}">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                @if (auth()->check())
                    @if (auth()->user()->type == 1)
                        <li class="nav-item">
                            <a class="nav-link mx-2" aria-current="page" href="{{ route('logout') }}">Выход</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link mx-2" aria-current="page" href="">Мои видео</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" aria-current="page" href="">Добавить видео</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" aria-current="page" href="{{ route('logout') }}">Выход</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link mx-2" aria-current="page" href="{{ route('users.create') }}">Регистрация</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" aria-current="page" href="{{ route('login') }}">Вход</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
