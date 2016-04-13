@include('app')

<link href="/css/GameIndex.css" rel="stylesheet">


<div id="All">
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#All">All Games</a></li>
        </ul>

        <div class="tab-content">
            <div id="All" class="tab-pane fade in active">
                <h3>All Games</h3>

                <!-- page for browsing games-->
                <div class="gamesContainer">
                    @foreach($games as $game)

                        <br/>

                        <div class="game" style="border:1px solid black;">
                            <h4>{{ $game->title }}</h4>
                            <p>{{ $game->description }}</p>
                        </div>

                        <br/>

                    @endforeach
                </div>

                <p>Sorry we can't seem to find any Games</br>
                    on the server right now, please try again later :(</p>
            </div>
        </div>
    </div>
</div>


<div id="TagBar">
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#Tags">Categories</a></li>
        </ul>

        <div class="tab-content">
            <div id="Tags" class="tab-pane fade in active">
                <h3>Categories</h3>

                <p>Sorry we can't seem to find any Categories</br>
                    on the server right now, please try again later :(</p>
            </div>
        </div>
    </div>


</div>


