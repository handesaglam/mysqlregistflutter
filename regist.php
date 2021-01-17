<?php
include "connect.php";

if(isset($_POST['name'])
 && isset($_POST['email'])&& isset($_POST['password']) && 
 !empty($_POST['name']) && !empty($_POST['email'])&& !empty($_POST['password'])){

    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    $query = "INSERT INTO users (name, email,password)
    VALUES('$name', '$email','$password')";
$results = mysqli_query($connect, $query);
if($results>0)
{
echo "user added successfully";
}

}else{

    echo "Eklenmeedi";
}

?>