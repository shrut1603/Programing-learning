<?php 

session_start();

?>




<html lang="en">

<head>
    <meta charset="utf-8">
    <title>onine education</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--------------bootstrap--------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">


    <!-------------google font--------->
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto+Condensed:ital,wght@0,400;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="project/css/all.css">

    <!--------------------link------->
    <link rel="stylesheet" type="text/css" href="shrut.css">
    <link rel="stylesheet" href="jquery.bxslider.css">
<style type="text/css">
    

#myBtn{
   
  display: all;             /*hidden bydefault*/
    position: fixed;           /*fixed */
    bottom: 20px ;              /*place the button at the botton of the page*/
    right: 20px;               /*place the button  30px from the right*/
    z-index: 9999;
    width: 50px;
        background: #6541c1;
font-size: 25px;
    height: 50px;
    text-align: center;  /*make sure it does not overlook*/
    
    background: linear-gradient(to right,#6541c1 0%,#d43396 98%,#d43396 100%);
    box-shadow: 0 23px 42px rgb(0 0 0 / 20%);
    color: white; /*text color*/
    cursor: pointer; /*add a mouse ponter on a hover*/
    padding: 10px; /*some padding */
    border-radius: 50px; /*rounded cornor*/
    
    transition: all .4s ease;
}

#myBtn:hover{
     background: #606060;

}

</style>





</head>

