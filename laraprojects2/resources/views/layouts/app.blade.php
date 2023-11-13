<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Accounts') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <style>
 body {
        background-color: #F7F4F2;
        margin: 0px;
        padding: 0px;
        font-family: Lexend;
    }

    .topnav {
        background-color: #F7F4F2;
        height: 38px;
        text-align: center;
        padding-top: 20px;
        padding-bottom: 20px;
    }
.container-fluid {

    background-color: #F7F4F2;

}

.container-fluid a {
    text-align: center;

}
    .topnav a {
        color: black;
        text-align: center;
        padding: 10px 16px;
        text-decoration: none;
        font-size: 18px;
        opacity: 1;
        transition: 0.3s;
    }

    .topnav a:hover:not(.active) {
        color:#AC8A65;
        transition: 0.5s;
    }

    .topnav a:hover {
        opacity: 0.6;
    }

    h1 {
        font-size: 35px;
            margin: 20px;
            color: black;
            text-decoration: none;
    }

    .home-input-container {
        display: flex;
        flex-direction: column;
        margin: 0 auto;
        max-width: 600px;
        background-color: #AC8A65;
        padding: 20px;
        border-radius: 32px;
    }

    .home-container1 {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        background-color: #F7F4F2;
        border-radius: 22px;
    }

    .home-textinput {
        flex: 1;
        color: var(--dl-color-grays-gray40);
        border-width: 0px;
        padding: 10px;
        border-radius: 32px;
        text-align :center;
    }

    .home-button {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
        border-radius: 32px;
        text-align :center;
        color:black;
        font-size: 18px;
        padding: 10px 20px;
        transition: 0.3s;
    }


    .home-footer {
  left: -16px;
  width: 100%;
  bottom: -387px;
  display: flex;
  position: absolute;
  max-width: var(--dl-size-size-maxwidth);

  justify-content: space-between;
}
.navbar-brand {
  text-decoration: none;
  border-bottom: none;
  color: inherit;
  font-weight: bold;





}
    </style>


    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        data-tag="font" />
    <div id="app">

        <h1><a class="navbar-brand" href="{{ url('/') }}">
            Joseph Chowdhury website
        </a> </h1>

        <div class="container">

        <div id="topnav" class="topnav">
        <div class="">


                @guest
                <a  href="./">
                    {{ __('Home') }}
                </a>
                <a href="{{ route('login') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>


                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                    @else


                    <a  href="./">
                        {{ __('Home') }}
                    </a>
                    <a href="{{ route('manageProjects') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Manage
                    projects
                </a>

                <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>


                @endguest
            </div>





        </div>

            <main class="py-4">
                @yield('content')
            </main>
        </div>

</body>

</html>

</div>


