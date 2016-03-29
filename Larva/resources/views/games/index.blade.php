@include('app')

<!-- page for browsing games-->
Once db integration happens there will be info here
<div class="gamesContainer">
    @foreach($games as $game)

        <div class="game" border="2px">
            {{ $game->title }} <br/>
            {{ $game->description }}<br/>
        </div>

        <br/>

    @endforeach
</div>
