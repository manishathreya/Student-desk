<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>Certificates</title>
</head>

<body onload = "myFunction()">
    <div class = "nav">
        <span class = "nav_topic">Student Desk</span>
        <a href="#certificates">Certificates</a>
        <a href="#clubs">Clubs</a>
        <a href="#result">Result</a>
    <a href="#lecturers">Lecturers</a>
    <a href="#courses">Courses</a>
    <a class="active" href="#home">Home</a>
    </div>
    <div class = "content">
        <h1>Certificates</h1>
        <form action="/action_page.php">
            <div class="row">
              <div class="col-25">
                <label for="Cname">CERFIFICATE NAME</label>
              </div>
              <div class="col-75">
                <input type="text" id="Cname" name="name" placeholder="Certificate name">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="Cid">CERTIFICATE ID</label>
              </div>
              <div class="col-75">
                <input type="number" id="Cid"  placeholder="Certificate Id">
              </div>
            </div>
            <div class="row">
                <div class="col-25">
                  <label for="Cprovider">CERTIFICATE PROVIDER</label>
                </div>
                <div class="col-75">
                  <input type="text" id="Cprovider" placeholder="Certificate Provider Name">
                </div>
              </div>

              <div class="row">
                <div class="col-25">
                  <label for="Curl">CERTIFICATE URL</label>
                </div>
                <div class="col-75">
                  <input type="url" id="Curl" placeholder="Certificate URL">
                </div>
              </div>
              <div class="row">
                <input type="submit" value="Submit">
              </div>
            </form>
            <div class = yourcertificates>
                <h1>YOUR CERTIFICATES</h1>
                <table class="clubs">
                  <tr>
                    <th>CID</th>
                    <th>Name</th>
                    <th>Provider</th>
                    <th>Curl</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>RoarLions</td>
                    <td>Tanmay</td>
                    <td>Sports</td>
                  </tr>
                  <tr>
                      <td>2</td>
                    <td>GoGoGo</td>
                    <td>Mirinda</td>
                    <td>Competitive Exam</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>CodeDecode</td>
                    <td>Meghna</td>
                    <td>Coding</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Funnista</td>
                    <td>Prashant</td>
                    <td>Memes</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>CircuitBreak</td>
                    <td>Sarika</td>
                    <td>Circuits</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>IOThub</td>
                    <td>Yashwanth</td>
                    <td>IOT</td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><a href=""></a></td>
                    </tr>
                </table>
            </div>
            <div class = "footer">
        <p class = footer_contact>Contact us</p>
        <a class = "contact_link" href="mailto:ayerhtahsinam@gmail.com"><button class = "footer_btn">Gmail</button></a>
        <a class = "contact_link" href="https://www.linkedin.com/in/manish-athreya-63a644190/"><button class = "footer_btn">Linkedin</button></a>
    </div>
    </div>
</body>