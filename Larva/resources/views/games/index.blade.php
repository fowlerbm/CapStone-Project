@include('app')

<link href="/css/GameIndex.css" rel="stylesheet">


<div id="All">
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#All">All Games</a></li>
        </ul>

        <div class="tab-content">
            <div id="All" class="tab-pane fade in active">
                <h3>All Games</h3> <form method="get" action="/games"> <input type="hidden" name="date" value="date">  <input type="submit" value="Order By Date" ></form>

                @if(!empty($games))
                <!-- page for browsing games-->
                <div class="gamesContainer">
                    @foreach($games as $game)

                        <br/>

                        <div class="game" style="border:1px solid black;">
                            <a href="{{ url("/games", $game->game_id) }}">
                                <h4>{{ $game->title }}</h4>
                            </a>
                            <p>{{ $game->description }}</p>
                        </div>

                        <br/>

                    @endforeach
                </div>
                @else
                <p>Sorry we can't seem to find any Games</br>
                    on the server right now, please try again later :(</p>
                @endif

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

                @foreach($tags as $tag)

                    <br/>

                    <div class="Tag" style="border:1px solid black;">
                        <a href="{{ url("/tag", $tag->name) }}">
                            <h4>{{ $tag->name}}</h4>
                        </a>
                    </div>

                    <br/>

                @endforeach

            </div>
        </div>
    </div>


</div>


