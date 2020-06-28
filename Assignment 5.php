<!DOCTYPE html>
<html>
<style type="text/css">
    body {
    width: 100vw;
    height: 100vh;
    margin: 0;
    padding: 0;
    background-image: url("similan-5k-8600x5666-4k-wallpaper-8k-islands-thailand-booking-rest-632.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
 
section {
    display: flex;
    justify-content: center;
}
 
nav {
    background-color: rgba(253, 253, 253, 0.78);
    width: 80vw;
    height: 10vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
 
.menu {
    font-size: 2vw;
    padding: 0vh 2vw 0vh 2vw;
    text-decoration: none;
    font-family: 'Germania One';
    color: forestgreen;
}
 
.menuitem {
    text-decoration: none;
    padding: 1vw 4vh 1vw 4vh;
    font-family: 'Lobster';
    font-size: 1.5vw;
    color: black;
}
 
.menuitem:hover {
    background-color: rgba(247, 245, 245, 0.47);
}
 
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 14vw;
    min-height: 20vh;
    padding: 12px 16px;
    z-index: 1;
    text-align: center;
    background-color: rgba(253, 246, 246, 0.6);
    border-radius: 5%;
}
 
.dropdown-content a {
    display: inline-block;
}
 
.dropdown {
    position: relative;
    display: inline-block;
}
 
.dropdown:hover .dropdown-content {
    display: block;
}
</style> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="Style.css" />
 
    <style>
        @import url('https://fonts.googleapis.com/css?family=Germania+One|Lobster');
    </style>
</head>
 
<body>
    <section>
        <nav>
            <a class="menu">Home</a>
            <div class="dropdown">
                <a class="menu">Web Templete</a>
                <div class="dropdown-content">
                    <a class="menuitem">PSD Templete</a>
                    <a class="menuitem">HTML5 Templete</a>
                    <a class="menuitem">WordPress Templete</a>
                    <a class="menuitem">Wix Templete</a>
                </div>
            </div>
            <div class="dropdown">
                <a class="menu">Pricing</a>
                <div class="dropdown-content">
                    <a class="menuitem">1$ USD</a>
                    <a class="menuitem">2$ USD</a>
                    <a class="menuitem">3$ USD</a>
                    <a class="menuitem">4$ USD</a>
                </div>
            </div>
            <a class="menu">Blog</a>
            <a class="menu">Contact Us</a>
        </nav>
    </section>
</body>
 
</html>