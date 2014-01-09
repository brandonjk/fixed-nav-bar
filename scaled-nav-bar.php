<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Brandon Kwong / Scaled Nav-Bar / Demo</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript"> 
        $(document).ready(function() {
            $('.parent').click(function() {
                $('.sub-nav').toggleClass('visible');
            });
        });
        $(document).ready(function() {
            $('.parent-s').click(function() {
                $('.sub-nav-s').toggleClass('visible');
            });
        });        
    </script>     
    <link href="css/codex.css" rel="stylesheet" type="text/css">
</head>
<body>

<header>
    <nav>
        <div id="nav-logo">
            <a href="#"><h1>Scaled Nav-Bar</h1></a>
            <!-- Note: you can also place your logo image here
            <a href="#"><img src="logo.png" width="100%" alt="logo"></a>
            -->
        </div>
    <!-- Smaller logo if necessary for media query -->
        <div id="nav-logo-s">
            <a href="#"><h1>Scaled Nav-Bar</h1></a>
            <!-- Note: you can also place your logo image here
            <a href="#"><img src="logo-s.png" width="100%" alt="logo"></a>
            -->
        </div>
    <!-- Menu Primary -->
        <div id="nav-menu">
            <ul>
                <li><a href="#" id="item-1">About</a></li>
                <li class="parent"><a href="#" id="item-2">Explore</a>
                <!-- Secondary Menu -->
                    <div class="arrow sub-nav"></div>
                    <ul class="sub-nav">
                        <li><a href="#1">Africa</a></li>
                        <li><a href="#2">North America</a></li>
                        <li><a href="#3">South America</a></li>                        
                        <li><a href="#4">Asia</a></li>
                        <li><a href="#5">Australia</a></li>
                        <li><a href="#6">Europe</a></li>
                    </ul>
                </li>
                <li><a href="#" id="item-3">Contact</a></li>
            </ul>
        </div>
    <!-- Menu Right -->
        <div id="nav-menu-r">
            <ul>
                <li><a href="#">Sign In</a></li>
            </ul>
        </div>
    <!-- Menu Small -->
        <div id="nav-menu-s">
            <ul>
                <li class="parent"><a href="#"><i class="fa fa-bars"></i></a>
                    <div class="arrow sub-nav"></div>
                    <ul class="sub-nav">
                        <li><a href="#" id="item-1">About</a></li>
                        <li class="parent"><a href="#" id="item-2">Explore</a>
                        <!-- Secondary Menu -->
                            <ul>
                                <li><a href="#1">Africa</a></li>
                                <li><a href="#2">North America</a></li>
                                <li><a href="#3">South America</a></li>                        
                                <li><a href="#4">Asia</a></li>
                                <li><a href="#5">Australia</a></li>
                                <li><a href="#6">Europe</a></li>
                            </ul>
                        </li>
                        <li><a href="#" id="item-3">Contact</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-sign-in"></i></a></li>
            </ul>        
        </div>
    </nav>    
</header>