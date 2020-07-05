<template>
    <div class="top-particles">
        <div class="top-particles_background">
            <vue-particles color="#DCDCDC"
                           :particleOpacity="0.7"
                           :particlesNumber="80"
                           shapeType="circle"
                           :particleSize="4"
                           linesColor="#dedede"
                           :linesWidth="1"
                           :lineLinked="true"
                           :lineOpacity="0.4"
                           :linesDistance="150"
                           :moveSpeed="3"
                           :hoverEffect="true"
                           hoverMode="grab"
                           :clickEffect="true"
                           clickMode="push"
                           style="background-color: #191C1D;"
            >
            </vue-particles>
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 1920 80" style="enable-background:new 0 0 1920 80;" xml:space="preserve">
                <polygon points="0,0 960,39.6 1920,80 0,80 "/>
            </svg>
        </div>

        <div class="intro">
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
        </div>

    </div>

</template>
<!-- rgb(25,28,29) #191C1D-->
