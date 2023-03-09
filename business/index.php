
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
            integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
            crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css">

    </head>

    <body>
        <section class="header">

           <?php include 'header.php'; ?>
        </section>
        <nav id="navbar">
            <div class="sidebar">

                <ul>
                    <li><a href="#" class="menu-item"> HOME </a></li>
                    <li><a href="#" class="menu-item">ABOUT US</a></li>
                    <li><a href="#" class="menu-item">FEATURES</a></li>
                    <li><a href="#" class="menu-item">COURSE</a></li>
                    <li><a href="#" class="menu-item">OFFER</a></li>
                    <li><a href="#" class="menu-item">CONTACT</a></li>
                </ul>

            </div>
        </nav>
        <div class="social">
            <img src="images/facebook.png" alt=""><br>
            <img src="images/instagram.png" alt=""><br>
            <img src="images/linkedin.png" alt=""><br>
            <img src="images/twitter.png" alt="">
        </div>
        <img src="images/menu.png" id="menu-icon" alt="">

        <!-- about -->

        <section class="about">
            <div class="row">
                <div class="col_left">
                    <img src="images/about.png" alt="">
                </div>
                <div class="col_right">
                    <h1>About Us</h1>
                    <div class="square"></div>
                    <p class="about-content">Lorem ipsum dolor sit, amet consectetur
                        adipisicing elit. Neque perspi<br>ciatis dolor
                        repudiandae libero rerum tempore ea aspernatur
                        ad accusamus<br> error Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Error, eligendi.
                        .</p>
                    <div class="lines">
                        <div class="line1"></div><br>
                        <div class="line2"></div><br>
                        <div class="line3"></div><br>
                    </div>
                    <h3>Lorem ipsum, dolor sit amet ghtuim
                        <br>consectetur
                        adipisicing elit.
                        Odit, <br>ex. dfthh ispiuy tumhary
                    </h3>
                    <p class="author">--Abigali Adams</p>
                </div>
            </div>
        </section>
        <section class="features">
            <div class="features-row">
                <div class="col">
                    <img src="images/pic-1.png" alt="">
                    <h3>Learn Any Where</h3>
                    <p>Lorem ipsum dolor sit amet,<br> consectetur adipisicing elit.</p>
                </div>
                <div class="col">
                    <img src="images/pic-2.png" alt="">
                    <h3>Expert Teachers</h3>
                    <p>Lorem ipsum dolor sit amet, <br>consectetur adipisicing elit.</p>
                </div>
                <div class="col">
                    <img src="images/pic-3.png" alt="">
                    <h3>Unlimited Access</h3>
                    <p>Lorem ipsum dolor sit amet, <br>consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="widget">
                <div class="lines">
                    <div class="line1"></div><br>
                        <div class="line2"></div><br>
                        <div class="line3"></div><br>

                </div>
                <button class="common-btn">Start Free Trial</button>
            </div>
        </section>
                                         <!-- courses  -->


<section class="courses">
    <div class="courses-row">
        <div class="courses-col-left">
            <h1>Browse our top<br>courses</h1>
                    <div class="square"></div>
                    <p class="courses-content">Lorem ipsum dolor sit, amet consectetur
                        adipisicing elit. Neque perspi<br>ciatis dolor
                        repudiandae libero rerum tempore ea aspernatur
                        ad accusamus<br> error Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Error, eligendi.<br>Lorem ipsum dolor sit amet consectetur.
                        .</p>
                        <button class="common-btn">View All Courses</button>
                    <div class="lines">
                        <div class="line1"></div><br>
                        <div class="line2"></div><br>
                        <div class="line3"></div><br>
                    </div>
        </div>
        <div class="courses-col-right">
            <img src="images/course.png" alt="">
        </div>
    </div>
</section>
<section class="offer">
    
        <div class="row">
            <div class="col_left">
                <img src="images/offer.png" alt="">
            </div>
            <div class="col_right">
                <h1>Limitless Learning,<br>Limitless Possiblities</h1>
                <div class="square"></div>
                <p class="about-content">Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit. Neque perspi<br>ciatis dolor
                    repudiandae libero rerum tempore ea aspernatur
                    ad accusamus<br> error Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Error, eligendi ,Lorem ipsum dolor sit ametconsectetur
                    Lorem ipsum dolor sit amet consectetur adipisicing <br>lit. Veritatis, ea?
                    adipisicing elit. Cupiditate, perspiciatis!
                    .</p>
                    <button class="common-btn">Start My Free Month</button>
                <div class="lines">
                    <div class="line1"></div><br>
                    <div class="line2"></div><br>
                    <div class="line3"></div><br>
                </div>
                
            </div>
        </div>
   
</section>
<section class="contact">
    <div class="contact-row">
       <div class="contact-left">
    <h1>Sign Up to join our<br>learning community</h1>
    <form  action="" class="contact-form">
        <input type="text" placeholder="Enter Name"><br>
        <input type="email" placeholder="Enter email"><br>

        <input type="text" placeholder="Enter Password"><br>
        <div class="btn">
        <button type="submit" class="common-btn">sign Up</button> <span></span> <button type="submit" class="common-btn">sign Up</button>
    </div>
    </form>
    <div class="lines">
        <div class="line1"></div><br>
        <div class="line2"></div><br>
        <div class="line3"></div><br>
    </div>
       </div>
       <div class="contact-right">
        <img src="images/contact.png" alt="">
       </div>
       
    </div>

</section>
<div class="seperate-line"></div>
<section class="footer">
    <div class="footer-row">
        <div class="footer-left">
            <div class="f-col">
            <h3>About Us</h3>
            <ul>
            <li>Request & demo</li>
            <li>FAQs</li>
        </ul>
            </div>
            <div class="f-col">
                <h3>Product</h3>
                <ul>
            <li>Our Plan</li>
            <li>Free Trial</li>
                </ul>
            </div>
            <div class="f-col">
                <h3>Support</h3>
                <ul>
            <li>features</li>
            <li>Contact Us</li>
                </ul>
            </div>
            <div class="f-col">
                <h3>Explore</h3>
                <ul>
            <li>Find & Negociate</li>
            <li>Corporate Solution</li>
        </ul>
            </div>
        </div>
        <div class="footer-right">
            <div class="mail"><p>support@xyz.com<br>2019 xyPO</p></div>
            <div class="end">
                <img src="images/logo.png" alt=""><br>
                <button class="common-btn"> Search</button>
            </div>
        </div>
    </div>
</section>
        <script>
            var menuBtn = document.querySelector("#menu-icon");
            var sidenav = document.querySelector("#navbar");
            sidenav.style.right = "-250px"

            menuBtn.onclick = function () {
                if (sidenav.style.right == "-250px") {
                    sidenav.style.right = "0px";
                    menuBtn.style.transform = "rotate(-90deg)"

                }
                else {
                    sidenav.style.right = "-250px";
                    menuBtn.style.transform = "rotate(90deg)"
                }
            }
        </script>
    </body>

</html>
