<?php include 'include/art-config.inc.php' ?>
<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=utf-8>
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script>
    <script src="css/semantic.js"></script>
    <script src="js/misc.js"></script>
    <link href="css/semantic.css" rel="stylesheet">
    <link href="css/icon.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
   <?php include 'include/header.inc.php'  ?>
    <main class="ui segment doubling stackable grid container">
        <section class="five wide column">
            <form class="ui form">
                <h4 class="ui dividing header">Filters</h4>
                <div class="field">
                    <label>Artist</label>
                       <?php include 'include/artists.inc.php'  ?>
                </div>
                <div class="field">
                    <label>Museum</label>
                    <?php include 'include/museums.inc.php'  ?>
                </div>
                <div class="field">
                    <label>Shape</label>
                     <?php include 'include/shapes.inc.php'  ?>
                </div>
                <button class="small ui orange button" type="submit">
                    <i class="filter icon"></i> Filter
                </button>
            </form>
        </section>
        <section class="eleven wide column">
            <h1 class="ui header">Paintings</h1>
            <ul class="ui divided items" id="paintingsList">
               <?php include 'include/painttings.inc.php' ?>
                <li class="item">
                    <a class="ui small image" href="detail.php?id=565"><img src="images/art/works/square-medium/131040.jpg"></a>
                    <div class="content">
                        <a class="header" href="detail.php?id=565">View of St. Markís from the Punta della Dogana</a>
                        <div class="meta"><span class="cinema">Canaleto</span></div>
                        <div class="description">
                            <p>The View of St. Markís Basin came to Brera in 1828 with the View of the Grand Canal Looking toward the Punta della Dogana from Campo SantíIvo.</p>
                        </div>
                        <div class="meta">
                            <strong>$900</strong>
                        </div>
                        <div class="extra">
                            <a class="ui icon orange button" href="cart.php?id=565"><i class="add to cart icon"></i></a>
                            <a class="ui icon button" href="favorites.php?id=565"><i class="heart icon"></i></a>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <a class="ui small image" href="detail.php?id=568"><img src="images/art/works/square-medium/137010.jpg"></a>
                    <div class="content">
                        <a class="header" href="detail.php?id=568">Abbey among Oak Trees</a>
                        <div class="meta"><span class="cinema">Casper David Friedrich</span></div>
                        <div class="description">
                            <p>Abbey among Oak Trees is the companion piece to Monk by the Sea. Friedrich showed both paintings in the Berlin Academy Exhibition of 1810.</p>
                        </div>
                        <div class="meta">
                            <strong>$900</strong>
                        </div>
                        <div class="extra">
                            <a class="ui icon orange button" href="cart.php?id=568"><i class="add to cart icon"></i></a>
                            <a class="ui icon button" href="favorites.php?id=568"><i class="heart icon"></i></a>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </main>
   <?php include 'include/footer.inc.php' ?>

</body>

</html>