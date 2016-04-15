@include('app')


<link href="/css/UserHomePageCss.css" rel="stylesheet">

<div id="EventHeader">

</div>

<div id="HomeHub">

    <div id="UserFeed">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#News">News</a></li>
                <li><a data-toggle="tab" href="#Chat">Chat</a></li>

            </ul>

            <div class="tab-content">
                <div id="News" class="tab-pane fade in active">
                    <h3>News</h3>
                    <p>The Site is now launched! welcome to the site to can now play our unity games on this site</p>
                </div>
                <div id="Chat" class="tab-pane fade">
                    <h3>Chat</h3>
                    <p>Sorry we can't seem to find any Chat on the server right now, please try again later :(</p>
                </div>
            </div>
        </div>
    </div>


    <div id="HomeUsers">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#UserScores">High Scoring users</a></li>
            </ul>

            <div class="tab-content">
                <div id="UserScores" class="tab-pane fade in active">
                    <h3>High Scoring users</h3>
                    @foreach($users as $user)



                        <div id="Game" style="border:1px solid black;">
                            <a href="{{ url("/user/", $user->user_id) }}">
                                <h4>{{ $user->username }}</h4>
                            </a>
                        </div>



                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>

