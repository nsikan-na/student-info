<?php
$title='Update Student Information';
require("header.php");
if (isset($_GET["pkey"]) && is_numeric($_GET["pkey"]) ) {
    $showData="SELECT * FROM students WHERE pkey={$_GET['pkey']}";
$r=@mysqli_query($dbc,$showData);
$row = mysqli_fetch_array($r);

print"<div class='greeting'>Hello, ".$_SESSION['user']."
| <span><a href='logout.php?logout=true'>Sign Out</a><span>
<br></div>".'
   <div style=\'border:1px solid white;background-color:rgba(0, 0, 0,.7);width:75%; border-radius:25px ;margin:auto; padding-top:2%; padding-bottom:5%; margin-top:2%;\'>
<h1 class="header">Update Student Information</h1>
<div class="main">
<form method="POST" action="update.php">

<label for="name">Enter Name</label>
<br>
<input type="text" title="Student Name" name="name" class="form-control myFix" id="name" value="'.$row["name"].'">
<br>
<label for="grade">Enter Number Grade</label>
<br>
<input id="grade" title="Student Grade" min="0" class="form-control myFix" max="100" maxlength="3" name="grade" type="number" value="'.$row["grade"].'">
<br>
<input type="hidden" name="pkey" value="' . $_GET["pkey"] . '"> 
<button class="myButton" type="submit" >Update Information</button>
<a href=\'home.php?delete=false&login=false&add=false&update=false\'>Cancel</a>
</form>
</div></div>
';
}else if(isset($_POST["pkey"]) && is_numeric($_POST["pkey"])) {
$name=($_POST["name"]);
$grade=($_POST["grade"]);
$pkey=($_POST['pkey']);
if( empty($name) || is_numeric($name)||(empty($grade)&& $grade != 0) || !is_numeric($grade)|| $grade<0 || $grade>100 ){
    $error=[];       
    if(empty($name) || is_numeric($name)){
        array_push($error, "Please enter a valid Student Name");
    }
    if((empty($grade)&& $grade != 0) || !is_numeric($grade) || $grade<0 || $grade>100){
        array_push($error, "Please enter a valid Grade.");
    }
    if (isset($error)){
    for ($i=0;$i<count($error);$i++){
    print "
  <div style='padding-top:10%;'> <div style='margin:0 auto;border-radius:1em;width:30%;font-size:1.5em;background-color:rgba(0, 0, 0, 0.5);color:red;'class='error'> $error[$i]</div></div><br><br>";
    }
    print"<div><a href='update.php?pkey=". $_POST['pkey']."'><button title='Go Back' type='submit' class= 'myButton'>Back</button></a></div>";
}
} else{
$letter;
 if($grade>=90){
        $letter='A';
 }
     else if ($grade>=80){
        $letter='B';
     }
        else if ($grade>=70){
            $letter='C';
        }
            else if ($grade>=60){
                $letter='D';
            }
                else{
                    $letter='F';
                }

$updateData= "Update students SET pkey='$pkey', name='$name',grade='$grade',letter='$letter' WHERE pkey= '{$_POST['pkey']}'";
@mysqli_query($dbc,$updateData);
      print"<script>location.href='home.php?delete=false&login=false&add=false&update=true';

      </script>";
}
}

mysqli_close($dbc);
include("footer.php");
?>