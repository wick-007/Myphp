<?php

//Check if the user accessed the page through the right method
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    //always sanitize your data to prevent hackers or cross site scripting (xss attacks)
    $firstname = htmlspecialchars($_POST["firstname"]);
    $message = htmlspecialchars($_POST["message"]);
    $eyecolor = htmlspecialchars($_POST["eyecolor"]);
    $cartype = htmlspecialchars($_POST["cartype"]);
    if(empty($firstname)){
       exit();
       header("location:../index.php");
    }
    echo "These are the data the user submitted";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $message;
    echo "<br>";
    echo $eyecolor;
    echo "<br>";
    echo $cartype;

    header("location:../index.php");
}else{
   header("location:../index.php");
}
?>