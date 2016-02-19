
 <link rel="stylesheet" type="text/css" href="../Css/Header.css">

 <div id="nav">

<div id="logo"> <img src="Logo.png"> </div>


<div id="navTools">

    <button>Games</button>
    <button>Forum</button>
    <button>Random</button>

</div>


<div id="user">

    <!--if user is logged in show user icon
    //code goes here

    //if user is not logged on show logon button


    //if user is logged on show user stats
    //user stats go here-->

<?php


    //if user is logged on show logout button
        if(isset($_SESSION["login"])){
                echo  "<button>Logout</button>";
            }
        else
        {
            echo  " <button>Login</button>";
            echo  " <button>Register</button>";
        }

?>


</div>

 </div>