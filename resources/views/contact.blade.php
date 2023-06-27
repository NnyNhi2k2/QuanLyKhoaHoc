<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shark IT</title>
        <link rel="stylesheet" href="{{URL::asset('./css/style.css')}}">
        <link rel="stylesheet" href="{{URL::asset('./css/contact.css')}}">
        <link rel="icon" href="./images/logo-contact.jpg" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a3e679052b.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--====Menu===-->
        <nav>
            <div class="container nav_container">
                <a href="{{url('/')}}"><h4>SHARK IT</h4></a>
                <ul class="nav_menu">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/about')}}">About</a></li>
                    <li><a href="{{url('/Courses')}}">Courses</a></li>
                    <li><a href="{{url('/contact')}}">Contact</a></li>
                </ul>
                <button id="open-menu-btn"><i class="fa-solid fa-bars"></i></button>
                <button id="close-menu-btn"><i class="fa-solid fa-xmark"></i></button>
            </div>
        
        </nav>




        <section class="contact">
            <div class="container contact_container">
                <aside class="contact_aside">
                    <div class="aside_image">
                        <img src="./images/contact.jpg" alt="">
                    </div>
                    <h2>Contact Us</h2>
                    <p>You can contact me by letter/e-mail if you require any further information</p>
                    <ul class="contact_details">
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            <h5>079 774 5043</h5>
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <h5>nguyenngocyennhi20022@gmail.com</h5>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            <a href="https://goo.gl/maps/eQJtcFK2MGrkWt979"><h5>Ho Chi Minh City, Viet Nam Country </h5></a>
                        </li>
                    </ul>
                    <ul class="contact_socials">
                        <li><a href="https://www.instagram.com/kdi452k2/" target="_blank"><i class="fa-brands fa-instagram-square"></i></a></li>
                        <li><a href="https://www.facebook.com/people/Nny-Nhi/100033294522764/" target="_blank"><i class="fa-brands fa-facebook-square"></i></a></li>
                        <li><a href="https://github.com/NnyNhi2k2/" target="_blank"><i class="fa-brands fa-github-square"></i></a></li>
                    </ul>
                </aside>


                <!-- ======FORM===== -->
                <form action="https://formspree.io/f/xqknygwq" method="POST" class="contact_form"> 
                    <div class="form_name">
                        <input type="text" name="First Name" placeholder="First Name" required>
                        <input type="text" name="Last Name" placeholder="Last Name" required>
                    </div>
                    <input type="email" name="Email Address" placeholder="Your Email Address" required>
                    <textarea name="Message" id="1" cols="30" rows="10" placeholder="Message" required></textarea>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </section>



        <!--=======Footer=========-->
        <footer class="footer">
            <div class="container footer_container">
                <div class="footer_1">
                    <a href="{{url('/')}}" class="footer_logo"><h4>SHARK IT</h4></a>
                    <p>Shark IT will provide you with the most rewarding courses</p>
                </div>

                <div class="footer_2">
                    <h4>Permalinks</h4>
                    <ul class="permalinks">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/about')}}">About</a></li>
                        <li><a href="{{url('/Courses')}}">Courses</a></li>
                        <li><a href="{{url('/contact')}}">Contact</a></li>
                    </ul>
                </div>

                <div class="footer_3">
                    <h4>Primacy</h4>
                    <ul class="primacy">
                        <li> Privacy Policy</li>
                        <li>Terms anhd conditions</li>
                        <li> Refund Policy</li>
                    </ul>
                </div>

                <div class="footer_4">
                    <h4>Contact Us</h4>
                    <div>
                        <p>079 774 5043</p>
                        <p>nguyenngocyennhi20022@gmail.com</p>
                    </div>

                    <ul class="footer_socials">
                        <li><a href="https://www.facebook.com/people/Nny-Nhi/100033294522764/"><i class="fa-brands fa-facebook-square"></i></a></li>
                        <li><a href="https://www.instagram.com/kdi452k2/"><i class="fa-brands fa-instagram-square"></i></a></li>
                        <li><a href="https://github.com/NnyNhi2k2/"><i class="fa-brands fa-github-square"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_copyright">
                <small>Copyright &copy; SHARK YouTube Tutorial</small>
            </div>
        </footer>


        <script src="./main.js"></script>


    </body>
</html>