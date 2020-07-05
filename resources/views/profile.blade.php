<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css">
    <link rel="stylesheet" href="css/app.css">
    <title>Profile</title>
</head>
<body>
<div id="app">
    <section id="top">
        <top-component></top-component>

        {{--<div class="intro">
            <nav class="intro-nav">
                <div class="row">
                    <div class="col-4">
                        <ul class="intro-nav_logo">
                            <li class="intro-nav_left-but"><a href="#">R. Anowar</a></li>
                        </ul>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-6 intro-nav_right">
                        <ul>
                            <li class="intro-nav_right-but"><a href="#project">Project</a></li>
                            <li class="intro-nav_right-but"><a href="#skill">About</a></li>
                            <li class="intro-nav_right-but"><a href="#contact">Blog</a></li>
                            <li class="intro-nav_right-but"><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="intro-text">
                <p>Hello, I'm <span>Rabbial Anowar</span></p>
                <p>A Full-Stack Web Developer</p>
                <button onclick="window.location.href='#project'">View My Project</button>
            </div>
        </div>--}}
{{--        <svg--}}
{{--            preserveAspectRatio="none"--}}
{{--            viewBox="0 0 100 102"--}}
{{--            height="50"--}}
{{--            width="100%"--}}
{{--            version="1.1"--}}
{{--            xmlns="http://www.w3.org/2000/svg"--}}
{{--            class="intro-svg"--}}
{{--        >--}}
{{--            <path d="M0 0 L50 100 L100 0 Z" ></path>--}}
{{--        </svg>--}}

    </section>

    <section>
        <div class="uparrow">
            <a href=""><i>Top</i></a>
        </div>
    </section>

    <section id="service" class="service">
        <div class="container">
            <div class="header">
                <p>SERVICES</p>
                <div class="u-line"></div>
            </div>
            <div class="glide">
                <div class="row">
                    <div class="col-sm-4 service-item ">
                        <img src="{{asset('image/fe_logo.png')}}" alt="FrontEnd Logo">
                        <h5>FRONT END</h5>
                        <p>Clean, modern designs - optimized for performance, search engines, and converting users to customers.</p>
                    </div>
                    <div class="col-sm-4 service-item">
                        <img src="{{asset('image/be_logo.png')}}" alt="BackEnd Logo">
                        <h5>BACK END</h5>
                        <p>Securite Server side script, Cookies and session handling and different payment gateway develop Restful API</p>
                    </div>
                    <div class="col-sm-4 service-item">
                        <img src="{{asset('image/db_logo.png')}}" alt="Database Logo">
                        <h5>DATABASE DESIGN</h5>
                        <p>Well organized database structure, database normalization and take care of redundancy and effective database structure</p>
                    </div>
                </div>
            </div>
        </div>
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1920 80" style="enable-background:new 0 0 1920 80;" xml:space="preserve">
                <polygon points="0,0 960,39.6 1920,80 0,80 "/>
            </svg>
    </section>
    <section id="skill" class="skill">
        <div class="container">
            <div class="header pb-5">
                <p>ABOUT</p>
                <div class="u-line"></div>
            </div>

            <div class="row">
                <skill-parameter></skill-parameter>
                <skill-search></skill-search>
            </div>
        </div>
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1920 80" style="enable-background:new 0 0 1920 80;" xml:space="preserve">
                <polygon points="0,0 960,39.6 1920,80 0,80 "/>
            </svg>
    </section>

    <section id="project" class="portfolio">
        <portfolio-img></portfolio-img>
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

    <section id="contact" class="contact">
        <div class="container">
            <div class="header pb-5 setting">
                <p>Get In Touch</p>
                <div class="u-line"></div>
            </div>
            <send-message csrf = {{csrf_token()}}></send-message>
        </div>

    </section>

    <section class="contact_button">
        <div class="container">
            <p>All Right reserved by rabbialrabbi@gmail.com <a href="{{route('message')}}">@</a> 2020</p>
        </div>
    </section>
</div>
<script src="js/app.js"></script>
<script>
    // $(document).ready(function () {
    //    $('.portfolio_img').each(function () {
    //            $(this).hover(
    //                function(){
    //                   $(this).find('img').removeClass('d-block').addClass('d-none');
    //                   $(this).find('div').removeClass('d-none').addClass('d-block');
    //                },
    //                function(){
    //                    $(this).find('img').removeClass('d-none').addClass('d-block');
    //                    $(this).find('div').removeClass('d-block').addClass('d-none');
    //                }
    //            );
    //    })
    // })

    window.onscroll = function () {
        if(document.body.scrollTop > 150 || document.documentElement.scrollTop > 150){
            $('.uparrow').show()
        }
    }

</script>
</body>
</html>
