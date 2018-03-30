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
    <div class="container">
        <header>
            <div class="col-md-12">
                <div class="row">
                    <div id="topHeaderRow">
                        <nav class="navbar navbar-inverse">
                            <div class="navbar-header">
                                <a class="navbar-brand" id="mainNavText" href="#">Welcome to
                                    <b>Art Store</b>,
                                    <b>Login</b> or
                                    <b>Create new Account</b>
                                </a>
                            </div>
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="#">
                                        <span class="glyphicon glyphicon-user"></span> My Account</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="glyphicon glyphicon-gift"></span> Wish List</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="glyphicon glyphicon-arrow-right"></span> Checkout</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- end topHeaderRow -->
                <div class="row">
                    <div id="logoRow">
                        <div class="col-md-8">
                            <h1>Art Store</h1>
                        </div>
                        <div class="col-md-3">
                            <form action="http://www.randyconnolly.com/tests/process.php" method="post">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Search" name="search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end logoRow -->
                <div class="row">
                    <div id="mainNavigationRow">
                        <nav class="navbar navbar-default">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="active">
                                    <a href="about.php">About Us</a>
                                </li>
                                <li>
                                    <a href="works.php">Art Works</a>
                                </li>
                                <li>
                                    <a href="artists.php">Artists</a>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        Specials
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Special 1</a>
                                        </li>
                                        <li>
                                            <a href="#">Special 2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- end mainNavigationRow -->
        </header>
    </div>
    <div class="row">
        <div class="container">
            <div class="jumbotron">
                <div class="pic">
                    <h3 class="display-3 google-font">About Us</h3>
                    <p class="lead">The assignment was created by Brijesh Patel.</p>
                    <p class="lead">It was created for COMP 2511 at Mount Royal University</p>
                    <button class="btn btn-primary">Learn more</button>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>