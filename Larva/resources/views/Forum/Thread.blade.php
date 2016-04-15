@include('app')


<link href="/css/Forum.css" rel="stylesheet">


<div id="ForumHeader">
    <img id="ForumImage" src="/StreetSignForum.png" width="600em"/>
</div>


<div id="PostForm">

  {{--
    {!! Form::model($post,['method' => 'PATCH', 'action' => ['PostController@create', $thread->id]]) !!}

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

    <h2>{{$thread->title}}</h2>

</div>

<div id="ThreadContainer">

    @foreach($posts as $post)



        <div id="Post" style="border:1px solid black;">

              {{ $post->content }}

        </div>



    @endforeach


</div>