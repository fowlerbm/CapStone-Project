@include('app')

<!-- page for browsing games-->
Once db integration happens there will be info here
<div class="gamesContainer">
    @foreach($games as $game)

        <br/>

        <div class="game" border="2px">
            <h4>{{ $game->title }}</h4>
            <p>{{ $game->description }}</p>
        </div>

        <br/>

    @endforeach
</div>
