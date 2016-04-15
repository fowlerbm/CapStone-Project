@include('app')

<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#All">All Games</a></li>
    </ul>

    <div class="tab-content">
        <div id="Tags" class="tab-pane fade in active">

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