<?php

include_once('connection.php');
$query = "select * from departments";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>DEPARTMENTS</title>
</head>

<body>
<div class = "nav">
        <span class = "nav_topic">Student Desk</span>
        <a href="certificates.html">Certificates</a>
        <a href="clubs.html">Clubs</a>
        <a href="result.html">Result</a>
    <a href="lecturers.html">Lecturers</a>
    <a href="courses.html">Courses</a>
    <a href="departments.html">Departments</a>
    <a class="active" href="#home">Home</a>
    </div>
    <div class = "content">
        <h1>DEPARTMENTS</h1>
        <table class="departments">
            <tr>
              <th>Name</th>
              <th>ID</th>
              <th>HOD</th>
            </tr>


            <?php
              while($rows = mysqli_fetch_assoc($result))
              {
            ?>
            <tr>
              <td><?php echo $rows["did"]; ?></td>
              <td><?php echo $rows["dname"]; ?></td>
              <td><?php echo $rows["hod"]; ?></td>
            </tr>
            <?php
              }
            ?>
            
          </table>
    </div>
    <div class = "footer">
        <p class = footer_contact>Contact us</p>
        <a class = "contact_link" href="mailto:ayerhtahsinam@gmail.com"><button class = "footer_btn">Gmail</button></a>
        <a class = "contact_link" href="https://www.linkedin.com/in/manish-athreya-63a644190/"><button class = "footer_btn">Linkedin</button></a>
      </div>
</body>