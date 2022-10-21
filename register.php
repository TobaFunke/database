<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $host = "localhost";
          $username = "forms";
          $password = "password";
          $db = "html_form";
          $conn = mysqli_connect($host, $username, $password, $db);

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    if (!$con)
          {
die("Connection failed!" . mysqli_connect_error());
          }
          $query = "INSERT INTO simple_form (id, username, email, comment VALUES $username, $email, $comment";
          $run = mysqli_query($conn, $query);
if (run)
    // echo "OKAY";
}{
    echo "User Successfully Registered";
}

mysqli_close($conn);

?>