<body>
    <header class="header">

        <nav class="nav">
            <ul>
               <li class="logo"><a href=""><img src="images/logo11.png" alt="" class="white">
                        <img src="images/logo11.png" alt="" class="black"></a></li>
                <li><a href="#home">home</a></li>
                <li><a href="#contents">services</a></li>
                <li><a href="#work">work</a></li>
                <li><a href="#team">team</a></li>
                <li><a href="#course">courses</a></li>
                <li><a href="#testimonials">projects</a></li>
                <li><a href="#testimonial">students</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
            <a href="javascript:void(0);" class="nav-icon"><span></span><span></span><span></span></a>
        </nav>


    </header>
    <section id="home">
        <ul class="bxslider">
            <li>
                <div class="bg-video">
                    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" id="herovideo">
                        <source src="v1.mp4">
                    </video>
                    <div class="container">
                        <div class="vidContent">
                            <h1 class="text-left">online education</h1>
                            <p>
                                learn from home online education.........
                            </p>
                            <a href="https://www.youtube.com/watch?v=mUxS-35qO44" id="vidBtn">Click Here</a>
                        </div>
                    </div>
                    <ul class="social-icons list-inline">
                       <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/watch?v=aYjGXzktatA"> <i class="fa fa-youtube-play"></i> </a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </li>

            <li>
                <div class="bg-video">
                    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" id="herovideo">
                        <source src="v2.mp4">
                    </video>
                    <div class="container">
                        <div class="vidContent">
                            <h1 class="text-left">Online Eduction</h1>
                            <p>
                                va is a high-level programming language developed by Sun Microsystems. ...
                            </p>
                            <a href="https://www.youtube.com/watch?v=mUxS-35qO44" id="vidBtn">Click Here</a>
                        </div>
                    </div>
                    <ul class="social-icons list-inline">
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/watch?v=aYjGXzktatA"> <i class="fa fa-youtube-play"></i> </a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="bg-video">
                    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" id="herovideo">
                        <source src="video.mp4">
                    </video>
                    <div class="container">
                        <div class="vidContent">
                            <h1 class="text-left">Online Eduction</h1>
                            <p>
                                va is a high-level programming language developed by Sun Microsystems. ..
                            </p>
                            <a href="" id="vidBtn">Click Here</a>
                        </div>
                    </div>
                    <ul class="social-icons list-inline">
                         <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/watch?v=aYjGXzktatA"> <i class="fa fa-youtube-play"></i> </a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                       </ul>
                </div>
            </li>
        </ul>
    </section>

    <div style="height: 500px;"></div>
    <div class="full-nav">
        <div class="logo"><a href=""><img src="images/logo11.png" alt="">
            </a></div>



        <nav class="nav2">
            <ul>
                <li><a href="#home"><span>01.</span>Home</a></li>
                <li><a href="#contents"><span>02.</span>Services</a></li>
                <li><a href="#work"><span>03.</span>Work</a></li>
                <li><a href="#team"><span>04.</span>Team</a></li>
                <li><a href="#course"><span>05.</span>Course</a></li>
                <li><a href="#testimonials"><span>06.</span>Project</a></li>
                <li><a href="#testimonial"><span>07.</span>Students</a></li>
                <li><a href="#contact"><span>08.</span>Contact</a></li>
            </ul>
        </nav>
        <ul class="social-icons list-inline">
            <li><a href=""><i class="fa fa-twitter"></i></a></li>
            <li><a href=""> <i class="fa fa-facebook"></i> </a></li>
            <li><a href=""><i class="fa fa-instagram"></i></a></li>
            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
        </ul>

        <div class="corner-circle">
            <a href="javascript:void(0);" class="nav-close"><span></span><span></span></a>
        </div>
    </div>
    <br><br><br><br><br><br><br><br>
    <main id="contents" role="main">
        <section id="about-us">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h3 id="">Awesome Services</h3>
                        <p class="lead pd-5">
                            OUR SOME AWESOME SERVICES
                        </p>
                        <div id="carouselServices" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md px-md-15">
                                            <div class="text-dark pb-8">
                                                <i class="fa fa-shield fa-5x">
                                                </i>
                                            </div>
                                            <h4 class="text-dark">FULLY COSTUMABLE THEAM</h4>
                                            <br>
                                            <p class="text-secondary">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla dolor fuga soluta quo quos delectus praesentium aliquam officia? Repellendus, natus.
                                            </p>
                                        </div>


                                        <div class="col-md px-md-15">
                                            <div class="text-dark pb-8">
                                                <i class="fa fa-cog fa-5x">
                                                </i>
                                            </div>
                                            <h4 class="text-dark">SETTINGS</h4>
                                            <br>
                                            <p class="text-secondary">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla dolor fuga soluta quo quos delectus praesentium aliquam officia? Repellendus, natus.
                                        </div>


                                        <div class="col-md px-md-15">
                                            <div class="text-dark pb-8">
                                                <i class="fa fa-bolt fa-5x">
                                                </i>
                                            </div>
                                            <h4 class="text-dark">STUNNING UPDATE VERSION7.1</h4>
                                            <br>
                                            <p class="text-secondary">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla dolor fuga soluta quo quos delectus praesentium aliquam officia? Repellendus, natus.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md px-md-15">
                                            <div class="text-dark pb-8">
                                                <i class="fa fa-shield fa-5x">
                                                </i>
                                            </div>
                                            <h4 class="text-dark">wpmal multiples prohihd</h4>
                                            <br>
                                            <p class="text-secondary">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla dolor fuga soluta quo quos delectus praesentium aliquam officia? Repellendus, natus.
                                            </p>
                                        </div>




                                        <div class="col-md px-md-15">
                                            <div class="text-dark pb-8">
                                                <i class="fa fa-cog fa-5x">
                                                </i>
                                            </div>
                                            <h4 class="text-dark">STUNNING CUSTOM</h4>
                                            <br>
                                            <p class="text-secondary">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla dolor fuga soluta quo quos delectus praesentium aliquam officia? Repellendus, natus.
                                            </p>
                                        </div>

                                        <div class="col-md px-md-15">
                                            <div class="text-dark pb-8">
                                                <i class="fa fa-bolt fa-5x">
                                                </i>
                                            </div>
                                            <h4 class="text-dark">STUNNING UPDATE VERSION7.1</h4>
                                            <br>
                                            <p class="text-secondary">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla dolor fuga soluta quo quos delectus praesentium aliquam officia? Repellendus, natus.
                                            </p>
                                        </div>

                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md px-md-15">
                                            <div class="text-dark pb-8">
                                                <i class="fa fa-shield fa-5x">
                                                </i>
                                            </div>
                                            <h4 class="text-dark">wpmal multiples prohihd</h4>
                                            <br>
                                            <p class="text-secondary">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla dolor fuga soluta quo quos delectus praesentium aliquam officia? Repellendus, natus.
                                            </p>
                                        </div>




                                        <div class="col-md px-md-15">
                                            <div class="text-dark pb-8">
                                                <i class="fa fa-cog fa-5x">
                                                </i>
                                            </div>
                                            <h4 class="text-dark">STUNNING CUSTOM</h4>
                                            <br>
                                            <p class="text-secondary">
                                                 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla dolor fuga soluta quo quos delectus praesentium aliquam officia? Repellendus, natus.
                                            </p>
                                        </div>

                                        <div class="col-md px-md-15">
                                            <div class="text-dark pb-8">
                                                <i class="fa fa-bolt fa-5x">
                                                </i>
                                            </div>
                                            <h4 class="text-dark">STUNNING UPDATE VERSION7.1</h4>
                                            <br>
                                            <p class="text-secondary">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla dolor fuga soluta quo quos delectus praesentium aliquam officia? Repellendus, natus.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <ol class="carousel-indicator">
                                <li data-target="#carouselServices" data-slide-to="0" class="active">
                                </li>

                                <li data-target="#carouselServices" data-slide-to="1">
                                </li>

                                <li data-target="#carouselServices" data-slide-to="2">
                                </li>
                            </ol>

                            <a href="#carouselServices" class="carousel-control-prev" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                                <span class="sr-only">Previous</span>
                            </a>


                            <a href="#carouselServices" class="carousel-control-next" role="button" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div>
                    </div>
                </div>


            </div>
        </section>
    </main>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <section id="work">
        <div class="content-title">
            <h3 class="text-center">OUR WORK</h3>
            <br><br>
        </div>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-md-3 col-sm-4">
                    <div class="img-wrapper">
                        <a href="images/w1.png">
                            <img src="images/w1.png" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="img-wrapper">
                        <a href="images/w2.jpg">
                            <img src="images/w2.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="img-wrapper">
                        <a href="images/w3.jpg">
                            <img src="images/w3.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="img-wrapper">
                        <a href="images/w4.jpg">
                            <img src="images/w4.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="img-wrapper">
                        <a href="images/w5.jpg">
                            <img src="images/w5.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="img-wrapper">
                        <a href="images/w6.jpg">
                            <img src="images/w6.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="img-wrapper">
                        <a href="images/w7.jpg">
                            <img src="images/w7.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="img-wrapper">
                        <a href="images/w8.jpg">
                            <img src="images/w8.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <br><br><br>
    <section id="team">
        <div class="container">
            <br><br><br>
            <div class="row">
                <div class="col-md-12">
                    <h5>A PASSION TEAM</h5>
                    <h2>meet the leaders</h2>
                    <p class="desc">
                       meet the leaders of the website.
                    </p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="swiper-container team-member-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team-coverflow">
                                    <div class="team-data-img">
                                        <div class="team-img">
                                            <img src="images/shrut.jfif" alt="">
                                            <div class="team-box-content">
                                                <ul class="team-social white-bg">
                                                    <li class="ti ti-facebook"></li>
                                                    <li class="ti ti-twitter"></li>
                                                    <li class="ti ti-instagram"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="team-text">
                                        <h4 class="color-black font-weight-normal  m-0 text-capitalize">Shruti Chille</h4>
                                        <p class="color-light-gray font-weight-light designation text-capitalize">
                                            CEO & FOUNDER
                                        </p>
                                    </div>


                                    <ul class="team-progress text-left">
                                        <li class="progress-item">
                                            <h6>Progress Management
                                                <span class="float-right">
                                                    <b class="count">82</b>%
                                                </span>
                                            </h6>
                                            <div class="progress">
                                                <span class="progress-bar w-82" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></span>
                                            </div>
                                        </li>


                                        <li class="progress-item">
                                            <h6>
                                                SEO Services
                                                <span class="float-right">
                                                    <b class="count">77</b>%
                                                </span>
                                            </h6>
                                            <div class="progress">
                                                <span class="progress-bar w-77" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="team-coverflow">
                                    <div class="team-data-img">
                                        <div class="team-img">
                                            <img src="images/sampe.jfif" alt="">
                                            <div class="team-box-content">
                                                <ul class="team-social white-bg">
                                                    <li class="ti ti-facebook"></li>
                                                    <li class="ti ti-twitter"></li>
                                                    <li class="ti ti-instagram"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-text">
                                        <h4 class="color-black font-weight-normal  m-0 text-capitalize">Sampada Joshi</h4>
                                        <p class="color-light-gray font-weight-light designation text-capitalize">
                                            DIRECTOR
                                        </p>
                                    </div>


                                    <ul class="team-progress text-left">
                                        <li class="progress-item">
                                            <h6>Progress Management
                                                <span class="float-right">
                                                    <b class="count">82</b>%
                                                </span>
                                            </h6>
                                            <div class="progress">
                                                <span class="progress-bar w-82" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></span>
                                            </div>
                                        </li>


                                        <li class="progress-item">
                                            <h6>
                                                SEO Services
                                                <span class="float-right">
                                                    <b class="count">77</b>%
                                                </span>
                                            </h6>
                                            <div class="progress">
                                                <span class="progress-bar w-77" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="team-coverflow">
                                    <div class="team-data-img">
                                        <div class="team-img">
                                            <img src="images/palli.jfif" alt="">
                                            <div class="team-box-content">
                                                <ul class="team-social white-bg">
                                                    <li class="ti ti-facebook"></li>
                                                    <li class="ti ti-twitter"></li>
                                                    <li class="ti ti-instagram"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-text">
                                        <h4 class="color-black font-weight-normal  m-0 text-capitalize">Pratiksha Chitakute</h4>
                                        <p class="color-light-gray font-weight-light designation text-capitalize">
                                            VICE PRESIDENT
                                        </p>
                                    </div>


                                    <ul class="team-progress text-left">
                                        <li class="progress-item">
                                            <h6>Progress Management
                                                <span class="float-right">
                                                    <b class="count">82</b>%
                                                </span>
                                            </h6>
                                            <div class="progress">
                                                <span class="progress-bar w-82" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></span>
                                            </div>
                                        </li>


                                        <li class="progress-item">
                                            <h6>
                                                SEO Services
                                                <span class="float-right">
                                                    <b class="count">77</b>%
                                                </span>
                                            </h6>
                                            <div class="progress">
                                                <span class="progress-bar w-77" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></span>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="swiper-button-next slider-arrows">
                            <i class="ti ti-angle-right"></i>
                        </div>

                        <div class="swiper-button-prev slider-arrows">
                            <i class="ti ti-angle-left"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br>
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <p class="text-white">NEW UPDATES</p>
                    <br>
                    <h2 class="text-white">LOOKING FOR EXCLUSIVING DIGITAL SERVICES</h2>
                    <br><br>
                    <a href="https://hub.packtpub.com/category/programming/languages/" class="btn">LEARN MORE</a>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>



    <section id="course">

        <h2 class="heading">Our Latest Courses</h2>

        <div class="box-container">

            <div class="box" data-aos="flip-right">
                <img src="images/java.png" alt=""><a href="https://www.w3schools.com/java/default.asp">
          
                    <p><strong>Java:</strong> Java is a high-level programming language developed by Sun Microsystems. ... Instead, Java programs are interpreted by the Java Virtual Machine, or JVM, which runs on multiple platforms. This means all Java programs are multiplatform and can run on different platforms, including Macintosh, Windows, and Unix computers.
                    </p>
                </a>
            </div>

            <div class="box" data-aos="flip-down">
                <img src="images/css3.png" alt=""><a href="https://www.w3schools.com/w3css/default.asp">
                    <p>Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language.Although most often used to set the visual style of web pages and user interfaces written in HTML and XHTML, the language can be applied to any XML document, includi.
                    </p>
                </a>
            </div>

            <div class="box" data-aos="flip-left">
                <img src="images/jquery.png" alt=""><a href="https://www.w3schools.com/jquery/default.asp">
                    <p>jQuery is a lightweight, "write less, do more", JavaScript library. The purpose of jQuery is to make it much easier to use JavaScript on your website. jQuery takes a lot of common tasks that require many lines of JavaScript code to accomplish, and wraps them into methods that you can call with a single line of code.

                    </p>
                </a>
            </div>

            <div class="box" data-aos="flip-right"> <a href="https://www.w3schools.com/html/">
                    <img src="vs.png" alt="">
                    <p>HTML5 is a markup language used for structuring and presenting content on the World Wide Web. It is the fifth and last major HTML version that is a World Wide Web Consortium (W3C) recommendation.
                    </p>
                </a>
            </div>

            <div class="box" data-aos="flip-up">
                <img src="images/skype.svg" alt=""><a href="https://support.skype.com/en/faq/FA6/what-is-skype#:~:text=Skype%20is%20software%20that%20enables,your%20mobile%2C%20computer%20or%20tablet.">
                    <p>You can create a Skype account at no cost. Once you do, you can use your Skype account to make free voice or video calls from your Internet connection to other users also using the Internet, though you can't call people on a cell phone or landline. ... You can send pictures, video and other files using this service.
                    </p>
                </a>
            </div>

            <div class="box" data-aos="flip-right">
                <img src="images/javascript.svg" alt=""><a href="https://www.w3schools.com/js/DEFAULT.asp">
                    <p>JavaScript is a text-based programming language used both on the client-side and server-side that allows you to make web pages interactive.
                    </p>
                </a>
            </div>

        </div>

    </section>
    <br><br><br><br><br><br>
    <h2 class="text-center">Latest Programming language</h2>
    <br><br>
    <div class="container" id="latest">
        <div class="row">
            <div class="col-md-12">
                <div id="news-slider" class="owl-Carousel">
                    <div class="post-slide">
                        <ul class="post-info">

                            <li><i class="fa fa-tag"></i><a href="">php</a></li>
                            <li><i class="fa fa-calendar"></i><a href="">jan 30 2021</a></li>
                            <li><i class="fa fa-comment"></i><a href="">1</a></li>
                        </ul>
                        <div class="post-img">
                            <img src="images/php.png" alt="">
                            <a href="https://www.w3schools.com/php/default.asp" class="read">read more</a>
                        </div>
                        <div class="post-content">
                            <span class="post-author">
                                <a href=""><img src="images/php.png" alt=""></a>
                            </span>
                            <h3 class="post-title">
                                Latest News Post
                            </h3>
                            <p class="post-description">
                                PHP is a server side scripting language that is embedded in HTML. It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites. It is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server.
                            </p>
                        </div>
                    </div>


                    <div class="post-slide">
                        <ul class="post-info">
                            <li><i class="fa fa-tag"></i><a href="">visual Studies</a></li>
                            <li><i class="fa fa-calendar"></i><a href="">jan 31 2021</a></li>
                            <li><i class="fa fa-comment"></i><a href="">6</a></li>
                        </ul>

                        <div class="post-img">
                            <img src="images/vs.png" alt="">
                            <a href="https://www.geeksforgeeks.org/introduction-to-visual-studio/" class="read">read more</a>
                        </div>
                        <div class="post-content">
                            <span class="post-author">
                                <a href=""><img src="images/vs.png" alt=""></a>
                            </span>
                            <h3 class="post-title">
                                Latest News Post
                            </h3>
                            <p class="post-description">
                                PHP is a server side scripting language that is embedded in HTML. It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites. It is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server.
                            </p>
                        </div>
                    </div>



                    <div class="post-slide">
                        <ul class="post-info">
                            <li><i class="fa fa-tag"></i><a href="">python</a></li>
                            <li><i class="fa fa-calendar"></i><a href="">feb 2 2021</a></li>
                            <li><i class="fa fa-comment"></i><a href="">1</a></li>
                        </ul>

                        <div class="post-img">
                            <img src="images/python.jpg" alt="">
                            <a href="https://www.w3schools.com/python/default.asp" class="read">read more</a>
                        </div>
                        <div class="post-content">
                            <span class="post-author">
                                <a href=""><img src="images/python.jpg" alt=""></a>
                            </span>
                            <h3 class="post-title">
                                Latest News Post
                            </h3>
                            <p class="post-description">
                                Python is a general-purpose coding language—which means that, unlike HTML, CSS, and JavaScript, it can be used for other types of programming and software development besides web development. That includes back end development, software development, data science and writing system scripts among other things.
                            </p>
                        </div>
                    </div>



                    <div class="post-slide">
                        <ul class="post-info">
                            <li><i class="fa fa-tag"></i><a href="">android</a></li>
                            <li><i class="fa fa-calendar"></i><a href="">mar 16 2021</a></li>
                            <li><i class="fa fa-comment"></i><a href="">1</a></li>
                        </ul>

                        <div class="post-img">
                            <img src="images/android.png" alt="">
                            <a href="https://www.elprocus.com/what-is-android-introduction-features-applications/" class="read">read more</a>
                        </div>
                        <div class="post-content">
                            <span class="post-author">
                                <a href=""><img src="images/android.png" alt=""></a>
                            </span>
                            <h3 class="post-title">
                                Latest News Post
                            </h3>
                            <p class="post-description">
                                Android is a mobile operating system based on a modified version of the Linux kernel and other open source software, designed primarily for touchscreen mobile devices such as smartphones and tablets.Android is a Linux based operating system it is designed primarily for touch screens mobile devices such as smartphones and tablet computers.
                            </p>
                        </div>
                    </div>





                    <div class="post-slide">
                        <ul class="post-info">
                            <li><i class="fa fa-tag"></i><a href="">c++</a></li>
                            <li><i class="fa fa-calendar"></i><a href="">mar 26 2021</a></li>
                            <li><i class="fa fa-comment"></i><a href="">10</a></li>
                        </ul>
                        <div class="post-img">
                            <img src="images/c++.jpg" alt="">
                            <a href="https://www.w3schools.com/cpp/default.asp" class="read">read more</a>
                        </div>
                        <div class="post-content">
                            <span class="post-author">
                                <a href=""><img src="images/c++.jpg" alt=""></a>
                            </span>
                            <h3 class="post-title">
                                Latest News Post
                            </h3>
                            <p class="post-description">
                                C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or "C with Classes".
                            </p>
                        </div>
                    </div>




                    <div class="post-slide">
                        <ul class="post-info">
                            <li><i class="fa fa-tag"></i><a href="">swift</a></li>
                            <li><i class="fa fa-calendar"></i><a href="">apr 21 2021</a></li>
                            <li><i class="fa fa-comment"></i><a href="">1</a></li>
                        </ul>
                        <div class="post-img">
                            <img src="images/swift.jpg" alt="">
                            <a href="https://docs.swift.org/swift-book/" class="read">read more</a>
                        </div>
                        <div class="post-content">
                            <span class="post-author">
                                <a href=""><img src="images/swift.jpg" alt=""></a>
                            </span>
                            <h3 class="post-title">
                                Latest News Post
                            </h3>
                            <p class="post-description">
                                Swift is a powerful and intuitive programming language for macOS, iOS, watchOS, tvOS and beyond. Writing Swift code is interactive and fun, the syntax is concise yet expressive, and Swift includes modern features developers love. Swift code is safe by design, yet also produces software that runs lightning-fast.
                            </p>
                        </div>
                    </div>


                    <div class="post-slide">
                        <ul class="post-info">
                            <li><i class="fa fa-tag"></i><a href="">kotlin</a></li>
                            <li><i class="fa fa-calendar"></i><a href="">may 21 2021</a></li>
                            <li><i class="fa fa-comment"></i><a href="">6</a></li>
                        </ul>
                        <div class="post-img">
                            <img src="images/kotlin.png" alt="">
                            <a href="https://developer.android.com/kotlin" class="read">read more</a>
                        </div>
                        <div class="post-content">
                            <span class="post-author">
                                <a href=""><img src="images/kotlin.png" alt=""></a>
                            </span>
                            <h3 class="post-title">
                                Latest News Post
                            </h3>
                            <p class="post-description">
                                Kotlin is a cross-platform, statically typed, general-purpose programming language with type inference. Kotlin is designed to interoperate fully with Java, and the JVM version of Kotlin's standard library depends on the Java Class Library, but type inference allows its syntax to be more concise.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br><br>

    <section class="numbers text-center" id="testimonials">
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-3 cols-sm-7">
                    <i class="fa fa-snowflake-o"></i>
                    <p class="count fs-35 color-fff fw-700">999</p>
                    <h3 class="color-aaa">+ PROJECTS</h3>
                </div>

                <div class="col-md-3 cols-sm-7">
                    <i class="fa fa-balance-scale"></i>
                    <p class="count fs-35 color-fff fw-700">837</p>
                    <h3 class="color-aaa">+ VIDEOS</h3>
                </div>

                <div class="col-md-3 cols-sm-7">
                    <i class="fa fa-bell"></i>
                    <p class="count fs-35 color-fff fw-700">1042</p>
                    <h3 class="color-aaa">+ CERTIFICATE</h3>
                </div>

                <div class="col-md-3 cols-sm-7">
                    <i class="fa fa-circle"></i>
                    <p class="count fs-35 color-fff fw-700">1600</p>
                    <h3 class="color-aaa">+ STUDENTS</h3>
                </div>
            </div>
        </div>
    </section>

    <br><br><br><br><br><br><br>


    <section id="testimonial">
        <h1 class="heading">What Our Students Says</h1>
        <div class="box-container">
            <div class="box" data-aos="flip-left">
                <img src="images/pooja.jpg" alt="">
                <div class="info">
                    <p><i class="fa fa-quote-left"></i>School has been tough. Transferring to all online learning has been the biggest challenge this year for me. As a student, I’d say I’ve usually kept up with all my work for all my classes.<i class="fa fa-quote-right"></i></p>
                    <h2>--Jadhav Pooja</h2>
                </div>
            </div>

            <div class="box" data-aos="flip-right">
                <img src="images/srushti.jpg" alt="">
                <div class="info">
                    <p><i class="fa fa-quote-left"></i>Being in a physical classroom is tremendously different from learning online. In a classroom, most of your focus is there, unlike virtually, the temptations are REAL!<i class="fa fa-quote-right"></i></p>
                    <h2>--Bobe Srushti</h2>
                </div>
            </div>

            <div class="box" data-aos="flip-left">
                <img src="images/shruti.jpg" alt="">
                <div class="info">
                    <p><i class="fa fa-quote-left"></i>This online learning has affected me personally because during this time, I found myself turning in assignments weeks late. It wasn’t because I was having trouble, it was because I had no motivation and energy to do them.<i class="fa fa-quote-right"></i></p>
                    <h2>--Dhanure Shruti</h2>
                </div>
            </div>

            <div class="box" data-aos="flip-right">
                <img src="images/pratiksha.jpg" alt="">
                <div class="info">
                    <p><i class="fa fa-quote-left"></i>This has taught me that online learning will not be for me in the future! Maybe for one or two classes, but overall I plan for my school life to be set in a physical classroom for the most part.<i class="fa fa-quote-right"></i></p>
                    <h2>--Chavan Pratiksha</h2>
                </div>
            </div>

        </div>

    </section>

    <br><br><br><br><br><br><br><br>
    <footer>
        <div id="contact">
            <div class="container">
                <div class="row">
                    <br><br>
                    <div class="col-md-6">
                        <div id="contact-left">
                            <h2>EDUCTION</h2>
                            <br>
                            <p>
                                We belive in <strong>High Level Eduction</strong>,
                                <strong>Technology</strong> and techlnology that student can learn programming easily.This site made for everyone who wants perfect in programming..
                            </p>
                            <div id="contact-info">
                                <address>
                                    <strong>Address:</strong><br>
                                    <p>223 Nandi Stop,Latur</p>
                                    New Shop,Near by:Gandhi chawk.
                                </address>
                                <div id="phone-fax-email">
                                    <p>
                                        <strong>Phone:</strong><span>
                                            00986758493
                                        </span>
                                        <br>
                                        <strong>Email:</strong><span>
                                            shfuhrd@1234.com
                                        </span>
                                        <br>
                                        <strong>Fax:</strong><span>
                                            00986758493
                                        </span>
                                        <br>

                                    </p>
                                </div>
                            </div>

                            <ul class="social-list">

                                <li><a href="" class="social-icon icon-white">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>


                                <li><a href="" class="social-icon icon-white">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.youtube.com/watch?v=aYjGXzktatA" class="social-icon icon-white">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                                <li><a href="" class="social-icon icon-white">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="contact-right">
                            <h3>Contact Us</h3>
                            <br>
                            <form>
                                <input type="text" name="full name" placeholder="Full Name" class="form-control" required>
                                <input type="text" name="email" placeholder="Email Address" class="form-control" required>
                                <textarea type="text" rows="5" name="message" placeholder="message...." class="form-control" required>
                            </textarea>

                                <div id="send-btn">
                                    <a href="" class="btn-btn-lg btn-general btn-white">
                                        SEND
                                    </a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--**********************top cursor*******************-->
