<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$purpose = filter_input(INPUT_POST, 'subject');
$number = filter_input(INPUT_POST, 'number');
$department = filter_input(INPUT_POST, 'Department');
$date = filter_input(INPUT_POST, 'date');
$time= filter_input(INPUT_POST, 'Time');


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "proejct_contact";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


// if (mysqli_connect_error()){
// die('Connect Error ('. mysqli_connect_errno() .') '
// . mysqli_connect_error());
// }
// else{
$sql = "INSERT INTO appoitment_form (Name,email,purpose,mobile_no,Department,Date,Time)
values ('$name','$email','$purpose','$number','$department','$date','$time')";
if ($conn->query($sql))
    {
        header("location: appointment.html");
    }
    else{
        echo "Something went wrong... cannot redirect!";
    }

    $conn->close();

?>