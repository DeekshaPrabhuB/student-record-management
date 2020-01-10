<?php

$conn = mysqli_connect('localhost','root','root','demo');
//print_r($conn);die;

if(!$conn)
{
//    echo "error";die;
    die('Connection failed!'.mysqli_error($conn));
}
if (isset($_POST)) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['date'];
    $age = $_POST['age'];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $fatheroccupation = $_POST['fatheroccupation'];
    $motheroccupation = $_POST['motheroccupation'];
    $adharnumber = $_POST['adharnumber'];
    $std = $_POST['std'];
    $address = $_POST['address'];
    $fathernumber = $_POST['fathernumber'];
}

$sql = "INSERT INTO students(firt_name, last_name, dob, age, father_name, mother_name, father_occupation, mother_occupation, adhar_number, standard, address, father_contact_number) VALUES('$fname','$lname','$dob','$age','$father','$mother','$fatheroccupation',
'$motheroccupation','$adharnumber','$std','$address','$fathernumber')";

if(mysqli_query($conn,$sql))
{
    echo "Registerd Successfully";
}
else
{
    echo mysqli_error($conn);
}

?>