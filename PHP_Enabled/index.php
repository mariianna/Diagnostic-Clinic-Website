<?php

/*Change to include settings of the database where it's been tested */
$mysql_host = "localhost";
$mysql_database = "posts";
$mysql_user = "me";
$mysql_password = "123";

// Establishes connection to database
$con = mysql_connect($mysql_host,$mysql_user,$mysql_password) or die(mysql_error());
mysql_select_db($mysql_database) or die(mysql_error());

//Selects all data in the table posts
$post = mysql_query("SELECT * FROM `posts`");

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Diagnostic Clinic</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        
        <!-- Custom Styles --> 
        <link href="css/style.css" rel="stylesheet"> 

        <!-- Favicon -->
        <link rel="icon" href="images/favicon.ico" type="image/x-icon" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="main_header clearfix">
            <div class="container">
                <div class="heading clearfix">
                    <a id="logo" href="/index.html">
                        <img src="images/logo.png" />
                    </a>
                    <h1> Diagnostic <span>Clinic</span></h1>
                </div>

                <ul class="navigation">
                    <li><a href="#"> For Patients <i class="fa fa-angle-down"></i></a></li>
                    <li><a href="#"> Services <i class="fa fa-angle-down"></i></a></li>
                    <li><a href="#"> Resources <i class="fa fa-angle-down"></i></a></li>
                    <li><a href="#"> About Us <i class="fa fa-angle-down"></i></a></li>
                    <li><a href="#"> Contact <i class="fa fa-angle-down"></i></a></li>
                </ul>
            </div>
        </header>

        <section class="main_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-3-custom"> 
                        <div class="sidebar">
                            <ul class="sidebar-nav">

                                <a href="#">
                                    <li>
                                        <img src="images/access-records-icn.png" />
                                        Access My Records
                                    </li>
                                </a>


                                <a href="#">
                                    <li>
                                        <img src="images/pay-my-bill-icn.png" />
                                        Pay My Bill
                                    </li>
                                </a>
								
								
								<a href="#">
                                    <li>
                                        <img src="images/calendar-icn.png" />
                                        Book an Appointment
                                    </li>
                                </a>
								
								
								<a href="#">
                                    <li>
                                        <img src="images/meds-icn.png" />
                                        Request a Refill
                                    </li>
                                </a>
								
								
								<a href="#">
                                    <li>
                                        <img src="images/messages-icn.png" />
                                        Live Chat with a Nurse
                                    </li>
                                </a>
										
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-9 col-md-9-custom">
                        <section class="featured-section clearfix">
                            <header class="featured-section-header clearfix">
                                <div class="heading">
                                    <h3><i class="fa fa-star"></i> Featured</h3>
                                </div>

                                <div class="featured-controls">
                                    <a href="#"> <i class="fa fa-chevron-left"></i> Prev </a>
                                    <a href="#"> Next <i class="fa fa-chevron-right"></i> </a>
                                </div>
                            </header>
                            
                            <div class="postings clearfix">
								<?php 
									while($row = mysql_fetch_array($post)) {
										$ImageURL = $row['ImageURL'];
										$Description = $row['Description'];
								 ?>
                                <div class="post">
									<img src="<?php echo $ImageURL ?>"/>
                                    <div class="caption clearfix">
                                        <p>
                                            <?php echo $Description ?>
                                        </p>
                                        <a href="#" class="more-link"> 
                                            More <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
								</div>
								<?php
									}
									mysql_close($con);
								?>
                            </div>
                        </section>
                    </div>
					
                </div>
            </div>
        </section>

        <footer class="main-footer">

        </footer>

    </body>
</html>