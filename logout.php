<?php
$title='Student Grades';
require("header.php");

unset($_SESSION['user']);

if ($_GET['logout']==='true'){
    print"<div class=\"alert alert-success success\" style='color:white;margin-left:35%;margin-top:3%;width:30%;background-color:green; position:absolute;' >
    Sign Out Successful
  </div> ";
  }
setcookie('Samuel', FALSE, time()-300);

$count=$_SESSION['count']-1; 

print'<br><br><div style="margin-top:5%;">
<a href="register.php"><button class="myButton" style="margin-bottom:0px;">Sign Up</button></a>
<a href=\'reset.php\'><button class=\'myButton\' title=\'Reset\'>Reset Table</button></a>
<a href="login.php"><button class="myButton" style="margin-bottom:0px;">Sign In</button></a><br><br></div>';


    $totalGrade=0;
    $totalAlt=0;
    $viewData = 'SELECT * FROM students';
    $r = mysqli_query($dbc, $viewData);
    while ($row = mysqli_fetch_array($r)) {
    $totalGrade+=$row["grade"];
    $pkey=$row["pkey"]; 
    }


    $averageGrade= round($totalGrade/$count,2);
    $averageAlt=round($totalAlt/$count,2);

    
    print"<h1 style='margin-top:0px;padding-top:0%;'>Student Grades</h1>
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
          Average Grade : <span class='bold'><br>$averageGrade</span><br></div>";

mysqli_close($dbc);
require "footer.php";
?>