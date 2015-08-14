<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Catch-Design">
    <title>Responsive design</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="modal/assets/js/libs/modernizr-1.7.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/catch-liggend.png" style="height: 30px; margin-top: -5px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="prijslijst.php">Prijslijst</a></li>
                    <li><a href="voorbeelden.php">Voorbeelden</a></li>
                    <li><a href="#contact" data-toggle="modal">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
    <div class="row">
        
    </div>
        <div class="col-md-10 col-md-offset-1">
            <h2 class="text-center">Wat is een responsive design?</h2>
            <h4 class="text-center">Één design voor desktop, tablet en smartphone</h4>
            <img src="images/responsive-design.png" class="img-responsive">
            <p class="text-justify">
                In een responsive design past je website zich aan het scherm van de gebruiker aan zodat altijd de informatie die een klant op dat moment nodig heeft leesbaar en werkbaar getoond wordt. Ongeacht het device waarop de site bekeken wordt.
                <ul>
                <li>Één website voor desktops, tablets en smartphones</li>
                <li>Altijd leesbaar, en bestelbaar op ieder scherm</li>
                <li>Wordt beter gevonden in Google</li>
                <li>Uniek ontworpen eigen design</li>
                <li>Mis geen bezoek meer bij smartphone en tablet gebruikers</li>
                <li>72% van de Nederlanders heeft een smartphone</li>
                <li>5,6 miljoen tablets in Nederland</li>
                </ul>
                </p>
                <div class="row">
                    <div class="col-md-6 text-center" style="margin: 20px 0;"><b>Overzicht Website bezoek per apparaat.</b>
                </div></div>
                <div class="row">
                <div class="col-md-2 text-right"><b>Laptop</b></div>
                <div class="col-md-4 progress" style="padding-left: 0px;">
                  <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                    78%
                  </div>
                </div></div>
                <div class="row">
                <div class="col-md-2 text-right"><b>Smartphone</b></div>
                <div class="col-md-4 progress" style="padding-left: 0px;">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                    70%
                  </div>
                </div></div>
                <div class="row">
                <div class="col-md-2 text-right"><b>Desktop</b></div>
                <div class="col-md-4 progress" style="padding-left: 0px;">
                  <div class="progress-bar" role="progressbar" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100" style="width: 69%;">
                    69%
                  </div>
                </div></div>
                <div class="row">
                <div class="col-md-2 text-right"><b>Tablet</b></div>
                <div class="col-md-4 progress" style="padding-left: 0px;">
                  <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                    45%
                  </div>
                    </div></div>
        </div>
</div>



<div class="navbar navbar-default navbar-fixed-bottom hidden-xs">
    <div class="container">
        <p class="navbar-text text-center"><small>Webdesign door <span style="color: #ED1C24">Catch</span><span style="color: #0044CC">-design</span>. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Deze site is © Copyright <span style="color: #ED1C24">Catch</span><span style="color: #0044CC">-design</span> 2015, All Rights Reserved.</small></p>
        <div class="navbar-text pull-right">
            <a href="#" style="text-decoration: none; color: #0044CC"><i class="fa fa-share-alt fa-2x"></i>&nbsp;&nbsp;&nbsp;</a>
            <a href="#" style="text-decoration: none; color: #0044CC"><i class="fa fa-facebook fa-2x"></i>&nbsp;&nbsp;&nbsp;</a>
            <a href="#" style="text-decoration: none; color: #0044CC"><i class="fa fa-twitter fa-2x"></i>&nbsp;&nbsp;&nbsp;</a>
            <a href="#" style="text-decoration: none; color: #0044CC"><i class="fa fa-google-plus fa-2x"></i></a>
        </div>
    </div>
</div>

<?php include 'inc/contact.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>
</html>
