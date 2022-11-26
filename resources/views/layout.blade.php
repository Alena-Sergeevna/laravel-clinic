<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/styles/style.css">

    @yield('link')
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<div style="max-width: 90%; margin-left: auto; margin-right: auto;">
    <header class="header">
        <nav class="menu">
            <ul class="topnav">
                <li><a class="active" href="{{@route('client')}}">Главная</a></li>
                <li><a href="{{@route('client.services')}}">Услуги и цены</a></li>
                <li><a href="{{@route('client.special')}}">Специалисты</a></li>
                <!-- <li><a href="#contact">Новости</a></li> -->
                <li><a href="{{route('contact')}}">Контакты</a></li>

                <li class="right"><a href="{{route('about')}}">наши филиалы</a></li>
            </ul>
        </nav>
    </header>
    <section class="logo">
        <div style="padding:0 16px;">
            <img src="/images/main.jpg" alt="1" width="90%"  >
        </div>
    </section>
    <section class="main">
        <h1> Круглосуточная <br> ветеринарная клиника </h1>
        <p> У нас вы можете записаться на приём по телефону и получить консультацию </p>
        <div style="display: flex;">
            <div style="padding-left: 1%;"> <img src="/images/logo.png" alt="1"> </div>
            <div style="padding-left: 1%;"> <img src="/images/logo.png" alt="1"> </div>
            <div style="padding-left: 1%;"> <img src="/images/logo.png" alt="1"> </div>
        </div>
    </section>

    @yield('content')
</div>
</body>
</html>
