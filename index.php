<?php
include("configs/config.php");
$errors = array('name' => '', 'email' => '', 'phone' => '', 'textarea' => '');
$name = $email = $phone = $textarea = '';


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $textarea = $_POST['textarea'];

    if (empty($name) || empty($email) || empty($phone) || empty($textarea)) {


        if (isset($_POST['submit'])) {
            if (empty($_POST['name'])) {
                $errors['name'] = 'Name is required! <br />';
            }
            if (empty($_POST['email'])) {
                $errors['email'] = 'Email is required! <br />';
            } else {
                $email = $_POST['email'];
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors['email'] = 'Email must be a valid email address';
                }
            }

            if (empty($_POST['phone'])) {
                $errors['phone'] = 'Email is required! <br />';
            }
            if (empty($_POST['textarea'])) {
                $errors['textarea'] = 'A message is required! <br />';
            } else {
                $textarea = $_POST['textarea'];
            }
        }
    } else {
        $result = mysqli_query($conn, "INSERT INTO contacts(contact_name,contact_email,contact_phone,contact_msg) VALUES('$name','$email','$phone','$textarea')");
        header("Location: index.php?success");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Portfolio | Gjon Sinani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>
    <section id="home">
        <header></header>
        <div class="Navbar">
            <div class="Navbar__Link Navbar__Link-brand">
                Portfolio
            </div>
            <div class="Navbar__Link Navbar__Link-toggle">
                <i class="fas fa-bars"></i>
            </div>

            <nav class="Navbar__Items Navbar__Items--right">
                <div class="Navbar__Link" href="index.php#home">
                    <a href="index.php#home">Home</a>
                </div>
                <div class="Navbar__Link" href="#about">
                    <a href="#about">About</a>
                </div>

                <div class="Navbar__Link">
                    <a href="#contact">Contact</a>
                </div>
            </nav>
        </div>
        <div id="banner" class="banner">
            <div class="container">
                <div class="banner__animation">
                    <img src="./assets/images/me2.png" alt="logo" />
                </div>
            </div>
            <div class="container">
                <div class="banner__present-info">
                    <div id="typewriter"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div id="about-what" data-aos="zoom-in" class="py-2">
            <h2 class="what-title"><span class="blue-color">About</span> me</h2>
            <div class="what-container">
                <div class="what">
                    <div class="what-box" data-aos="zoom-out-right">
                        <i aria-hidden="true" class="fas fa-edit fa-3x"></i>
                        <h3>Planning</h3>
                        <p>
                            Starting from System Concepts Development and Requirement
                            Analysis, then creating a Functional Requirements Document that
                            provides the basis to arrive to a solution.
                        </p>
                    </div>
                    <div class="what-box" data-aos="zoom-in-up">
                        <i class="fas fa-code fa-3x"></i>
                        <h3>Development</h3>
                        <p>
                            From transforming requirements into System Design, to converting
                            that design into an information system and integrating that system
                            into a functional platform.
                        </p>
                    </div>
                    <div class="what-box" data-aos="zoom-out-left">
                        <i class="fas fa-bullseye fa-3x"></i>
                        <h3>Implementation</h3>
                        <p>
                            Implementation of the system into a production environment and
                            resolution of problems identified during the integration.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact" class="py-5">
            <div class="container py-md-3">
                <h3 class="cont-head">Get in touch</h3>
                <div class="d-grid align-form-map">
                    <div class="form-inner-cont">

                        <form action="index.php#contact" method="post" class="main-input">
                            <input type="text" placeholder="Name" name="name" id="w3lName" required="" >
                            <div class="error"><?php echo $errors['name']; ?></div>
                            <input type="email" name="email" placeholder="Email" id="w3lSender" required="" >
                            <div class="error"><?php echo $errors['email']; ?></div>
                            <input type="text" placeholder="Phone Number" name="phone" id="w3lName" required="" >
                            <div class="error"><?php echo $errors['phone']; ?></div>
                            <textarea placeholder="Message" name="textarea" id="w3lMessage" required="" ></textarea>
                            <div class="text-right">
                                <button type="submit" name="submit" class="btn">Send</button>
                            </div>
                        </form>
                    </div>

                    <div class="contact-right">
                        <img src="assets/images/ab-2.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="f-container">
                <p>2021 &#169;All Rights Reserved</p>
            </div>
        </footer>
        <div class="overlay">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3"></div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
        <script src="scripts/script.js"></script>
        <script src="scripts/animations.js"></script>



</body>

</html>