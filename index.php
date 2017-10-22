<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Files-->
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <title>Blue Hacks 2018</title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="main-container">
        
        <nav>
            <div class="brand-logo">
                <img src="images/logo.png">
            </div>
            <div class="nav">
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#history">History</a></li>
                    <li><a href="#signup">Signup</a></li>
                </ul>
            </div>
        </nav>

        <div id="intro">
            <h1>Blue Hacks 2018 is Coming Soon</h1>
            <p class="code">
                Welcome to Blue Hacks 2018.
                Please input your idea:
            </p>
            <button type="button" href="#signup"> Click to Sign up </button>
        </div>

        <hr>

        <div id="about">
            <h1>About</h1>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>

        <hr>

        <div id="history">
            <div class="info">
                <h1>History</h1>
            <!-- Some Information -->
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <!-- http://html-tuts.com/create-valid-html-photo-gallery-for-all-browsers/ -->
            <div class="gallery">
                <div id="bigimages">
                    <div id="normal1">
                        <img src="images/placeholders/bigimage1.png" alt="">
                    </div>
                    <div id="normal2">
                        <img src="images/placeholders/bigimage2.png" alt="">
                    </div>

                    <div id="normal3">
                        <img src="images/placeholders/bigimage3.png" alt="">
                    </div>

                    <div id="normal4">
                        <img src="images/placeholders/bigimage4.png" alt="">
                    </div>

                    <div id="normal5">
                        <img src="images/placeholders/bigimage5.png" alt="">
                    </div>
                </div>
                <div id="thumbs">
                    <a href="javascript: changeImage(1);"><img src="images/placeholders/image1.png" alt=""></a>
                    <a href="javascript: changeImage(2);"><img src="images/placeholders/image2.png" alt=""></a>
                    <a href="javascript: changeImage(3);"><img src="images/placeholders/image3.png" alt=""></a>
                    <a href="javascript: changeImage(4);"><img src="images/placeholders/image4.png" alt=""></a>
                    <a href="javascript: changeImage(5);"><img src="images/placeholders/image5.png" alt=""></a>
                </div>
            </div>
        </div>

        <hr>

        <div id="sponsors">
            <h1>Sponsors</h1>
            <ul id="sponsors-list">
                <li><img src="img/sponsor1.png"></li>
                <li><img src="img/sponsor2.png"></li>
                <li><img src="img/sponsor3.png"></li>
                <li><img src="img/sponsor4.png"></li>
            </ul>
        </div>

        <hr>

        <div id="signup">
            <h1>Sign Up</h1>
            <form action="/form-handler" method="post">
                <label>Team Information</label>
                <div>
                    <label for="team-name">Team Name:<br></label>
                    <input type="text" id="team-name" name="team-name" required>
                </div>
                <div>
                    <label for="team-school">School of Team:<br></label>
                    <input type="text" id="team-school" name="team-school" required>
                </div>
                <div id="members-information">
                    <div class="member">
                        <label>Member 1</label>
                        <ul class="memberinfo">
                        <li>
                            <label for="member1-name">Name:<br></label>
                            <input type="text" id="member1-name">
                        </li>
                        <li>
                            <label for="member1-email">Email:<br></label>
                            <input type="email" id="member1-email">
                        </li>
                        <li>
                            <label for="member1-contact">Contact Number:<br></label>
                            <input type="tel" id="member1-contact">
                        </li>
                        <li>
                            <label for="member1-dietary">Dietary Restriction:<br></label>
                            <textarea type="text" id="member1-dietary"></textarea>
                        </li>
                        <li>
                            <label for="member1-shirtsize">Shirt Size:<br></label>
                            <input type="text" id="member1-shirtsize">
                        </li>
                        </ul>
                    </div>
                    <div class="member">
                        <label>Member 2</label>
                        <ul class="memberinfo">
                        <li>
                            <label for="member2-name">Name:<br></label>
                            <input type="text" id="member2-name">
                        </li>
                        <li>
                            <label for="member2-email">Email:<br></label>
                            <input type="email" id="member2-email">
                        </li>
                        <li>
                            <label for="member2-contact">Contact Number:<br></label>
                            <input type="tel" id="member2-contact">
                        </li>
                        <li>
                            <label for="member2-dietary">Dietary Restriction:<br></label>
                            <textarea type="text" id="member2-dietary"></textarea>
                        </li>
                        <li>
                            <label for="member2-shirtsize">Shirt Size:<br></label>
                            <input type="text" id="member2-shirtsize">
                        </li>
                        </ul>
                    </div>
                    <div class="member">
                        <label>Member 3</label>
                        <ul class="memberinfo">
                        <li>
                            <label for="member3-name">Name:<br></label>
                            <input type="text" id="member3-name">
                        </li>
                        <li>
                            <label for="member3-email">Email:<br></label>
                            <input type="email" id="member3-email">
                        </li>
                        <li>
                            <label for="member3-contact">Contact Number:<br></label>
                            <input type="tel" id="member3-contact">
                        </li>
                        <li>
                            <label for="member3-dietary">Dietary Restriction:<br></label>
                            <textarea type="text" id="member3-dietary"></textarea>
                        </li>
                        <li>
                            <label for="member3-shirtsize">Shirt Size:<br></label>
                            <input type="text" id="member3-shirtsize">
                        </li>
                        </ul>
                    </div>
                    <div class="member">
                        <label>Member 4 (Optional)</label>
                        <ul class="memberinfo">
                        <li>
                            <label for="member4-name">Name:<br></label>
                            <input type="text" id="member4-name">
                        </li>
                        <li>
                            <label for="member4-email">Email:<br></label>
                            <input type="email" id="member4-email">
                        </li>
                        <li>
                            <label for="member4-contact">Contact Number:<br></label>
                            <input type="tel" id="member4-contact">
                        </li>
                        <li>
                            <label for="member4-dietary">Dietary Restriction:<br></label>
                            <textarea type="text" id="member4-dietary"></textarea>
                        </li>
                        <li>
                            <label for="member4-shirtsize">Shirt Size:<br></label>
                            <input type="text" id="member4-shirtsize">
                        </li>
                        </ul>
                    </div>
                </div>
                <div id="extra">
                    <label for="point-person">Point Person:<br></label>
                    <input type="text" id="point-person" name="point-person" required>
                </div>
                <div>
                    <label for="where-hear">From where did you hear about Bluehacks?<br></label>
                    <textarea type="text" id="where-hear"></textarea>
                </div>
                <div>
                    <label for="why-join">Why do you want to join Blue Hacks?<br></label>
                    <textarea type="text" id="why-join"></textarea>
                </div>
                <div>
                    <label for="what-expect">What do you expect from BlueHacks this year?<br></label>
                    <textarea type="text" id="what-expect"></textarea>
                </div>
                <div>
                    <label for="other-concerns">Other Concerns:<br></label>
                    <textarea type="text" id="other-concerns"></textarea>
                </div>
            </form>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <script src="js/gallery.js"></script>

</body>
</html>