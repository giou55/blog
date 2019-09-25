<nav class="navbar navbar-inverse" style="background: #465022; border:none; border-radius:0; border-bottom:4px solid #6f8534">
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
                <li class="{{ (request()->is('/')) ? 'active' : '' }}">
                    <a href="/">ΑΡΧΙΚΗ</a>
                </li>
                <li class="{{ (request()->is('category/proorismoi')) ? 'active' : '' }}">
                    <a href="/category/proorismoi">ΠΡΟΟΡΙΣΜΟΙ</a>
                </li>
                <li class="{{ (request()->is('category/drastiriotites')) ? 'active' : '' }}">
                    <a href="/category/drastiriotites">ΔΡΑΣΤΗΡΙΟΤΗΤΕΣ</a>
                </li>
                <li class="{{ (request()->is('category/geuseis')) ? 'active' : '' }}">
                    <a href="/category/geuseis">ΓΕΥΣΕΙΣ</a>
                </li>
                <li class="{{ (request()->is('category/eidhseis')) ? 'active' : '' }}">
                    <a href="/category/eidhseis">ΕΙΔΗΣΕΙΣ</a>
                </li>
                <li class="{{ (request()->is('category/exoplismos')) ? 'active' : '' }}">
                    <a href="/category/exoplismos">ΕΞΟΠΛΙΣΜΟΣ</a>
                </li>
                <li class="{{ (request()->is('category/vouno')) ? 'active' : '' }}">
                    <a href="/category/vouno">ΒΟΥΝΟ</a>
                </li>
                <li class="{{ (request()->is('category/thalassa')) ? 'active' : '' }}">
                    <a href="/category/thalassa">ΘΑΛΑΣΣΑ</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Σύνδεση</a></li>
                    <li><a href="{{ route('register') }}">Εγγραφή</a></li>
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