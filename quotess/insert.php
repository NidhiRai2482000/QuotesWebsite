<?php
session_start();
//Retrieve form parameters
$fname = $_POST['username'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$phno = $_POST['phone'];
$pcode = $_POST['phoneCode'];

// connect to the mysql database
$link = mysqli_connect('localhost', 'root', '', 'testdb');
//check if user with same username exists in db
$sql = "SELECT * FROM register2 WHERE email = '".$email."';";
$result = mysqli_query($link,$sql);

if(mysqli_fetch_row($result)>0)
{
  //$_SESSION['error_msg'] =  "User with this username already exists. Please sign up with a different username";
  //header("Location: errorPage.php");
  echo("error");
  session_write_close();
}
else
{
  $sql = "INSERT INTO register2 VALUES 
  ('".$fname."', '".$password."','".$gender."', '".$email."', '".$pcode."','".$phno."');";
  
  // excecute SQL statement
  $result = mysqli_query($link,$sql);
 
  if ($result){ 
      
      echo'
      <script> alert("You have successfully created an account!!");
              window.location.href="main.html";
      </script>
      ';
  }
  else
  {
    echo'
      <script> alert("You have successfully created an account!!");
              window.location.href="error.html";
      </script>
      ';
  
  }
}
?>
