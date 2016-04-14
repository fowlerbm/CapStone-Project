@include('app')

<head>
    <title>{{ $user->username }}'s Profile</title>
</head>
<body>

        <div class="title">{{ $user->username }}'s Profile</div>
        <div class="title">User Information</div>
        <div>
            <input type="button" onclick="window.location='{{ url("/user/edit", $user->user_id) }}'" value="Edit profile" />
        </div>
</body>
