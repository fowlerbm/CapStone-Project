@include('app')

<link href="/css/Forum.css" rel="stylesheet">


<div id="ForumHeader">
    <img id="ForumImage" src="/StreetSignForum.png" width="600em"/>
</div>


<div id="ThreadData">

    <!-- Forum form  -->

   {!! Form::open(['url' => 'articles']) !!}

    <div class="form-group">
        {!! Form::label('title', 'title:') !!}
        {!! Form::textarea('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save Changes', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}

</div>
