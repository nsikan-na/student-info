<?php

$title='Student Grades';
require("header.php");
if (!isset($_SESSION['user'])){
    setcookie('Samuel', FALSE, time()-300);
}
if($_GET){
if ($_GET['reset']==='true'){
    print"<div class=\"alert alert-success success\" style='color:white;margin-left:35%;margin-top:3%;width:30%;background-color:green; position:absolute;' >
Data Reset!
  </div> ";
  }
}
$count=$_SESSION['count']-1; 
print'<div style="padding-top:4%;padding-bottom:0%;"><br><br><a href="register.php" ><button class="myButton" style="margin-bottom:0px;"title="Register">Register</button></a>
<a href="login.php" ><button class="myButton" style=" margin-bottom:0px;"title="Log In">Sign In</button></a><br><br></div>';

    $totalGrade=0;
    $totalAlt=0;
    $viewData = 'SELECT * FROM students';
    $r = mysqli_query($dbc, $viewData);
    while ($row = mysqli_fetch_array($r)) {
    $totalGrade+=$row["grade"];
    $pkey=$row["pkey"]; 
    }


    $averageGrade= round($totalGrade/$count,2);

    
    print"<h1 style='padding-top:0%;margin-top:0px;'>Student Grades</h1>
    <table> 
    <tr> 

    <td>Student Name</td> 
    <td>Number Grade</td> 
    <td>Letter Grade</td> 

    </tr>";
$viewData = 'SELECT * FROM students';
        $r = mysqli_query($dbc, $viewData);
        while ($row = mysqli_fetch_array($r)) {
            print "<tr>

            <td>{$row["name"]}</td>
            <td>{$row["grade"]}</td>
            <td>{$row["letter"]}</td>
            </tr>
            ";
                
        }
            print"</table>";
            print"
            <br>
            <div style='font-size:1.25em;padding-bottom:20px;'> Number of Students: <span class='bold'><br>$count</span> <br>
           Average Grade : <span class='bold'><br>$averageGrade</span><br>
           </div>";

mysqli_close($dbc);
require 'footer.php';
?>