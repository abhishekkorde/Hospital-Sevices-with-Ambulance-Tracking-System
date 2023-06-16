<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$subject = filter_input(INPUT_POST, 'subject');
$number = filter_input(INPUT_POST, 'number');
$message = filter_input(INPUT_POST, 'message');


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
$sql = "INSERT INTO contact_infomation (Name,email,Subject,Mobile_No,Message)
values ('$name','$email','$subject','$number','$message')";
if ($conn->query($sql)){
    header("location: contact.html");
}
else{
    echo "Something went wrong... cannot redirect!";
}
$conn->close();

?>