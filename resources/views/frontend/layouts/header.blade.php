<nav class="primary-menu navbar navbar-expand-lg navbar-dark bg-dark border-bottom-0">
    <div class="container-fluid position-relative h-100 flex-lg-column ps-3 px-lg-3 pt-lg-3 pb-lg-2">

        <!-- Logo -->
        <a href="/" class="mb-lg-auto mt-lg-4">
            <span class="bg-dark-2 rounded-pill p-2 mb-lg-1 d-none d-lg-inline-block">
                <img class="img-fluid rounded-pill d-block" src="{{ asset('/front/images/profile.png') }}"
                    title="I'm Simone" alt="">
            </span>
            <h1 class="text-5 text-white text-center mb-0 d-lg-block"> CRUD BLOG</h1>
        </a>
        <!-- Logo End -->

        <div id="header-nav" class="collapse navbar-collapse w-100 my-lg-auto">
            <ul class="navbar-nav text-lg-center my-lg-auto py-lg-3">

                <li class="nav-item"><a class="nav-link smooth-scroll" href="">

                    <a href="/"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>

            </li>
                @if (Route::has('login'))

                    <div class="hidden fixed top-0 right-0   sm:block">
                        @auth
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="">
                                    <a href="{{ url('/home') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Admin</a>
                            </li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="">

                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @else
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="">

                                    <a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="">
                                        <a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                </li>
                            @endif
                        @endauth
                    </div>
                @endif
            </ul>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#header-nav"><span></span><span></span><span></span></button>
    </div>
</nav>