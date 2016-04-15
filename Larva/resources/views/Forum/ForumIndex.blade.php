@include('app')

<link href="/css/Forum.css" rel="stylesheet">


<div id="ForumHeader">
    <img id="ForumImage" src="/StreetSignForum.png" width="600em"/>
</div>

<div id="NewThread">

    <a id="CreateLink" href="/forum/create">Create A new Thread</a>

</div>


<div id="ForumContainer">
<!-- Get top 10 threads and make copys of the tread div -->

    @foreach($threads as $thread)

        <br/>

        <div id="Thread" style="border:1px solid black;">
            <a href="{{ url("/forum", $thread->thread_id) }}">
                <h4>{{ $thread->title }}</h4>
            </a>
        </div>

        <br/>

    @endforeach


</div>