<nav class="navbar navbar-inverse" style="background: #454140; border:none; border-radius:0; border-bottom:6px solid #ce3f3f">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav">
                <li><a href="/">ΑΡΧΙΚΗ</a></li>
                <li><a href="/category/persons">ΠΡΟΣΩΠΑ</a></li>
                <li><a href="/category/city">ΠΟΛΗ</a></li>
                <li><a href="/category/stories">ΙΣΤΟΡΙΕΣ</a></li>
                <li><a href="/category/taste">ΓΕΥΣΗ</a></li>
                <li><a href="/category/tech">ΤΕΧΝΟΛΟΓΙΑ</a></li>
                <li><a href="/posts">ΝΕΑ</a></li>
                <li><a href="/posts">ΤΕΧΝΕΣ</a></li>
                <li><a href="/posts">LIFE</a></li>
                <li><a href="/posts">ΑΦΙΕΡΩΜΑΤΑ</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="/dashboard">Πίνακας ελέγχου</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>