@include('app')

<link href="/css/UserProfile.css" rel="stylesheet">


<head>
    <title>{{ $user->username }}'s Profile</title>
</head>

@if (Auth::guest())


@else
    @if(Auth::user()->admin == true)
        <form method="delete" action="/user/{{$user->user_id}} ">
            <input type="submit" value="Delete Profile" >
        </form>
    @endif
@endif


@if (Auth::guest())



@else
    @if(Auth::user()->username == $user->username)
        <div id="UserControl">
            <form method="get" action="/user/{{$user->user_id}}/edit ">
                <input type="submit" value="Edit Profile" >
            </form>
        </div>
    @endif
@endif

<div id="UserContainer">
    <div class="TitleArea">
        <h2 class="Name">{{ $user->username }}'s Profile </h2>

        <h2 class="Score"> {{ $user->achievement_Score }} Achievement Score  </h2>
    </div>

    <div id="UserInfo">
        <h2>About</h2>
        {{ $user->about_me }}

    </div>

    <div id="UserHistory">
        <h2>History</h2>
        {{ $user->game_history }}

    </div>

    <div id="UserFavorites">
        <h2>Favorites</h2>
        {{ $user->favorite_game }}

    </div>

    <div id="UserUploads">
        <h2>Uploads</h2>
        This user has uploaded nothing

    </div>
</div>