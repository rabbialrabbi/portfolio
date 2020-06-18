<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css">
    <title>Profile</title>
</head>
<body>
<div id="app">
    <section>
        <div class="intro">
            <nav class="intro-nav">
                <div class="row">
                    <div class="col-4">
                        <ul class="intro-nav_logo">
                            <li class="intro-nav_left-but"><a href="">R. Anowar</a></li>
                        </ul>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-6 intro-nav_right">
                        <ul>
                            <li class="intro-nav_right-but"><a href="">Project</a></li>
                            <li class="intro-nav_right-but"><a href="">About</a></li>
                            <li class="intro-nav_right-but"><a href="">Blog</a></li>
                            <li class="intro-nav_right-but"><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="intro-text">
                <p>Hello, I'm <span>Rabbial Anowar</span></p>
                <p>A Full-Stack Web Developer</p>
                <button>View Profile</button>
            </div>
        </div>
        <svg
            preserveAspectRatio="none"
            viewBox="0 0 100 102"
            height="50"
            width="100%"
            version="1.1"
            xmlns="http://www.w3.org/2000/svg"
            class="intro-svg"
        >
            <path d="M0 0 L50 100 L100 0 Z" ></path>
        </svg>
    </section>

    <section class="service">
        <div class="container">
            <div class="header">
                <p>SERVICES</p>
                <div class="u-line"></div>
            </div>
                <div class="glide">
                    <div class="glide__track">
                        <ul class="row glide__slides">
                            <li class="col-sm-4 service-item glide__slide">
                                <img src="{{asset('image/fe_logo.png')}}" alt="FrontEnd Logo">
                                <h5>FRONT END</h5>
                                <p>Clean, modern designs - optimized for performance, search engines, and converting users to customers.</p>
                            </li>
                            <li class="col-sm-4 service-item glide__slide">
                                <img src="{{asset('image/be_logo.png')}}" alt="BackEnd Logo">
                                <h5>BACK END</h5>
                                <p>Clean, modern designs - optimized for performance, search engines, and converting users to customers.</p>
                            </li>
                            <li class="col-sm-4 service-item glide__slide">
                                <img src="{{asset('image/db_logo.png')}}" alt="Database Logo">
                                <h5>DATABASE DESIGH</h5>
                                <p>Clean, modern designs - optimized for performance, search engines, and converting users to customers.</p>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1920 80" style="enable-background:new 0 0 1920 80;" xml:space="preserve">
                <polygon points="0,0 960,39.6 1920,80 0,80 "/>
            </svg>
    </section>
    <section class="skill">
        <div class="container">
            <div class="header pb-5">
                <p>ABOUT</p>
                <div class="u-line"></div>
            </div>

            <div class="row">
                <div class="col-sm-6 skill_parameter">
                        <h4>Skills</h4>
                        <p>HTML (60%)</p>
                        <div class="skill_parameter-body">
                            <div class="skill_parameter-fill nok"></div>
                        </div>
                        <p>CSS (30%)</p>
                        <div class="skill_parameter-body">
                            <div class="skill_parameter-fill htc"></div>
                        </div>
                        <p>JavaScript (80%)</p>
                        <div class="skill_parameter-body">
                            <div class="skill_parameter-fill sam" ></div>
                        </div>
                        <p>Vue.js (80%)</p>
                        <div class="skill_parameter-body">
                            <div class="skill_parameter-fill sam" ></div>
                        </div>
                        <p>JQuery (80%)</p>
                        <div class="skill_parameter-body">
                            <div class="skill_parameter-fill sam" ></div>
                        </div>
                        <p>PHP (70%)</p>
                        <div class="skill_parameter-body">
                            <div class="skill_parameter-fill iph"></div>
                        </div>
                        <p>Laravel (10%)</p>
                        <div class="skill_parameter-body">
                            <div class="skill_parameter-fill lgp"></div>
                        </div>
                    </div>

                    <skill-search></skill-search>


                </div>
        </div>
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1920 80" style="enable-background:new 0 0 1920 80;" xml:space="preserve">
                <polygon points="0,0 960,39.6 1920,80 0,80 "/>
            </svg>
    </section>

    <section class="portfolio">
        <div class="container">
            <div class="header_white pb-5">
                <p>PORTFOLIO</p>
                <div class="u-line"></div>
            </div>

            <div class="row justify-content-md-center no-gutters portfolio_body ">
                <img class="col-sm-4" src="{{asset('image/ticket_front.jpg')}}" alt="">
                <img class="col-sm-4" src="{{asset('image/admin_front.jpg')}}" alt="">
                <img class="col-sm-4" src="{{asset('image/monster_log.jpg')}}" alt="">
                <img class="col-sm-4" src="{{asset('image/lov_front.jpg')}}" alt="">
                <img class="col-sm-4" src="{{asset('image/legend_front.jpg')}}" alt="">
            </div>
        </div>
        <svg
            preserveAspectRatio="none"
            viewBox="0 0 100 102"
            height="50"
            width="100%"
            version="1.1"
            xmlns="http://www.w3.org/2000/svg"
            class="intro-svg"
        >
            <path d="M0 0 L50 100 L100 0 Z" ></path>
        </svg>
    </section>

    <section class="contact">
        <div class="container">
            <div class="header pb-5 setting">
                <p>Get In Touch</p>
                <div class="u-line"></div>
            </div>

            <form action="">
                <div class="contact_form-body ">
                    <div class="row justify-content-center pt-5">
                        <h6>Have A Project You Like To Discuss ?</h6>
                    </div>

                    <div class="row justify-content-end">
                        <div><input type="text" placeholder="Name"></div>
                        <div><input type="text" placeholder="Email"></div>
                        <div><textarea name="" id="" rows="6" placeholder="Message"></textarea></div>
                        <div><input type="submit" name="send" value="Send"></div>
                    </div>
                </div>
            </form>
        </div>

    </section>

    <section class="contact_button">
        <div class="container">
            <p>All Right reserved by Rabbial Anower @ 2020</p>
        </div>
    </section>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
