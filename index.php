<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIP - Assignment 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="css/common.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="navbar-wrapper">
        <div class="container">
            <div class="navbar navbar-nav navbar-static-top">
                <div class="navbar-header">
                    <a class="navbar-brand brand-text google-font" href="#">Assign 2</a>
                </div>
                <ul class="nav navbar-nav">
                    <li>
                        <a class="nav-text" href="index.php">Home</a>
                    </li>
                    <li>
                        <a class="nav-text" href="about.php">About Us</a>
                    </li>
                    <li>
                        <a class="nav-text" href="works.php">Work</a>
                    </li>
                    <li>
                        <a class="nav-text" href="artists.php">Artists</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/boucher.jpg" alt="..." style="margin:auto;">
                <div class="carousel-caption">
                    <h3 class="google-font">Francois Boucher</h3>
                    <p>This painting entitled Madame de Pompadour dates from 1758 and now resides in the National Gallery of
                        Scotland
                    </p>
                    <button type="button" class="btn btn-info">Learn More</button>
                    <br>
                    <br>
                </div>
            </div>

            <div class="item">
                <img src="images/david.jpg" alt="..." style="margin:auto;">
                <div class="carousel-caption">
                    <h3 class="google-font">Jacques-Louis David</h3>
                    <p>The Intervention of the Sabine Women was painted in 1799 and resides in the Musee du Louvre, Paris</p>
                    <button type="button" class="btn btn-info">Learn More</button>
                    <br>
                    <br>
                </div>
            </div>

            <div class="item">
                <img src="images/vermeer.jpg" alt="..." style="margin:auto;">
                <div class="carousel-caption">
                    <h3 class="google-font">Jan Vermeer</h3>
                    <p>The Art of Painting is considered by many to be Vermeer's masterpiece</p>
                    <button type="button" class="btn btn-info">Learn More</button>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row">
        <div class="container">
            <div class="col-md-4 thumbnail thumbnail-style">
                <img src="images/thumbs/120010.jpg" class="img-circle" alt="...">
                <div class="caption">
                    <h3 class="align-header google-font">Portrait of Eleanor of Toledo</h3>
                    <p>The Portrait of Elenor of Toledo and Her Son is a painting by the Italian artist Agnolo di Cosimo, known
                        as Bronzino, finished ca. 1545. One of his most famous works, it is housed in the Uffizi Gallery
                        of Florence, Italy and is considered one of the preeminent of Mannerist portraiture. &nbsp;
                    </p>
                    <button type="button" class="btn btn-default align-button">View details
                        <i class="fa fa-angle-double-right"></i>
                    </button>
                </div>
            </div>
            <div class="col-md-4 thumbnail thumbnail-style">
                <img src="images/thumbs/116010.jpg" class="img-circle" alt="...">
                <div class="caption">
                    <h3 class="align-header google-font">Portrait of the Artist</h3>
                    <p>Portrait of the Artist Holding a Thistle is an oil painting on Parchment pasted on canvas by German artist
                        Albrecht Durer, painted in 1493. It is the earliest of Durer's, painted in 1493. It is the earliest
                        of Durer's painted self-portraits and has been identified as one of the first self-portraits painted
                        by a Northern artist.
                    </p>
                    <button type="button" class="btn btn-default align-button">View details
                        <i class="fa fa-angle-double-right"></i>
                    </button>
                </div>
            </div>
            <div class="col-md-4 thumbnail thumbnail-style">
                <img src="images/thumbs/106020.jpg" class="img-circle" alt="...">
                <div class="caption">
                    <h3 class="align-header google-font">Girl with a Pearl Earring</h3>
                    <p>Girl with a Pearl Earring is one of Johannes Vermeer's masterworks and, as the name implies, uses a pearl
                        earring for a focal point. Today the painting is kept in the Mauritshuls gallery in The Hague. It
                        is sometimes referred to as "the Mona Lisa of the North" or "the Dutch Mona Lisa"
                    </p>
                    <button type="button" class="btn btn-default align-button">View details
                        <i class="fa fa-angle-double-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>