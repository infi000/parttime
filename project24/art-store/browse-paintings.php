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
                       <?php include 'include/browse-paintings/artists.inc.php'  ?>
                </div>
                <div class="field">
                    <label>Museum</label>
                    <?php include 'include/browse-paintings/museums.inc.php'  ?>
                </div>
                <div class="field">
                    <label>Shape</label>
                     <?php include 'include/browse-paintings/shapes.inc.php'  ?>
                </div>
                <button class="small ui orange button" type="submit">
                    <i class="filter icon"></i> Filter
                </button>
            </form>
        </section>
        <section class="eleven wide column">
            <h1 class="ui header">Paintings</h1>
            <ul class="ui divided items" id="paintingsList">
               <?php include 'include/browse-paintings/paintings.inc.php' ?>
            </ul>
        </section>
    </main>
   <?php include 'include/footer.inc.php' ?>

</body>

</html>