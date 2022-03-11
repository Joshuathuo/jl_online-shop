<?php
session_start();

$firstname = "";
$lastname = "";
// connect to the database
$db =mysqli_connect('localhost' , 'root' , '' , 'register');
// if the register button is clicked
if (isset($_POST['Get started']))
{
    $firstname = mysqli_real_connect($_POST ['FirstName']);
    $lastname =  mysqli_real_connect ($_POST ['LastName']);
   // $username =  mysqli_real_connect ($_POST ['username']);
    $email =  mysqli_real_connect ($_POST ['Email']);
    $phonenumber =  mysqli_real_connect ($_POST ['PhoneNumber']);
    $DOB =  mysqli_real_connect ($_POST ['DOB']);
    $gender =  mysqli_real_connect ($_POST ['Gender']);
    $county =  mysqli_real_connect ($_POST ['County']);
    //$security =  mysqli_real_connect ($_POST ['security']);
    $answer =  mysqli_real_connect ($_POST ['Answer']);
    $address =  mysqli_real_connect ($_POST ['Address']);
    $town =  mysqli_real_connect ($_POST ['Town']);
    $password =  mysqli_real_connect ($_POST ['Password']);

    // make sure that every field is properly filled

    if (empty($FirstName))
    {
        array_push($errors,"FirstName is required");
    }
    if(empty($LastName))
    {
        array_push($errors,"LastName is required");
    }
    // if(empty($username))
    // {
    //     array_push($errors,"username is required");
    // }
    if(empty($Email))
    {
        array_push($errors,"Email is required");
    }
    if(empty($PhoneNumber))
    {
        array_push($errors,"PhoneNumber is required");
    }
    if(empty($DOB))
    {
        array_push($errors,"DOB is required");
    }
    if(empty($Gender))
    {
        array_push($errors,"Gender is required");
    }
    if(empty($County))
    {
        array_push($errors,"County is required");
    }
    // if(empty($security))
    // {
    //     array_push($errors,"county is required");
    // }
    if(empty($Answer))
    {
        array_push($errors,"Answer is required");
    }
    if(empty($Address))
    {
        array_push($errors,"address is required");
    }
    if(empty($Town))
    {
        array_push($errors,"Town is required");
    }
    if(empty($Password))
    {
        array_push($errors,"Password is required");
    }


// If no errors , save the user into the database

if (count($errors)== 0)
{
    
    $sql = "insert into customer
    (FirstName, LastName, Email, Phonenumber, DOB, Gender,County,Answer,Address,Town,Password )
    values('$firstname','$lastname','$email','$phonenumber','$DOB','$gender','$county','$address','$town','$password')";

    mysqli_query($db,$sql);

   // $_SESSION= ['username'] = $username;
   // $_SESSION = ['success'] = "You are in now";
   // header('location:index.php');

}

}

?>