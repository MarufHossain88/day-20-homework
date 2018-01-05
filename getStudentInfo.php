<?php
require_once 'vendor/autoload.php';
use App\classes\Student;

$queryResult = Student::getStudentInfo();

?>



<title>Get Student Info</title>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/style.css">


<a href="view.php">Add students Info ||</a>
<a href="getStudentInfo.php">view students Info</a>



    <table align="center" border="1" width="800">
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Mobile Number</th>
            <th>Email Address</th>
            <th>Address</th>
        </tr>
        <?php while ($student = mysqli_fetch_assoc($queryResult)){ ?>
        <tr>
            <td><?php echo $student['id'] ;?></td>
            <td><?php echo $student['first_name'] ;?></td>
            <td><?php echo $student['last_name'] ;?></td>
            <td><?php echo $student['mobile_number'] ;?></td>
            <td><?php echo $student['email_address'] ;?></td>
            <td><?php echo $student['address'] ;?></td>
        </tr>
        <?php }?>
    </table>