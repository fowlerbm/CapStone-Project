<script src="js/my_js.js"></script>
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
                //echo  '<button id="popup" onclick="div_show()">Popup</button>';
            }
        else
        {
            echo  '<button id="popup" onclick="div_show()">Login</button>';
            echo  " <button>Register</button>";
        }

?>

    <div id="popupContact">
        <!-- Contact Us Form -->
        <form action="#" id="form" method="post" name="form">
            <img id="close" src="Logo.png" onclick ="div_hide()">
            <h2>Contact Us</h2>
            <hr>
            <input id="name" name="name" placeholder="Name" type="text">
            <input id="Password" name="Password" placeholder="" type="text">
            <textarea id="msg" name="message" placeholder="Message"></textarea>
            <a href="javascript:check_empty()" id="submit">Send</a>
        </form>
    </div>

</div>

 </div>