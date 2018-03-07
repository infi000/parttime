<?php include 'include/art-config.inc.php' ?>
<?php include 'include/single-painting/main.inc.php' ?>
<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=utf-8>
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script>

    <link href="css/semantic.css" rel="stylesheet">
    <link href="css/icon.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script>
        var choosed_painting=<?php  echo json_encode($choosed_painting); ?>;
        var frames=<?php echo json_encode($painting_frames); ?>;
        var glass=<?php echo json_encode($painting_glass); ?>;
        var matt=<?php echo json_encode($painting_matt); ?>;
    </script>
</head>

<body>
   <?php include 'include/header.inc.php'  ?>
    <main id="main_box">
        <!-- Main section about painting -->
        <section class="ui segment grey100">
            <div class="ui doubling stackable grid container" >
                <div class="nine wide column" id="image_box">
                </div>
                <!-- END LEFT Picture Column -->
                <div class="seven wide column">
                    <!-- Main Info -->
                    <div class="item" id="info_box">
                    
                    </div>
                    <!-- Tabs For Details, Museum, Genre, Subjects -->
                    <div class="ui top attached tabular menu ">
                        <a class="active item" data-tab="details"><i class="image icon"></i>Details</a>
                        <a class="item" data-tab="museum"><i class="university icon"></i>Museum</a>
                        <a class="item" data-tab="genres"><i class="theme icon"></i>Genres</a>
                        <a class="item" data-tab="subjects"><i class="cube icon"></i>Subjects</a>
                    </div>
                    <div class="ui bottom attached active tab segment" data-tab="details" id="details_box">
         
                    </div>
                    <div class="ui bottom attached tab segment" data-tab="museum" id="museum_box">
             
                    </div>
                    <div class="ui bottom attached tab segment" data-tab="genres" id="genres_box">
                 
                    </div>
                    <div class="ui bottom attached tab segment" data-tab="subjects" id="subjects_box">
             
                    </div>
                    <!-- Cart and Price -->
                    <div class="ui segment">
                        <div class="ui form">
                            <div class="ui tiny statistic">
                                <div class="value" id="price_box">
                                    $1,200
                                </div>
                            </div>
                            <div class="four fields">
                                <div class="three wide field">
                                    <label>Quantity</label>
                                    <input type="number"  class="math">
                                </div>
                                <div class="four wide field">
                                    <label>Frame</label>
                                    <select id="frame" class="ui search dropdown"  class="math">
                                    </select>
                                </div>
                                <div class="four wide field">
                                    <label>Glass</label>
                                    <select id="glass" class="ui search dropdown" class="math">
                                    </select>
                                </div>
                                <div class="four wide field">
                                    <label>Matt</label>
                                    <select id="matt" class="ui search dropdown" class="math">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="ui divider"></div>
                        <button class="ui labeled icon orange button">
                            <i class="add to cart icon"></i> Add to Cart
                        </button>
                        <button class="ui right labeled icon button">
                            <i class="heart icon"></i> Add to Favorites
                        </button>
                    </div>
                    <!-- END Cart -->
                </div>
                <!-- END RIGHT data Column -->
            </div>
            <!-- END Grid -->
        </section>
        <!-- END Main Section -->
        <!-- Tabs for Description, On the Web, Reviews -->
        <section class="ui doubling stackable grid container">
            <div class="sixteen wide column">
                <div class="ui top attached tabular menu ">
                    <a class="active item" data-tab="first">Description</a>
                    <a class="item" data-tab="second">On the Web</a>
                    <a class="item" data-tab="third">Reviews</a>
                </div>
                <div class="ui bottom attached active tab segment" data-tab="first" id="desc_box">
  
                </div>
                <!-- END DescriptionTab -->
                <div class="ui bottom attached tab segment" data-tab="second" id="web_box">
            
                </div>
                <!-- END On the Web Tab -->
                <div class="ui bottom attached tab segment" data-tab="third">
                    <div class="ui feed">
                        <div class="event">
                            <div class="content">
                                <div class="date">12/14/2016</div>
                                <div class="meta">
                                    <a class="like">
                <i class="star icon"></i><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i>
              </a>
                                </div>
                                <div class="summary">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac vestibulum ligula. Nam ac erat sit amet odio semper vulputate. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse consequat pellentesque tellus, nec molestie tortor mattis eu. Aliquam cursus euismod nisl, vel vulputate metus interdum sit amet. Nam dictum eget ex non posuere. Praesent vel sodales velit. Ut id metus aliquam, egestas leo et, auctor ante.
                                </div>
                            </div>
                        </div>
                        <div class="ui divider"></div>
                        <div class="event">
                            <div class="content">
                                <div class="date">8/16/2016</div>
                                <div class="meta">
                                    <a class="like">
                <i class="star icon"></i><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i>
              </a>
                                </div>
                                <div class="summary">
                                    Donec vel tincidunt quam. Donec sed dictum quam, nec rutrum risus. Praesent ac tortor ut leo luctus cursus nec pharetra odio. Sed id orci id quam commodo congue eget eget erat. Quisque luctus posuere pharetra.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Reviews Tab -->
            </div>
        </section>
        <!-- END Description, On the Web, Reviews Tabs -->
        <!-- Related Images ... will implement this in assignment 2 -->
        <section class="ui container">
            <h3 class="ui dividing header">Related Works</h3>
        </section>
    </main>

   <?php include 'include/footer.inc.php' ?>
   <script src='js/single-painting.js'></script>
</body>
    <script src="css/semantic.js"></script>
    <script src="js/misc.js"></script>
</html>