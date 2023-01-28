@section('menu')
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#!">LazerSrez</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav navbar-right" style="font-size: 12px;">
                        <!-- Authentication Links -->
                        @guest
                            <li class="ms-lg-5 "><a href="{{ route('login') }}">Войти</a></li>
                            <li class="ms-lg-2"><a href="{{ route('register') }}">Регистрация</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-controls="exit" data-bs-target="#exit" data-bs-toggle="collapse">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="collapse" id="exit">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Выйти
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <!-- <a class="nav-link " aria-current="page" href="/">Главная</a> -->
                        <a href="{{ route('first_page') }}" class="nav-link {{ request()->routeIs('first_page') ? 'active' : '' }}" aria-current="page">Главная</a>

                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="/calculator-lazernoy-rezki">Калькулятор лазерной резки</a> -->
                        <a href="{{ route('calculator') }}" class="nav-link {{ request()->routeIs('calculator') ? 'active' : '' }}" aria-current="page">Калькулятор лазерной резки</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="/contact/">Контакты</a> -->
                        <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" aria-current="page">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Header - set the background image for the header in the line below-->

@show 
