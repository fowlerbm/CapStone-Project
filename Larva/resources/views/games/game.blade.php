<!-- actual game page -->
@include('app')

<link href="/css/GamePageCss.css" rel="stylesheet">

<div id="GameTitle">
    <h2>{{ $game->title }}</h2>
</div>

@if (Auth::guest())


@else
    @if(Auth::user()->admin == true)
        <form method="DELETE" action="/games/{{$game->game_id}} ">
            <input type="submit" value="Delete Game" >
        </form>
    @endif
@endif

<div id="GameObject">
    <div id="Game">
        <!-- unity web player -->
        <object classid="clsid:444785F1-DE89-4295-863A-D46C3A781394"
                codebase="http://webplayer.unity3d.com/download_webplayer/UnityWebPlayer.cab#version=2,0,0,0" height="450"
                id="UnityObject" width="600" > <param name="" value="WebPlayer.unity3d" />
            <embed id="UnityEmbed" src={{ $game->file_Location }}
                   width="480" height="320" type="application/vnd.unity"
                   pluginspage="http://www.unity3d.com/unity-web-player-2.x" border="5px" />
        </object>
    </div>
</div>

<div id="GameInfo">
    <!-- write the title -->
    <div id="GameTitle">
        <h3>{{ $game->title  }}</h3>
    </div>

    <!-- line for tags -->
    <div id="GameTags">
        <ul id="TagList">        <!-- list for tags -->
               <li> {{ $tag->name }}</li>
        </ul>
    </div>



    <!-- options line ie - favorite button , rating stars -->
    <div id="GameUserOptions">
        <ul id="OptionsList">
            <li><a href="#" class="Fav">Favorite Game</a>  </li>
           <li>@include('Partials.rating')</li>

        </ul>
    </div>

    <!-- Details line is - Author , Date published and author contact -->
    <div id="GameDetails">
        <ul id="DetailList">
            <li>Unknown Author</li>
            <li>Unknown published Date</li>
            <li>Unknown Author contact</li>
        </ul>
    </div>

</div>

<div id="GameManual">
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#Instructions">Instructions</a></li>
            <li><a data-toggle="tab" href="#Desc">Description</a></li>
            <li><a data-toggle="tab" href="#Awards">Awards</a></li>
        </ul>

        <div class="tab-content">
            <div id="Instructions" class="tab-pane fade in active">
                <h3>Instructions</h3>
                @if(!empty($game->instructions))
                    <p>{{ $game->instructions }}</p>
                @else
                    <p>Sorry we can't seem to find any Instructions for the game on the server right now, please try again later :(</p>
                @endif
            </div>
            <div id="Desc" class="tab-pane fade">
                <h3>Description</h3>
                @if(!empty($game->description))
                    <p>{{ $game->description }}</p>
                @else
                    <p>Sorry we can't seem to find a Description for the game on the server right now, please try again later :(</p>
                @endif
            </div>
            <div id="Awards" class="tab-pane fade">
                <h3>Awards</h3>
                <p>Sorry we can't seem to find any Awards for the game on the server right now, please try again later :(</p>
            </div>
        </div>
    </div>
</div>

<div id="GameComments">


    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#Comments">Comments</a></li>
            <li><a data-toggle="tab" href="#Scores">High Scores</a></li>
        </ul>

        <div class="tab-content">
            <div id="Comments" class="tab-pane fade in active">
                <h3>Comments</h3>
                @if(!empty($posts))
                @foreach($posts as $post)



                    <div id="Post" style="border:1px solid black;">

                        {{ $post->content }}

                    </div>



                @endforeach
                @else
                <p>Sorry we can't seem to find any comments for the game on the server right now, please try again later :(</p>
                    @endif
            </div>
            <div id="Scores" class="tab-pane fade">
                <h3>High Scores</h3>
                <p> Sorry we can't seem to find any high scores on the server right now, please try again later :(</p>
            </div>
        </div>
    </div>

</div>