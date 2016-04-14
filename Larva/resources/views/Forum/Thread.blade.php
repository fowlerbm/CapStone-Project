@include('app')


<link href="/css/Forum.css" rel="stylesheet">


<div id="ForumHeader">
    <img id="ForumImage" src="/StreetSignForum.png" width="600em"/>
</div>


<div id="PostForm">

  {{--
    {!! Form::model($Post,['method' => 'PATCH', 'action' => ['PostController@create', $thread->id]]) !!}

    <div class="form-group">
        {!! Form::label('content', 'content:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}

    --}}

</div>

<div id="ThreadInfo">

    Thread Title

</div>

<div id="ThreadContainer">

    <div id="Post">
        <!-- post text -->
        post text
    </div>
    <div id="Post">
        <!-- post text -->
        post text
    </div>
    <div id="Post">
        <!-- post text -->
        post text
    </div>
    <div id="Post">
        <!-- post text -->
        post text
    </div>

</div>