<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shark IT</title>
        <link rel="stylesheet" href="{{URL::asset('./css/style.css')}}">
        <link rel="stylesheet" href="{{URL::asset('./css/about.css')}}">
        <link rel="icon" href="./images/logo-about.jpg" type="image/x-icon">
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


        <!--=============ACHIEVEMENTS===================-->
        <section class="about_achievements">
            <div class="container about_achievements-container">
                <div class="about_achievements-left">
                    <img src="./images/achievement.jpg" alt="">
                    
                </div>
                <div class="about_achievements-right">
                    <h1>Acheivements</h1>
                    <p>Learn how to create a complete responsive multi-page education/school website using HTML, CSS, and javascript. This is a step-by-step beginner web development project tutorial on how to build a modern school or education website using html5, css3, and ES6 javascript.</p>
                    <div class="achievements_cards">
                        <article class="achievements_card">
                            <span class="achievement_icon">
                                <i class="fa-solid fa-video"></i>
                            </span>
                            <h3>450+</h3>
                            <p>Courses</p>
                        </article>

                        <article class="achievements_card">
                            <span class="achievement_icon">
                                <i class="fa-solid fa-users"></i>
                            </span>
                            <h3>68,000+</h3>
                            <p>Student</p>
                        </article>

                        <article class="achievements_card">
                            <span class="achievement_icon">
                                <i class="fa-solid fa-trophy"></i>
                            </span>
                            <h3>15+</h3>
                            <p>Awards</p>
                        </article>
                    </div>
                </div>

            </div>
        </section>


        <!--================TEAMS===============-->
        <section class="teams">
            <h2>Our Team</h2>
            <div class="container teams_container">
                <article class="teams_member">
                    <div class="teams_member-image">
                        <img src="./images/nhi.jpg" alt="">
                    </div>
                    <div class="teams_member-info">
                        <a href="https://nnynhi2k2.github.io/My-CV/"><h4>Nguyen Ngoc Yen Nhi</h4></a>
                        <p>WEB DEVELOPER</p>
                    </div> 
                    <div class="teams_member-socials">
                        <a href="https://www.instagram.com/kdi452k2/" target="_blank"><i class="fa-brands fa-instagram-square"></i></a>
                        <a href="https://www.facebook.com/people/Nny-Nhi/100033294522764/" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
                        <a href="https://github.com/NnyNhi2k2/" target="_blank"><i class="fa-brands fa-github-square"></i></a>
                    </div>
                </article>

                <article class="teams_member">
                    <div class="teams_member-image">
                        <img src="./images/NguyenTheHoang.jpg" alt="">
                    </div>
                    <div class="teams_member-info">
                        <a href="https://tntan241202.github.io/cvthehoang.github.io/"><h4>Nguyen The Hoang</h4></a>
                        <p>WEB DEVELOPER</p>
                    </div> 
                    <div class="teams_member-socials">
                        <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram-square"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100021712620929" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
                        <a href="https://github.com/thehoang410" target="_blank"><i class="fa-brands fa-github-square"></i></a>
                    </div>
                </article>

                <article class="teams_member">
                    <div class="teams_member-image">
                        <img src="./images/NguyenNhatHuy.jpg" alt="">
                    </div>
                    <div class="teams_member-info">
                        <a href="https://nnynhi2k2.github.io/My-CV/"><h4>Nguyen Nhat Huy</h4></a>
                        <p>WEB DEVELOPER</p>
                    </div> 
                    <div class="teams_member-socials">
                        <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram-square"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100010271377390" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
                        <a href="https://github.com/nguyenhuynhat" target="_blank"><i class="fa-brands fa-github-square"></i></a>
                    </div>
                </article>

                <article class="teams_member">
                    <div class="teams_member-image">
                        <img src="./images/TranNhatTan.jpg" alt="">
                    </div>
                    <div class="teams_member-info">
                        <a href="https://tntan241202.github.io/nhattan.github.io/"><h4>Tran Nhat Tan</h4></a>
                        <p>WEB DEVELOPER</p>
                    </div> 
                    <div class="teams_member-socials">
                        <a href="https://www.instagram.com/tzh_tan/" target="_blank"><i class="fa-brands fa-instagram-square"></i></a>
                        <a href="https://www.facebook.com/tzhtann.0907/" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
                        <a href="https://github.com/tntan241202?fbclid=IwAR2n05wQaBKTSHZIOCMErxM2CpkUDaRpNlhb6TKI8Da-dPeEz1w8RwfwO-4" target="_blank"><i class="fa-brands fa-github-square"></i></a>
                    </div>
                </article>

                <article class="teams_member">
                    <div class="teams_member-image">
                        <img src="./images/MaiTuQuy.jpg" alt="">
                    </div>
                    <div class="teams_member-info">
                        <a href="https://tntan241202.github.io/CVMAITUQUY.github.io/"><h4>Mai Tu Quy</h4></a>
                        <p>WEB DEVELOPER</p>
                    </div> 
                    <div class="teams_member-socials">
                        <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram-square"></i></a>
                        <a href="https://www.facebook.com/people/Mai-T%E1%BB%A9-Qu%C3%BD/100036764316332/" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
                        <a href="https://github.com/MTQ05032022" target="_blank"><i class="fa-brands fa-github-square"></i></a>
                    </div>
                </article>

                
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