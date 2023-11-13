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
            word-wrap: break-word;
        }

        .home-container1 {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            background-color: #F7F4F2;
            border-radius: 242px;
            word-wrap: break-word;
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
            word-wrap: break-word;
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

        .myModalAdd {
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


        .modal-content-add {
            background-color: #F7F4F2;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            border-radius: 32px;


        }


        .closeAdd {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .closeAdd:hover,
        .closeAdd:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }




        h2 {

            text-align: center;
            padding-bottom: 20px;

        }

        .error {

            color: red;
            font-size: 13px
        }


        .modal-content-update {
            background-color: #F7F4F2;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            border-radius: 32px;


        }


        .closeUpdate {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .closeUpdate:hover,
        .closeUpdate:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .textArea {

            max-height: 480px;
            resize: none;
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            border-radius: 10px;

            height: 100px;
        }
        .projectDetails {


            color: inherit;

        }
        .projectDetails:hover:not(.active) {
            color: white;
            transition: 0.5s;
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

                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                    <a  href="./">
                    Home
                </a>

                        <a href="{{ url('/home') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Account</a>




                    @endauth
                </div>





        </div>
    </div>
</header>







<div class="home-input-container">
    <h2>My projects</h2>










    <button id="myBtnAdd" style="width: 100px; border-radius: 32px; margin:20px;
    ">Add project</button>


    <div id="myModalAdd" class="myModalAdd">

        <div class="modal-content-add">
            <span class="closeAdd">&times;</span>


            <form action="{{ route('createProject') }}" method="POST">
                @csrf

                <h3>Create project</h3>
                <p>Title <input type="text" name="title" required style=" width: auto; border-radius: 10px; " value="{{ request('title') }}"
                        ></p>
                @error('title')

                    <p class="error">Title is missing!</p>





                @enderror
                <p>Choose start date <input type="date" required  name="startDate" value="{{ request('startDate') }}" >
                </p>

                @error('startDate')
                @if(str_contains($message, 'required'))
                    <p class="error">Start date is missing!</p>
                @else
                    <p class="error">Start date must be set before end date!</p>
                @endif
                @enderror

                <p>Choose end date <input type="date" required name="endDate" value="{{ request('endDate') }}" ></p>
                @error('startDate')
                @if(str_contains($message, 'required'))
                    <p class="error">End date is missing!</p>
                @else
                    <p class="error">End date must be set after start date!</p>
                @endif
                @enderror
                <p>Select phase <select name="phase" required id="phase" value="{{ request('phase') }}" >
                        <option value="">Select</option>
                        <option value="design">Design</option>
                        <option value="development">Development</option>
                        <option value="testing">Testing</option>
                        <option value="deployment">Deployment</option>

                    </select></p>

                @error('phase')
                    <p class="error">You must choose a phase!</p>
                @enderror
                <p>Description
                    <textarea name="description" required value="{{ request('description') }}"  rows="4" cols="60"
                        class="textArea"></textarea>
                </p>

                @error('description')
                    <p class="error">Description is missing!</p>
                @enderror

                <button type="submit" style=" border-radius: 32px; width:50px">Add</button>

            </form>


        </div>

    </div>

    <script>
        var modal = document.getElementById("myModalAdd");
        var btn = document.getElementById("myBtnAdd");
        var span = document.getElementsByClassName("closeAdd")[0];
        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

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
                            class="projectDetails" style ="text-decoration:underline">

                            {{ $projects->title }}
                        </a> </td>

                        <th class="plist"> {{ strlen($projects->description) > 20 ? substr($projects->description,0, 20) . '...' : $projects->description }} </th>
                    </div>

                    <th class="plist"> {{ $projects->start_date }} </th>
                </tr>
                <form action="{{ route('deleteProject') }} " method="POST">

                   
                    <div id="myModal{{ $index }}" class="modal">

                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <p>Project end date: {{ $projects->end_date }}</p>

                            <p>Project phase : {{ $projects->phase }}</p>
                            <p style=" word-wrap: break-word">Project full description : {{ $projects->description }}</p>




                            <button  type='submit' name="project_uid" id="deleteButton" value="{{ $projects->pid }}"
                                style="width:110px; border-radius: 32px"> Delete project</button>

                            <button type="button" id="myBtnUpdate{{ $index }}" name="updateProject_uid"
                                value="{{ $projects->pid }}" style="width:110px; border-radius: 32px;margin-top:15px">
                                Update project</button>
                </form>
</div>

</div>
<form action="{{ route('updateProject',['pid' =>$projects->pid])}}" method="POST" >


    @csrf
    <div id="myModalUpdate{{ $index }}" class="modal">

        <div class="modal-content-update">
            <span class="closeUpdate">&times;</span>

            @csrf

            <h3>Update project</h3>
            <p>Title <input type="text" style="width: auto; border-radius: 10px;" required name="updateTitle" value="{{$projects->title}}"
                    ></p>
            @error('updateTitle')
                <p class="error">Title is missing!</p>
            @enderror
            <p>Choose start date <input type="date" required name="updateStartDate" value="{{$projects->start_date}}"
                    >
            </p>
            @error('updateStartDate')
                @if(str_contains($message, 'required'))
                    <p class="error">Start date is missing!</p>
                @else
                    <p class="error">Start date must be set before end date!</p>
                @endif
                @enderror
            <p>Choose end date <input type="date" required name="updateEndDate" value="{{$projects->end_date}}" >
            </p>
            @error('updateStartDate')
                @if(str_contains($message, 'required'))
                    <p class="error">End date is missing!</p>
                @else
                    <p class="error">End date must be set after start date!</p>
                @endif
                @enderror
            <p>Select phase <select name="updatePhase"  id="phase" value="{{ request('updatePhase') }}" >
                    <option value="">Select</option>
                    <option value="design" {{ $projects->phase == 'design' ? 'selected' : '' }}>Design</option>
                    <option value="development" {{ $projects->phase == 'development' ? 'selected' : '' }}>Development</option>
                    <option value="testing" {{ $projects->phase == 'testing' ? 'selected' : '' }}>Testing</option>
                    <option value="deployment" {{ $projects->phase == 'deployment' ? 'selected' : '' }}>Deployment</option>

                </select></p>

            @error('updatePhase')
                <p class="error">You must choose a phase!</p>
            @enderror
            <p>Description
                <textarea name="updateDescription" required value="{{ request('updateDescription') }}"  class="textArea">{{ $projects->description }}  </textarea>
            </p>


            @error('updateDescription')
                <p class="error">Description is missing!</p>
            @enderror

            <button type="submit" style=" border-radius: 32px; width:70px">Update</button>

        </div>

    </div>




</form>

<script>
    var modalUpdate{{ $index }} = document.getElementById("myModalUpdate{{ $index }}");
    var btnUpdate{{ $index }} = document.getElementById("myBtnUpdate{{ $index }}");
    var spanUpdate{{ $index }} = modalUpdate{{ $index }}.getElementsByClassName("closeUpdate")[0];
    btnUpdate{{ $index }}.onclick = function() {
        modalUpdate{{ $index }}.style.display = "block";
    }
    spanUpdate{{ $index }}.onclick = function() {
        modalUpdate{{ $index }}.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modalUpdate{{ $index }}) {
            modalUpdate{{ $index }}.style.display = "none";
        }
    }
</script>














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
<th> You have no projects </th>
@endforelse


</tbody>

</table>



</div>






</div>






</html>
