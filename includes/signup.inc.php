<?php 

if(isset($_POST["submit"])) {

    // Get the data
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $conPassword = $_POST["conPassword"];

    // import the classes
    include '../classes/signup.cntrl.class.php';
    include '../classes/signup.class.php';

    // instantiate the object
    $signup = new $SignupController($uname, $email, $password, $conPassword);

}

?>