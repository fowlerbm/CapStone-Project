@include('app')

<h1>{{ $user->username }}</h1>

{!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->user_id]]) !!}

    <div class="form-group">
        {!! Form::label('about_me', 'About Me:') !!}
        {!! Form::textarea('about_me', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save Changes', ['class' => 'btn btn-primary form-control']) !!}
    </div>

{!! Form::close() !!}