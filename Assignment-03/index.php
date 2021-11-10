<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>180204142 (Assignment-3)</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 image-container">
                <div class="subheading">
                    <span class="spacing"></span>
                    <span class="text-container">
                        <span class="left-bracket">[</span>
                        <span class="text">CONTACT US</span>
                        <span class="right-bracket">]</span>
                    </span>
                    <span class="spacing"></span>
                </div>
                <div class="heading">
                    Feedback Form
                </div>

                <div class="icon-contain">
                    <div class="icon-holder">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>12 Moda Center Street, Home<br />New York</p>
                        </div>
                    </div>
                    <div class="icon-holder">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="text">
                            <h3>Let's Talk</h3>
                            <p><a href="tel:+12345607890">+123 4560 7890</a></p>
                        </div>
                    </div>
                    <div class="icon-holder">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="text">
                            <h3>General Support</h3>
                            <p><a href="mailto:example@email.com">example@email.com</a></p>
                        </div>
                    </div>
                </div>

                <form action="tableShow.php" method="post" class="icon-button">
                    <input type="submit" class="button" value="View Submitted Data" />
                </form>
            </div>

            <div class="col-md-6 form-container">
                <div class="message">
                    SEND US A MESSAGE
                </div>
                <form action="tableShow.php" method="POST">
                    <div class="field name-container">
                        <label for="first-name">User Name<span class="required-mark">*</span></label>
                        <div class="field-name">
                            <input type="text" id="first-name" name="usernamefirst" value="" class="form-control first-name" placeholder="First Name" required />
                            <input type="text" id="last-name" name="usernamesecond" value="" class="form-control last-name" placeholder="Last Name" required />
                        </div>
                    </div>

                    <div class="field">
                        <label for="email">Email<span class="required-mark">*</span></label>
                        <input type="text" id="email" name="email" value="" class="form-control" placeholder="Email Address" required />
                    </div>

                    <div class="field">
                        <label for="phone">Phone<span class="required-mark">*</span></label>
                        <input type="tel" id="phone" name="phone" value="" class="form-control" placeholder="Phone Number" required />
                    </div>
                    
                    <div class="field">
                        <label for="textarea">Message<span class="required-mark">*</span></label>
                        <textarea id="textarea" rows="5" class="form-control textarea" name="message" placeholder="Enter your message here..." required ></textarea>
                    </div>

                    <div class="field">
                        <input type="submit" class="button" value="Send Message" />
                    </div>
                </form>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>