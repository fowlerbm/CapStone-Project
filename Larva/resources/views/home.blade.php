



@extends('app')

@section('content')

    <link rel="stylesheet" type="text/css" href="../css/HomePage.css">

    <div id="RecentGames">
        <!-- pull list of users most recently played games -->
        <div id="Game">

        </div>
    </div>


    <div id="Featured">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#Featured">Featured Games</a></li>
            </ul>

            <div class="tab-content">
                <div id="Featured" class="tab-pane fade in active">
                    <h3>Featured Games</h3>
                    <p>Sorry we can't seem to find any Games</br>
                        on the server right now, please try again later :(</p>
                </div>
            </div>
        </div>
    </div>



    <div id="Popular">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#Popular">Popular Games</a></li>
            </ul>

            <div class="tab-content">
                <div id="Popular" class="tab-pane fade in active">
                    <h3>Popular Games</h3>
                    <p>Sorry we can't seem to find any Games</br>
                        on the server right now, please try again later :(</p>
                </div>
            </div>
        </div>
    </div>

    <div id="New">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#New">New Games</a></li>
            </ul>

            <div class="tab-content">
                <div id="New" class="tab-pane fade in active">
                    <h3>New Games</h3>
                    <p>Sorry we can't seem to find any Games</br>
                        on the server right now, please try again later :(</p>
                </div>
            </div>
        </div>
    </div>


@endsection

