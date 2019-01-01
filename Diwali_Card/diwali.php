<!DOCTYPE HTML>
<html lang="en_US">
<head>
    <meta charset="UTF-8">
    <title>Happy Diwali</title>
    <style type="text/css">
        #fromtext{
            position:absolute;
            top: 334px;
            left: 568px;
            color:#fff;
            animation:anim 5s infinite;
        }
        @keyframes anim{
            0%{color:#F00;}
            25%{color:#FF0; transform:scale(1.5);}
            50%{color:#FF0080;transform:scale(0.8);}
            75%{color:#8000FF;transform:scale(1.5);}
            100%{color:#F00;transform:scale(1);}
        }
    </style>
</head>
<body background="images/diwali.jpg" style="background-size:1366px 760px;">

<h1 id="fromtext">From...  <?php echo $_GET['name']; ?></h1>
<canvas id="canvas"></canvas>
<script type="text/javascript" src="js/crackers.js"></script>
</body>
</html>