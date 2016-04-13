@include('app')

<!-- page for browsing games-->
<div class="gamesContainer">
    @foreach($games as $game)

        <br/>

        <div class="game" style="border:1px solid black;">
            <h4><a href="{{ url('/games', $game->game_id) }}">{{ $game->title }}</a></h4>
            <p>{{ $game->description }}</p>
        </div>

        <br/>

    @endforeach
</div>
