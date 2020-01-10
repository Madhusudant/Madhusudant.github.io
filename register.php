<?php

$db = mysqli_connect("localhost", "root", "", "test");
if (isset($_POST['submit'])) {
    
    $iinstitution = $_POST['institution'];
    $ifname = $_POST['fname'];
    $ilname = $_POST['lname'];
    $iemail = $_POST['email'];
    $icontact = $_POST['contact'];
    $iaddress = $_POST['address'];
    $icity = $_POST['city'];
    $istate = $_POST['state'];
  
        $sql = "INSERT INTO auth(institution, fname, lname, email, contact, address, city, state) VALUES('$iinstitution', '$ifname', 
        '$ilname', '$iemail', '$icontact', '$iaddress', '$icity', '$istate')";
        mysqli_query($db, $sql);

        

            header("Location: home.php");


        }


     

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="">
                        <h2 class="form-title">Event Registration Form</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="institution"  placeholder="Institution Name" required="" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="fname" id="email" placeholder="First Name"/>
                        </div>
                                                <div class="form-group">
                            <input type="text" class="form-input" name="lname"  placeholder="Last Name" required="" />
                        </div>
                        <div class="form-group">
                            <input type="fname" class="form-input" name="email" id="email" placeholder="Email" required="" />
                        </div>
                                                <div class="form-group">
                            <input type="text" class="form-input" name="contact"  placeholder="Contact Number" required="" />
                        </div>
                        <div class="form-group">
                            <input type="fname" class="form-input" name="address" id="email" placeholder="Address"/>
                        </div>
                         <div class="form-group">
                            <input type="fname" class="form-input" name="city" id="email" placeholder="City"/>
                        </div>
                         <div class="form-group">
                            <input type="fname" class="form-input" name="state" id="email" placeholder="State" required="" />
                        </div>



                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required="" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label >
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit Here"/>
                        </div>
                    </form>
                   
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>