
<div id="logo"> <img src="../../assets/Images/Larva.png"> </div>


<div id="navTools">

    <button>Games</button>
    <button>Forum</button>
    <button>Random</button>

</div>


<div id="user">

    //if user is logged in show user icon
    //code goes here

    //if user is not logged on show logon button


    //if user is logged on show user stats
    //user stats go here
<?php


    //if user is logged on show logout button
        if(isset($_SESSION["login"])){
                echo  "<button>Logout</button>";
            }
        else
        {
            echo  " <button>Login</button>";
        }

?>


</div>