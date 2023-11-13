<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Joseph Chowdhury projects website</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="css/app.css">

    <!-- Styles -->
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
            color: #AC8A65;
            transition: 0.5s;
        }

        .topnav a:hover {
            opacity: 0.6;
        }

        h3 {


            font-size: 17px
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
            text-align: center;
        }

        .home-button {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            margin-bottom: 20px;
            border-radius: 32px;
            text-align: center;
            color: black;
            font-size: 18px;
            padding: 10px 20px;
            transition: 0.3s;

        }

        .home-button:hover:not(.active) {
            color: #AC8A65;
            transition: 0.5s;
        }

        .plist {
            font-weight: normal;
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
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);


        }

        .modal-content {
            background-color: #F7F4F2;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            border-radius: 32px;
        }


        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        h2 {

            text-align: center;
            padding-bottom: 20px;

        }

        .projectDetails {


            color: inherit;

        }

        .projectDetails:hover:not(.active) {
            color: white;
            transition: 0.5s;
        }

        .date {

            display: flex;

            align-items: center;
            margin-top: 5px;
            margin-bottom: 5px;

            justify-content: space-between;
        }
    </style>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        data-tag="font" />
</head>

<header id="main-header">
    <h1><a class="navbar-brand" href="{{ url('/') }}">
            Joseph Chowdhury website
        </a> </h1>

    <div id="topnav" class="topnav">
        <div class="">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ route('manageProjects') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Manage
                            projects
                        </a>
                        <a href="{{ url('/home') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Account</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a>


                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif


                    @endauth
                </div>
            @endif




        </div>
    </div>
</header>



<form action="{{ route('searchProjects') }}">
    <div class="home-input-container">
        <h2>Projects</h2>

        <div class="home-container1 input">





        </div>

        <input type="search" placeholder="Project title..." class="home-textinput input"
            style="width:100%;margin-right:20px;margin-bottom:20px" name="search" value="{{ request('search') }}" />

        <div class="date">

            <h3>Use start date <input style="" type="date" name="searchStartDate"
                    value="{{ request('searchStartDate') }}"></h3>

            <h3>

                Use end date <input style="" type="date" name="searchEndDate"
                    value="{{ request('searchEndDate') }}">
            </h3>
        </div>

        <input type="submit" class="home-button" style="border: 1px solid black; padding: 10px;" value="Search">


        <table id="list-table">



            @if (count($projects) > 0)
                <tr>
                    <th> TITLE</th>
                    <th> DESCRIPTION</th>
                    <th> START DATE </th>

                </tr>
            @endif

            <tbody>




                </thead>
                @forelse($projects as $index => $projects)
                    <tr>

                        <th class="plist"> <a href="javascript:void(0)" id="myBtn{{ $index }}"
                                class="projectDetails" value="{{ request('username') }}">
                                {{ $projects->title }}
                            </a> </td>
                        <th class="plist">
                            {{ strlen($projects->description) > 20 ? substr($projects->description, 0, 20) . '...' : $projects->description }}
                        </th>
                        <th class="plist"> {{ $projects->start_date }} </th>
                    </tr>
                    <div id="myModal{{ $index }}" class="modal">

                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <p>Project end date: {{ $projects->end_date }}</p>

                            <p>Project phase : {{ $projects->phase }}</p>
                            <p>Owner email: {{ \App\Models\User::find($projects->uid)->email }}</p>
                            <p style=" word-wrap: break-word">Project full description : {{ $projects->description }}
                            </p>





                        </div>
                    </div>
                    <script>
                        var btn{{ $index }} = document.getElementById("myBtn{{ $index }}");
                        var modal{{ $index }} = document.getElementById("myModal{{ $index }}");
                        var span{{ $index }} = modal{{ $index }}.getElementsByClassName("close")[0];
                        btn{{ $index }}.onclick = function() {
                            modal{{ $index }}.style.display = "block";
                        }
                        span{{ $index }}.onclick = function() {
                            modal{{ $index }}.style.display = "none";
                        }
                        window.onclick = function(event) {
                            if (event.target == modal{{ $index }}) {
                                modal{{ $index }}.style.display = "none";
                            }
                        }
                    </script>
                @empty
                    <th> No project found. </th>
                @endforelse
            </tbody>

        </table>



    </div>






    </div>
</form>





</html>
