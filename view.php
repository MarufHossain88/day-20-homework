<?php

require_once 'vendor/autoload.php';
use App\classes\Student;

$message='';
if(isset($_POST['btn'])){
    $message=Student::putStudentInfo($_POST);
}

?>



<title>Put Student Info</title>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/style.css">


<a href="view.php">Add students Info ||</a>
<a href="getStudentInfo.php">view students Info</a>


<form action="" method="post">
    <table align="center" border="1">
        <tr>
            <th>First Name</th>
            <td><input type="text" name="first_name" size="22%"></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><input type="text" name="last_name" size="22%"></td>
        </tr>
        <tr>
            <th>Mobile Number</th>
            <td><input type="text" name="mobile_number" size="22%"></td>
        </tr>
        <tr>
            <th>Email Address</th>
            <td><input type="text" name="email_address" size="22%"></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><textarea type="text" name="address"></textarea></td>
        </tr>
        <tr>
            <th>Click Save</th>
            <td><input type="submit" name="btn" value="SAVE" class="btn btn-success btn-block" size="22%"></td>
        </tr>
    </table>
</form>
