<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
<!--    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">-->

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="main">

    <div class="container">
    <form method="POST" action="server.php" class="appointment-form" id="appointment-form">
        <h2>education appointment form</h2>
        <div class="form-group-1">

    <input type="text" name="fname" placeholder="First name" required /><br>
    <input type="text" name="lname" placeholder="Last name" /><br>
    DOB :
    <input type="date" name="date" required/><br>
    <input type="text" name="age" placeholder="Age"><br>
    <input type="text" name="father" placeholder="Father name" required/><br>
    <input type="text" name="mother" placeholder="Mother name" required/><br>
    <input type="text" name="fatheroccupation" placeholder="Father occupation" required/><br>
    <input type="text" name="motheroccupation" placeholder="Mother occupation" required/><br>
    <input type="text" name="adharnumber" placeholder="Adhar card number" required/><br>
    Standard going to join :
    <input type="radio" name="std"><br>
    <input type="text" name="address" placeholder="Address" required/><br>
    <input type="number" name="fathernumber" placeholder="Father contact number" required/><br>
    <input type="submit" value="Register">
</form>
    </div>
</div>
</body>
</html>