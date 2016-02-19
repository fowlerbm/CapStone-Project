<!--code for login page goes here
<!--im thinking the login should be a small popup on the site
<!-- when they click the button -->


<button class="login-form" rel="leanModal" name="test" href="#test">
    Login
</button>

<div id="loginmodal" style="display:none;">
    <h1>User Login</h1>
    <form id="loginform" name="loginform" method="post" action="index.html">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" class="txtfield" tabindex="1">

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="txtfield" tabindex="2">

        <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="Log In" tabindex="3"></div>
    </form>
</div>

<script type="text/javascript">
    $(function(){
        $('#loginform').submit(function(e){
            return false;
        });

        $('#modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
    });
</script>