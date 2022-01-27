<?php

$title='Student Information';
require("header.php");


print"<div style='padding-top:10%;'><div style='border:1px solid white;background-color:rgba(0, 0, 0,.7);width:75%; border-radius:25px ;margin:auto;'>
<h1 style='padding-top:3%;margin-top:0px;'>Student Information</h1>
<div class=\"alert \" style='font-size:1.25em;color:white; text-align:left;'>
This is a application allows a teacher to manage their student's information. The teacher is able to view all the information without signing in, but must sign in to be able to add, update, or delete student information. The teacher can setup a new account if they do not already have one, and can also change their password once they sign in.
<br><div style='text-align:center;'>(Demo option included) <br><br>Technologies: HTML/CSS   JavaScript      PHP     SQL<br>
<a href=\"resetlogin.php\" ><button class=\"myButton\" style=\"margin-bottom:0px; margin-top:2%;\">Let's Go!</button></a></div>
    </div></div></div> ";


require 'footer.php';
?>