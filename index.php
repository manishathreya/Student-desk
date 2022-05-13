<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>INDEX</title>
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
        <h1>PROFILE</h1>
        <img src="./assets/images/male_default.png" alt="default profile">
        <form action="/action_page.php">
            <div class="row">
              <div class="col-25">
                <label for="name">NAME</label>
              </div>
              <div class="col-75">
                <input type="text" id="name" name="name" placeholder="Update Name">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="usn">USN</label>
              </div>
              <div class="col-75">
                <input type="text" id="usn" name="lastname" placeholder="Enter USN">
              </div>
            </div>
            <div class="row">
                <div class="col-25">
                  <label for="sem">SEMESTER</label>
                </div>
                <div class="col-75">
                  <input type="number" id="sem" placeholder="Enter Semester">
                </div>
              </div>

              <div class="row">
                <div class="col-25">
                  <label for="country">GENDER</label>
                </div>
                <div class="col-75">
                  <select id="gender" name="Gender">
                    <option value="australia">Male</option>
                    <option value="canada">Female</option>
                    <option value="other">Other</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-25">
                  <label for="dob">DATE OF BIRTH</label>
                </div>
                <div class="col-75">
                  <input type="date" id="dob" placeholder="Enter Date of Birth">
                </div>
              </div>

              <div class="row">
                <div class="col-25">
                  <label for="phone">PHONE NO.</label>
                </div>
                <div class="col-75">
                  <input type="number" id="phone" placeholder="Update phone no.">
                </div>
              </div>

              <div class="row">
                <div class="col-25">
                  <label for="club">CLUB ID</label>
                </div>
                <div class="col-75">
                  <input type="number" id="club" placeholder="Update club id">
                </div>
              </div>

              <div class="row">
                <div class="col-25">
                  <label for="email">E-MAIL</label>
                </div>
                <div class="col-75">
                  <input type="email" id="email" placeholder="Update E-mail">
                </div>
              </div>

              <div class="row"> 
                <div class="col-25">
                  <label for="dept">DEPARTMENT</label>
                </div>
                <div class="col-75">
                  <input type="number" id="dept" placeholder="Update Department">
                </div>
              </div>
            <div class="row">
              <input type="submit" value="Submit">
            </div>
          </form>
          <div class = "footer">
        <p class = footer_contact>Contact us</p>
        <a class = "contact_link" href="mailto:ayerhtahsinam@gmail.com"><button class = "footer_btn">Gmail</button></a>
        <a class = "contact_link" href="https://www.linkedin.com/in/manish-athreya-63a644190/"><button class = "footer_btn">Linkedin</button></a>
    </div>
    </div>
</body>
</html>