<!-- Lines 1-147 written by Thomas -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Glory Goodness Church</title>
    <link rel="stylesheet" href="Church/Styles/GloryGHomeStyles.css">
    <link rel="stylesheet" href="Church/Styles/GloryGHomeStyles.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"> </h2>

            </div>


            <!-- makes it so logo's in the top left and login is in the top right-TD -->
            <div class="login">
                <span style="float:right;">
                    <li><a href="Church/loginChurch.php">Sign in</a></li>
                </span>
            </div>

            <p style="text-align:center;">
                <!-- clicking home should bring you to the homepage-TD -->
                <li><a href="GloryGHome.html#"><img src="Church/Pictures/GGCLogo.png" alt="ChurchLogo" height="80"></a>
                </li>


            </p>









            <div class="menu">
                <ul>
                    <!-- clicking home should bring you to the homepage-TD -->
                    <!-- <li><a href="#"><img src="GGCLogo.png" alt="ChurchLogo" height= "70"></a></li> -->


                    <!-- <li><a href="#">HOME</a></li>-->




                    <li><a href="GloryGHome.html#">Home <br><span style="color: rgb(18, 18, 161);">Trang chủ</span></a></li>



                    <li class="has-submenu"><a href="#">About Us <br> <span style="color: rgb(18, 18, 161);">Về Hội Thánh</span></a>


                        <ul class="submenu">
                            <li><a href="Church/AboutUs/MissionVision.html">Mission & Vision <br><span style="color: rgb(18, 18, 161);">Sứ Mạng và Tầm Nhìn</span></a></li>
                            <li><a href="Church/AboutUs/ChurchStaff.html">Church Staff <br><span style="color: rgb(18, 18, 161);">Thành viên</span></a>
                            </li>
                            <li><a href="Church/AboutUs/ChurchHistory.html">Church History <br> <span style="color: rgb(18, 18, 161);">Lịch sử</span></a></li>
                            <!--more may be added in the future here -TD -->
                        </ul>


                    </li>


                    <li><a href="#">Ministries <br><span style="color: rgb(18, 18, 161);">Mục Vụ</span></a>

                        <ul class="submenu">
                            <li><a href="Church/ChurchEventCalandar.html">Church Event Calendar <br><span
                                        style="color: rgb(18, 18, 161);">Thời Khoá Biểu của</span></a></li>
                            <li><a href="Church/WeeklyActivitiy.html">Weekly Activity <br><span style="color: rgb(18, 18, 161);">Hoạt Động Hằng Tuần</span></a></li>
                            <li><a href="Church/WeeklyBibleReadings.html">Weekly Bible Reading <br><span style="color: rgb(18, 18, 161);">Lịch đọc Kinh Thánh Hằng Năm</span></a></li>

                        </ul>


                    </li>


                    <li><a href="Church/Giving.html">Giving <br><span style="color: rgb(18, 18, 161);">Dâng Hiến</span></a></li>



                    <li><a href="#">Education <br><span style="color: rgb(18, 18, 161);">Giáo Dục</span></a>

                        <ul class="submenu">
                            <li><a href="School/GloryGSchool.html">School <br><span
                                        style="color: rgb(18, 18, 161);">Trường học</span></a></li>

                        </ul>


                    </li>

                </ul>
            </div>
        </div>


        <div class="content">
            <h1>Welcome to Glory Goodness Church!</h1>
        </div>

        <div class="SloganBanner">
            <div class="englishSlogan">
                <h2>Glory to God.<br> God is Good!</h2>
            </div>


            <div class="VietnameseSlogan">
                <h2>Vinh Hiển Danh <br>Chúa. Chúa là<br> Tốt Lành!</h2>
            </div>


            <p>Worshiping Every Sunday at 11:00 am</p>
        </div>
        



        <div class="middle">
            <div class="grid-container2">
                <div class ="grid-item2"><h1>Weekly Activities</h1>
                    
                        <div class="leftrightbutton"><a href = '#'><button class = "button">View Events</button></a></div>
                      <div class ='leftrightbutton'><a href = '#'><button class = "button">Các sự kiện</button></a></div>
                  </div>
                <div class ="grid-item2">
                    <h1>Church Calendar</h1>
                    <div class="leftrightbutton"><a href = '../School/calendar.php'><button class = "button">View Calendar</button></a></div>
                      <div class ='leftrightbutton'><a href = '../School/calendar.php'><button class = "button">Lịch</button></a></div>
                  
            </div>

            <div class ="grid-item2"><h1>Where to Find Us</h1>
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1336.9189201046015!2d-77.18205101753678!3d38.852572083540544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b35af65f1a27%3A0x58704cfba0b35009!2sBeech%20Tree%20Elementary%20School!5e0!3m2!1sen!2sus!4v1699143290662!5m2!1sen!2sus"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>


 

<div class ="grid-item2">


<?php
 //php that allows the email to be sent
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info@glorygoodnesschurch.org";//replace with church email when fixed

    $subject = "New Church Member Message";//title

    $name = $_POST['Name'];//name of the sender

    $email = $_POST['Email'];//email of sender

    $message = $_POST['message']; //message of the email from the input box
    $headers = "From: $email";

    
    $email_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    

    //checking to see if the email sent worked
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>

<h1>Contact us</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <p2>Name: </p2><br>
    <input type="text" name="Name" placeholder="Enter your name"><br>

    <p2>Email: </p2><br>
    <input type="email" name="Email" placeholder="Enter your email"><br>
    
    <p2>Message<br></p2>
    <textarea name="message" rows="14" cols="50" placeholder="Enter your message"></textarea><br>
    
    <input type="submit" id="search" value="Submit" style="height:35px; width:90px" />
</form>

</div>




        </div>
 



       
        <?php 
            include('Footer.php');
        ?>

       
</body>

</html>