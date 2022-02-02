<?php
include('header.php');

    $_SESSION['pkey'] = 4;
    $_SESSION['count']=5;
$trashTable="Truncate Table students";
@mysqli_query($dbc,$trashTable);
  $name=['Emily','Jordan','Dexter','Morgan'];
  $grade=['85','57','82','76'];

  

    $letter=[];
    $studentCount=count($name);
    $totalGrade=0;
    for($i=0;$i<=count($name)-1; $i++){
        $aGrade[$i]=($grade[$i]*1.10);
         if($grade[$i]>=90){
                $letter[$i]='A';
         }
             else if ($grade[$i]>=80){
                $letter[$i]='B';
             }
                else if ($grade[$i]>=70){
                    $letter[$i]='C';
                }
                    else if ($grade[$i]>=60){
                        $letter[$i]='D';
                    }
                        else{
                            $letter[$i]='F';
                        }
       
      
        $totalGrade+=$grade[$i];
    
    }     
     
    $averageGrade=$totalGrade/$studentCount;

    for($i=0;$i<4; $i++){
        $pkey=$i+1;
      $insertData="INSERT INTO students (pkey, name,grade,letter) Values ('$pkey', '$name[$i]', '$grade[$i]', '$letter[$i]')";
      @mysqli_query($dbc,$insertData);
      }

      print"<script>location.href='index.php?reset=true';
      </script>";
mysqli_close($dbc);
require 'footer.php';
?>