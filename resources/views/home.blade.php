<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
    <section>
        <div class="container">
            <div class="header">
                <p>SERVICES</p>
                <div class="u-line"></div>
            </div>
            <div class="row service">
                <div class="col-4 service-item">
                    <i>????</i>
                    <h4>FRONT END</h4>
                    <p>Clean, modern designs - optimized for performance, search engines, and converting users to customers.</p>
                </div>
                <div class="col-4 service-item">
                    <i>????</i>
                    <h4>FRONT END</h4>
                    <p>Clean, modern designs - optimized for performance, search engines, and converting users to customers.</p>
                </div>
                <div class="col-4 service-item">
                    <i>????</i>
                    <h4>FRONT END</h4>
                    <p>Clean, modern designs - optimized for performance, search engines, and converting users to customers.</p>
                </div>
            </div>
        </div>

    </section>
    <div class="space">
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
