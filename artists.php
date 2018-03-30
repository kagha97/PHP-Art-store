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
</head>

<body>
    <?php include 'includes/primary-navigation.inc.php'?>
        <div class="container">
            <div class="row">
            <div>
                <br>
                <h1 class="google-font">This Week's Best-Selling Artists</h1>
            </div>
            <div class="alert alert-warning">
                Each week we show you who are our best selling artists...
            </div>

        <!-- <div class="container">
            <div class="row"> -->
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/1.jpg" alt="picaso">
                        <div class="caption">
                            <p>Picasso</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">66</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/99.jpg" alt="picaso">
                        <div class="caption">
                            <p>Raphael</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">56</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/19.jpg" alt="picaso">
                        <div class="caption">
                            <p>Van Gogh</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">40</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/95.jpg" alt="picaso">
                        <div class="caption">
                            <p>Botticelli</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">37</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/29.jpg" alt="picaso">
                        <div class="caption">
                            <p>Klimt</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">36</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/2.jpg" alt="picaso">
                        <div class="caption">
                            <p>Matisse</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">34</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/98.jpg" alt="picaso">
                        <div class="caption">
                            <p>Michelangelo</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">32</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/106.jpg" alt="picaso">
                        <div class="caption">
                            <p>Vermeer</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">31</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/97.jpg" alt="picaso">
                        <div class="caption">
                            <p>da Vinci</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">26</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/21.jpg" alt="picaso">
                        <div class="caption">
                            <p>Cezanne</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">25</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/17.jpg" alt="picaso">
                        <div class="caption">
                            <p>Monet</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">25</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/101.jpg" alt="picaso">
                        <div class="caption">
                            <p>Caravaggio</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">18</span>
                            </button>
                        </div>
                    </div>
                </div>
            <!-- </div>
        </div> -->
        <!-- <div class="container"> -->
            <div>
                <h3 class="google-font">Artists by Genre</h3>
                <div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" style="width:5%">
                        Gothic
                    </div>

                    <div class="progress-bar progress-bar-success" role="progressbar" style="width:30%">
                        Renaissance
                    </div>
                    <div class="progress-bar progress-bar-warning" role="progressbar" style="width:15%">
                        Baroque
                    </div>
                    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:20%">
                        Pre-Modern
                    </div>
                    <div class="progress-bar" role="progressbar" style="width:30%">
                        Modern
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    <!-- </div> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>