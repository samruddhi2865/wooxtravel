<header class="header-area header-sticky">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <nav class="main-nav">

                    <!-- Logo -->

                    <a href="{{ route('home') }}" class="logo">

                        <img
                            src="{{ asset('assets/images/logo.png') }}"
                            alt="WoOx Travel"
                        >

                    </a>


                    <!-- Navigation Menu -->

                    <ul class="nav">

                        <!-- Home -->

                        <li>

                            <a
                                href="{{ route('home') }}"
                                class="{{ request()->routeIs('home') ? 'active' : '' }}"
                            >
                                Home
                            </a>

                        </li>


                        <!-- About -->

                        <li>

                            <a
                                href="{{ route('about') }}"
                                class="{{ request()->routeIs('about') ? 'active' : '' }}"
                            >
                                About
                            </a>

                        </li>


                        <!-- Deals -->

                        <li>

                            <a
                                href="{{ route('deals') }}"
                                class="{{ request()->routeIs('deals') ? 'active' : '' }}"
                            >
                                Deals
                            </a>

                        </li>


                        <!-- Reservation -->

                        <li>

                            <a
                                href="{{ route('reservation') }}"
                                class="{{ request()->routeIs('reservation') ? 'active' : '' }}"
                            >
                                Reservation
                            </a>

                        </li>


                        @auth

                            <!-- Dashboard -->

                            <li>

                                <a
                                    href="{{ route('dashboard') }}"
                                    class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"
                                >
                                    Dashboard
                                </a>

                            </li>


                            <!-- Logout -->

                            <li>

                                <form
                                    method="POST"
                                    action="{{ route('logout') }}"
                                    style="display: inline;"
                                >

                                    @csrf

                                    <button
                                        type="submit"
                                        style="
                                            background: none;
                                            border: none;
                                            color: white;
                                            padding: 15px;
                                            cursor: pointer;
                                            font-family: inherit;
                                            font-size: inherit;
                                        "
                                    >
                                        Logout
                                    </button>

                                </form>

                            </li>


                        @else

                            <!-- Login -->

                            <li>

                                <a href="{{ route('login') }}">
                                    Login
                                </a>

                            </li>


                            <!-- Register -->

                            <li>

                                <a href="{{ route('register') }}">
                                    Register
                                </a>

                            </li>

                        @endauth

                    </ul>


                    <!-- Mobile Menu -->

                    <a class="menu-trigger">

                        <span>
                            Menu
                        </span>

                    </a>

                </nav>

            </div>

        </div>

    </div>

</header>