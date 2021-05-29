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
    <top-component></top-component>

    <section>
        <div class="uparrow">
            <a href=""><i>Top</i></a>
        </div>
    </section>

    <services-component></services-component>

    <skill-component></skill-component>



        <portfolio-img></portfolio-img>


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
            <p>All Right reserved by rabbialrabbi@gmail.com <a href="{{route('message')}}">@</a> 2021</p>
        </div>
    </section>
</div>
<script src="js/app.js"></script>

<script>
    window.onscroll = function () {
        if(document.body.scrollTop > 150 || document.documentElement.scrollTop > 150){
            $('.uparrow').show()
        }
    }

</script>
</body>
</html>