<div class="container scrolltop float-right pr-5">
  <i class="fa fa-angle-up" onclick="topFunction()" id="myBtn"></i>

  
</div>

<!--////////////////////footer /////////////////////////-->
        <div id="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="footer-copyrights">
                            <p>Copyrights &copy;2021</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="footer-menu">
                            <ul>
                                <li> <a href="#home">HOME</a></li>
                                <li> <a href="#contents">SERVICES</a></li>
                                <li> <a href="#work">WORK</a></li>
                                <li> <a href="#team">TEAM</a></li>
                                <li> <a href="#testimonial">STUDENTS</a></li>
                                <li> <a href="D:\data\demo.ipynb">COURSE</a></li>
                                <a href="Logout.php">Logout</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>



<script type="text/javascript">
  mybutton= document.getElementById("myBtn")
  //when the users scroll down 20 px from the of the document show the button
  window.onscroll=function(){ scrollfunction()  };
  function scrollfunction(){
  if(document.body.scrolltop > 300 || document.documentElement.scrolltop>100)

  {
    myButton.style.display="block";

  } 
  else{
    myButton.style.display="none";

  }
  }
  //when the users click on the button,scroll to the top of the document
  function topFunction()
{
  document.body.scrollTop=0;//for safari
  document.documentElement.scrollTop=0;//for chrome
}
</script>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.js"></script>


    <script src="jquery.counterup.min.js"></script>

    <script src="jquery.waypoints.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script src="main.js"></script>
</body>
</html>

