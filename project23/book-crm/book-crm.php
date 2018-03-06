<?php

include 'includes/book-crm-utilities.inc.php';

$customers = readCustomers('data/customers.txt');

 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Book CRM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
    <link rel="stylesheet" href="./css/material.blue_grey-orange.min.css">

    <link rel="stylesheet" href="css/styles.css">
    
    
    <script   src="https://code.jquery.com/jquery-1.7.2.min.js" ></script>
       
    <script src="js/material.min.js"></script>
    <script src="js/jquery.sparkline.2.1.2.js"></script>
    
    <script type="text/javascript">
    $(function() {
        /** This code runs when everything has been loaded on the page */
        /* Inline sparklines take their values from the contents of the tag */
        $('.inlinesparkline').sparkline('html', {type: 'bar', barColor: '#6200EA'}); 
    });
    </script>    
</head>

<body>
    
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
            
    <?php include 'includes/header.inc.php'; ?>
    <?php include 'includes/left-nav.inc.php'; ?>
    
    <main class="mdl-layout__content mdl-color--grey-50">
        <section class="page-content">

            <div class="mdl-grid">

              <!-- mdl-cell + mdl-card -->
              <div class="mdl-cell mdl-cell--7-col card-lesson mdl-card  mdl-shadow--2dp">
                <div class="mdl-card__title mdl-color--orange">
                  <h2 class="mdl-card__title-text">Customers</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <table class="mdl-data-table  mdl-shadow--2dp">
                      <thead>
                        <tr>
                          <th class="mdl-data-table__cell--non-numeric">Name</th>
                          <th class="mdl-data-table__cell--non-numeric">University</th>
                          <th class="mdl-data-table__cell--non-numeric">City</th>
                          <th>Sales</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!--
                           Fill customers info here, HTML row structure for each customer info line, 
                           make this a function that lives inside the book-crm-utilities.inc.php file
                           <tr>
                            <td class="mdl-data-table__cell--non-numeric"></td>;
                            <td class="mdl-data-table__cell--non-numeric"></td>;
                            <td class="mdl-data-table__cell--non-numeric"></td>;   
                            <td><span class="inlinesparkline"></span></td>;
                           </tr>
                        -->
                        <?php include './includes/Customer.class.php'; ?>
                      </tbody>
                    </table>
                </div>
              </div>  <!-- / mdl-cell + mdl-card -->
              
              
                <div class="mdl-grid mdl-cell--5-col">    
                  <!-- mdl-cell + mdl-card -->
                  <div class="mdl-cell mdl-cell--12-col card-lesson mdl-card  mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-color--deep-purple mdl-color-text--white">
                      <h2 class="mdl-card__title-text">Customer Details</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <!-- Clicked Customer info is displayed here -->
                        <h3>Emma Jones</h3>
                        <p>King's College</p>
                        <p>202 Hoxton Street</p>
                        <p>London,United Kingdom</p>
          
                    </div>    
                  </div>  <!-- / mdl-cell + mdl-card -->   

                  <!-- mdl-cell + mdl-card -->
                    <div class="mdl-cell mdl-cell--12-col card-lesson mdl-card  mdl-shadow--2dp">
                        <div class="mdl-card__title mdl-color--deep-purple mdl-color-text--white">
                          <h2 class="mdl-card__title-text">Order Details</h2>
                        </div>
                        <div class="mdl-card__supporting-text">       
                            <!-- Display a message here, if a customer has no orders -->

                            <table class="mdl-data-table  mdl-shadow--2dp">
                              <thead>
                                <tr>
                                  <th class="mdl-data-table__cell--non-numeric">Cover</th>
                                  <th class="mdl-data-table__cell--non-numeric">ISBN</th>
                                  <th class="mdl-data-table__cell--non-numeric">Title</th>
                                </tr>
                              </thead>
                              <tbody>
                                 <!-- Display customer's orders -->
                              </tbody>
                            </table>
                        </div>    
                    </div>  <!-- / mdl-cell + mdl-card -->
                </div>
            </div>  <!-- / mdl-grid -->
        </section>
    </main>    
</div>    <!-- / mdl-layout -->
</body>
</html>