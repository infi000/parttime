<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Book Template</title>
    <!-- Google fonts used in this theme  -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap3_bookTheme/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme CSS -->
    <link href="../bootstrap3_bookTheme/theme.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
   <script src="bootstrap3_bookTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_bookTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<body>
    <?php include 'book-header.inc.php'; ?>
    
    <div class="container">
        <div class="row">
            <!-- start main content row -->
            <div class="col-md-2">
                <!-- start left navigation rail column -->
                <?php include 'book-left-nav.inc.php'; ?>
            </div>
            <!-- end left navigation rail -->
            <div class="col-md-10">
                <!-- start main content column -->
                <!-- Customer panel  -->
                <div class="panel panel-danger spaceabove">
                    <div class="panel-heading">
                        <h4>My Customers</h4></div>
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>University</th>
                            <th>City</th>
                        </tr>
                     <?php include 'customers.php'; ?>
                    </table>
                </div>
                    
                <div class="panel panel-danger spaceabove"  id="book_orders">
                    <div class="panel-heading">
           
                    <h4>
                    <?php
                    if (!empty($_GET['customers'])){
                        $user = isset($_GET["user"])?$_GET["user"]:"";
                       
                    }
                     if(!empty($user)){
                             echo $user; 
                        }else{
                            echo '';
                        }
                    ?>
                    </h4>
                    </div>
                    <table class="table">
                    <?php
                    if (!empty($_GET['customers']));
                        @$user = isset($_GET["user"])?$_GET["user"]:"";
                        $id =isset($_GET['customers'])?$_GET['customers']:"" ;
                        include 'orders.php';
                    ?>
                    </table>
                </div>
            
            </div>
            <!-- end main content column -->
        </div>
        <!-- end main content row -->
    </div>
    <!-- end container -->
    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap3_bookTheme/assets/js/jquery.min.js"></script>
    <script src="../bootstrap3_bookTheme/dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap3_bookTheme/assets/js/holder.js"></script>
    <script>
    function getSearch(str) {
        var s = str || location.search.substr(1),
            o = {}
        if (s.length > 2) {
            var fg = s.indexOf("&amp;") > -1 ? "&amp;" : "&",
                arr = (s !== "" && s.split(fg)) || [""],
                arrL = arr.length - 1,
                i = -1,
                key = null,
                v = null,
                a = null;
            do {
                var a = arr[++i].split("=");
                if (a) {
                    o[a[0]] = decodeURIComponent(a[1])
                }
            } while (i < arrL)
        }
        return o;
    }

    var query=getSearch().customers;
    $(document).ready(function(){
        if(!query){
            $("#book_orders").remove();
        }
        var order_res=$("#nodata").html();
        console.log(order_res);
        if(order_res=='nodata'){
            $("#book_orders table").remove();
            $("#book_orders h4").html("no orders for that customers");
        }
    })
    </script>
</body>

</html>