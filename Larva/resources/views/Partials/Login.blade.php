<!--code for login page goes here
<!--im thinking the login should be a small popup on the site
<!-- when they click the button -->

@section('login')

    <button class="login-form" rel="leanModal" name="test" href="#test">
        Login
    </button>

    <div id="login" style="display:none;">
        <h1>User Login</h1>

        <form id="loginForm" name="loginForm" method="post" action="#">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="txtfield">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="txtfield">
            <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="Log In"></div>
        </form>
    </div>
@stop