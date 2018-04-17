<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            position: relative;
        }
        #article {padding-top:90px;height:700px;color: #fff;}
        #about {padding-top:50px;height:relative;width:90%;color: #fff; }
        #contact {padding-top:0px;height:relative;width:90%;color: #fff; }
        .nav
        {
            height: 50px;



        }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Komitet Gminny PiS Kruszyna</a>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="myNavbar" >
                <ul class="nav navbar-nav" >
                    <li><a href="#article">Artykuły</a></li>
                    <li><a href="#about">O nas</a></li>
                    <li><a href="#contact">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

</body>
</html>
